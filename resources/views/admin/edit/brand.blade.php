@extends('layouts.admin')
@section('title', 'Edit Brand - Falstore Admin')
@section('content')

<div id="wrapper">
  <div id="page" class="">
    <div class="layout-wrap">

      @include('components.admin.sidemenu')

      <div class="section-content-right">
        <!-- Header -->
        @include('components.admin.header')

        <div class="main-content">
          <div class="main-content-inner">
            <div class="main-content-wrap">
              <!-- Page Header -->
              <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Edit Brand</h3>
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
                    <a href="{{ route('admin.brands') }}">
                      <div class="text-tiny">Brands</div>
                    </a>
                  </li>
                  <li>
                    <i class="icon-chevron-right"></i>
                  </li>
                  <li>
                    <div class="text-tiny">Edit: {{ $brand->name }}</div>
                  </li>
                </ul>
              </div>

              <!-- Form Box -->
              <div class="wg-box">
                <form class="form-new-product form-style-1" action="{{ route('admin.brand.update', $brand->id) }}" method="POST"
                  enctype="multipart/form-data">
                  @csrf
                  @method('PUT')

                  <!-- Brand Name -->
                  <fieldset class="name">
                    <div class="body-title">Brand Name <span class="tf-color-1">*</span></div>
                    <input class="flex-grow @error('name') is-invalid @enderror" type="text"
                      placeholder="Enter brand name" name="name" tabindex="0" value="{{ old('name', $brand->name) }}"
                      aria-required="true" required id="brandName">
                    @error('name')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </fieldset>

                  <!-- Brand Slug -->
                  <fieldset class="name">
                    <div class="body-title">Brand Slug <span class="tf-color-1">*</span></div>
                    <input class="flex-grow @error('slug') is-invalid @enderror" type="text"
                      placeholder="brand-slug" name="slug" tabindex="0" value="{{ old('slug', $brand->slug) }}"
                      aria-required="true" required id="brandSlug">
                    <small class="text-muted">URL-friendly version of the name.</small>
                    @error('slug')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </fieldset>

                  <!-- Image Upload -->
                  <fieldset>
                    <div class="body-title">Brand Image</div>
                    <div class="upload-image flex-grow">
                      <!-- Current Image -->
                      <div class="item" id="currentImage" @if(!$brand->image) style="display:none" @endif>
                        @if($brand->image)
                          <img src="{{ asset('storage/upload/images/brands/' . $brand->image) }}" alt="{{ $brand->name }}"
                            style="max-width: 124px; max-height: 124px; border-radius: 8px;">
                          <span class="current-label">Current</span>
                        @endif
                      </div>

                      <!-- New Image Preview -->
                      <div class="item" id="imgpreview" style="display:none">
                        <img src="" alt="New Brand Preview" id="imgpreview_img" style="max-width: 124px; max-height: 124px; border-radius: 8px;">
                        <span class="new-label">New</span>
                      </div>

                      <div id="upload-file" class="item up-load">
                        <label class="uploadfile" for="myFile">
                          <span class="icon">
                            <i class="icon-upload-cloud"></i>
                          </span>
                          <span class="body-text">{{ $brand->image ? 'Change image' : 'Upload image' }} <span class="tf-color">click to browse</span></span>
                          <span class="text-tiny">PNG, JPG, JPEG or WEBP. Max 2MB.</span>
                          <input type="file" id="myFile" name="image" accept="image/*">
                        </label>
                      </div>
                    </div>
                    @error('image')
                      <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                  </fieldset>

                  <!-- Action Buttons -->
                  <div class="bot">
                    <a href="{{ route('admin.brands') }}" class="tf-button style-2 w208">Cancel</a>
                    <button class="tf-button w208" type="submit">Update Brand</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Footer -->
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
    // Image Preview
    $("#myFile").on("change", function(e) {
      const [file] = this.files;
      if (file) {
        $("#imgpreview_img").attr('src', URL.createObjectURL(file));
        $("#imgpreview").show();
      }
    });

    // Auto-generate slug from name (optional for edit)
    $("#brandName").on("keyup", function() {
      var name = $(this).val();
      var slug = name.toLowerCase()
        .replace(/[^a-z0-9\s-]/g, '')
        .replace(/\s+/g, '-')
        .replace(/-+/g, '-')
        .trim();
      $("#brandSlug").val(slug);
    });
  });
</script>
@endpush

@push('styles')
<style>
  .is-invalid {
    border-color: #dc3545 !important;
  }
  .invalid-feedback {
    color: #dc3545;
    font-size: 12px;
    margin-top: 5px;
  }
  .current-label, .new-label {
    display: block;
    text-align: center;
    font-size: 10px;
    margin-top: 5px;
    padding: 2px 8px;
    border-radius: 4px;
  }
  .current-label {
    background: #6c757d;
    color: white;
  }
  .new-label {
    background: #28a745;
    color: white;
  }
  .tf-button.style-2 {
    background: #6c757d;
    color: white;
  }
  .tf-button.style-2:hover {
    background: #5a6268;
  }
</style>
@endpush
