@extends('layouts.admin')
@section('title', 'Falstore')
@section('content')

  <body class="body">
    <div id="wrapper">
      <div id="page" class="">
        <div class="layout-wrap">

          @include('components.admin.loading')
          @include('components.admin.sidemenu')

          <div class="section-content-right">

            @include('components.admin.header')

            <div class="main-content">

              @include('components.admin.footer')
            </div>
          </div>
        </div>
      </div>
    </div>


  </body>
