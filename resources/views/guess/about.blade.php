@extends('guess.layout.app')

@section('content')
    
<div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
          <h1 class="display-6 mb-5 text-center">Why Choose Us?</h1>
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
            <div class="position-absolute top-0 start-0 bg-white rounded pe-3 pb-3" style="width: 200px; height: 200px">
              <div class="d-flex flex-column justify-content-center text-center bg-primary rounded h-100 p-3">
                <h1 class="text-white mb-0">25</h1>
                <h2 class="text-white">Tahun</h2>
                <h5 class="text-white mb-0">Pengalaman</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="h-100">
            <h1 class="display-6 mb-5">
              Tentang Kami
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
            <div class="row g-4 mb-4">
              <div class="col-lg-12 facts-counter wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100 px-4 pe-lg-0">
                  <div class="row g-5">
                    <div class="col-sm-6">
                      <h1 class="display-5" data-toggle="counter-up">1234</h1>
                      <p class="fs-5 text-primary">Klien</p>
                    </div>
                    <div class="col-sm-6">
                      <h1 class="display-5" data-toggle="counter-up">1234</h1>
                      <p class="fs-5 text-primary">Projek</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
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


@endsection