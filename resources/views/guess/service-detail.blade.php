@extends('guess.layout.app')

@section('title')
  @foreach ($configs as $config)
    <title>{{ $config->service_detail }}</title>
  @endforeach
@endsection

@section('content')

{{-- Untuk layanan Digital Marketing --}}

    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-4 animated slideInDown mb-4">{{ $services->title }}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $services->title }}</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 wow fadeInUp justify-content-between">
                <h1 class="display-6 mb-5 text-center ">{{ $services->title }}</h1>
                <p class="mb-4">
                    {!! $services->desc !!}
                </p>
                <!-- <center><a href="" class="btn btn-primary btn-rounded">Start Now</a></center> -->
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded h-100 p-5">
                  <div class="d-flex align-items-center ms-n5 mb-4">
                    <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                      <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-10-light.png') }}" alt=""/>
                    </div>
                    <h4 class="mb-0">IDR {{ number_format($services->price) }},-</h4>
                  </div>
                  <p class="mb-4">
                      {{ $services->title }}
                  </p>
                  
                  <div class="row g-3">
                    <p>
                      <br>
                      <b class="text-primary">IDR {{ number_format($services->price) }},-</b>
                    </p>
                  </div>
                  <a class="btn btn-light px-3" href="">Pesan Sekarang</a>
                </div>
              </div>
        </div>
    </div>

    
@endsection