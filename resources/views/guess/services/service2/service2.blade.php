@extends('guess.layout.app')

@section('content')

{{-- Untuk Layanan
1. Perizinan Khusus
2. Layanan Lainnya --}}

    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-4 animated slideInDown mb-4">Perizinan Khusus</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Perizinan Khusus</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Features Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-6 mb-5 text-center">PERIZINAN KHUSUS</h1>
            <p class="mb-4 text-center">
              Pendirian Perusahaan untuk membantu Anda menjelaskan bisnis dengan legalitas serta badan usaha yang bonafid
            </p>
            <center><a href="" class="btn btn-primary btn-rounded">Start Now</a></center>
          </div>
        </div>
      </div>
    </div>
    <!-- Features End -->

        <!-- Service Start -->
        <div class="container-xxl py-5">
          <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px">
              <h1 class="display-6 mb-5">
                Layanan Kami
              </h1>
            </div>
            <div class="row g-4 justify-content-center">
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded h-100 p-5">
                  <div class="d-flex align-items-center ms-n5 mb-4">
                    <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                      <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-10-light.png') }}" alt=""/>
                    </div>
                    <h4 class="mb-0">Pendirian PT</h4>
                  </div>
                  <p class="mb-4">
                    Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                    sit clita duo justo erat amet
                  </p>
                  
                  <div class="row g-3">
                    <p>
                      Mulai Dari
                      <br>
                      <b class="text-primary">IDR 3.900.000</b>
                    </p>
                  </div>
                  <a class="btn btn-light px-3" href="/detail-services2">Read More</a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded h-100 p-5">
                  <div class="d-flex align-items-center ms-n5 mb-4">
                    <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                      <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-10-light.png') }}" alt=""/>
                    </div>
                    <h4 class="mb-0">Life Insurance</h4>
                  </div>
                  <p class="mb-4">
                    Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                    sit clita duo justo erat amet
                  </p>
                  
                  <div class="row g-3">
                    <p>
                      Mulai Dari
                      <br>
                      <b class="text-primary">IDR 3.900.000</b>
                    </p>
                  </div>
                  <a class="btn btn-light px-3" href="/detail-services2">Read More</a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded h-100 p-5">
                  <div class="d-flex align-items-center ms-n5 mb-4">
                    <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                      <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-10-light.png') }}" alt=""/>
                    </div>
                    <h4 class="mb-0">Life Insurance</h4>
                  </div>
                  <p class="mb-4">
                    Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                    sit clita duo justo erat amet
                  </p>
                  
                  <div class="row g-3">
                    <p>
                      Mulai Dari
                      <br>
                      <b class="text-primary">IDR 3.900.000</b>
                    </p>
                  </div>
                  <a class="btn btn-light px-3" href="/detail-services2">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Service End -->

        <section>

            <div class="section-title">
      
              <h2 class="mb-5 text-center">PERIZINAN KHUSUS/SEKTORAL</h2>
      
              <h6 class="text-center MB-3">IZIN KHUSUS DIPERLUKAN UNTUK MENJALANKAN BIDANG USAHA TERTENTU</h6>
      
            </div>
      
            <div class="container">
      
              <div class="row justify-content-center">
      
                <div class="col-md-10">
      
                  <table class="table table-striped">
      
                    <tbody>
      
                      <tr>
      
                        <td><b>Izin TDPSE (Tanda Daftar Penyelenggaraan Sistem Elektronik) </b></td>
      
                        <!-- <td>IDR 2.000.000 </td> -->
      
                        <td class="text-dark"><a href="/detail-service2" class="btn btn-primary">Lihat Selengkapnya</a></td>
      
                      </tr>
      
                      <tr>
      
                        <td><b>Izin Operasional</b></td>
      
                        <!-- <td>IDR 2,500,000 </td> -->
      
                        <td class="text-dark"><a href="/detail-service2" class="btn btn-primary">Lihat Selengkapnya</a></td>
      
                      </tr>
      
                    </tbody>
      
                  </table>
      
                </div>
      
              </div>
      
            </div>
      
          </section>


@endsection