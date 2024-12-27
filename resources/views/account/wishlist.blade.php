@extends('layouts.app')
@section('title', 'Falstore | Wishlist')
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
      <h2 class="page-title">Wishlist</h2>
      <div class="row">
        <div class="col-lg-3">
          <ul class="account-nav">
            <li><a href="{{ route('account') }}" class="menu-link menu-link_us-s">Dashboard</a></li>
            <li><a href="{{ route('order') }}" class="menu-link menu-link_us-s">Orders</a></li>
            <li><a href="{{ route('address') }}" class="menu-link menu-link_us-s">Addresses</a></li>
            <li><a href="{{ route('change') }}" class="menu-link menu-link_us-s">Account Details</a></li>
            <li><a href="{{ route('awish') }}" class="menu-link menu-link_us-s menu-link_active">Wishlist</a></li>
            <li><a href="login.html" class="menu-link menu-link_us-s">Logout</a></li>
          </ul>
        </div>
        <div class="col-lg-9">
          <div class="page-content my-account__wishlist">
            <div class="products-grid row row-cols-2 row-cols-lg-3" id="products-grid">
              <div class="product-card-wrapper">
                <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                  <div class="pc__img-wrapper">
                    <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img loading="lazy" src="{{ asset('images/product/product_5.jpg') }}" width="330" height="400"
                            alt="Cropped Faux leather Jacket" class="pc__img">
                        </div>
                        <div class="swiper-slide">
                          <img loading="lazy" src="{{ asset('images/product/product_5-1.jpg') }}" width="330" height="400"
                            alt="Cropped Faux leather Jacket" class="pc__img">
                        </div>
                      </div>
                      <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_prev_sm" />
                        </svg></span>
                      <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_next_sm" />
                        </svg></span>
                    </div>
                    <button class="btn-remove-from-wishlist">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_close" />
                      </svg>
                    </button>
                  </div>

                  <div class="pc__info position-relative">
                    <p class="pc__category">Dresses</p>
                    <h6 class="pc__title">Colorful Jacket</h6>
                    <div class="product-card__price d-flex">
                      <span class="money price">$29</span>
                    </div>

                    <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                      <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_heart" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>

              <div class="product-card-wrapper">
                <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                  <div class="pc__img-wrapper">
                    <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img loading="lazy" src="{{ asset('images/product/product_6.jpg') }}" width="330" height="400"
                            alt="Cropped Faux leather Jacket" class="pc__img">
                        </div>
                        <div class="swiper-slide">
                          <img loading="lazy" src="{{ asset('images/product/product_6-1.jpg') }}" width="330" height="400"
                            alt="Cropped Faux leather Jacket" class="pc__img">
                        </div>
                      </div>
                      <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_prev_sm" />
                        </svg></span>
                      <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_next_sm" />
                        </svg></span>
                    </div>
                    <button class="btn-remove-from-wishlist">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_close" />
                      </svg>
                    </button>
                  </div>

                  <div class="pc__info position-relative">
                    <p class="pc__category">Dresses</p>
                    <h6 class="pc__title">Shirt In Botanical Cheetah Print</h6>
                    <div class="product-card__price d-flex">
                      <span class="money price">$62</span>
                    </div>

                    <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                      <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_heart" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>

              <div class="product-card-wrapper">
                <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                  <div class="pc__img-wrapper">
                    <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img loading="lazy" src="{{ asset('images/product/product_7.jpg') }}" width="330" height="400"
                            alt="Cropped Faux leather Jacket" class="pc__img">
                        </div>
                        <div class="swiper-slide">
                          <img loading="lazy" src="{{ asset('images/product/product_7-1.jpg') }}" width="330" height="400"
                            alt="Cropped Faux leather Jacket" class="pc__img">
                        </div>
                      </div>
                      <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_prev_sm" />
                        </svg></span>
                      <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_next_sm" />
                        </svg></span>
                    </div>
                    <button class="btn-remove-from-wishlist">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_close" />
                      </svg>
                    </button>
                  </div>

                  <div class="pc__info position-relative">
                    <p class="pc__category">Dresses</p>
                    <h6 class="pc__title">Cotton Jersey T-Shirt</h6>
                    <div class="product-card__price d-flex">
                      <span class="money price">$17</span>
                    </div>

                    <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                      <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_heart" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>

              <div class="product-card-wrapper">
                <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                  <div class="pc__img-wrapper">
                    <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img loading="lazy" src="{{ asset('images/product/product_8.jpg') }}" width="330" height="400"
                            alt="Cropped Faux leather Jacket" class="pc__img">
                        </div>
                        <div class="swiper-slide">
                          <img loading="lazy" src="{{ asset('images/product/product_8-1.jpg') }}" width="330" height="400"
                            alt="Cropped Faux leather Jacket" class="pc__img">
                        </div>
                      </div>
                      <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_prev_sm" />
                        </svg></span>
                      <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_next_sm" />
                        </svg></span>
                    </div>
                    <button class="btn-remove-from-wishlist">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_close" />
                      </svg>
                    </button>
                  </div>

                  <div class="pc__info position-relative">
                    <p class="pc__category">Dresses</p>
                    <h6 class="pc__title">Zessi Dresses</h6>
                    <div class="product-card__price d-flex">
                      <span class="money price price-old">$129</span>
                      <span class="money price price-sale">$99</span>
                    </div>

                    <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                      <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_heart" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>

              <div class="product-card-wrapper">
                <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                  <div class="pc__img-wrapper">
                    <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img loading="lazy" src="{{ asset('images/product/product_9.jpg') }}" width="330" height="400"
                            alt="Cropped Faux leather Jacket" class="pc__img">
                        </div>
                        <div class="swiper-slide">
                          <img loading="lazy" src="{{ asset('images/product/product_9-1.jpg') }}" width="330" height="400"
                            alt="Cropped Faux leather Jacket" class="pc__img">
                        </div>
                      </div>
                      <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_prev_sm" />
                        </svg></span>
                      <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_next_sm" />
                        </svg></span>
                    </div>
                    <button class="btn-remove-from-wishlist">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_close" />
                      </svg>
                    </button>
                  </div>

                  <div class="pc__info position-relative">
                    <p class="pc__category">Dresses</p>
                    <h6 class="pc__title">Cropped Faux Leather Jacket</h6>
                    <div class="product-card__price d-flex">
                      <span class="money price">$29</span>
                    </div>

                    <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                      <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_heart" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>

              <div class="product-card-wrapper">
                <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                  <div class="pc__img-wrapper">
                    <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img loading="lazy" src="{{ asset('images/product/product_10.jpg') }}" width="330" height="400"
                            alt="Cropped Faux leather Jacket" class="pc__img">
                        </div>
                        <div class="swiper-slide">
                          <img loading="lazy" src="{{ asset('images/product/product_10-1.jpg') }}" width="330" height="400"
                            alt="Cropped Faux leather Jacket" class="pc__img">
                        </div>
                      </div>
                      <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_prev_sm" />
                        </svg></span>
                      <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_next_sm" />
                        </svg></span>
                    </div>
                    <button class="btn-remove-from-wishlist">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_close" />
                      </svg>
                    </button>
                  </div>

                  <div class="pc__info position-relative">
                    <p class="pc__category">Dresses</p>
                    <h6 class="pc__title">Calvin Shorts</h6>
                    <div class="product-card__price d-flex">
                      <span class="money price">$62</span>
                    </div>

                    <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                      <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_heart" />
                      </svg>
                    </button>
                  </div>
                </div>
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
