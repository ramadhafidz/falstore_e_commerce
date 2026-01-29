@extends('layouts.admin')
@section('title', 'Add Brand - Falstore Admin')
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
                <h3>Add New Brand</h3>
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
                    <div class="text-tiny">Add New</div>
                  </li>
                </ul>
              </div>

              <!-- Form Box -->
              <div class="wg-box">
                <form class="form-new-product form-style-1" action="{{ route('admin.brand.store') }}" method="POST"
                  enctype="multipart/form-data">
                  @csrf

                  <!-- Brand Name -->
                  <fieldset class="name">
                    <div class="body-title">Brand Name <span class="tf-color-1">*</span></div>
                    <input class="flex-grow @error('name') is-invalid @enderror" type="text"
                      placeholder="Enter brand name" name="name" tabindex="0" value="{{ old('name') }}"
                      aria-required="true" required id="brandName">
                    @error('name')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </fieldset>

                  <!-- Brand Slug -->
                  <fieldset class="name">
                    <div class="body-title">Brand Slug <span class="tf-color-1">*</span></div>
                    <input class="flex-grow @error('slug') is-invalid @enderror" type="text"
                      placeholder="brand-slug" name="slug" tabindex="0" value="{{ old('slug') }}"
                      aria-required="true" required id="brandSlug">
                    <small class="text-muted">URL-friendly version of the name. Auto-generated from name.</small>
                    @error('slug')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </fieldset>

                  <!-- Image Upload -->
                  <fieldset>
                    <div class="body-title">Brand Image</div>
                    <div class="upload-image flex-grow">
                      <div class="item" id="imgpreview" style="display:none">
                        <img src="" alt="Brand Preview" id="imgpreview_img" style="max-width: 124px; max-height: 124px; border-radius: 8px;">
                      </div>
                      <div id="upload-file" class="item up-load">
                        <label class="uploadfile" for="myFile">
                          <span class="icon">
                            <i class="icon-upload-cloud"></i>
                          </span>
                          <span class="body-text">Drop your image here or <span class="tf-color">click to browse</span></span>
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
                    <button class="tf-button w208" type="submit">Save Brand</button>
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
        $("#upload-file").hide();
      }
    });

    // Auto-generate slug from name
    $("#brandName").on("keyup", function() {
      var name = $(this).val();
      var slug = name.toLowerCase()
        .replace(/[^a-z0-9\s-]/g, '')
        .replace(/\s+/g, '-')
        .replace(/-+/g, '-')
        .trim();
      $("#brandSlug").val(slug);
    });

    // Reset image preview
    $("#imgpreview").on("click", function() {
      $(this).hide();
      $("#upload-file").show();
      $("#myFile").val('');
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
  #imgpreview {
    cursor: pointer;
    position: relative;
  }
  #imgpreview:hover::after {
    content: 'Click to remove';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0,0,0,0.7);
    color: white;
    padding: 5px;
    font-size: 10px;
    text-align: center;
    border-radius: 0 0 8px 8px;
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
