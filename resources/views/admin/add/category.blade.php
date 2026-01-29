@extends('layouts.admin')
@section('title', 'Add Category - Falstore Admin')
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
                <h3>Add New Category</h3>
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

                <form class="form-new-product form-style-1" action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <fieldset class="name">
                    <div class="body-title">Category Name <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Enter category name" name="name" id="name" tabindex="0" 
                      value="{{ old('name') }}" aria-required="true" required>
                  </fieldset>

                  <fieldset class="name">
                    <div class="body-title">Category Slug <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Slug will be auto-generated" name="slug" id="slug" tabindex="0" 
                      value="{{ old('slug') }}" aria-required="true" required>
                  </fieldset>

                  <fieldset class="name">
                    <div class="body-title">Description</div>
                    <textarea class="flex-grow" placeholder="Enter category description" name="description" rows="4">{{ old('description') }}</textarea>
                  </fieldset>

                  <fieldset>
                    <div class="body-title">Upload Image</div>
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

                  <div class="bot">
                    <a href="{{ route('admin.categories') }}" class="tf-button style-2 w208">Cancel</a>
                    <button class="tf-button w208" type="submit">Save Category</button>
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
  });
</script>
@endpush
