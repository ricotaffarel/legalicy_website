@extends('guess.layout.app')

@section('content')
    
    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-4 animated slideInDown mb-4">Contact Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Contact Us
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <section style="display:block">
      <div class="container mb-5" style="margin-top:-100px">
          <div class="row justify-content-center">
              <div class="col-sm-4">
                  <div class="card border-0 shadow-lg card-fluid">
                      <a href="https://api.whatsapp.com/send?phone=6287877530812&text=Hello" style="transition: .3s; color: #393939;">
                          <div class="card-body">
                              <div class="media align-items-center">
                                <div class="row g-3">
                                  <div class="col-3">
                                    <div class="media-left">
                                        <div class="btn text-light" style="background:#25D366;">
                                            <i class="fab fa-whatsapp fa-3x"></i>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-9">
                                    <div class="ml-3 media-right">
                                        <h5 class="mb-2 font-weight-light" style="color: #333;">Whatsapp</h5>
                                        <span class="font-weight-bold">
                                            +62 858-3534-3433
                                        </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
              <div class="col-sm-4">
                  <div class="card border-0 shadow-lg card-fluid">
                      <a href="" style="transition: .3s; color: #393939;">
                          <div class="card-body">
                              <div class="media align-items-center">
                                <div class="row g-3">
                                  <div class="col-3">
                                    <div class="media-left">
                                        <div class="btn text-light bg-info">
                                            <i class="far fa-envelope fa-3x"></i>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-9">
                                    <div class="ml-3 media-right">
                                        <h5 class="mb-2 font-weight-light" style="color: #333;">Email</h5>
                                        <span class="font-weight-bold">
                                            in@gmail.com
                                        </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </section>



@endsection