@extends('layouts.app')

@section('title', 'Falstore | Register')

@section('content')
  @include('components.header')
  @include('components.svgicons')

  @push('styles')
    <link rel="stylesheet" href="{{ asset('css/addons.css') }}">
  @endpush

  <main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="login-register container">
      <ul class="nav nav-tabs mb-5" id="login_register" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore active" id="register-tab" data-bs-toggle="tab" href="#tab-item-register" role="tab"
            aria-controls="tab-item-register" aria-selected="true">Register</a>
        </li>
      </ul>
      <div class="tab-content pt-2" id="login_register_tab_content">
        <div class="tab-pane fade show active" id="tab-item-register" role="tabpanel" aria-labelledby="register-tab">
          <div class="register-form">
            <form method="POST" action="{{ route('register') }}" name="register" class="needs-validation" novalidate="" autocomplete="on">
              @csrf
              <div class="form-floating mb-3">
                <input id="name" class="form-control form-control_gray @error('name') is-invalid @enderror" name="name"
                  value="{{ old('name') }}" required="" />
                <label for="name">Name</label>
                @error('name')
                  <span class="error-message">{{ $message }}</span>
                @enderror
              </div>

              {{-- <div class="form-floating mb-3">
                <input id="username" class="form-control form-control_gray @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required/>
                <label for="username">Username *</label>
                @error('username')
                  <span class="error-message">{{ $message }}</span>
                @enderror
              </div> --}}

              <div class="form-floating mb-3">
                <input id="email" type="email" class="form-control form-control_gray @error('email') is-invalid @enderror" name="email"
                  value="{{ old('email') }}" required="" />
                <label for="email">Email address *</label>
                @error('email')
                  <span class="error-message">{{ $message }}</span>
                @enderror
              </div>

              {{-- <div class="form-floating mb-3">
                <input id="phone_number" type="text" class="form-control form-control_gray" name="phone_number" value="{{ old('phone_number') }}" required/>
                <label for="phone_number">Phone Number *</label>
                @error('phone_number')
                  <span class="error-message">{{ $message }}</span>
                @enderror
              </div> --}}

              <div class="form-floating mb-3">
                <input id="password" type="password" class="form-control form-control_gray @error('password') is-invalid @enderror" name="password"
                  required="" autocomplete="new-password" />
                <label for="password">Password *</label>
                @error('password')
                  <span class="error-message">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-floating mb-3">
                <input id="password-confirm" type="password" class="form-control form-control_gray" name="password_confirmation" required=""
                  autocomplete="new-password" />
                <label for="password">Confirm Password *</label>
              </div>

              @if ($errors->any())
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              @endif

              <div class="d-flex align-items-center mb-3 pb-2">
                <p class="m-0">
                  Your personal data will be used to support your experience
                  throughout this website, to manage access to your account, and
                  for other purposes described in our privacy policy.
                </p>
              </div>

              <button class="btn btn-primary w-100 text-uppercase" type="submit">
                Register
              </button>

              <div class="customer-option mt-4 text-center">
                <span class="text-secondary">Have an account?</span>
                <a href="{{ route('login') }}" class="btn-text js-show-register">Login to your Account</a>
              </div>
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
