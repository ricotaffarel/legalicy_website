@extends('guess.layout.app')

@section('content')

    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-4 animated slideInDown mb-4">Pendirian PT</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pendirian PT</li>
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
            <h1 class="display-6 mb-5 text-center">Detail Pendirian Perusahaan</h1>
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
                Paket A
              </h1>
            </div>
            <div class="row g-4 justify-content-center">
              <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded h-100 p-5">
                  <div class="d-flex align-items-center ms-n5 mb-4">
                    <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                      <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-10-light.png') }}" alt=""/>
                    </div>
                    <h4 class="mb-0">Pendirian PT</h4>
                  </div>
                  
                  <div class="row g-3">
                    <h3>
                      <br>
                      <b class="text-primary">IDR 3.900.000</b>
                    </h3>
                    <li>Pengecekan Nama Perusahaan</li>
                    <li>Pengecekan Nama Perusahaan</li>
                  </div> <b></b>
                  <a class="btn btn-light px-3 mt-3" href="#">Hubungi Kami</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Service End -->

        <div class="container">
            <div class="row">

                <div class="col-md-6">   
                    <div class="card shadow-lg border-0">
                        <div class="row">
                            <div class="col-md-12 d-flex align-items-center justify-content-center">
                                <center><img src="{{ asset('frontend/img/about.jpg') }}" class="img-fluid rounded-start mt-5" alt="..." width="200px"></center>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="card-body p-5">
                                <h4 class="card-title text-uppercase">PT Startup</h4>
                                    <h6 class="card-title  light">Untuk pendirian PT dengan modal dibawah 1 Miliar</h6>
                                    <span class="bold text-primary d-block mb-3"> <s>Rp. 8.000.000</s> </span>
                                    <h3><span class="bold text-primary d-block mb-3 normal-rate">Rp. 6.900.000</span></h3>
                                    <ul class="small-bullet-list pl-4 ">
                                        <li>Pengecekan Nama Perusahaan</li>
                                        <li>Akta Pendirian & SK Kemenkumham</li>
                                        <li>NPWP & SKT</li>
                                        <li>NIB & Sertifikat Standar*</li>
                                        <span>* S&K berlaku</span>
                                    </ul>
                                    <p class="mb-0 bold ">Bonus :</p>
                                    <ul class="small-bullet-list pl-4 ">
                                        <li>IZIN GO</li>
                                        <li>EFIN Perusahaan</li>
                                        <li>Izin API-U & Hak akses kepabeanan</li>
                                        <li>IZIN Privilege</li>
                                        <li>IZIN Cloud</li>
                                        <li>Startup & Legal Kit</li>
                                    </ul>
                                    <a href="" class="btn btn-primary">Hubungi Kami</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">   
                    <div class="card shadow-lg border-0">
                        <div class="row">
                            <div class="col-md-12 d-flex align-items-center justify-content-center">
                                <center><img src="{{ asset('frontend/img/about.jpg') }}" class="img-fluid rounded-start mt-5" alt="..." width="200px"></center>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="card-body p-5">
                                <h4 class="card-title text-uppercase">PT Startup</h4>
                                    <h6 class="card-title  light">Untuk pendirian PT dengan modal dibawah 1 Miliar</h6>
                                    <span class="bold text-primary d-block mb-3"> <s>Rp. 8.000.000</s> </span>
                                    <h3><span class="bold text-primary d-block mb-3 normal-rate">Rp. 6.900.000</span></h3>
                                    <ul class="small-bullet-list pl-4 ">
                                        <li>Pengecekan Nama Perusahaan</li>
                                        <li>Akta Pendirian & SK Kemenkumham</li>
                                        <li>NPWP & SKT</li>
                                        <li>NIB & Sertifikat Standar*</li>
                                        <span>* S&K berlaku</span>
                                    </ul>
                                    <p class="mb-0 bold ">Bonus :</p>
                                    <ul class="small-bullet-list pl-4 ">
                                        <li>IZIN GO</li>
                                        <li>EFIN Perusahaan</li>
                                        <li>Izin API-U & Hak akses kepabeanan</li>
                                        <li>IZIN Privilege</li>
                                        <li>IZIN Cloud</li>
                                        <li>Startup & Legal Kit</li>
                                    </ul>
                                    <a href="" class="btn btn-primary">Hubungi Kami</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    
@endsection