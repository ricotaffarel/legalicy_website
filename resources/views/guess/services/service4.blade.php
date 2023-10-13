@extends('guess.layout.app')

@section('content')

{{-- Untuk Layanan Ijin Hukum --}}

    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-4 animated slideInDown mb-4">Izin Hukum</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Izin Hukum</li>
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
                      src="img/about.jpg"
                      alt=""
                      style="object-fit: cover"
                    />
                  </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="h-100">
                    <h1 class="display-6 mb-5">
                      Izin Hukum
                    </h1>
                    <p class="fs-5 text-primary mb-4">
                        Virtual Office di Jakarta
                    </p>
                    <p class="mb-4">
                        Bersama HUQUM Indonesia, IZIN.co.id menyediakan layanan hukum untuk kebutuhan Anda. Dari konsultasi berorientasi solusi, sampai menghubungkan Anda dengan berbagai pengacara yang berpengalaman.
                    </p>
                    <p class="fs-5 text-primary mb-4">
                        Manfaat Virtual Office
                    </p>
                    <li>Meningkatkan Citra dan Impresi Perusahaan</li>
                    <li>Meningkatkan Citra dan Impresi Perusahaan</li>
                    <li>Meningkatkan Citra dan Impresi Perusahaan</li>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- About End -->

          <div class="container-xxl py-5">
            <div class="container">
              <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                  <!-- <h1 class="display-6 mb-5 text-center">Why Choose Us?</h1> -->
                  <div class="row g-3">
                    <div class="col-sm-12 wow fadeIn" data-wow-delay="0.1s">
                      <div class="bg-light rounded h-100 p-3">
                        <div class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                          <div class="row g-3">
                            <div class="col-sm-2">
                              <img
                                class="align-self-center mb-3"
                                src="{{ asset('frontend/img/icon/icon-06-primary.png') }}"
                                alt=""/>
                            </div>
                            <div class="col-sm-10">
                              <h5 class="text-md-start">Jasa Pembuatan Surat Somasi                            </h5>
                              <p class="text-md-start">Selesaikan permasalahan sengketa Anda dengan bantuan hukum berupa pembuatan somasi dari pengacara profesional berpengalaman. Tim Huqum akan menghubungkan Anda dengan pengacara yang siap membantu berbagai jenis permasalahan seperti hutang piutang, sengketa, wanprestasi, dan masalah hukum lainnya</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 wow fadeIn" data-wow-delay="0.1s">
                      <div class="bg-light rounded h-100 p-3">
                        <div class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                          <div class="row g-3">
                            <div class="col-sm-2">
                              <img
                                class="align-self-center mb-3"
                                src="{{ asset('frontend/img/icon/icon-03-primary.png') }}"
                                alt=""/>
                            </div>
                            <div class="col-sm-10">
                              <h5 class="text-md-start">Easy Process</h5>
                              <p class="text-md-start">IZIN.co.id menyediakan hampir seluruh layanan legalitas yang dibutuhkan pelaku usaha maupun perusahaan, dari pendirian perusahaan, pengurusan perizinan sampai layanan pengurusan pajak.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 wow fadeIn" data-wow-delay="0.1s">
                      <div class="bg-light rounded h-100 p-3">
                        <div class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                          <div class="row g-3">
                            <div class="col-sm-2">
                              <img
                                class="align-self-center mb-3"
                                src="{{ asset('frontend/img/icon/icon-02-primary.png') }}"
                                alt=""/>
                            </div>
                            <div class="col-sm-10">
                              <h5 class="text-md-start">Easy Process</h5>
                              <p class="text-md-start">IZIN.co.id menyediakan hampir seluruh layanan legalitas yang dibutuhkan pelaku usaha maupun perusahaan, dari pendirian perusahaan, pengurusan perizinan sampai layanan pengurusan pajak.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 wow fadeIn" data-wow-delay="0.1s">
                      <div class="bg-light rounded h-100 p-3">
                        <div class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                          <div class="row g-3">
                            <div class="col-sm-2">
                              <img
                                class="align-self-center mb-3"
                                src="{{ asset('frontend/img/icon/icon-01-primary.png') }}"
                                alt=""/>
                            </div>
                            <div class="col-sm-10">
                              <h5 class="text-md-start">Easy Process</h5>
                              <p class="text-md-start">IZIN.co.id menyediakan hampir seluruh layanan legalitas yang dibutuhkan pelaku usaha maupun perusahaan, dari pendirian perusahaan, pengurusan perizinan sampai layanan pengurusan pajak.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

    
@endsection