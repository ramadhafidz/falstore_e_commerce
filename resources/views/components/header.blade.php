<header id="header" class="header header-fullwidth header-transparent-bg">
  <div class="container">
    <div class="header-desk header-desk_type_1">
      <div class="logo">
        <a href="{{ route('home') }}">
          <img src="{{ asset('images/logo.png') }}" alt="Uomo" class="logo__image d-block" style="width: 100px; height: auto;" />
        </a>
      </div>

      <nav class="navigation">
        <ul class="navigation__list list-unstyled d-flex">
          <li class="navigation__item">
            <a href="{{ route('home') }}" class="navigation__link">Home</a>
          </li>
          <li class="navigation__item">
            <a href="{{ route('shop') }}" class="navigation__link">Shop</a>
          </li>
          <li class="navigation__item">
            <a href="{{ route('cart') }}" class="navigation__link">Cart</a>
          </li>
          <li class="navigation__item">
            <a href="{{ route('about') }}" class="navigation__link">About</a>
          </li>
          <li class="navigation__item">
            <a href="{{ route('contact') }}" class="navigation__link">Contact</a>
          </li>
        </ul>
      </nav>

      <div class="header-tools d-flex align-items-center">
        <div class="header-tools__item hover-container">
          <div class="js-hover__open position-relative">
            <a class="js-search-popup search-field__actor" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path
                  d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
              </svg>
              <i class="btn-icon btn-close-lg"></i>
            </a>
          </div>

          <div class="search-popup js-hidden-content">
            <form action="#" method="GET" class="search-field container">
              <p class="text-uppercase text-secondary fw-medium mb-4">What are you looking for?</p>
              <div class="position-relative">
                <input class="search-field__input search-popup__input w-100 fw-medium" type="text" name="search-keyword"
                  placeholder="Search products" />
                <button class="btn-icon search-popup__submit" type="submit">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path
                      d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                  </svg>
                </button>
                <button class="btn-icon btn-close-lg search-popup__reset" type="reset"></button>
              </div>

              <div class="search-popup__results">
                <div class="sub-menu search-suggestion">
                  <h6 class="sub-menu__title fs-base">Quicklinks</h6>
                  <ul class="sub-menu__list list-unstyled">
                    <li class="sub-menu__item"><a href="shop2.html" class="menu-link menu-link_us-s">New Arrivals</a>
                    </li>
                    <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Dresses</a></li>
                    <li class="sub-menu__item"><a href="shop3.html" class="menu-link menu-link_us-s">Accessories</a>
                    </li>
                    <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Footwear</a></li>
                    <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Sweatshirt</a></li>
                  </ul>
                </div>

                <div class="search-result row row-cols-5"></div>
              </div>
            </form>
          </div>
        </div>

        <div class="header-tools__item hover-container">
          @if (auth()->check())
            @if (auth()->user()->role == 'admin')
              <a href="{{ route('admin.dashboard') }}" class="header-tools__item">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-speedometer"
                  viewBox="0 0 16 16">
                  <path
                    d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2M3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.39.39 0 0 0-.029-.518z" />
                  <path fill-rule="evenodd"
                    d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.95 11.95 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0" />
                </svg>
              </a>
            @else
              <a href="{{ route('account') }}" class="header-tools__item">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                  <path
                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                </svg>
              </a>
            @endif
          @else
            <a href="{{ route('login') }}" class="header-tools__item">
              <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-person-add"
                viewBox="0 0 16 16">
                <path
                  d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                <path
                  d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
              </svg>
            </a>
          @endif
        </div>

        <a href="{{ route('wishlist') }}" class="header-tools__item">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
            <path
              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
          </svg>
        </a>

        <a href="{{ route('cart') }}" class="header-tools__item header-tools__cart">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0" />
            <path
              d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
          </svg>
          <span class="cart-amount d-block position-absolute js-cart-items-count">3</span>
        </a>

        @if (auth()->check())
          <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" style="background: transparent; border: none; cursor: pointer;">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-box-arrow-right"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd" fill="red"
                  d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                <path fill-rule="evenodd" fill="red"
                  d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
              </svg>
            </button>
          </form>
        @endif
      </div>
    </div>
  </div>
</header>
