<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function account_dashboard()
    {
        return route('home');
    }

    public function brands()
    {
        $brands = Brand::orderBy('id', 'DESC')->paginate(10);
        // dd($brands);
        return view("admin.brands", compact('brands'));
    }

    public function add_brand()
    {
        return view("admin.add.brand");
    }

    public function add_brand_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:brands,slug',
            'image' => 'mimes:png,jpg,jpeg|max:2048'
        ]);

        $brand = new Brand();
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name);
        $image = $request->file('image');
        $file_extention = $request->file('image')->extension();
        $file_name = Carbon::now()->timestamp . '.' . $file_extention;
        $this->GenerateBrandThumbailImage($image, $file_name);
        $brand->image = $file_name;
        $brand->save();
        return redirect()->route('admin.brands')->with('status', 'Record has been added successfully !');
    }

    public function edit_brand($id)
    {
        $brand = Brand::find($id);
        return view('admin.brand.edit', compact('brand'));
    }

    private function GenerateBrandThumbailImage($image, $imageName)
    {
        $destinationPath = 'upload/images/brands';
        $img = Image::read($image->path());
        $img->cover(124, 124, "top");
        $img->resize(124, 124, function ($constraint) {
            $constraint->aspectRatio();
        });

        Storage::disk('public')->put($destinationPath . '/' . $imageName, $img->encode());
        $thumbnailUrl = asset('storage/' . $destinationPath . '/' . $imageName);
    }
}