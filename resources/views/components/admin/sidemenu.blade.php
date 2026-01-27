<div class="section-menu-left">
  <div class="box-logo">
    <a href="{{ route('home') }}" id="site-logo-inner">
      <img class="" id="logo_header" alt="Falstore" src="{{ asset('images/logo.png') }}" data-light="{{ asset('images/logo.png') }}"
        data-dark="{{ asset('images/logo.png') }}" style="width: 120px; height: auto;">
    </a>
    <div class="button-show-hide">
      <i class="icon-menu-left"></i>
    </div>
  </div>
  <div class="center">
    <div class="center-item">
      <div class="center-heading">Main Menu</div>
      <ul class="menu-list">
        <li class="menu-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
          <a href="{{ route('admin.dashboard') }}" class="">
            <div class="icon"><i class="icon-grid"></i></div>
            <div class="text">Dashboard</div>
          </a>
        </li>
      </ul>
    </div>
    <div class="center-item">
      <div class="center-heading">Catalog</div>
      <ul class="menu-list">
        <li class="menu-item has-children">
          <a href="javascript:void(0);" class="menu-item-button">
            <div class="icon"><i class="icon-shopping-cart"></i></div>
            <div class="text">Products</div>
          </a>
          <ul class="sub-menu">
            <li class="sub-menu-item">
              <a href="#" class="">
                <div class="text">Add Product</div>
              </a>
            </li>
            <li class="sub-menu-item">
              <a href="#" class="">
                <div class="text">All Products</div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-item has-children {{ request()->routeIs('admin.brands*') || request()->routeIs('admin.brand*') ? 'active' : '' }}">
          <a href="javascript:void(0);" class="menu-item-button">
            <div class="icon"><i class="icon-tag"></i></div>
            <div class="text">Brands</div>
          </a>
          <ul class="sub-menu">
            <li class="sub-menu-item">
              <a href="{{ route('admin.brand.add') }}" class="">
                <div class="text">Add New Brand</div>
              </a>
            </li>
            <li class="sub-menu-item">
              <a href="{{ route('admin.brands') }}" class="">
                <div class="text">All Brands</div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-item has-children">
          <a href="javascript:void(0);" class="menu-item-button">
            <div class="icon"><i class="icon-layers"></i></div>
            <div class="text">Categories</div>
          </a>
          <ul class="sub-menu">
            <li class="sub-menu-item">
              <a href="#" class="">
                <div class="text">Add Category</div>
              </a>
            </li>
            <li class="sub-menu-item">
              <a href="#" class="">
                <div class="text">All Categories</div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="center-item">
      <div class="center-heading">Sales</div>
      <ul class="menu-list">
        <li class="menu-item has-children">
          <a href="javascript:void(0);" class="menu-item-button">
            <div class="icon"><i class="icon-file-plus"></i></div>
            <div class="text">Orders</div>
          </a>
          <ul class="sub-menu">
            <li class="sub-menu-item">
              <a href="#" class="">
                <div class="text">All Orders</div>
              </a>
            </li>
            <li class="sub-menu-item">
              <a href="#" class="">
                <div class="text">Order Tracking</div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-item">
          <a href="#" class="">
            <div class="icon"><i class="icon-percent"></i></div>
            <div class="text">Coupons</div>
          </a>
        </li>
      </ul>
    </div>
    <div class="center-item">
      <div class="center-heading">Content</div>
      <ul class="menu-list">
        <li class="menu-item">
          <a href="#" class="">
            <div class="icon"><i class="icon-image"></i></div>
            <div class="text">Slider</div>
          </a>
        </li>
      </ul>
    </div>
    <div class="center-item">
      <div class="center-heading">System</div>
      <ul class="menu-list">
        <li class="menu-item">
          <a href="#" class="">
            <div class="icon"><i class="icon-users"></i></div>
            <div class="text">Users</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="">
            <div class="icon"><i class="icon-settings"></i></div>
            <div class="text">Settings</div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
