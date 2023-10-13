@extends('guess.layout.app')

@section('content')

{{-- Untuk Layanan
1. Pendirian Perusahaan
2. Pembuatan dan Perubahan DOkumen Perusahaan
3. Perizinan Usaha
4. Izin HAKI
5. Perizinan Usaha --}}

    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-4 animated slideInDown mb-4">Lokasi Virtual Office</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lokasi Virtual Office</li>
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
            <h1 class="display-6 mb-5 text-center">Lokasi Virtual Office</h1>
            {{-- <center><a href="" class="btn btn-primary btn-rounded">Start Now</a></center> --}}
          </div>
        </div>
      </div>
    </div>
    <!-- Features End -->

    <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
              <h2 class="display-6 mb-5">Jakarta Selatan</h2>
              <div class="row g-3">
                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                  {{-- <div class="bg-light rounded h-100 p-3"> --}}
                    {{-- <div class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"> --}}
                      <div class="row g-3">
                        <div class="col-sm-2">
                          <img
                            class="align-self-center mb-3"
                            src="{{ asset('frontend/img/icon/icon-06-primary.png') }}"
                            alt=""
                            style="max-weight: 200px; max-height: 100px;"/>
                        </div>
                        <div class="col-sm-10">
                          <h5 class="text-md-start">OFFICE 8</h5>
                          <p class="text-md-start">Level 18-A, Jl. Jend.Sudirman Kav. 52-53 Sudirman Central Business District (SCBD), Kebayoran Baru, Jakarta Selatan</p>
                        </div>
                      {{-- </div> --}}
                    {{-- </div> --}}
                  </div>
                </div>
                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                  {{-- <div class="bg-light rounded h-100 p-3"> --}}
                    {{-- <div class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"> --}}
                      <div class="row g-3">
                        <div class="col-sm-2">
                          <img
                            class="align-self-center mb-3"
                            src="{{ asset('frontend/img/icon/icon-06-primary.png') }}"
                            alt=""
                            style="max-weight: 200px; max-height: 100px;"/>
                        </div>
                        <div class="col-sm-10">
                          <h5 class="text-md-start">OFFICE 8</h5>
                          <p class="text-md-start">Level 18-A, Jl. Jend.Sudirman Kav. 52-53 Sudirman Central Business District (SCBD), Kebayoran Baru, Jakarta Selatan</p>
                        </div>
                      {{-- </div> --}}
                    {{-- </div> --}}
                  </div>
                </div>
                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                  {{-- <div class="bg-light rounded h-100 p-3"> --}}
                    {{-- <div class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"> --}}
                      <div class="row g-3">
                        <div class="col-sm-2">
                          <img
                            class="align-self-center mb-3"
                            src="{{ asset('frontend/img/icon/icon-06-primary.png') }}"
                            alt=""
                            style="max-weight: 200px; max-height: 100px;"/>
                        </div>
                        <div class="col-sm-10">
                          <h5 class="text-md-start">OFFICE 8</h5>
                          <p class="text-md-start">Level 18-A, Jl. Jend.Sudirman Kav. 52-53 Sudirman Central Business District (SCBD), Kebayoran Baru, Jakarta Selatan</p>
                        </div>
                      {{-- </div> --}}
                    {{-- </div> --}}
                  </div>
                </div>
                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                  {{-- <div class="bg-light rounded h-100 p-3"> --}}
                    {{-- <div class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"> --}}
                      <div class="row g-3">
                        <div class="col-sm-2">
                          <img
                            class="align-self-center mb-3"
                            src="{{ asset('frontend/img/icon/icon-06-primary.png') }}"
                            alt=""
                            style="max-weight: 200px; max-height: 100px;"/>
                        </div>
                        <div class="col-sm-10">
                          <h5 class="text-md-start">OFFICE 8</h5>
                          <p class="text-md-start">Level 18-A, Jl. Jend.Sudirman Kav. 52-53 Sudirman Central Business District (SCBD), Kebayoran Baru, Jakarta Selatan</p>
                        </div>
                      {{-- </div> --}}
                    {{-- </div> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

        <!-- Service Start -->
        {{-- <div class="container-xxl py-5">
          <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px">
              <h1 class="display-6 mb-5">
                Jakarta Selatan
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
                  <a class="btn btn-light px-3" href="/detail-service1">Read More</a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded h-100 p-5">
                  <div class="d-flex align-items-center ms-n5 mb-4">
                    <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                      <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-10-light.png') }}" alt=""/>
                    </div>
                    <h4 class="mb-0">Pendirian CV</h4>
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
                  <a class="btn btn-light px-3" href="/detail-service1">Read More</a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded h-100 p-5">
                  <div class="d-flex align-items-center ms-n5 mb-4">
                    <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                      <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-10-light.png') }}" alt=""/>
                    </div>
                    <h4 class="mb-0">Pendirian Firma</h4>
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
                  <a class="btn btn-light px-3" href="/detail-service1">Read More</a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded h-100 p-5">
                  <div class="d-flex align-items-center ms-n5 mb-4">
                    <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                      <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-10-light.png') }}" alt=""/>
                    </div>
                    <h4 class="mb-0">Pendirian PMA</h4>
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
                  <a class="btn btn-light px-3" href="/detail-service1">Read More</a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded h-100 p-5">
                  <div class="d-flex align-items-center ms-n5 mb-4">
                    <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                      <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-10-light.png') }}" alt=""/>
                    </div>
                    <h4 class="mb-0">Pendirian Yayasan</h4>
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
                  <a class="btn btn-light px-3" href="/detail-service1">Read More</a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded h-100 p-5">
                  <div class="d-flex align-items-center ms-n5 mb-4">
                    <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                      <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-10-light.png') }}" alt=""/>
                    </div>
                    <h4 class="mb-0">Pendirian Koperasi</h4>
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
                  <a class="btn btn-light px-3" href="/detail-service1">Read More</a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded h-100 p-5">
                  <div class="d-flex align-items-center ms-n5 mb-4">
                    <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                      <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-10-light.png') }}" alt=""/>
                    </div>
                    <h4 class="mb-0">Persekutuan Perdata</h4>
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
                  <a class="btn btn-light px-3" href="/detail-service1">Read More</a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded h-100 p-5">
                  <div class="d-flex align-items-center ms-n5 mb-4">
                    <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                      <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-10-light.png') }}" alt=""/>
                    </div>
                    <h4 class="mb-0">Pendirian Perkumpulan</h4>
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
                  <a class="btn btn-light px-3" href="/detail-service1">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
        <!-- Service End -->


@endsection