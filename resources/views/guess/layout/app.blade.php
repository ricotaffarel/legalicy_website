<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Insure - Insurance HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet"/>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"/>

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-white-50 py-2 px-0 d-none d-lg-block">
      @foreach ($contacts as $contact)
      <div class="row gx-0 align-items-center">
        <div class="col-lg-7 px-5 text-start">
          <div class="h-100 d-inline-flex align-items-center me-4">
            <small class="fa fa-phone-alt me-2"></small>
            <small>{{ $contact->phone }}</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center me-4">
            <small class="far fa-envelope-open me-2"></small>
            <small>{{ $contact->email }}</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center me-4">
            <small class="far fa-clock me-2"></small>
            <small>{{ $contact->open_day_at }} - {{ $contact->close_day_at }} : {{ $contact->open_at }} - {{ $contact->close_at }}</small>
          </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
          <div class="h-100 d-inline-flex align-items-center">
            <a class="text-white-50 ms-4" href="{{ $contact->facebook }}"><i class="fab fa-facebook-f"></i></a>
            <a class="text-white-50 ms-4" href="{{ $contact->twitter }}"><i class="fab fa-twitter"></i></a>
            <a class="text-white-50 ms-4" href="{{ $contact->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
            <a class="text-white-50 ms-4" href="{{ $contact->instagram }}"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
      <a href="index.html" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">
          <img class="img-fluid me-3" src="{{ asset('frontend/img/icon/icon-02-primary.png') }}" alt=""/>
        </h1>
      </a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
          <a href="/" class="nav-item nav-link {{ (Request::is('/') ? 'active' : '') }}">Home</a>
          <a href="/promo" class="nav-item nav-link {{ (Request::is('promo') ? 'active' : '') }}">Promo</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle {{ (Request::is('service/*') ? 'active' : '') }}" data-bs-toggle="dropdown">Layanan</a>
            <div class="dropdown-menu bg-light border-0 m-0">
              @foreach ($categories as $category)
              <a href="/service/{{ $category->id }}" class="dropdown-item">{{ $category->title }}</a>
              @endforeach
              {{-- <a href="/service5" class="dropdown-item">Digital Marketing</a>
              <a href="/service1" class="dropdown-item">Pembuatan dan Perubahan Dokumen Perusahaan</a>
              <a href="/service3" class="dropdown-item">Virtual Office</a>
              <a href="/service1" class="dropdown-item">Perizinan Usaha</a>
              <a href="/service1" class="dropdown-item">Izin HAKI</a>
              <a href="/service4" class="dropdown-item">Izin Hukum</a>
              <a href="/service2" class="dropdown-item">Perizinan Khusus</a>
              <a href="/service1" class="dropdown-item">Perizinan Usaha</a>
              <a href="/service2" class="dropdown-item">Layanan Lainnya</a> --}}
            </div>
          </div>
          <a href="/about" class="nav-item nav-link {{ (Request::is('about') ? 'active' : '') }}">Tentang Kami</a>
          <a href="/faq" class="nav-item nav-link {{ (Request::is('faq') ? 'active' : '') }}">FaQ</a>
          <a href="/contact" class="nav-item nav-link {{ (Request::is('contact') ? 'active' : '') }}">Hubungi Kami</a>
        </div>
        <!-- <a href="" class="btn btn-primary px-3 d-none d-lg-block">Get A Quote</a> -->
      </div>
    </nav>
    <!-- Navbar End -->

    @yield('content')

    @if ( Request::is('contact') )
        
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5">
            <div
              class="col-lg-12 wow fadeIn"
              data-wow-delay="0.5s"
              style="min-height: 450px"
            >
            @foreach ($contacts as $contact)
            <div class="position-relative rounded overflow-hidden h-100">
              {!! $contact->iframe !!}
            </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>
      <!-- Contact End -->

    @else
        
    <!-- Appointment Start -->
    <div class="container-fluid appointment my-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
    <div class="row g-5">
        @foreach ($contacts as $contact)
        <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px">
        <div class="position-relative rounded overflow-hidden h-100">
          {!! $contact->iframe !!}
        </div>
        </div>
        @endforeach
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
        
        </div>
    </div>
    </div>
    </div>
    <!-- Appointment End -->

    @endif


<!-- Footer Start -->
<div
class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn"
data-wow-delay="0.1s"
>
<div class="container py-5">
  <div class="row g-5">
    <div class="col-lg-4 col-md-6">
      @foreach ($abouts as $about)
      <h1 class="text-white mb-4">
        <img
          class="img-fluid me-3"
          src="{{ asset('frontend/img/icon/icon-02-light.png') }}"
          alt=""
        />
      </h1>
      <p>
        {!! $shortenedText = Str::limit ($about->desc, 100) !!}
      </p>
      @endforeach
      @foreach ($contacts as $contact)
      <div class="d-flex pt-2">
        <a class="btn btn-square me-1" href="{{ $contact->twitter }}"
          ><i class="fab fa-twitter"></i
        ></a>
        <a class="btn btn-square me-1" href="{{ $contact->facebook }}"
          ><i class="fab fa-facebook-f"></i
        ></a>
        <a class="btn btn-square me-1" href="{{ $contact->youtube }}"
          ><i class="fab fa-youtube"></i
        ></a>
        <a class="btn btn-square me-0" href="{{ $contact->linkedin }}"
          ><i class="fab fa-linkedin-in"></i
        ></a>
      </div>
      @endforeach
    </div>
    @foreach ($contacts as $contact)
    <div class="col-lg-4 col-md-6">
      <h5 class="text-light mb-4">Address</h5>
      <p>
        <i class="fa fa-map-marker-alt me-3"></i>{{ $contact->address }}
      </p>
      <p><i class="fa fa-phone-alt me-3"></i>{{ $contact->phone }}</p>
      <p><i class="fa fa-envelope me-3"></i>{{ $contact->email }}</p>
    </div>
    @endforeach
    <div class="col-lg-4 col-md-6">
      <h5 class="text-light mb-4">Quick Links</h5>
      <a class="btn btn-link" href="/">Home</a>
      <a class="btn btn-link" href="/promo">Promo</a>
      <a class="btn btn-link" href="/about">Tentang Kami</a>
      <a class="btn btn-link" href="/faq">FaQ</a>
      <a class="btn btn-link" href="/contact">Contact Us</a>
    </div>
  </div>
</div>
<div class="container-fluid copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
        &copy; <a href="#">Ijin</a>, All Right Reserved.
      </div>
      
    </div>
  </div>
</div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
><i class="bi bi-arrow-up"></i
></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('frontend/js/main.js') }}"></script>
</body>
</html>
