@extends('guess.layout.app')

@section('title')
  @foreach ($configs as $config)
    <title>{{ $config->faq }}</title>
  @endforeach
@endsection

@section('content')
    
    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-4 animated slideInDown mb-4">FaQ</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">FaQ</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
          <h1 class="display-6 mb-5 text-center">Pertanyaan Yang Sering Ditanyakan</h1>            
        </div>
      </div>
      <div class="row g-5">
        <div class="col-lg-12">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            @foreach ($faqs as $faq)
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{ $faq->id }}" aria-expanded="false" aria-controls="flush-collapseOne">
                  {{ $faq->question }}
                </button>
              </h2>
              <div id="flush-collapseOne{{ $faq->id }}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">{!! $faq->answer !!}</div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>

@endsection