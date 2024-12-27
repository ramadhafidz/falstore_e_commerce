@extends('layouts.admin')
@section('title', 'Falstore')
@section('content')

  <div id="wrapper">
    <div id="page" class="">
      <div class="layout-wrap">

        <div id="preload" class="preload-container">
          <div class="preloading">
            <span></span>
          </div>
        </div>

        @include('components.admin.sidemenu')

        <div class="section-content-right">

          <div class="header-dashboard">
            <div class="wrap">
              <div class="header-left">
                <a href="index-2.html">
                  <img class="" id="logo_header_mobile" alt="" src="{{ asset('images/admin/logo/logo.png') }}"
                    data-light="images/logo/logo.png" data-dark="images/logo/logo.png" data-width="154px" data-height="52px"
                    data-retina="images/logo/logo.png">
                </a>
                <div class="button-show-hide">
                  <i class="icon-menu-left"></i>
                </div>


                <form class="form-search flex-grow">
                  <fieldset class="name">
                    <input type="text" placeholder="Search here..." class="show-search" name="name" tabindex="2" value=""
                      aria-required="true" required="">
                  </fieldset>
                  <div class="button-submit">
                    <button class="" type="submit"><i class="icon-search"></i></button>
                  </div>
                  <div class="box-content-search" id="box-content-search">
                    <ul class="mb-24">
                      <li class="mb-14">
                        <div class="body-title">Top selling product</div>
                      </li>
                      <li class="mb-14">
                        <div class="divider"></div>
                      </li>
                      <li>
                        <ul>
                          <li class="product-item gap14 mb-10">
                            <div class="image no-bg">
                              <img src="{{ asset('images/admin/products/17.png') }}" alt="">
                            </div>
                            <div class="flex items-center justify-between gap20 flex-grow">
                              <div class="name">
                                <a href="product-list.html" class="body-text">Dog Food
                                  Rachael Ray Nutrish®</a>
                              </div>
                            </div>
                          </li>
                          <li class="mb-10">
                            <div class="divider"></div>
                          </li>
                          <li class="product-item gap14 mb-10">
                            <div class="image no-bg">
                              <img src="{{ asset('images/admin/products/18.png') }}" alt="">
                            </div>
                            <div class="flex items-center justify-between gap20 flex-grow">
                              <div class="name">
                                <a href="product-list.html" class="body-text">Natural
                                  Dog Food Healthy Dog Food</a>
                              </div>
                            </div>
                          </li>
                          <li class="mb-10">
                            <div class="divider"></div>
                          </li>
                          <li class="product-item gap14">
                            <div class="image no-bg">
                              <img src="{{ asset('images/admin/products/19.png') }}" alt="">
                            </div>
                            <div class="flex items-center justify-between gap20 flex-grow">
                              <div class="name">
                                <a href="product-list.html" class="body-text">Freshpet
                                  Healthy Dog Food and Cat</a>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="">
                      <li class="mb-14">
                        <div class="body-title">Order product</div>
                      </li>
                      <li class="mb-14">
                        <div class="divider"></div>
                      </li>
                      <li>
                        <ul>
                          <li class="product-item gap14 mb-10">
                            <div class="image no-bg">
                              <img src="{{ asset('images/admin/products/20.png') }}" alt="">
                            </div>
                            <div class="flex items-center justify-between gap20 flex-grow">
                              <div class="name">
                                <a href="product-list.html" class="body-text">Sojos
                                  Crunchy Natural Grain Free...</a>
                              </div>
                            </div>
                          </li>
                          <li class="mb-10">
                            <div class="divider"></div>
                          </li>
                          <li class="product-item gap14 mb-10">
                            <div class="image no-bg">
                              <img src="{{ asset('images/admin/products/21.png') }}" alt="">
                            </div>
                            <div class="flex items-center justify-between gap20 flex-grow">
                              <div class="name">
                                <a href="product-list.html" class="body-text">Kristin
                                  Watson</a>
                              </div>
                            </div>
                          </li>
                          <li class="mb-10">
                            <div class="divider"></div>
                          </li>
                          <li class="product-item gap14 mb-10">
                            <div class="image no-bg">
                              <img src="{{ asset('images/admin/products/22.png') }}" alt="">
                            </div>
                            <div class="flex items-center justify-between gap20 flex-grow">
                              <div class="name">
                                <a href="product-list.html" class="body-text">Mega
                                  Pumpkin Bone</a>
                              </div>
                            </div>
                          </li>
                          <li class="mb-10">
                            <div class="divider"></div>
                          </li>
                          <li class="product-item gap14">
                            <div class="image no-bg">
                              <img src="{{ asset('images/admin/products/23.png') }}" alt="">
                            </div>
                            <div class="flex items-center justify-between gap20 flex-grow">
                              <div class="name">
                                <a href="product-list.html" class="body-text">Mega
                                  Pumpkin Bone</a>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </form>

              </div>
              <div class="header-grid">

                <div class="popup-wrap message type-header">
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <span class="header-item">
                        <span class="text-tiny">1</span>
                        <i class="icon-bell"></i>
                      </span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton2">
                      <li>
                        <h6>Notifications</h6>
                      </li>
                      <li>
                        <div class="message-item item-1">
                          <div class="image">
                            <i class="icon-noti-1"></i>
                          </div>
                          <div>
                            <div class="body-title-2">Discount available</div>
                            <div class="text-tiny">Morbi sapien massa, ultricies at rhoncus
                              at, ullamcorper nec diam</div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="message-item item-2">
                          <div class="image">
                            <i class="icon-noti-2"></i>
                          </div>
                          <div>
                            <div class="body-title-2">Account has been verified</div>
                            <div class="text-tiny">Mauris libero ex, iaculis vitae rhoncus
                              et</div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="message-item item-3">
                          <div class="image">
                            <i class="icon-noti-3"></i>
                          </div>
                          <div>
                            <div class="body-title-2">Order shipped successfully</div>
                            <div class="text-tiny">Integer aliquam eros nec sollicitudin
                              sollicitudin</div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="message-item item-4">
                          <div class="image">
                            <i class="icon-noti-4"></i>
                          </div>
                          <div>
                            <div class="body-title-2">Order pending: <span>ID 305830</span>
                            </div>
                            <div class="text-tiny">Ultricies at rhoncus at ullamcorper</div>
                          </div>
                        </div>
                      </li>
                      <li><a href="#" class="tf-button w-full">View all</a></li>
                    </ul>
                  </div>
                </div>




                <div class="popup-wrap user type-header">
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <span class="header-user wg-user">
                        <span class="image">
                          <img src="{{ asset('images/admin/avatar/user-1.png') }}" alt="">
                        </span>
                        <span class="flex flex-column">
                          <span class="body-title mb-2">Kristin Watson</span>
                          <span class="text-tiny">Admin</span>
                        </span>
                      </span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton3">
                      <li>
                        <a href="#" class="user-item">
                          <div class="icon">
                            <i class="icon-user"></i>
                          </div>
                          <div class="body-title-2">Account</div>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="user-item">
                          <div class="icon">
                            <i class="icon-mail"></i>
                          </div>
                          <div class="body-title-2">Inbox</div>
                          <div class="number">27</div>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="user-item">
                          <div class="icon">
                            <i class="icon-file-text"></i>
                          </div>
                          <div class="body-title-2">Taskboard</div>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="user-item">
                          <div class="icon">
                            <i class="icon-headphones"></i>
                          </div>
                          <div class="body-title-2">Support</div>
                        </a>
                      </li>
                      <li>
                        <a href="login.html" class="user-item">
                          <div class="icon">
                            <i class="icon-log-out"></i>
                          </div>
                          <div class="body-title-2">Log out</div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="main-content">

            <div class="main-content-inner">
              <div class="main-content-wrap">
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

                <div class="wg-box">
                  <div class="flex items-center justify-between gap10 flex-wrap">
                    <div class="wg-filter flex-grow">
                      <form class="form-search">
                        <fieldset class="name">
                          <input type="text" placeholder="Search here..." class="" name="name" tabindex="2" value=""
                            aria-required="true" required="">
                        </fieldset>
                        <div class="button-submit">
                          <button class="" type="submit"><i class="icon-search"></i></button>
                        </div>
                      </form>
                    </div>
                    <a class="tf-button style-1 w208" href="{{ route('admin.brand.add') }}"><i class="icon-plus"></i>Add new</a>
                  </div>
                  <div class="wg-table table-all-user">
                    <div class="table-responsive">
                      @if (Session::has('status'))
                        <p class="alert alert-success">{{ Session::get('status') }}</p>
                      @endif
                      <table class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Products</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($brands as $brand)
                            <tr>
                              <td>{{ $brand->id }}</td>
                              <td class="pname">
                                <div class="image">
                                  <img src="{{ asset('storage/upload/images/brands') }}/{{ $brand->image }}" alt="" class="image">
                                </div>
                                <div class="name">
                                  <a href="#" class="body-title-2">{{ $brand->name }}</a>
                                </div>
                              </td>
                              <td>{{ $brand->slug }}</td>
                              <td><a href="{{ route('admin.brand.products', ['brand_slug' => $brand->slug]) }}" target="_blank">1</a></td>
                              <td>
                                <div class="list-icon-function">
                                  <a href="{{ route('admin.brand.edit', ['id' => $brand->id]) }}">
                                    <div class="item edit">
                                      <i class="icon-edit-3"></i>
                                    </div>
                                  </a>
                                  <form action="{{ route('admin.brand.delete', ['id' => $brand->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="item text-danger delete">
                                      <i class="icon-trash-2"></i>
                                    </div>
                                  </form>
                                </div>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <div class="divider"></div>
                    <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">
                      {{ $brands->links('pagination::bootstrap-5') }}
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="bottom-page">
              <div class="body-text">Copyright © 2024 Falstore</div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

@endsection

@push('scripts')
  <script>
    $(function() {
      $(".delete").on('click', function(e) {
        e.preventDefault();
        var selectedForm = $(this).closest('form');
        swal({
          title: "Are you sure?",
          text: "You want to delete this record?",
          type: "warning",
          buttons: ["No!", "Yes!"],
          confirmButtonColor: '#dc3545'
        }).then(function(result) {
          if (result) {
            selectedForm.submit();
          }
        });
      });
    });
  </script>
@endpush
