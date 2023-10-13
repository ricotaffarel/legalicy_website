@extends('guess.layout.app')

@section('content')

{{-- Untuk Detail Ijin Khusus --}}

    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-4 animated slideInDown mb-4">Detail Ijin Khusus</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Ijin Khusus</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div
              class="position-relative overflow-hidden rounded ps-5 pt-5 h-100"
              style="min-height: 400px"
            >
              <img
                class="position-absolute w-100 h-100"
                src="{{ asset('frontend/img/about.jpg') }}"
                alt=""
                style="object-fit: cover"
              />
              
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="h-100">
              <h1 class="display-6 mb-5">
                Surat Izin Operasional Selama PSBB
              </h1>
              <p class="fs-5 text-primary mb-4">
                Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed stet
                lorem sit clita duo justo erat amet
              </p>
              <p class="mb-4">
                Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                sed stet lorem sit clita duo justo magna dolore erat amet
              </p>
              
              
              <!-- <div class="border-top mt-4 pt-4">
                <div class="d-flex align-items-center">
                  <img
                    class="flex-shrink-0 rounded-circle me-3"
                    src="img/profile.jpg"
                    alt=""
                  />
                  <h5 class="mb-0">Call Us: +012 345 6789</h5>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
              <h1 class="display-6 mb-3 text-center">Pengurusan Surat Ijin</h1>
              <h4 class="mb-4 text-center">Kini dengan Harga</h4>
              <h5 class="text-center text-primary" style="text-decoration:line-through">IDR 3.500.000</h5>
              <h3 class="text-center text-primary mb-3">IDR 2.500.000,-</h3>
              <center><a href="" class="btn btn-primary btn-rounded">Hubungi Kami</a></center>
            </div>
          </div>
        </div>
      </div>
      <!-- Features End -->

    
@endsection