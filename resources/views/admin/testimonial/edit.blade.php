@extends('admin.layout.index')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Testimony Form</h4>
                        <form class="forms-sample" method="POST" action="{{ Route('admin.testimonial.update', $testimonials->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name', $testimonials->name) }}" id="name" name="name"
                                        placeholder="Add name">
                                    @error('name')
                                        <div class="invalid invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="job" class="col-sm-3 col-form-label">Job</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('job') is-invalid @enderror"
                                        value="{{ old('job', $testimonials->job) }}" id="job" name="job"
                                        placeholder="Add job">
                                    @error('job')
                                        <div class="invalid invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="testimony" class="col-sm-3 col-form-label">Testimony</label>
                                <div class="col-sm-9">
                                    <textarea type="text" class="form-control @error('testimony') is-invalid @enderror" value="{{ old('testimony') }}"
                                        id="testimony" name="testimony" placeholder="Add testimony">{{ $testimonials->testimony }}</textarea>
                                    @error('testimony')
                                        <div class="invalid invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="image" class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="file-upload-info @error('image') is-invalid @enderror"
                                        value="{{ old('image') }}" id="image" name="image"
                                        placeholder="Masukkan Gambar">
                                    <img alt="" class="img-preview img-fluid mt-2" id="image-preview"
                                        width="100px" src="{{ asset('testimonials/' . $testimonials->image) }}">
                                    @error('image')
                                        <div class="invalid invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a href="{{ Route('admin.testimonial.index') }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
