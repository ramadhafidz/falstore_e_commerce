@extends('layouts.admin')
@section('title', 'Products - Falstore Admin')
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
                <h3>Products</h3>
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
                    <div class="text-tiny">Products</div>
                  </li>
                </ul>
              </div>

              <div class="wg-box">
                <div class="flex items-center justify-between gap10 flex-wrap">
                  <div class="wg-filter flex-grow">
                    <form class="form-search" method="GET" action="{{ route('admin.products') }}">
                      <fieldset class="name">
                        <input type="text" placeholder="Search products..." class="" name="search" tabindex="2"
                          value="{{ request('search') }}">
                      </fieldset>
                      <div class="button-submit">
                        <button class="" type="submit"><i class="icon-search"></i></button>
                      </div>
                    </form>
                  </div>
                  <a class="tf-button style-1 w208" href="{{ route('admin.product.add') }}">
                    <i class="icon-plus"></i>Add New Product
                  </a>
                </div>

                @if (Session::has('status'))
                  <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <i class="icon-check-circle me-2"></i>{{ Session::get('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif

                <div class="wg-table table-all-user">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 50px;">#</th>
                          <th>Product</th>
                          <th>Price</th>
                          <th>Sale Price</th>
                          <th>SKU</th>
                          <th>Category</th>
                          <th>Brand</th>
                          <th style="width: 80px;">Stock</th>
                          <th style="width: 70px;">Qty</th>
                          <th style="width: 120px;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($products as $product)
                          <tr>
                            <td>{{ $product->id }}</td>
                            <td class="pname">
                              <div class="image">
                                @if($product->image)
                                  <img src="{{ asset('storage/upload/images/products/' . $product->image) }}" alt="{{ $product->name }}" class="image">
                                @else
                                  <div class="image-placeholder" style="width: 50px; height: 50px; background: #f0f0f0; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
                                    <i class="icon-shopping-bag" style="color: #ccc;"></i>
                                  </div>
                                @endif
                              </div>
                              <div class="name">
                                <a href="{{ route('admin.product.edit', $product->id) }}" class="body-title-2">{{ $product->name }}</a>
                                <div class="text-tiny mt-3">{{ $product->slug }}</div>
                              </div>
                            </td>
                            <td>${{ number_format($product->regular_price, 2) }}</td>
                            <td>
                              @if($product->sale_price)
                                <span class="text-success">${{ number_format($product->sale_price, 2) }}</span>
                              @else
                                <span class="text-muted">-</span>
                              @endif
                            </td>
                            <td><code>{{ $product->SKU }}</code></td>
                            <td>{{ $product->category->name ?? '-' }}</td>
                            <td>{{ $product->brand->name ?? '-' }}</td>
                            <td>
                              @if($product->stock_status == 'instock')
                                <span class="badge bg-success">In Stock</span>
                              @else
                                <span class="badge bg-danger">Out of Stock</span>
                              @endif
                            </td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                              <div class="list-icon-function">
                                <a href="{{ route('admin.product.edit', $product->id) }}" title="Edit">
                                  <div class="item edit">
                                    <i class="icon-edit-3"></i>
                                  </div>
                                </a>
                                <form action="{{ route('admin.product.delete', $product->id) }}" method="POST" class="delete-form" style="display: inline;">
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
                            <td colspan="10" class="text-center py-4">
                              <div class="empty-state">
                                <i class="icon-shopping-bag" style="font-size: 48px; color: #ccc;"></i>
                                <p class="mt-3 text-muted">No products found</p>
                                <a href="{{ route('admin.product.add') }}" class="tf-button style-1 mt-3">
                                  <i class="icon-plus"></i> Add First Product
                                </a>
                              </div>
                            </td>
                          </tr>
                        @endforelse
                      </tbody>
                    </table>
                  </div>

                  @if($products->hasPages())
                    <div class="divider"></div>
                    <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">
                      {{ $products->links('pagination::bootstrap-5') }}
                    </div>
                  @endif
                </div>
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
    $('.delete-form').on('submit', function(e) {
      e.preventDefault();
      var form = this;
      swal({
        title: "Are you sure?",
        text: "This product will be permanently deleted!",
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

