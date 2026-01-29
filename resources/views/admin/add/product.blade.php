@extends('layouts.admin')
@section('title', 'Add Product - Falstore Admin')
@section('content')

<div id="wrapper">
  <div id="page" class="">
    <div class="layout-wrap">

      @include('components.admin.sidemenu')

      <div class="section-content-right">
        @include('components.admin.header')

        <div class="main-content">
          <div class="main-content-inner">
            <div class="main-content-wrap">
              <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Add New Product</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                  <li>
                    <a href="{{ route('admin.dashboard') }}">
                      <div class="text-tiny">Dashboard</div>
                    </a>
                  </li>
                  <li>
                    <i class="icon-chevron-right"></i>
                  </li>
                  <li>
                    <a href="{{ route('admin.products') }}">
                      <div class="text-tiny">Products</div>
                    </a>
                  </li>
                  <li>
                    <i class="icon-chevron-right"></i>
                  </li>
                  <li>
                    <div class="text-tiny">Add New</div>
                  </li>
                </ul>
              </div>

              <div class="wg-box">
                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul class="mb-0">
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif

                <form class="form-new-product form-style-1" action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  
                  <div class="row">
                    <div class="col-md-8">
                      <fieldset class="name">
                        <div class="body-title">Product Name <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Enter product name" name="name" id="name" 
                          value="{{ old('name') }}" required>
                      </fieldset>

                      <fieldset class="name">
                        <div class="body-title">Product Slug <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Slug will be auto-generated" name="slug" id="slug" 
                          value="{{ old('slug') }}" required>
                      </fieldset>

                      <fieldset class="name">
                        <div class="body-title">Short Description <span class="tf-color-1">*</span></div>
                        <textarea class="flex-grow" placeholder="Enter short description" name="short_description" rows="3" required>{{ old('short_description') }}</textarea>
                      </fieldset>

                      <fieldset class="name">
                        <div class="body-title">Description <span class="tf-color-1">*</span></div>
                        <textarea class="flex-grow" placeholder="Enter full description" name="description" rows="6" required>{{ old('description') }}</textarea>
                      </fieldset>
                    </div>

                    <div class="col-md-4">
                      <fieldset class="category">
                        <div class="body-title">Category <span class="tf-color-1">*</span></div>
                        <div class="select flex-grow">
                          <select name="category_id" required>
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                              <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                              </option>
                            @endforeach
                          </select>
                        </div>
                      </fieldset>

                      <fieldset class="brand">
                        <div class="body-title">Brand</div>
                        <div class="select flex-grow">
                          <select name="brand_id">
                            <option value="">Select Brand</option>
                            @foreach($brands as $brand)
                              <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>
                                {{ $brand->name }}
                              </option>
                            @endforeach
                          </select>
                        </div>
                      </fieldset>

                      <fieldset class="name">
                        <div class="body-title">SKU <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Enter SKU" name="SKU" value="{{ old('SKU') }}" required>
                      </fieldset>

                      <fieldset class="name">
                        <div class="body-title">Quantity <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="number" placeholder="Enter quantity" name="quantity" value="{{ old('quantity', 1) }}" min="0" required>
                      </fieldset>

                      <fieldset class="category">
                        <div class="body-title">Stock Status <span class="tf-color-1">*</span></div>
                        <div class="select flex-grow">
                          <select name="stock_status" required>
                            <option value="instock" {{ old('stock_status') == 'instock' ? 'selected' : '' }}>In Stock</option>
                            <option value="outofstock" {{ old('stock_status') == 'outofstock' ? 'selected' : '' }}>Out of Stock</option>
                          </select>
                        </div>
                      </fieldset>

                      <fieldset class="category">
                        <div class="body-title">Featured</div>
                        <div class="select flex-grow">
                          <select name="featured">
                            <option value="0" {{ old('featured') == '0' ? 'selected' : '' }}>No</option>
                            <option value="1" {{ old('featured') == '1' ? 'selected' : '' }}>Yes</option>
                          </select>
                        </div>
                      </fieldset>
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col-md-6">
                      <fieldset class="name">
                        <div class="body-title">Regular Price <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="number" step="0.01" placeholder="0.00" name="regular_price" value="{{ old('regular_price') }}" required>
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset class="name">
                        <div class="body-title">Sale Price</div>
                        <input class="flex-grow" type="number" step="0.01" placeholder="0.00 (optional)" name="sale_price" value="{{ old('sale_price') }}">
                      </fieldset>
                    </div>
                  </div>

                  <fieldset class="mt-4">
                    <div class="body-title">Product Image</div>
                    <div class="upload-image flex-grow">
                      <div class="item" id="imgpreview" style="display:none">
                        <img src="" class="effect8" alt="Preview">
                      </div>
                      <div id="upload-file" class="item up-load">
                        <label class="uploadfile" for="myFile">
                          <span class="icon">
                            <i class="icon-upload-cloud"></i>
                          </span>
                          <span class="body-text">Drop your image here or <span class="tf-color">click to browse</span></span>
                          <input type="file" id="myFile" name="image" accept="image/*">
                        </label>
                      </div>
                    </div>
                  </fieldset>

                  <fieldset class="mt-4">
                    <div class="body-title">Gallery Images</div>
                    <div class="upload-image flex-grow">
                      <div id="gallery-preview" class="d-flex flex-wrap gap-2"></div>
                      <div class="item up-load">
                        <label class="uploadfile" for="galleryFiles">
                          <span class="icon">
                            <i class="icon-upload-cloud"></i>
                          </span>
                          <span class="body-text">Upload multiple images <span class="tf-color">click to browse</span></span>
                          <input type="file" id="galleryFiles" name="images[]" accept="image/*" multiple>
                        </label>
                      </div>
                    </div>
                  </fieldset>

                  <div class="bot mt-4">
                    <a href="{{ route('admin.products') }}" class="tf-button style-2 w208">Cancel</a>
                    <button class="tf-button w208" type="submit">Save Product</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="bottom-page">
            <div class="body-text">Copyright © {{ date('Y') }} Falstore. All rights reserved.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@push('scripts')
<script>
  $(document).ready(function() {
    // Auto-generate slug from name
    $('#name').on('keyup', function() {
      var name = $(this).val();
      var slug = name.toLowerCase()
        .replace(/[^a-z0-9\s-]/g, '')
        .replace(/\s+/g, '-')
        .replace(/-+/g, '-')
        .trim();
      $('#slug').val(slug);
    });

    // Image preview
    $('#myFile').on('change', function() {
      var file = this.files[0];
      if (file) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgpreview img').attr('src', e.target.result);
          $('#imgpreview').show();
        };
        reader.readAsDataURL(file);
      }
    });

    // Gallery preview
    $('#galleryFiles').on('change', function() {
      $('#gallery-preview').empty();
      var files = this.files;
      for (var i = 0; i < files.length; i++) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#gallery-preview').append(
            '<div class="item"><img src="' + e.target.result + '" class="effect8" style="width: 100px; height: 100px; object-fit: cover; border-radius: 8px;"></div>'
          );
        };
        reader.readAsDataURL(files[i]);
      }
    });
  });
</script>
@endpush
