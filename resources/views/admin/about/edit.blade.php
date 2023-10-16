@extends('admin.layout.index')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body"> 
                        <h4 class="card-title">About Us Form</h4>
                        <div class="row-lg-12 mt-3">
                            @if (session()->has('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('message') }}
                                </div>
                            @endif
                        </div>
                        <form class="forms-sample" method="POST" action="{{ Route('admin.about.update', $about->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group row">
                                <label for="title" class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        value="{{ old('title', $about->title) }}" id="title" name="title"
                                        placeholder="Add title">
                                    @error('title')
                                        <div class="invalid invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="desc" class="col-sm-3 col-form-label">About Us Description</label>
                                <div class="col-sm-9">
                                    <textarea type="text" class="form-control @error('desc') is-invalid @enderror"
                                        value="{{ old('desc', $about->desc) }}" id="task-textarea" name="desc"
                                        placeholder="Add Description">{{ old('desc', $about->desc) }}</textarea>
                                    @error('desc')
                                        <div class="invalid invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="experience" class="col-sm-3 col-form-label">Experience</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('experience') is-invalid @enderror"
                                        value="{{ old('experience', $about->experience) }}" id="experience" name="experience"
                                        placeholder="Add experience">
                                    @error('experience')
                                        <div class="invalid invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="client" class="col-sm-3 col-form-label">Clients</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('client') is-invalid @enderror"
                                        value="{{ old('client', $about->client) }}" id="client" name="client"
                                        placeholder="Add client">
                                    @error('client')
                                        <div class="invalid invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="project" class="col-sm-3 col-form-label">Projects</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('project') is-invalid @enderror"
                                        value="{{ old('project', $about->project) }}" id="project" name="project"
                                        placeholder="Add project">
                                    @error('project')
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
                                    <img src="{{ asset('abouts/' . $about->image) }}" alt="" class="img-preview img-fluid mt-2" id="image-preview"
                                        width="100px">
                                    @error('image')
                                        <div class="invalid invalid-feedback">{{ $message }}</div>
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
                            <a href="{{ Route('admin.about.edit', $about->id) }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
