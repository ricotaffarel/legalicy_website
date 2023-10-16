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
        <h1 class="display-4 animated slideInDown mb-4">{{ $category->title }}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $category->title }}</li>
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
            <h1 class="display-6 mb-5 text-center">{{ $category->title }}</h1>
            {{-- <center><a href="" class="btn btn-primary btn-rounded">Start Now</a></center> --}}
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
                @foreach ($services as $service)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item rounded h-100 p-5">
                    <div class="d-flex align-items-center ms-n5 mb-4">
                      <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                        <img class="img-fluid" src="{{ asset('services/' . $service->image) }}" alt="" style="max-width: 150px"/>
                      </div>
                      <h4 class="mb-0">{{ $service->title }}</h4>
                    </div>
                    <p class="mb-4">
                        {{ $shortenedText = Str::limit ($service->desc, 50) }}
                    </p>
                    
                    <div class="row g-3">
                      <p>
                        Mulai Dari
                        <br>
                        <b class="text-primary">IDR 3.900.000</b>
                      </p>
                    </div>

                    <a class="btn btn-light px-3" href="/service-detail/{{ $service->id }}">Read More</a>
                  </div>
                </div>
                @endforeach
            </div>
          </div>
        </div>
        <!-- Service End -->


@endsection