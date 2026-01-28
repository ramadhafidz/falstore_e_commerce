@extends('layouts.admin')
@section('title', 'Dashboard - Falstore Admin')
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
                <h3>Dashboard</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                  <li>
                    <a href="{{ route('admin.dashboard') }}">
                      <div class="text-tiny">Dashboard</div>
                    </a>
                  </li>
                </ul>
              </div>

              {{-- Statistics Cards --}}
              <div class="wg-box mb-4">
                <div class="row">
                  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4">
                    <div class="tf-statistics style-1">
                      <div class="icon">
                        <i class="icon-shopping-bag" style="font-size: 24px; color: #007bff;"></i>
                      </div>
                      <div>
                        <div class="body-text">Total Products</div>
                        <div class="title-dashboard">{{ \App\Models\Product::count() }}</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4">
                    <div class="tf-statistics style-1">
                      <div class="icon">
                        <i class="icon-layers" style="font-size: 24px; color: #28a745;"></i>
                      </div>
                      <div>
                        <div class="body-text">Categories</div>
                        <div class="title-dashboard">{{ \App\Models\Category::count() }}</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4">
                    <div class="tf-statistics style-1">
                      <div class="icon">
                        <i class="icon-tag" style="font-size: 24px; color: #ffc107;"></i>
                      </div>
                      <div>
                        <div class="body-text">Brands</div>
                        <div class="title-dashboard">{{ \App\Models\Brand::count() }}</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4">
                    <div class="tf-statistics style-1">
                      <div class="icon">
                        <i class="icon-users" style="font-size: 24px; color: #dc3545;"></i>
                      </div>
                      <div>
                        <div class="body-text">Users</div>
                        <div class="title-dashboard">{{ \App\Models\User::count() }}</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              {{-- Quick Actions --}}
              <div class="wg-box mb-4">
                <h5 class="mb-4">Quick Actions</h5>
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <a href="{{ route('admin.product.add') }}" class="tf-button style-1 w-100">
                      <i class="icon-plus"></i> Add Product
                    </a>
                  </div>
                  <div class="col-md-3 mb-3">
                    <a href="{{ route('admin.category.add') }}" class="tf-button style-1 w-100">
                      <i class="icon-plus"></i> Add Category
                    </a>
                  </div>
                  <div class="col-md-3 mb-3">
                    <a href="{{ route('admin.brand.add') }}" class="tf-button style-1 w-100">
                      <i class="icon-plus"></i> Add Brand
                    </a>
                  </div>
                  <div class="col-md-3 mb-3">
                    <a href="{{ route('admin.users') }}" class="tf-button style-2 w-100">
                      <i class="icon-users"></i> View Users
                    </a>
                  </div>
                </div>
              </div>

              {{-- Recent Products --}}
              <div class="wg-box">
                <div class="flex items-center justify-between">
                  <h5>Recent Products</h5>
                  <a href="{{ route('admin.products') }}" class="tf-button style-2">View All</a>
                </div>
                <div class="table-responsive mt-4">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse (\App\Models\Product::with('category')->latest()->take(5)->get() as $product)
                        <tr>
                          <td>{{ $product->id }}</td>
                          <td class="pname">
                            <div class="image">
                              @if($product->image)
                                <img src="{{ asset('storage/upload/images/products/' . $product->image) }}" alt="{{ $product->name }}" class="image">
                              @else
                                <div class="image-placeholder" style="width: 40px; height: 40px; background: #f0f0f0; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
                                  <i class="icon-shopping-bag" style="color: #ccc;"></i>
                                </div>
                              @endif
                            </div>
                            <div class="name">
                              <a href="{{ route('admin.product.edit', $product->id) }}" class="body-title-2">{{ Str::limit($product->name, 30) }}</a>
                            </div>
                          </td>
                          <td>{{ $product->category->name ?? '-' }}</td>
                          <td>${{ number_format($product->regular_price ?? $product->price ?? 0, 2) }}</td>
                          <td>
                            @if(($product->stock_status ?? 'instock') == 'instock')
                              <span class="badge bg-success">In Stock</span>
                            @else
                              <span class="badge bg-danger">Out of Stock</span>
                            @endif
                          </td>
                        </tr>
                      @empty
                        <tr>
                          <td colspan="5" class="text-center py-4">
                            <p class="text-muted">No products yet</p>
                            <a href="{{ route('admin.product.add') }}" class="tf-button style-1">Add First Product</a>
                          </td>
                        </tr>
                      @endforelse
                    </tbody>
                  </table>
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
