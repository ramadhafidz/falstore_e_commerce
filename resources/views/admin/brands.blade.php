@extends('layouts.admin')
@section('title', 'Brands - Falstore Admin')
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
                <h3>Brands</h3>
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
                    <div class="text-tiny">Brands</div>
                  </li>
                </ul>
              </div>

              <!-- Content Box -->
              <div class="wg-box">
                <!-- Action Bar -->
                <div class="flex items-center justify-between gap10 flex-wrap">
                  <div class="wg-filter flex-grow">
                    <form class="form-search" method="GET" action="{{ route('admin.brands') }}">
                      <fieldset class="name">
                        <input type="text" placeholder="Search brands..." class="" name="search" tabindex="2"
                          value="{{ request('search') }}">
                      </fieldset>
                      <div class="button-submit">
                        <button class="" type="submit"><i class="icon-search"></i></button>
                      </div>
                    </form>
                  </div>
                  <a class="tf-button style-1 w208" href="{{ route('admin.brand.add') }}">
                    <i class="icon-plus"></i>Add New Brand
                  </a>
                </div>

                <!-- Flash Messages -->
                @if (Session::has('status'))
                  <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <i class="icon-check-circle me-2"></i>{{ Session::get('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif

                @if (Session::has('error'))
                  <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    <i class="icon-alert-circle me-2"></i>{{ Session::get('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif

                <!-- Table -->
                <div class="wg-table table-all-user">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 60px;">#</th>
                          <th>Brand</th>
                          <th>Slug</th>
                          <th style="width: 100px;">Products</th>
                          <th style="width: 120px;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($brands as $brand)
                          <tr>
                            <td>{{ $brand->id }}</td>
                            <td class="pname">
                              <div class="image">
                                @if($brand->image)
                                  <img src="{{ asset('storage/upload/images/brands/' . $brand->image) }}" alt="{{ $brand->name }}" class="image">
                                @else
                                  <div class="image-placeholder" style="width: 50px; height: 50px; background: #f0f0f0; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
                                    <i class="icon-image" style="color: #ccc;"></i>
                                  </div>
                                @endif
                              </div>
                              <div class="name">
                                <a href="{{ route('admin.brand.edit', $brand->id) }}" class="body-title-2">{{ $brand->name }}</a>
                              </div>
                            </td>
                            <td><span class="badge bg-secondary">{{ $brand->slug }}</span></td>
                            <td>
                              <span class="badge bg-primary">{{ $brand->products_count ?? 0 }}</span>
                            </td>
                            <td>
                              <div class="list-icon-function">
                                <a href="{{ route('admin.brand.edit', $brand->id) }}" title="Edit">
                                  <div class="item edit">
                                    <i class="icon-edit-3"></i>
                                  </div>
                                </a>
                                <form action="{{ route('admin.brand.delete', $brand->id) }}" method="POST" class="delete-form" style="display: inline;">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="item text-danger delete" title="Delete" style="border: none; background: none; cursor: pointer;">
                                    <i class="icon-trash-2"></i>
                                  </button>
                                </form>
                              </div>
                            </td>
                          </tr>
                        @empty
                          <tr>
                            <td colspan="5" class="text-center py-4">
                              <div class="empty-state">
                                <i class="icon-inbox" style="font-size: 48px; color: #ccc;"></i>
                                <p class="mt-3 text-muted">No brands found</p>
                                <a href="{{ route('admin.brand.add') }}" class="tf-button style-1 mt-3">
                                  <i class="icon-plus"></i> Add First Brand
                                </a>
                              </div>
                            </td>
                          </tr>
                        @endforelse
                      </tbody>
                    </table>
                  </div>

                  <!-- Pagination -->
                  @if($brands->hasPages())
                    <div class="divider"></div>
                    <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">
                      {{ $brands->links('pagination::bootstrap-5') }}
                    </div>
                  @endif
                </div>
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
    // Delete confirmation
    $('.delete-form').on('submit', function(e) {
      e.preventDefault();
      var form = this;

      swal({
        title: "Are you sure?",
        text: "This brand will be permanently deleted!",
        icon: "warning",
        buttons: ["Cancel", "Yes, delete it!"],
        dangerMode: true,
      }).then((willDelete) => {
        if (willDelete) {
          form.submit();
        }
      });
    });
  });
</script>
@endpush