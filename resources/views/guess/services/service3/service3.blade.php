@extends('guess.layout.app')

@section('content')

{{-- Untuk layanan virtual office --}}

    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-4 animated slideInDown mb-4">Virtual Office</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Virtual Office</li>
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
            <h1 class="display-6 mb-5 text-center">PENGERTIAN VIRTUAL OFFICE</h1>
            <p class="mb-4 text-center">
              Pendirian Perusahaan untuk membantu Anda menjelaskan bisnis dengan legalitas serta badan usaha yang bonafid
            </p>
            <!-- <center><a href="" class="btn btn-primary btn-rounded">Start Now</a></center> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Features End -->

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
                      Virtual Office
                    </h1>
                    <p class="fs-5 text-primary mb-4">
                        Virtual Office di Jakarta
                    </p>
                    <p class="mb-4">
                        Karena sistem zonasi yang membatasi lokasi yang bisa digunakan untuk domisili perkantoran, alamat perusahaan adalah salah satu hambatan bagi pengusaha di Jakarta untuk mendirikan badan usaha seperti PT ataupun CV. Namun, hal itu tidak lagi menjadi masalah dengan Virtual Office. Virtual Office bisa digunakan sebagai alamat untuk mendirikan PT ataupun CV dan mendapatkan legalitas untuk menjadi perusahaan yang bonafid.
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

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
              <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="h-100">
                    <h1 class="display-6 mb-5">
                        Apakah menyediakan Virtual Office ?
                    </h1>
                    <p class="mb-4">
                        IZIN.co.id bekerjasama dengan vOffice dan SPAZE menyediakan Virtual Office sesuai dengan kebutuhan Anda. Nikmati keuntungan menggunakan Virtual Office dengan jaringan tersebar di seluruh area Jakarta. Kami juga dapat membantu penggunaan Virtual Office di Tangerang, Surabaya, Bandung, Medan dan juga Bali.
                    </p>                    
                  </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div
                      class="position-relative overflow-hidden rounded ps-5 pt-5 h-100"
                      style="min-height: 400px"
                    >
                      <img
                        class="position-absolute w-100 h-100"
                        src="{{ asset('frontend/img/feature.jpg') }}"
                        alt=""
                        style="object-fit: cover"
                      />
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
                  <h1 class="display-6 mb-5 text-center">Fasilitas Virtual Office</h1>
                  <div class="row g-3">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
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
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
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
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
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
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
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
                  </div>
                </div>
              </div>
            </div>
          </div>

        <!-- Service Start -->
        <div class="container-xxl py-5">
          <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px">
              <h1 class="display-6 mb-5">
                Paket Virtual Office
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
                    <br>
                  </div>
                  <p>
                    <b class="text-primary">IDR 3.900.000</b>
                  </p>
                  <p class="mb-4">
                    Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                    sit clita duo justo erat amet
                  </p>
                  <ul>
                    <li>Penyewaan Alamat Virtual Office selama 1 tahun</li>
                    <li>Penyewaan Alamat Virtual Office selama 1 tahun</li>
                    <li>Penyewaan Alamat Virtual Office selama 1 tahun</li>
                  </ul>
                  
                  <div class="row g-3">
                    
                  </div>
                  <a class="btn btn-light px-3 mt-3" href="">Pesan Sekarang</a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded h-100 p-5">
                  <div class="d-flex align-items-center ms-n5 mb-4">
                    <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                      <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-10-light.png') }}" alt=""/>
                    </div>
                    <h4 class="mb-0">Pendirian PT</h4>
                    <br>
                  </div>
                  <p>
                    <b class="text-primary">IDR 3.900.000</b>
                  </p>
                  <p class="mb-4">
                    Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                    sit clita duo justo erat amet
                  </p>
                  <ul>
                    <li>Penyewaan Alamat Virtual Office selama 1 tahun</li>
                    <li>Penyewaan Alamat Virtual Office selama 1 tahun</li>
                    <li>Penyewaan Alamat Virtual Office selama 1 tahun</li>
                  </ul>
                  
                  <div class="row g-3">
                    
                  </div>
                  <a class="btn btn-light px-3 mt-3" href="">Pesan Sekarang</a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded h-100 p-5">
                  <div class="d-flex align-items-center ms-n5 mb-4">
                    <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                      <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-10-light.png') }}" alt=""/>
                    </div>
                    <h4 class="mb-0">Pendirian PT</h4>
                    <br>
                  </div>
                  <p>
                    <b class="text-primary">IDR 3.900.000</b>
                  </p>
                  <p class="mb-4">
                    Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                    sit clita duo justo erat amet
                  </p>
                  <ul>
                    <li>Penyewaan Alamat Virtual Office selama 1 tahun</li>
                    <li>Penyewaan Alamat Virtual Office selama 1 tahun</li>
                    <li>Penyewaan Alamat Virtual Office selama 1 tahun</li>
                  </ul>
                  
                  <div class="row g-3">
                    
                  </div>
                  <a class="btn btn-light px-3 mt-3" href="">Pesan Sekarang</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Service End -->

         <!-- Testimonial Start -->
         <div class="container-xxl py-5">
          <div class="container">
            <div class="row g-5">
              {{-- <div class="col-lg-3 d-none d-lg-block">
                <div class="testimonial-left h-100">
                  <img
                    class="img-fluid animated pulse infinite"
                    src="{{ asset('frontend/img/testimonial-1.jpg') }}"
                    alt=""
                  />
                  <img
                    class="img-fluid animated pulse infinite"
                    src="{{ asset('frontend/img/testimonial-2.jpg') }}"
                    alt=""
                  />
                  <img
                    class="img-fluid animated pulse infinite"
                    src="{{ asset('frontend/img/testimonial-3.jpg') }}"
                    alt=""
                  />
                </div>
              </div> --}}
              <div class="col-lg-6">
                <h1 class="display-6 mb-5">Bisnis Anda Dapat Beroperasi di Seluruh Tempat ini</h1>
                <a href="/location-service3" class="btn btn-primary">Lihat Selengkapnya</a>
              </div>
              <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel testimonial-carousel">
                  <div class="testimonial-item text-center">
                    <img
                      class="img-fluid rounded mx-auto mb-4"
                      src="{{ asset('frontend/img/testimonial-1.jpg') }}"
                      alt=""
                      style="width: 300px; height: 200px"
                    />
                    
                    <h5>Nama Tempat</h5>
                    <span>Nama Kota</span>
                  </div>
                  <div class="testimonial-item text-center">
                    <img
                      class="img-fluid rounded mx-auto mb-4"
                      src="{{ asset('frontend/img/testimonial-2.jpg') }}"
                      alt=""
                      style="width: 300px; height: 200px"
                    />
                    
                    <h5>Nama Tempat</h5>
                    <span>Nama Kota</span>
                  </div>
                  <div class="testimonial-item text-center">
                    <img
                      class="img-fluid rounded mx-auto mb-4"
                      src="{{ asset('frontend/img/testimonial-3.jpg') }}"
                      alt=""
                      style="width: 300px; height: 200px"
                    />
                    
                    <h5>Nama Tempat</h5>
                    <span>Nama Kota</span>
                  </div>
                </div>
              </div>
              {{-- <div class="col-lg-3 d-none d-lg-block">
                <div class="testimonial-right h-100">
                  <img
                    class="img-fluid animated pulse infinite"
                    src="{{ asset('frontend/img/testimonial-1.jpg') }}"
                    alt=""
                  />
                  <img
                    class="img-fluid animated pulse infinite"
                    src="{{ asset('frontend/img/testimonial-2.jpg') }}"
                    alt=""
                  />
                  <img
                    class="img-fluid animated pulse infinite"
                    src="{{ asset('frontend/img/testimonial-3.jpg') }}"
                    alt=""
                  />
                </div>
              </div> --}}
            </div>
          </div>
        </div>
        <!-- Testimonial End -->


@endsection