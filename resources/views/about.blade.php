@extends('layouts.app')

@section('title', 'Falstore | About')

@section('content')
  @include('components.header')
  @include('components.svgicons')

  @push('styles')
    <link rel="stylesheet" href="{{ asset('css/addons.css') }}">
  @endpush

  <main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="contact-us container">
      <div class="mw-930">
        <h2 class="page-title">About US</h2>
      </div>

      <div class="about-us__content pb-5 mb-5">
        <p class="mb-5">
          <img loading="lazy" class="w-100 h-auto d-block" src="{{ asset('images/about/about-1.jpg') }}" width="1410" height="550" alt="" />
        </p>
        <div class="mw-930">
          <h3 class="mb-4">OUR STORY</h3>
          <p class="fs-6 fw-medium mb-4">Retail kami tercipta dari 5 orang teman yang memiliki visi bersama untuk 
            menciptakan sebuah usaha yang memberikan dampak positif. Dari ide sederhana, kami mendirikan toko ini
            dengan tujuan menyediakan pakaian berkualitas tinggi dan elegan, yang dapat diakses oleh semua orang.
            Kami percaya bahwa pakaian bukan hanya sekadar kebutuhan, tetapi juga merupakan cerminan dari karakter
            dan gaya hidup seseorang.</p>
          <p class="mb-4">Dengan produk kami, kami yakin dapat bersaing dengan Retail maupun E-Commerce lainnya dalam
            segi kualitas, keunikan desain, dan kepuasan pelanggan. Kami menawarkan pakaian yang tidak hanya memenuhi
            standar kualitas tinggi tetapi juga memiliki nilai estetika. Dengan fokus pada kebutuhan pelanggan dan inovasi,
            kami percaya bahwa toko kami dapat menjadi pilihan utama bagi mereka yang menginginkan pakaian berkualitas dengan
            harga yang kompetitif.</p>
          <div class="row mb-3">
            <div class="col-md-6">
              <h5 class="mb-3">Our Mission</h5>
              <p class="mb-3">Misi kami adalah menyediakan pakaian berkualitas terbaik dengan desain elegan dari brand-brand
                kelas menengah ke atas. Kami ingin memastikan pelanggan mendapatkan pengalaman berbelanja yang menyenangkan
                dengan produk yang mencerminkan nilai estetika dan kualitas.</p>
            </div>
            <div class="col-md-6">
              <h5 class="mb-3">Our Vision</h5>
              <p class="mb-3">Visi kami adalah menjadi toko pakaian yang diakui secara luas karena kualitas produk, desain yang
                beragam, dan layanan yang memuaskan. Kami bercita-cita menjadi pilihan utama bagi pelanggan yang mencari kombinasi
                sempurna antara kenyamanan, gaya, dan nilai.</p>
            </div>
          </div>
        </div>
        <div class="mw-930 d-lg-flex align-items-lg-center">
          <div class="image-wrapper col-lg-6">
            <img class="h-auto" loading="lazy" src="{{ asset('images/about/about-1.jpg') }}" width="450" height="500" alt="">
          </div>
          <div class="content-wrapper col-lg-6 px-lg-4">
            <h5 class="mb-3">The Company</h5>
            <p>Toko kami berdiri dengan semangat kolaborasi dan komitmen dari lima teman yang berbagi mimpi yang sama. Dengan
              fokus pada pakaian berkualitas tinggi, kami menghadirkan berbagai pilihan dari brand-brand terpercaya untuk memenuhi
              kebutuhan gaya hidup modern. Kami terus tumbuh bersama pelanggan dan berkomitmen untuk memberikan yang terbaik.</p>
          </div>
        </div>
      </div>
    </section>


  </main>
  <hr class="mt-5 text-secondary" />
  <div id="scrollTop" class="visually-hidden end-0"></div>
  <div class="page-overlay"></div>
@endsection
