@extends('layouts.app')
@section('title', 'Falstore')
@section('content')

  @include('components.header')
  @include('components.svgicons')

  @push('styles')
    <link rel="stylesheet" href="{{ asset('css/addons.css') }}">
  @endpush

  @include('components.mobileheader')

  <main class="pt-90" style="padding-top: 0px;">
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
      <h2 class="page-title">Orders</h2>
      <div class="row">
        <div class="col-lg-2">
          <ul class="account-nav">
            <li><a href="{{ route('account') }}" class="menu-link menu-link_us-s ">Dashboard</a></li>
            <li><a href="{{ route('order') }}" class="menu-link menu-link_us-s menu-link_active">Orders</a></li>
            <li><a href="{{ route('address') }}" class="menu-link menu-link_us-s ">Addresses</a></li>
            <li><a href="{{ route('new') }}" class="menu-link menu-link_us-s ">Account Details</a></li>
            <li><a href="{{ route('awish') }}" class="menu-link menu-link_us-s ">Wishlist</a></li>
            <li>
              <form method="POST" action="{{ route('logout') }}" id="logout-form-1">
                <input type="hidden" name="_token" value="3v611ELheIo6fqsgspMOk0eiSZjncEeubOwUa6YT" autocomplete="off"> <a
                  href="http://localhost:8000/logout" class="menu-link menu-link_us-s"
                  onclick="event.preventDefault(); document.getElementById('logout-form-1').submit();">Logout</a>
              </form>
            </li>
          </ul>
        </div>

        <div class="col-lg-10">
          <div class="wg-table table-all-user">
            <div class="table-responsive">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th style="width: 80px">OrderNo</th>
                    <th>Name</th>
                    <th class="text-center">Phone</th>
                    <th class="text-center">Subtotal</th>
                    <th class="text-center">Tax</th>
                    <th class="text-center">Total</th>

                    <th class="text-center">Status</th>
                    <th class="text-center">Order Date</th>
                    <th class="text-center">Items</th>
                    <th class="text-center">Delivered On</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">10001</td>
                    <td class="text-center">Sudhir Kumar</td>
                    <td class="text-center">1234567891</td>
                    <td class="text-center">$172.00</td>
                    <td class="text-center">$36.12</td>
                    <td class="text-center">$208.12</td>

                    <td class="text-center">
                      <span class="badge bg-danger">Canceled</span>
                    </td>
                    <td class="text-center">2024-07-11 00:54:14</td>
                    <td class="text-center">2</td>
                    <td>2024-07-07</td>
                    <td class="text-center">
                      <a href="account-orders-details.html">
                        <div class="list-icon-function view-icon">
                          <div class="item eye">
                            <i class="fa fa-eye"></i>
                          </div>
                        </div>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">10003</td>
                    <td class="text-center">Sudhir Kumar</td>
                    <td class="text-center">1234567891</td>
                    <td class="text-center">$154.80</td>
                    <td class="text-center">$32.51</td>
                    <td class="text-center">$187.31</td>

                    <td class="text-center">
                      <span class="badge bg-warning">Ordered</span>
                    </td>
                    <td class="text-center">2024-06-17 10:41:09</td>
                    <td class="text-center">2</td>
                    <td></td>
                    <td class="text-center">
                      <a href="account-orders-details.html">
                        <div class="list-icon-function view-icon">
                          <div class="item eye">
                            <i class="fa fa-eye"></i>
                          </div>
                        </div>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">10002</td>
                    <td class="text-center">Sudhir Kumar</td>
                    <td class="text-center">1234567891</td>
                    <td class="text-center">$71.00</td>
                    <td class="text-center">$14.91</td>
                    <td class="text-center">$85.91</td>

                    <td class="text-center">
                      <span class="badge bg-warning">Ordered</span>
                    </td>
                    <td class="text-center">2024-06-11 01:02:55</td>
                    <td class="text-center">1</td>
                    <td></td>
                    <td class="text-center">
                      <a href="account-orders-details.html">
                        <div class="list-icon-function view-icon">
                          <div class="item eye">
                            <i class="fa fa-eye"></i>
                          </div>
                        </div>
                      </a>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
          <div class="divider"></div>
          <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">

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
