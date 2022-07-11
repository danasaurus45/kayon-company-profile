@extends('layouts.app')

@section('title', 'Kayon | Product Details')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <h2>Product Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Products Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">
        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="{{ asset('storage/img/' . $produk->img_produk) }}" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Product information</h3>
            <ul>
              <li><strong>Calorie Value</strong>: {{ $produk->calorie }}</li>
              <li><strong>Total Moisture</strong>: {{ $produk->moisture }}</li>
              <li><strong>Ash Content</strong>: {{ $produk->ash_content }}</li>
              <li><strong>Fixed Carbon</strong>: {{ $produk->fixed_carbon }}</li>
              <li><strong>Burning Time</strong>: {{ $produk->burning_time }}</li>
              <li>{{ $produk->ash_type }}</li>
              <li><strong>Size</strong>: {{ $produk->size }}</li>
              <li><strong>Certificate</strong>: {{ $produk->certificate }}</li>
              <li><strong>Packaging</strong>: {{ $produk->packaging }}</li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>{{ $produk->nama_produk}}</h2>
          <p>{{ $produk->ket_produk }} <br>{{ $produk->level_produk }} </p>
        </div>

      </div>
    </section><!-- End Products Details Section -->

  </main><!-- End #main -->
@endsection