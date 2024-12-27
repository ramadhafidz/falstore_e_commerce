@extends('layouts.app')
@section('title', 'Falstore')
@section('content')

  @include('components.header')
  @include('components.svgicons')

  @push('styles')
    <link rel="stylesheet" href="{{ asset('css/addons.css') }}">
  @endpush

  @include('components.mobileheader')

  <main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
      <h2 class="page-title">Address</h2>
      <div class="row">
        <div class="col-lg-3">
          <ul class="account-nav">
            <li><a href="{{ route('account') }}" class="menu-link menu-link_us-s">Dashboard</a></li>
            <li><a href="{{ route('order') }}" class="menu-link menu-link_us-s">Orders</a></li>
            <li><a href="{{ route('address') }}" class="menu-link menu-link_us-s menu-link_active">Addresses</a></li>
            <li><a href="{{ route('change') }}" class="menu-link menu-link_us-s">Account Details</a></li>
            <li><a href="{{ route('awish') }}" class="menu-link menu-link_us-s">Wishlist</a></li>
            <li><a href="login.html" class="menu-link menu-link_us-s">Logout</a></li>
          </ul>
        </div>
        <div class="col-lg-9">
          <div class="page-content my-account__address">
            <div class="row">
              <div class="col-6">
                <p class="notice">The following addresses will be used on the checkout page by default.</p>
              </div>
              <div class="col-6 text-right">
                <a href="{{ route('address') }}" class="btn btn-sm btn-danger">Back</a>
              </div>
            </div>

            <div class="row">
              <div class="col-md-8">
                <div class="card mb-5">
                  <div class="card-header">
                    <h5>Add New Address</h5>
                  </div>
                  <div class="card-body">
                    <form action="#" method="POST">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-floating my-3">
                            <input type="text" class="form-control" name="name" value="">
                            <label for="name">Full Name *</label>
                            <span class="text-danger"></span>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating my-3">
                            <input type="text" class="form-control" name="phone" value="">
                            <label for="phone">Phone Number *</label>
                            <span class="text-danger"></span>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-floating my-3">
                            <input type="text" class="form-control" name="zip" value="">
                            <label for="zip">Pincode *</label>
                            <span class="text-danger"></span>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-floating mt-3 mb-3">
                            <input type="text" class="form-control" name="state" value="">
                            <label for="state">State *</label>
                            <span class="text-danger"></span>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-floating my-3">
                            <input type="text" class="form-control" name="city" value="">
                            <label for="city">Town / City *</label>
                            <span class="text-danger"></span>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating my-3">
                            <input type="text" class="form-control" name="address" value="">
                            <label for="address">House no, Building Name *</label>
                            <span class="text-danger"></span>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating my-3">
                            <input type="text" class="form-control" name="locality" value="">
                            <label for="locality">Road Name, Area, Colony *</label>
                            <span class="text-danger"></span>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-floating my-3">
                            <input type="text" class="form-control" name="landmark" value="">
                            <label for="landmark">Landmark *</label>
                            <span class="text-danger"></span>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="isdefault" name="isdefault">
                            <label class="form-check-label" for="isdefault">
                              Make as Default address
                            </label>
                          </div>
                        </div>
                        <div class="col-md-12 text-right">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <hr>
          </div>
        </div>
      </div>
    </section>
  </main>

  <hr class="mt-5 text-secondary" />
  <div id="scrollTop" class="visually-hidden end-0"></div>
  <div class="page-overlay"></div>

  @include('components.footer')
@endsection
