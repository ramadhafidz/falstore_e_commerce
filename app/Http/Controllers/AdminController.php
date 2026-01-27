<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function account_dashboard()
    {
        return route('home');
    }

    // ==================== BRANDS ====================

    public function brands(Request $request)
    {
        $query = Brand::withCount('products');

        // Search functionality
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                  ->orWhere('slug', 'like', '%' . $search . '%');
            });
        }

        $brands = $query->orderBy('id', 'DESC')->paginate(10);
        return view("admin.brands", compact('brands'));
    }

    public function add_brand()
    {
        return view("admin.add.brand");
    }

    public function brand_store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:255',
            'slug' => 'required|unique:brands,slug|max:255',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp|max:2048'
        ]);

        $brand = new Brand();
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->slug);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $file_extension = $image->extension();
            $file_name = Carbon::now()->timestamp . '.' . $file_extension;
            $this->GenerateBrandThumbnailImage($image, $file_name);
            $brand->image = $file_name;
        }

        $brand->save();
        return redirect()->route('admin.brands')->with('status', 'Brand berhasil ditambahkan!');
    }

    public function brand_edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('admin.edit.brand', compact('brand'));
    }

    public function brand_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:2|max:255',
            'slug' => 'required|max:255|unique:brands,slug,' . $id,
            'image' => 'nullable|mimes:png,jpg,jpeg,webp|max:2048'
        ]);

        $brand = Brand::findOrFail($id);
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->slug);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($brand->image) {
                $oldImagePath = storage_path('app/public/upload/images/brands/' . $brand->image);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }

            $image = $request->file('image');
            $file_extension = $image->extension();
            $file_name = Carbon::now()->timestamp . '.' . $file_extension;
            $this->GenerateBrandThumbnailImage($image, $file_name);
            $brand->image = $file_name;
        }

        $brand->save();
        return redirect()->route('admin.brands')->with('status', 'Brand berhasil diperbarui!');
    }

    public function brand_delete($id)
    {
        $brand = Brand::findOrFail($id);

        // Delete image file
        if ($brand->image) {
            $imagePath = storage_path('app/public/upload/images/brands/' . $brand->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        $brand->delete();
        return redirect()->route('admin.brands')->with('status', 'Brand berhasil dihapus!');
    }

    private function GenerateBrandThumbnailImage($image, $imageName)
    {
        $destinationPath = 'upload/images/brands';

        // Create directory if not exists
        Storage::disk('public')->makeDirectory($destinationPath);

        $img = Image::read($image->path());
        $img->cover(124, 124, "top");
        $img->resize(124, 124, function ($constraint) {
            $constraint->aspectRatio();
        });

        Storage::disk('public')->put($destinationPath . '/' . $imageName, $img->encode());
    }
}