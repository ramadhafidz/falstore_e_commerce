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
            <div class="icon"><i class="icon-home"></i></div>
            <div class="text">Dashboard</div>
          </a>
        </li>
      </ul>
    </div>
    <div class="center-item">
      <div class="center-heading">Catalog</div>
      <ul class="menu-list">
        <li class="menu-item has-children {{ request()->routeIs('admin.products*') || request()->routeIs('admin.product*') ? 'active' : '' }}">
          <a href="javascript:void(0);" class="menu-item-button">
            <div class="icon"><i class="icon-shopping-cart"></i></div>
            <div class="text">Products</div>
          </a>
          <ul class="sub-menu">
            <li class="sub-menu-item">
              <a href="{{ route('admin.product.add') }}" class="{{ request()->routeIs('admin.product.add') ? 'active' : '' }}">
                <div class="text">Add Product</div>
              </a>
            </li>
            <li class="sub-menu-item">
              <a href="{{ route('admin.products') }}" class="{{ request()->routeIs('admin.products') ? 'active' : '' }}">
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
              <a href="{{ route('admin.brand.add') }}" class="{{ request()->routeIs('admin.brand.add') ? 'active' : '' }}">
                <div class="text">Add New Brand</div>
              </a>
            </li>
            <li class="sub-menu-item">
              <a href="{{ route('admin.brands') }}" class="{{ request()->routeIs('admin.brands') ? 'active' : '' }}">
                <div class="text">All Brands</div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-item has-children {{ request()->routeIs('admin.categories*') || request()->routeIs('admin.category*') ? 'active' : '' }}">
          <a href="javascript:void(0);" class="menu-item-button">
            <div class="icon"><i class="icon-layers"></i></div>
            <div class="text">Categories</div>
          </a>
          <ul class="sub-menu">
            <li class="sub-menu-item">
              <a href="{{ route('admin.category.add') }}" class="{{ request()->routeIs('admin.category.add') ? 'active' : '' }}">
                <div class="text">Add Category</div>
              </a>
            </li>
            <li class="sub-menu-item">
              <a href="{{ route('admin.categories') }}" class="{{ request()->routeIs('admin.categories') ? 'active' : '' }}">
                <div class="text">All Categories</div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="center-item">
      <div class="center-heading">System</div>
      <ul class="menu-list">
        <li class="menu-item {{ request()->routeIs('admin.users*') ? 'active' : '' }}">
          <a href="{{ route('admin.users') }}" class="">
            <div class="icon"><i class="icon-users"></i></div>
            <div class="text">Users</div>
          </a>
        </li>
        <li class="menu-item {{ request()->routeIs('admin.settings*') ? 'active' : '' }}">
          <a href="{{ route('admin.settings') }}" class="">
            <div class="icon"><i class="icon-settings"></i></div>
            <div class="text">Settings</div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
