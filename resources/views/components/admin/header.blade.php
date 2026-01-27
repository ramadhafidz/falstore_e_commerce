<div class="header-dashboard">
  <div class="wrap">
    <div class="header-left">
      <a href="{{ route('admin.dashboard') }}">
        <img class="" id="logo_header_mobile" alt="Falstore" src="{{ asset('images/logo.png') }}"
          style="width: 100px; height: auto;">
      </a>
      <div class="button-show-hide">
        <i class="icon-menu-left"></i>
      </div>
    </div>

    <div class="header-grid">
      <!-- Notifications -->
      <div class="popup-wrap message type-header">
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2"
            data-bs-toggle="dropdown" aria-expanded="false">
            <span class="header-item">
              <span class="text-tiny">0</span>
              <i class="icon-bell"></i>
            </span>
          </button>
          <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton2">
            <li>
              <h6>Notifications</h6>
            </li>
            <li class="text-center py-3">
              <span class="text-muted">No new notifications</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- User Menu -->
      <div class="popup-wrap user type-header">
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3"
            data-bs-toggle="dropdown" aria-expanded="false">
            <span class="header-user wg-user">
              <span class="image">
                <img src="{{ asset('images/admin/avatar/user-1.png') }}" alt="">
              </span>
              <span class="flex flex-column">
                <span class="body-title mb-2">{{ Auth::user()->name ?? 'Admin' }}</span>
                <span class="text-tiny">Administrator</span>
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
              <a href="{{ route('home') }}" class="user-item">
                <div class="icon">
                  <i class="icon-home"></i>
                </div>
                <div class="body-title-2">View Site</div>
              </a>
            </li>
            <li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="user-item" style="border: none; background: none; width: 100%; text-align: left; cursor: pointer;">
                  <div class="icon">
                    <i class="icon-log-out"></i>
                  </div>
                  <div class="body-title-2">Log out</div>
                </button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
