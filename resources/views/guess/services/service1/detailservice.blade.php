@extends('guess.layout.app')

@section('content')

{{-- Untuk Detail Pendirian PT, CV, dll --}}
    
    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-4 animated slideInDown mb-4">Detail Pendirian</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Pendirian</li>
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
            <h1 class="display-6 mb-5 text-center">PENDIRIAN PT</h1>
            <p class="mb-4 text-center">
                Pendirian Perusahaan untuk membantu Anda menjalankan bisnis dengan legalitas serta badan usaha yang bonafid
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
                Paket Pendirian PT
              </h1>
            </div>
            <div class="row g-4 justify-content-center">
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded h-100 p-5">
                  <div class="d-flex align-items-center ms-n5 mb-4">
                    <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                      <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-10-light.png') }}" alt=""/>
                    </div>
                    <h4 class="mb-0">PT Persekutuan Modal</h4>
                  </div>
                  <p class="h5 text-primary mb-1"><strong>Start From Rp. 4.900.000</strong></p>
                    <ul>
                      <li>Pengecekan Nama Perusahaan</li>
                      <li>Konsultasi Pendirian Perusahaan</li><br><br>
                    <!-- </ul><a href="pt-persekutuan-modal.php" class="btn btn-success btn-block br-0">Selengkapnya<i class="fas fa-arrow-right"></i></a> -->
                  
                  <a class="btn btn-primary" style="color: white;" href="/deepdetail-service1">Read More</a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded h-100 p-5">
                  <div class="d-flex align-items-center ms-n5 mb-4">
                    <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                      <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-10-light.png') }}" alt=""/>
                    </div>
                    <h4 class="mb-0">PT Perorangan</h4>
                  </div>
                  <p class="h5 text-primary mb-1"><strong>Start From Rp. 4.900.000</strong></p>
                    <ul>
                      <li>Pengecekan Nama Perusahaan</li>
                      <li>Konsultasi Pendirian Perusahaan</li><br><br>
                    <!-- </ul><a href="pt-persekutuan-modal.php" class="btn btn-success btn-block br-0">Selengkapnya<i class="fas fa-arrow-right"></i></a> -->
                  
                  <a class="btn btn-primary" style="color: white;" href="/deepdetail-service1">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Service End -->

        <section class="section-50 mb-5">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <h2 class="text-uppercase ls-1 text-primary text-center mb-5">Add ons</h2>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-light border-0 h-100" style="border-left:5px solid #1873a7!important">
                    <div class="card-body">
                      <h5 class="text-dark mb-0">Pembuatan kontrak kerja karyawan (karyawan kontrak/tetap)</h5>
                    </div>
                    <div class="card-footer" style="background:0 0; border: none;">
                      <h5 class="text-primary mb-0">+ Rp 1.750.000</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-light border-0 h-100" style="border-left:5px solid #1873a7!important">
                    <div class="card-body">
                      <h5 class="text-dark mb-0">Pembuatan Perjanjian Bagi Hasil Keuntungan</h5>
                    </div>
                    <div class="card-footer" style="background:0 0; border: none;">
                      <h5 class="text-primary mb-0">+ Rp 1.750.000</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-light border-0 h-100" style="border-left:5px solid #1873a7!important">
                    <div class="card-body">
                      <h5 class="text-dark mb-0">PKP & E-Faktur Perusahaan</h5>
                    </div>
                    <div class="card-footer" style="background:0 0; border: none;">
                      <h5 class="text-primary mb-0">+ Rp 3.500.000</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-light border-0 h-100" style="border-left:5px solid #1873a7!important">
                    <div class="card-body">
                      <h5 class="text-dark mb-0">Dedicated local phone number by Helloka</h5>
                    </div>
                    <div class="card-footer" style="background:0 0; border: none;">
                      <h5 class="text-primary mb-0">+ Rp 2.000.000</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="section-80">
            <div class="container mb-4"><center><img src="{{ asset('frontend/img/carousel-1.jpg') }}" class="img-fluid w-100" alt="" style="border-radius:20px; max-height: 350px;"></center></div>
            <div class="container"><center><img src="{{ asset('frontend/img/carousel-2.jpg') }}" class="img-fluid w-100" alt="" style="border-radius:20px; max-height: 350px;"></center></div>
            <div class="container mt-5">
              <div class="row justify-content-center">
                <div class="col-sm-5 mb-5 mt-2">
                    <a href="#" data-toggle="modal" data-target="#proposal" onclick='writeMessages("")'>
                        <img src="{{ asset('frontend/img/about.jpg') }}" class="img-fluid">
                    </a>
                    <center><a href="#" data-toggle="modal" data-target="#proposal" onclick='writeMessages("")' class="btn btn-success btn-block br-0 text-center mt-3">
                        Hubungi Kami <i class="fas fa-arrow-right"></i>
                    </a></center>
                </div>
              </div>
            </div>
          </section>

        <section class="section-80 bg-softgrey">
            <div class="container">
              <div class="row">
                  <div class="col-md-12">
                    
                  <div class="card shadow-lg border-0">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="card-body p-5">
                          <h4 class="bold text-uppercase mb-4">Keunggulan PT</h4>
                          <ul>
                            <li>Aset Pribadi dan Perusahaan Terpisah.</li>
                            <li>Akses Bisnis Lebih Luas</li>
                            <li>Pilihan Aktivitas Bisnis Lebih Beragam</li>
                            <li>Bentuk Usaha dengan Badan Hukum</li>
                          </ul>
                          {{-- <p class="pl-3"><a href="https://goo.gl/7nm8ws" class="btn btn-link">Pahami Lebih Lanjut >></a></p> --}}
                        </div>
                      </div>
                      <!-- <div class="col-md-4"> -->
                        <!-- <div class="img-right" style="background-image:url({{ asset('frontend/img/carousel-2.jpg') }})"></div> -->
                        <!-- <img src="frontend/img/carousel-2.jpg" alt=""> -->
                      <!-- </div> -->
                      <div class="col-md-4">
                        <img src="{{ asset('frontend/img/about.jpg') }}" class="img-fluid rounded-start" alt="..." width="100%">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mb-5 mt-5">
                  <div class="card shadow-lg border-0">
                    <div class="row">
                      <!-- <div class="col-md-4"> -->
                        <!-- <div class="img-right" style="background-image:url(frontend/img/carousel-1.jpg') }})"></div> -->
                        <!-- <img src="frontend/img/carousel-1.jpg" alt=""> -->
                      <!-- </div> -->
                      <div class="col-md-4">
                        <img src="{{ asset('frontend/img/about.jpg') }}" class="img-fluid rounded-start w-100" alt="..." width="100%">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body p-5">
                          <h4 class="bold text-uppercase">Persyaratan Pendirian PT</h4>
                          <ul class="pr-3">
                            <li>Scan KTP Pengurus Perusahaan dan Pemegang Saham</li>
                            <li>Scan NPWP Pengurus dan Pemegang Saham</li>
                            <li>Stempel Perusahaan</li>
                          </ul>
                          <h6 class="bold text-uppercase">* Note</h6>
                          <ul class="pr-3">
                            <li>Pengurus PT minimal terdiri dari 1 Direktur dan 1 Komisaris</li>
                            <li>Pendiri PT minimal terdiri dari 2 Pemegang Saham (Pemegang Saham bisa sekaligus menjabat sebagai Direktur atau Komisaris)</li>
                            <li>Suami-Istri yang mendirikan PT bersama-sama dan belum memiliki perjanjian pra-nikah harus mengikutsertakan satu orang untuk menjadi pihak ketiga.</li>
                            <li>Stempel Perusahaan menyusul setelah Nama Perusahaan sudah Final (Dicek dan dipesan)</li>
                          </ul>
                          <h6 class="bold text-uppercase">Persyaratan tambahan untuk PT FULL (Menggunakan Alamat Sendiri)</h6>
                          <ul class="pr-3">
                            <li>Surat Kontrak Sewa</li>
                            <li>PBB & STTS Tahun Berjalan</li>
                            <li>IMB</li>
                            <li>Foto Tampak Luar dan Tampak Dalam</li>
                            <li>Surat Keterangan Zonasi Perkantoran dari Kelurahan</li>
                            <li>Sertifikat Tanah/SHGB</li>
                            <li>Domisili Gedung</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


@endsection