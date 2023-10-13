@extends('guess.layout.app')

@section('content')
    
<section class="section-80">
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-sm-4 mb-5 mt-2">
            <a href="#" data-toggle="modal" data-target="#proposal" onclick='writeMessages("")'>
                <img src="{{ asset('frontend/img/about.jpg') }}" class="img-fluid">
            </a>
            <center><a href="#" data-toggle="modal" data-target="#proposal" onclick='writeMessages("")' class="btn btn-success btn-block br-0 text-center mt-3">
                Hubungi Kami <i class="fas fa-arrow-right"></i>
            </a></center>
        </div>
        <div class="col-sm-4 mb-5 mt-2">
            <a href="#" data-toggle="modal" data-target="#proposal" onclick='writeMessages("")'>
                <img src="{{ asset('frontend/img/about.jpg') }}" class="img-fluid">
            </a>
            <center><a href="#" data-toggle="modal" data-target="#proposal" onclick='writeMessages("")' class="btn btn-success btn-block br-0 text-center mt-3">
                Hubungi Kami <i class="fas fa-arrow-right"></i>
            </a></center>
        </div>
        <div class="col-sm-4 mb-5 mt-2">
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

@endsection