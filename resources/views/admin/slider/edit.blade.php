@extends('admin.layout.index')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Choise Us Form</h4>
                <form class="forms-sample" method="POST" action="/admin/slider/{{ $sliders->id }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                  <div class="form-group row">
                    <label for="title" class="col-sm-3 col-form-label">Judul</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $sliders->title) }}" id="title" name="title" placeholder="Masukkan Judul">
                        @error('title')
                            <div class="invalid invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="desc" class="col-sm-3 col-form-label">Deskripsi</label>
                    <div class="col-sm-9">
                      <textarea type="text" class="form-control @error('desc') is-invalid @enderror" value="{{ old('desc', $sliders->desc) }}" id="desc" name="desc" placeholder="Masukkan Deskripsi">{{ old('desc', $sliders->desc) }}</textarea>
                        @error('desc')
                            <div class="invalid invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="image" class="col-sm-3 col-form-label">Gambar</label>
                    <div class="col-sm-9">
                      <input type="file" class="file-upload-info @error('image') is-invalid @enderror" value="{{ old('image', $sliders->image) }}" id="image" name="image" placeholder="Masukkan Gambar">
                      <img src="{{ asset('sliders/' . $sliders->image) }}" class="img-preview img-fluid mt-2" id="image-preview" width="100px">
                        @error('image')
                            <div class="invalid invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                  </div>
                  {{-- <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="image">File upload</label>
                    <input type="file" name="img[]" id="image" class="file-upload-default">
                    <div class="input-group col-sm-9">
                      <input type="text" id="image" name="image" class="form-control file-upload-info" disabled placeholder="Upload Image">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn-sm btn btn-primary" type="button">Upload</button>
                      </span>
                    </div>
                  </div> --}}
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <a href="{{ Route('slider.index') }}" class="btn btn-light">Cancel</a>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection