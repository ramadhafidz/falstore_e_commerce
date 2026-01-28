<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
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

    // ==================== CATEGORIES ====================

    public function categories(Request $request)
    {
        $query = Category::withCount('products');

        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                  ->orWhere('slug', 'like', '%' . $search . '%');
            });
        }

        $categories = $query->orderBy('id', 'DESC')->paginate(10);
        return view("admin.categories", compact('categories'));
    }

    public function add_category()
    {
        return view("admin.add.category");
    }

    public function category_store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:255',
            'slug' => 'required|unique:categories,slug|max:255',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp|max:2048'
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->slug);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $file_extension = $image->extension();
            $file_name = Carbon::now()->timestamp . '.' . $file_extension;
            $this->GenerateCategoryThumbnailImage($image, $file_name);
            $category->image = $file_name;
        }

        $category->save();
        return redirect()->route('admin.categories')->with('status', 'Kategori berhasil ditambahkan!');
    }

    public function category_edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.edit.category', compact('category'));
    }

    public function category_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:2|max:255',
            'slug' => 'required|max:255|unique:categories,slug,' . $id,
            'image' => 'nullable|mimes:png,jpg,jpeg,webp|max:2048'
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->slug);

        if ($request->hasFile('image')) {
            if ($category->image) {
                $oldImagePath = storage_path('app/public/upload/images/categories/' . $category->image);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }

            $image = $request->file('image');
            $file_extension = $image->extension();
            $file_name = Carbon::now()->timestamp . '.' . $file_extension;
            $this->GenerateCategoryThumbnailImage($image, $file_name);
            $category->image = $file_name;
        }

        $category->save();
        return redirect()->route('admin.categories')->with('status', 'Kategori berhasil diperbarui!');
    }

    public function category_delete($id)
    {
        $category = Category::findOrFail($id);

        if ($category->image) {
            $imagePath = storage_path('app/public/upload/images/categories/' . $category->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        $category->delete();
        return redirect()->route('admin.categories')->with('status', 'Kategori berhasil dihapus!');
    }

    private function GenerateCategoryThumbnailImage($image, $imageName)
    {
        $destinationPath = 'upload/images/categories';
        Storage::disk('public')->makeDirectory($destinationPath);

        $img = Image::read($image->path());
        $img->cover(124, 124, "top");
        $img->resize(124, 124, function ($constraint) {
            $constraint->aspectRatio();
        });

        Storage::disk('public')->put($destinationPath . '/' . $imageName, $img->encode());
    }

    // ==================== PRODUCTS ====================

    public function products(Request $request)
    {
        $query = Product::with(['category', 'brand']);

        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where('name', 'like', '%' . $search . '%');
        }

        $products = $query->orderBy('id', 'DESC')->paginate(10);
        return view("admin.products", compact('products'));
    }

    public function add_product()
    {
        $categories = Category::orderBy('name')->get();
        $brands = Brand::orderBy('name')->get();
        return view("admin.add.product", compact('categories', 'brands'));
    }

    public function product_store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:255',
            'slug' => 'required|unique:products,slug|max:255',
            'short_description' => 'required',
            'description' => 'required',
            'regular_price' => 'required|numeric|min:0',
            'sale_price' => 'nullable|numeric|min:0',
            'SKU' => 'required|max:50',
            'stock_status' => 'required|in:instock,outofstock',
            'quantity' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'nullable|exists:brands,id',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp|max:2048',
            'images.*' => 'nullable|mimes:png,jpg,jpeg,webp|max:2048'
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->slug = Str::slug($request->slug);
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->regular_price = $request->regular_price;
        $product->sale_price = $request->sale_price;
        $product->SKU = $request->SKU;
        $product->stock_status = $request->stock_status;
        $product->featured = $request->featured ?? 0;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;

        // Main image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $file_extension = $image->extension();
            $file_name = Carbon::now()->timestamp . '.' . $file_extension;
            $this->GenerateProductThumbnailImage($image, $file_name);
            $product->image = $file_name;
        }

        // Gallery images
        if ($request->hasFile('images')) {
            $gallery_images = [];
            foreach ($request->file('images') as $key => $galleryImage) {
                $gallery_extension = $galleryImage->extension();
                $gallery_name = Carbon::now()->timestamp . '_' . $key . '.' . $gallery_extension;
                $this->GenerateProductThumbnailImage($galleryImage, $gallery_name);
                $gallery_images[] = $gallery_name;
            }
            $product->images = implode(',', $gallery_images);
        }

        $product->save();
        return redirect()->route('admin.products')->with('status', 'Produk berhasil ditambahkan!');
    }

    public function product_edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::orderBy('name')->get();
        $brands = Brand::orderBy('name')->get();
        return view('admin.edit.product', compact('product', 'categories', 'brands'));
    }

    public function product_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:2|max:255',
            'slug' => 'required|max:255|unique:products,slug,' . $id,
            'short_description' => 'required',
            'description' => 'required',
            'regular_price' => 'required|numeric|min:0',
            'sale_price' => 'nullable|numeric|min:0',
            'SKU' => 'required|max:50',
            'stock_status' => 'required|in:instock,outofstock',
            'quantity' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'nullable|exists:brands,id',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp|max:2048',
            'images.*' => 'nullable|mimes:png,jpg,jpeg,webp|max:2048'
        ]);

        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->slug = Str::slug($request->slug);
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->regular_price = $request->regular_price;
        $product->sale_price = $request->sale_price;
        $product->SKU = $request->SKU;
        $product->stock_status = $request->stock_status;
        $product->featured = $request->featured ?? 0;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;

        // Main image
        if ($request->hasFile('image')) {
            if ($product->image) {
                $oldImagePath = storage_path('app/public/upload/images/products/' . $product->image);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }

            $image = $request->file('image');
            $file_extension = $image->extension();
            $file_name = Carbon::now()->timestamp . '.' . $file_extension;
            $this->GenerateProductThumbnailImage($image, $file_name);
            $product->image = $file_name;
        }

        // Gallery images
        if ($request->hasFile('images')) {
            // Delete old gallery images
            if ($product->images) {
                foreach (explode(',', $product->images) as $oldGallery) {
                    $oldGalleryPath = storage_path('app/public/upload/images/products/' . $oldGallery);
                    if (File::exists($oldGalleryPath)) {
                        File::delete($oldGalleryPath);
                    }
                }
            }

            $gallery_images = [];
            foreach ($request->file('images') as $key => $galleryImage) {
                $gallery_extension = $galleryImage->extension();
                $gallery_name = Carbon::now()->timestamp . '_' . $key . '.' . $gallery_extension;
                $this->GenerateProductThumbnailImage($galleryImage, $gallery_name);
                $gallery_images[] = $gallery_name;
            }
            $product->images = implode(',', $gallery_images);
        }

        $product->save();
        return redirect()->route('admin.products')->with('status', 'Produk berhasil diperbarui!');
    }

    public function product_delete($id)
    {
        $product = Product::findOrFail($id);

        if ($product->image) {
            $imagePath = storage_path('app/public/upload/images/products/' . $product->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        $product->delete();
        return redirect()->route('admin.products')->with('status', 'Produk berhasil dihapus!');
    }

    private function GenerateProductThumbnailImage($image, $imageName)
    {
        $destinationPath = 'upload/images/products';
        Storage::disk('public')->makeDirectory($destinationPath);

        $img = Image::read($image->path());
        $img->cover(300, 300, "top");
        $img->resize(300, 300, function ($constraint) {
            $constraint->aspectRatio();
        });

        Storage::disk('public')->put($destinationPath . '/' . $imageName, $img->encode());
    }

    // ==================== USERS ====================

    public function users(Request $request)
    {
        $query = User::query();

        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                  ->orWhere('email', 'like', '%' . $search . '%');
            });
        }

        $users = $query->orderBy('id', 'DESC')->paginate(10);
        return view("admin.users", compact('users'));
    }

    // ==================== SETTINGS ====================

    public function settings()
    {
        return view("admin.settings");
    }
}