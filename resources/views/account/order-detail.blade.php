@extends('layouts.app')

@section('title', 'Falstore')

@section('content')
  @include('components.header')
  @include('components.svgicons')

  @push('styles')
    <link rel="stylesheet" href="{{ asset('css/addons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tabel.css') }}">
  @endpush

  <main class="pt-90" style="padding-top: 0px;">
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
      <h2 class="page-title">Order's Details</h2>
      <div class="row">
        <div class="col-lg-2">
          <ul class="account-nav">
            <li><a href="http://localhost:8000/account-dashboard" class="menu-link menu-link_us-s ">Dashboard</a></li>
            <li><a href="http://localhost:8000/account-orders" class="menu-link menu-link_us-s ">Orders</a></li>
            <li><a href="http://localhost:8000/account-addresses" class="menu-link menu-link_us-s ">Addresses</a></li>
            <li><a href="http://localhost:8000/account-details" class="menu-link menu-link_us-s ">Account Details</a>
            </li>
            <li><a href="http://localhost:8000/account-wishlists" class="menu-link menu-link_us-s ">Wishlist</a></li>
            <li>
              <form method="POST" action="http://localhost:8000/logout" id="logout-form-1">
                <input type="hidden" name="_token" value="3v611ELheIo6fqsgspMOk0eiSZjncEeubOwUa6YT" autocomplete="off">
                <a href="http://localhost:8000/logout" class="menu-link menu-link_us-s"
                  onclick="event.preventDefault(); document.getElementById('logout-form-1').submit();">Logout</a>
              </form>
            </li>
          </ul>
        </div>

        <div class="col-lg-10">
          <div class="wg-box mt-5 mb-5">
            <div class="row">
              <div class="col-6">
                <h5>Ordered Details</h5>
              </div>
              <div class="col-6 text-right">
                <a class="btn btn-sm btn-danger" href="{{ route('order') }}">Back</a>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-transaction">
                <tbody>
                  <tr>
                    <th>Order No</th>
                    <td>10001</td>
                    <th>Mobile</th>
                    <td>1234567891</td>
                    <th>Pin/Zip Code</th>
                    <td>804401</td>
                  </tr>
                  <tr>
                    <th>Order Date</th>
                    <td>2024-07-11 00:54:14</td>
                    <th>Delivered Date</th>
                    <td>2024-07-07</td>
                    <th>Canceled Date</th>
                    <td>2024-07-07</td>
                  </tr>
                  <tr>
                    <th>Order Status</th>
                    <td colspan="5">
                      <span class="badge bg-danger">Canceled</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="wg-box wg-table table-all-user">
            <div class="row">
              <div class="col-6">
                <h5>Ordered Items</h5>
              </div>
              <div class="col-6 text-right">

              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">SKU</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Brand</th>
                    <th class="text-center">Options</th>
                    <th class="text-center">Return Status</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td class="pname">
                      <div class="image">
                        <img src="http://localhost:8000/uploads/products/thumbnails/1718066538.jpg" alt="" class="image">
                      </div>
                      <div class="name">
                        <a href="http://localhost:8000/shop/product1" target="_blank" class="body-title-2">Product1</a>
                      </div>
                    </td>
                    <td class="text-center">$71.00</td>
                    <td class="text-center">1</td>
                    <td class="text-center">SHT01245</td>
                    <td class="text-center">Category1</td>
                    <td class="text-center">Brand1</td>
                    <td class="text-center"></td>
                    <td class="text-center">No</td>
                    <td class="text-center">
                      <a href="http://localhost:8000/shop/product1" target="_blank">
                        <div class="list-icon-function view-icon">
                          <div class="item eye">
                            <i class="fa fa-eye"></i>
                          </div>
                        </div>
                      </a>
                    </td>
                  </tr>
                  <tr>

                    <td class="pname">
                      <div class="image">
                        <img src="http://localhost:8000/uploads/products/thumbnails/1718066673.jpg" alt="" class="image">
                      </div>
                      <div class="name">
                        <a href="http://localhost:8000/shop/product2" target="_blank" class="body-title-2">Product2</a>
                      </div>
                    </td>
                    <td class="text-center">$101.00</td>
                    <td class="text-center">1</td>
                    <td class="text-center">SHT99890</td>
                    <td class="text-center">Category2</td>
                    <td class="text-center">Brand1</td>
                    <td class="text-center"></td>
                    <td class="text-center">No</td>
                    <td class="text-center">
                      <a href="http://localhost:8000/shop/product2" target="_blank">
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

          <div class="wg-box mt-5">
            <h5>Shipping Address</h5>
            <div class="my-account__address-item col-md-6">
              <div class="my-account__address-item__detail">
                <p>Divyansh Kumar</p>
                <p>Flat No - 13, R. K. Wing - B</p>
                <p>ABC, DEF</p>
                <p>GHT, </p>
                <p>AAA</p>
                <p>000000</p>
                <br>
                <p>Mobile : 1234567891</p>
              </div>
            </div>
          </div>

          <div class="wg-box mt-5">
            <h5>Transactions</h5>
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-transaction">
                <tbody>
                  <tr>
                    <th>Subtotal</th>
                    <td>$172.00</td>
                    <th>Tax</th>
                    <td>$36.12</td>
                    <th>Discount</th>
                    <td>$0.00</td>
                  </tr>
                  <tr>
                    <th>Total</th>
                    <td>$208.12</td>
                    <th>Payment Mode</th>
                    <td>cod</td>
                    <th>Status</th>
                    <td>
                      <span class="badge bg-success">Approved</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="wg-box mt-5 text-right">
            <form action="http://localhost:8000/account-order/cancel-order" method="POST">
              <input type="hidden" name="_token" value="3v611ELheIo6fqsgspMOk0eiSZjncEeubOwUa6YT" autocomplete="off">
              <input type="hidden" name="_method" value="PUT"> <input type="hidden" name="order_id" value="1">
              <button type="submit" class="btn btn-danger">Cancel Order</button>
            </form>
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
