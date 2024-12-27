@extends('layouts.app')
@section('title', 'Falstore | Wishlist')
@section('content')
  @include('components.header')
  @include('components.svgicons')

  @push('styles')
    <link rel="stylesheet" href="{{ asset('css/addons.css') }}">
  @endpush

  <div class="header-mobile header_sticky">
    <div class="container d-flex align-items-center h-100">
      <a class="mobile-nav-activator d-block position-relative" href="#">
        <svg class="nav-icon" width="25" height="18" viewBox="0 0 25 18" xmlns="http://www.w3.org/2000/svg">
          <use href="#icon_nav" />
        </svg>
        <button class="btn-close-lg position-absolute top-0 start-0 w-100"></button>
      </a>

      <div class="logo">
        <a href="index.html">
          <img src="{{ asset('images/logo.png') }}" alt="Uomo" class="logo__image d-block" />
        </a>
      </div>

      <a href="#" class="header-tools__item header-tools__cart js-open-aside" data-aside="cartDrawer">
        <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <use href="#icon_cart" />
        </svg>
        <span class="cart-amount d-block position-absolute js-cart-items-count">3</span>
      </a>
    </div>

    <nav class="header-mobile__navigation navigation d-flex flex-column w-100 position-absolute top-100 bg-body overflow-auto">
      <div class="container">
        <form action="#" method="GET" class="search-field position-relative mt-4 mb-3">
          <div class="position-relative">
            <input class="search-field__input w-100 border rounded-1" type="text" name="search-keyword" placeholder="Search products" />
            <button class="btn-icon search-popup__submit pb-0 me-2" type="submit">
              <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_search" />
              </svg>
            </button>
            <button class="btn-icon btn-close-lg search-popup__reset pb-0 me-2" type="reset"></button>
          </div>

          <div class="position-absolute start-0 top-100 m-0 w-100">
            <div class="search-result"></div>
          </div>
        </form>
      </div>

      <div class="container">
        <div class="overflow-hidden">
          <ul class="navigation__list list-unstyled position-relative">
            <li class="navigation__item">
              <a href="index.html" class="navigation__link">Home</a>
            </li>
            <li class="navigation__item">
              <a href="shop.html" class="navigation__link">Shop</a>
            </li>
            <li class="navigation__item">
              <a href="cart.html" class="navigation__link">Cart</a>
            </li>
            <li class="navigation__item">
              <a href="about.html" class="navigation__link">About</a>
            </li>
            <li class="navigation__item">
              <a href="contact.html" class="navigation__link">Contact</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="border-top mt-auto pb-2">
        <div class="customer-links container mt-4 mb-2 pb-1">
          <svg class="d-inline-block align-middle" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <use href="#icon_user" />
          </svg>
          <span class="d-inline-block ms-2 text-uppercase align-middle fw-medium">My Account</span>
        </div>



        <ul class="container social-links list-unstyled d-flex flex-wrap mb-0">
          <li>
            <a href="#" class="footer__social-link d-block ps-0">
              <svg class="svg-icon svg-icon_facebook" width="9" height="15" viewBox="0 0 9 15" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_facebook" />
              </svg>
            </a>
          </li>
          <li>
            <a href="#" class="footer__social-link d-block">
              <svg class="svg-icon svg-icon_twitter" width="14" height="13" viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_twitter" />
              </svg>
            </a>
          </li>
          <li>
            <a href="#" class="footer__social-link d-block">
              <svg class="svg-icon svg-icon_instagram" width="14" height="13" viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_instagram" />
              </svg>
            </a>
          </li>
          <li>
            <a href="#" class="footer__social-link d-block">
              <svg class="svg-icon svg-icon_youtube" width="16" height="11" viewBox="0 0 16 11" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M15.0117 1.8584C14.8477 1.20215 14.3281 0.682617 13.6992 0.518555C12.5234 0.19043 7.875 0.19043 7.875 0.19043C7.875 0.19043 3.19922 0.19043 2.02344 0.518555C1.39453 0.682617 0.875 1.20215 0.710938 1.8584C0.382812 3.00684 0.382812 5.46777 0.382812 5.46777C0.382812 5.46777 0.382812 7.90137 0.710938 9.07715C0.875 9.7334 1.39453 10.2256 2.02344 10.3896C3.19922 10.6904 7.875 10.6904 7.875 10.6904C7.875 10.6904 12.5234 10.6904 13.6992 10.3896C14.3281 10.2256 14.8477 9.7334 15.0117 9.07715C15.3398 7.90137 15.3398 5.46777 15.3398 5.46777C15.3398 5.46777 15.3398 3.00684 15.0117 1.8584ZM6.34375 7.68262V3.25293L10.2266 5.46777L6.34375 7.68262Z" />
              </svg>
            </a>
          </li>
          <li>
            <a href="#" class="footer__social-link d-block">
              <svg class="svg-icon svg-icon_pinterest" width="14" height="15" viewBox="0 0 14 15" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_pinterest" />
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="shop-checkout container">
      <h2 class="page-title">Wishlist</h2>
      <div class="checkout-steps">
        <a href="shop_cart.html" class="checkout-steps__item active">
          <span class="checkout-steps__item-number">01</span>
          <span class="checkout-steps__item-title">
            <span>Shopping Bag</span>
            <em>Manage Your Items List</em>
          </span>
        </a>
        <a href="shop_checkout.html" class="checkout-steps__item">
          <span class="checkout-steps__item-number">02</span>
          <span class="checkout-steps__item-title">
            <span>Shipping and Checkout</span>
            <em>Checkout Your Items List</em>
          </span>
        </a>
        <a href="shop_order_complete.html" class="checkout-steps__item">
          <span class="checkout-steps__item-number">03</span>
          <span class="checkout-steps__item-title">
            <span>Confirmation</span>
            <em>Review And Submit Your Order</em>
          </span>
        </a>
      </div>
      <div class="shopping-cart">
        <div class="cart-table__wrapper">
          <table class="cart-table">
            <thead>
              <tr>
                <th>Product</th>
                <th></th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="shopping-cart__product-item">
                    <img loading="lazy" src="../images/cart-item-1.html" width="120" height="120" alt="" />
                  </div>
                </td>
                <td>
                  <div class="shopping-cart__product-item__detail">
                    <h4>Zessi Dresses</h4>
                    <ul class="shopping-cart__product-item__options">
                      <li>Color: Yellow</li>
                      <li>Size: L</li>
                    </ul>
                  </div>
                </td>
                <td>
                  <span class="shopping-cart__product-price">$99</span>
                </td>
                <td>
                  <div class="qty-control position-relative">
                    <input type="number" name="quantity" value="3" min="1" class="qty-control__number text-center">
                    <div class="qty-control__reduce">-</div>
                    <div class="qty-control__increase">+</div>
                  </div><!-- .qty-control -->
                </td>
                <td>
                  <span class="shopping-cart__subtotal">$297</span>
                </td>
                <td>
                  <a href="#" class="remove-cart">
                    <svg width="10" height="10" viewBox="0 0 10 10" fill="#767676" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.259435 8.85506L9.11449 0L10 0.885506L1.14494 9.74056L0.259435 8.85506Z" />
                      <path d="M0.885506 0.0889838L9.74057 8.94404L8.85506 9.82955L0 0.97449L0.885506 0.0889838Z" />
                    </svg>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="shopping-cart__product-item">
                    <img loading="lazy" src="../images/cart-item-2.html" width="120" height="120" alt="" />
                  </div>
                </td>
                <td>
                  <div class="shopping-cart__product-item__detail">
                    <h4>Kirby T-Shirt</h4>
                    <ul class="shopping-cart__product-item__options">
                      <li>Color: Yellow</li>
                      <li>Size: L</li>
                    </ul>
                  </div>
                </td>
                <td>
                  <span class="shopping-cart__product-price">$99</span>
                </td>
                <td>
                  <div class="qty-control position-relative">
                    <input type="number" name="quantity" value="3" min="1" class="qty-control__number text-center">
                    <div class="qty-control__reduce">-</div>
                    <div class="qty-control__increase">+</div>
                  </div><!-- .qty-control -->
                </td>
                <td>
                  <span class="shopping-cart__subtotal">$297</span>
                </td>
                <td>
                  <a href="#" class="remove-cart">
                    <svg width="10" height="10" viewBox="0 0 10 10" fill="#767676" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.259435 8.85506L9.11449 0L10 0.885506L1.14494 9.74056L0.259435 8.85506Z" />
                      <path d="M0.885506 0.0889838L9.74057 8.94404L8.85506 9.82955L0 0.97449L0.885506 0.0889838Z" />
                    </svg>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="shopping-cart__product-item">
                    <img loading="lazy" src="../images/cart-item-3.html" width="120" height="120" alt="" />
                  </div>
                </td>
                <td>
                  <div class="shopping-cart__product-item__detail">
                    <h4>Cobleknit Shawl</h4>
                    <ul class="shopping-cart__product-item__options">
                      <li>Color: Yellow</li>
                      <li>Size: L</li>
                    </ul>
                  </div>
                </td>
                <td>
                  <span class="shopping-cart__product-price">$99</span>
                </td>
                <td>
                  <div class="qty-control position-relative">
                    <input type="number" name="quantity" value="3" min="1" class="qty-control__number text-center">
                    <div class="qty-control__reduce">-</div>
                    <div class="qty-control__increase">+</div>
                  </div><!-- .qty-control -->
                </td>
                <td>
                  <span class="shopping-cart__subtotal">$297</span>
                </td>
                <td>
                  <a href="#" class="remove-cart">
                    <svg width="10" height="10" viewBox="0 0 10 10" fill="#767676" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.259435 8.85506L9.11449 0L10 0.885506L1.14494 9.74056L0.259435 8.85506Z" />
                      <path d="M0.885506 0.0889838L9.74057 8.94404L8.85506 9.82955L0 0.97449L0.885506 0.0889838Z" />
                    </svg>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="cart-table-footer">
            <form action="#" class="position-relative bg-body">
              <input class="form-control" type="text" name="coupon_code" placeholder="Coupon Code">
              <input class="btn-link fw-medium position-absolute top-0 end-0 h-100 px-4" type="submit" value="APPLY COUPON">
            </form>
            <button class="btn btn-light">UPDATE CART</button>
          </div>
        </div>
        <div class="shopping-cart__totals-wrapper">
          <div class="sticky-content">
            <div class="shopping-cart__totals">
              <h3>Cart Totals</h3>
              <table class="cart-totals">
                <tbody>
                  <tr>
                    <th>Subtotal</th>
                    <td>$1300</td>
                  </tr>
                  <tr>
                    <th>Shipping</th>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input form-check-input_fill" type="checkbox" value="" id="free_shipping">
                        <label class="form-check-label" for="free_shipping">Free shipping</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input form-check-input_fill" type="checkbox" value="" id="flat_rate">
                        <label class="form-check-label" for="flat_rate">Flat rate: $49</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input form-check-input_fill" type="checkbox" value="" id="local_pickup">
                        <label class="form-check-label" for="local_pickup">Local pickup: $8</label>
                      </div>
                      <div>Shipping to AL.</div>
                      <div>
                        <a href="#" class="menu-link menu-link_us-s">CHANGE ADDRESS</a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>VAT</th>
                    <td>$19</td>
                  </tr>
                  <tr>
                    <th>Total</th>
                    <td>$1319</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="mobile_fixed-btn_wrapper">
              <div class="button-wrapper container">
                <button class="btn btn-primary btn-checkout">PROCEED TO CHECKOUT</button>
              </div>
            </div>
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
