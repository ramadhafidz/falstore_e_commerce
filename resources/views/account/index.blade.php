@extends('layouts.app')
@section('title', 'Falstore | My Account')
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
      <h2 class="page-title">My Account</h2>
      <div class="row">
        <div class="col-lg-3">
          <ul class="account-nav">
            <li><a href="{{ route('account') }}" class="menu-link menu-link_us-s menu-link_active">Dashboard</a></li>
            <li><a href="{{ route('order') }}" class="menu-link menu-link_us-s">Orders</a></li>
            <li><a href="{{ route('address') }}" class="menu-link menu-link_us-s">Addresses</a></li>
            <li><a href="{{ route('change') }}" class="menu-link menu-link_us-s">Account Details</a></li>
            <li><a href="{{ route('awish') }}" class="menu-link menu-link_us-s">Wishlist</a></li>
            <li>
              <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="menu-link menu-link_us-s"
                  style="background: none; border: none; color: inherit; cursor: pointer; padding: 0;">LOGOUT</button>
              </form>
            </li>
          </ul>
        </div>
        <div class="col-lg-9">
          <div class="page-content my-account__dashboard">
            <p>Hello <strong>User</strong></p>
            <p>From your account dashboard you can view your <a class="unerline-link" href="account_orders.html">recent
                orders</a>, manage your <a class="unerline-link" href="account_edit_address.html">shipping
                addresses</a>, and <a class="unerline-link" href="account_edit.html">edit your password and account
                details.</a></p>
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
