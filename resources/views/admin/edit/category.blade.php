@extends('layouts.admin')
@section('title', 'Edit Category - Falstore Admin')
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
                <h3>Edit Category</h3>
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
                    <a href="{{ route('admin.categories') }}">
                      <div class="text-tiny">Categories</div>
                    </a>
                  </li>
                  <li>
                    <i class="icon-chevron-right"></i>
                  </li>
                  <li>
                    <div class="text-tiny">Edit: {{ $category->name }}</div>
                  </li>
                </ul>
              </div>

              <div class="wg-box">
                <form class="form-new-product form-style-1" action="{{ route('admin.category.update', $category->id) }}" method="POST"
                  enctype="multipart/form-data">
                  @csrf
                  @method('PUT')

                  <fieldset class="name">
                    <div class="body-title">Category Name <span class="tf-color-1">*</span></div>
                    <input class="flex-grow @error('name') is-invalid @enderror" type="text"
                      placeholder="Enter category name" name="name" tabindex="0" value="{{ old('name', $category->name) }}"
                      aria-required="true" required id="categoryName">
                    @error('name')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </fieldset>

                  <fieldset class="name">
                    <div class="body-title">Category Slug <span class="tf-color-1">*</span></div>
                    <input class="flex-grow @error('slug') is-invalid @enderror" type="text"
                      placeholder="category-slug" name="slug" tabindex="0" value="{{ old('slug', $category->slug) }}"
                      aria-required="true" required id="categorySlug">
                    @error('slug')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </fieldset>

                  <fieldset>
                    <div class="body-title">Category Image</div>
                    <div class="upload-image flex-grow">
                      <div class="item" id="currentImage" @if(!$category->image) style="display:none" @endif>
                        @if($category->image)
                          <img src="{{ asset('storage/upload/images/categories/' . $category->image) }}" alt="{{ $category->name }}"
                            style="max-width: 124px; max-height: 124px; border-radius: 8px;">
                          <span class="current-label">Current</span>
                        @endif
                      </div>
                      <div class="item" id="imgpreview" style="display:none">
                        <img src="" alt="New Category Preview" id="imgpreview_img" style="max-width: 124px; max-height: 124px; border-radius: 8px;">
                        <span class="new-label">New</span>
                      </div>
                      <div id="upload-file" class="item up-load">
                        <label class="uploadfile" for="myFile">
                          <span class="icon">
                            <i class="icon-upload-cloud"></i>
                          </span>
                          <span class="body-text">{{ $category->image ? 'Change image' : 'Upload image' }} <span class="tf-color">click to browse</span></span>
                          <span class="text-tiny">PNG, JPG, JPEG or WEBP. Max 2MB.</span>
                          <input type="file" id="myFile" name="image" accept="image/*">
                        </label>
                      </div>
                    </div>
                    @error('image')
                      <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                  </fieldset>

                  <div class="bot">
                    <a href="{{ route('admin.categories') }}" class="tf-button style-2 w208">Cancel</a>
                    <button class="tf-button w208" type="submit">Update Category</button>
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
    $("#myFile").on("change", function(e) {
      const [file] = this.files;
      if (file) {
        $("#imgpreview_img").attr('src', URL.createObjectURL(file));
        $("#imgpreview").show();
      }
    });

    $("#categoryName").on("keyup", function() {
      var name = $(this).val();
      var slug = name.toLowerCase()
        .replace(/[^a-z0-9\s-]/g, '')
        .replace(/\s+/g, '-')
        .replace(/-+/g, '-')
        .trim();
      $("#categorySlug").val(slug);
    });
  });
</script>
@endpush

@push('styles')
<style>
  .is-invalid { border-color: #dc3545 !important; }
  .invalid-feedback { color: #dc3545; font-size: 12px; margin-top: 5px; }
  .current-label, .new-label { display: block; text-align: center; font-size: 10px; margin-top: 5px; padding: 2px 8px; border-radius: 4px; }
  .current-label { background: #6c757d; color: white; }
  .new-label { background: #28a745; color: white; }
  .tf-button.style-2 { background: #6c757d; color: white; }
  .tf-button.style-2:hover { background: #5a6268; }
</style>
@endpush
