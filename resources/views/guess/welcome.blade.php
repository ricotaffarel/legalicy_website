@extends('guess.layout.app')

@section('title')
  @foreach ($configs as $config)
    <title>{{ $config->title }}</title>
  @endforeach
@endsection

@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
      <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          @foreach ($sliders as $slider)
          <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
            <img class="w-100" src="{{ asset('sliders/' . $slider->image) }}" alt="Image" style="max-height: 750px;" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <h1 class="display-3 text-dark mb-4 animated slideInDown">
                      {{ $slider->title }}
                    </h1>
                    <p class="fs-5 text-body mb-5">
                      {{ $slider->desc }}
                    </p>
                    <a href="/#abouts" class="btn btn-primary py-3 px-5">
                      More Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- Features Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-3">
              @foreach ($choisesUs as $choise)
              <div class="col-sm-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="{{ asset('choisesUs/' . $choise->image) }}"
                      alt=""
                      style="max-width: 100px"
                    />
                    <h5 class="mb-0">{{ $choise->title }}</h5>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- Features End -->

  <!-- About Start -->
  <div class="container-xxl py-5" id="abouts">
    <div class="container">
      @foreach ($abouts as $about)
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <div
            class="position-relative overflow-hidden rounded ps-5 pt-5 h-100"
            style="min-height: 400px"
          >
            <img
              class="position-absolute w-100 h-100"
              src="{{ asset('abouts/' . $about->image) }}"
              alt=""
              style="object-fit: cover"
            />
            <div class="position-absolute top-0 start-0 bg-white rounded pe-3 pb-3" style="width: 200px; height: 200px">
              <div class="d-flex flex-column justify-content-center text-center bg-primary rounded h-100 p-3">
                <h1 class="text-white mb-0">{{ $about->experience }}</h1>
                <h2 class="text-white">Tahun</h2>
                <h5 class="text-white mb-0">Pengalaman</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="h-100">
            <h1 class="display-6 mb-5">
              {{ $about->title }}
            </h1>
            {{-- <p class="fs-5 text-primary mb-4">
              Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed stet
              lorem sit clita duo justo erat amet
            </p> --}}
            <p class="mb-4">
              {!! $about->desc !!}
            </p>
            <div class="row g-4 mb-4">
              <div class="col-lg-12 facts-counter wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100 px-4 pe-lg-0">
                  <div class="row g-5">
                    <div class="col-sm-6">
                      <h1 class="display-5" data-toggle="counter-up">{{ $about->client }}</h1>
                      <p class="fs-5 text-primary">Klien</p>
                    </div>
                    <div class="col-sm-6">
                      <h1 class="display-5" data-toggle="counter-up">{{ $about->project }}</h1>
                      <p class="fs-5 text-primary">Projek</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <!-- About End -->

    <!-- Facts Start -->
<!--<div class="container-fluid overflow-hidden my-5 px-lg-0">
      <div class="container facts px-lg-0">
        <div class="row g-0 mx-lg-0">
          <div class="col-lg-6 facts-text wow fadeIn" data-wow-delay="0.1s">
            <div class="h-100 px-4 ps-lg-0">
              <h1 class="text-white mb-4">For Individuals And Organisations</h1>
              <p class="text-light mb-5">
                Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                sed stet lorem sit clita duo justo magna dolore erat amet
              </p>
              <a href="" class="align-self-start btn btn-secondary py-3 px-5"
                >More Details</a
              >
            </div>
          </div>
          <div class="col-lg-6 facts-counter wow fadeIn" data-wow-delay="0.5s">
            <div class="h-100 px-4 pe-lg-0">
              <div class="row g-5">
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1234</h1>
                  <p class="fs-5 text-primary">Happy Clients</p>
                </div>
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1234</h1>
                  <p class="fs-5 text-primary">Projects Succeed</p>
                </div>
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1234</h1>
                  <p class="fs-5 text-primary">Awards Achieved</p>
                </div>
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1234</h1>
                  <p class="fs-5 text-primary">Team Members</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Facts End -->

    <!-- Features Start -->
<!--<div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-6 mb-5">Few Reasons Why People Choosing Us!</h1>
            <p class="mb-4">
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
              diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
              lorem sit clita duo justo magna dolore erat amet
            </p>
            <div class="row g-3">
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="frontend/img/icon/icon-06-primary.png"
                      alt=""
                    />
                    <h5 class="mb-0">Easy Process</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="frontend/img/icon/icon-03-primary.png"
                      alt=""
                    />
                    <h5 class="mb-0">Fast Delivery</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="frontend/img/icon/icon-04-primary.png"
                      alt=""
                    />
                    <h5 class="mb-0">Policy Controlling</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="frontend/img/icon/icon-07-primary.png"
                      alt=""
                    />
                    <h5 class="mb-0">Money Saving</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div
              class="position-relative rounded overflow-hidden h-100"
              style="min-height: 400px"
            >
              <img
                class="position-absolute w-100 h-100"
                src="frontend/img/feature.jpg"
                alt=""
                style="object-fit: cover"
              />
            </div>
          </div>
        </div>
      </div>
    </div> -->
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

          @foreach ($categories as $category)
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                >
                  <img
                    class="img-fluid"
                    src="{{ asset('frontend/img/icon/icon-04-light.png') }}"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">{{ $category->title }}</h4>
              </div>
              <p class="mb-4">
                {{-- PT, CV, FIRMA, PMA, Yayasan, Koperasi, Persekutuan Perdata, Pendirian Perkumpulan --}}
              </p>
              <a class="btn btn-light px-3" href="/service/{{ $category->id }}">Read More</a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- Service End -->

        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
          <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px">
              <h1 class="display-6 mb-5">Apa Kata Mereka tentang Kami?</h1>
            </div>
            <div class="row g-5">
              <div class="col-lg-3 d-none d-lg-block">
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
              </div>
              <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel testimonial-carousel">
                  @foreach ($testimonials as $testimonial)
                  <div class="testimonial-item text-center">
                    <img
                      class="img-fluid rounded mx-auto mb-4"
                      src="{{ asset('testimonials/' . $testimonial->image) }}"
                      alt=""
                    />
                    <p class="fs-5">
                      {{ $testimonial->testimony }}
                    </p>
                    <h5>{{ $testimonial->name }}</h5>
                    <span>{{ $testimonial->job }}</span>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="col-lg-3 d-none d-lg-block">
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
              </div>
            </div>
          </div>
        </div>
        <!-- Testimonial End -->

@endsection