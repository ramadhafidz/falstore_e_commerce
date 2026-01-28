@extends('layouts.admin')
@section('title', 'Settings - Falstore Admin')
@section('content')

<div id="wrapper">
  <div id="page" class="">
    <div class="layout-wrap">

      @include('components.admin.sidemenu')

      <div class="section-content-right">
        @include('components.admin.header')

        <div class="main-content">
          <div class="main-content-inner">
            <div class="main-content-wrap">
              <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Settings</h3>
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
                    <div class="text-tiny">Settings</div>
                  </li>
                </ul>
              </div>

              <div class="wg-box">
                <h5 class="mb-4">General Settings</h5>
                
                <form class="form-style-1">
                  <fieldset class="name">
                    <div class="body-title">Site Name</div>
                    <input class="flex-grow" type="text" placeholder="Enter site name" name="site_name" value="Falstore">
                  </fieldset>

                  <fieldset class="name">
                    <div class="body-title">Site Email</div>
                    <input class="flex-grow" type="email" placeholder="Enter site email" name="site_email" value="admin@falstore.com">
                  </fieldset>

                  <fieldset class="name">
                    <div class="body-title">Site Phone</div>
                    <input class="flex-grow" type="text" placeholder="Enter phone number" name="site_phone" value="+62 812 3456 7890">
                  </fieldset>

                  <fieldset class="name">
                    <div class="body-title">Site Address</div>
                    <textarea class="flex-grow" placeholder="Enter address" name="site_address" rows="3">Jakarta, Indonesia</textarea>
                  </fieldset>

                  <div class="bot">
                    <button class="tf-button w208" type="submit">Save Settings</button>
                  </div>
                </form>
              </div>

              <div class="wg-box mt-4">
                <h5 class="mb-4">Social Media</h5>
                
                <form class="form-style-1">
                  <fieldset class="name">
                    <div class="body-title">Facebook URL</div>
                    <input class="flex-grow" type="url" placeholder="https://facebook.com/..." name="facebook_url">
                  </fieldset>

                  <fieldset class="name">
                    <div class="body-title">Instagram URL</div>
                    <input class="flex-grow" type="url" placeholder="https://instagram.com/..." name="instagram_url">
                  </fieldset>

                  <fieldset class="name">
                    <div class="body-title">Twitter URL</div>
                    <input class="flex-grow" type="url" placeholder="https://twitter.com/..." name="twitter_url">
                  </fieldset>

                  <div class="bot">
                    <button class="tf-button w208" type="submit">Save Social Media</button>
                  </div>
                </form>
              </div>

            </div>
          </div>

          <div class="bottom-page">
            <div class="body-text">Copyright © {{ date('Y') }} Falstore. All rights reserved.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
