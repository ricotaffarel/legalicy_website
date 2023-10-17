@extends('guess.layout.app')

@section('title')
  @foreach ($configs as $config)
    <title>{{ $config->promo }}</title>
  @endforeach
@endsection

@section('content')
    
<section class="section-80">
    <div class="container mt-5">
      <div class="row justify-content-center">
        @foreach ($discounts as $discount)
        <div class="col-sm-4 mb-5 mt-2">
            <a href="#" data-toggle="modal" data-target="#proposal" onclick='writeMessages("")'>
                <center><img src="{{ asset('discounts/' . $discount->image) }}" class="img-fluid" style="max-width: 250px; max-height: 500px;"></center>
            </a>
            <center><a href="#" data-toggle="modal" data-target="#proposal" onclick='writeMessages("")' class="btn btn-success btn-block br-0 text-center mt-3">
                Hubungi Kami <i class="fas fa-arrow-right"></i>
            </a></center>
        </div>
        @endforeach
      </div>
    </div>
  </section>

@endsection