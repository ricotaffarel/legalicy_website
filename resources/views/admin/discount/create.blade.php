@extends('admin.layout.index')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Discount Form</h4>
                        <form class="forms-sample" method="POST" action="{{ Route('admin.discount.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="start_at" class="col-sm-3 col-form-label">Start At</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control @error('start_at') is-invalid @enderror"
                                        value="{{ old('start_at') }}" id="start_at" name="start_at" placeholder="Add Start at">
                                    @error('start_at')
                                        <div class="invalid invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="end_at" class="col-sm-3 col-form-label">End At</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control @error('end_at') is-invalid @enderror" value="{{ old('end_at') }}"
                                        id="end_at" name="end_at" placeholder="Add End at">
                                    @error('end_at')
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
                                        width="100px">
                                    @error('image')
                                        <div class="invalid invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Category</label>
                                <div class="col-sm-9 ">
                                    <select class="js-example-basic-single w-100 @error('image') is-invalid @enderror"
                                        name="service_id" id="service_id">
                                        @forelse ($service_category as $item)
                                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                                        @empty
                                            <option value="">No item</option>
                                        @endforelse
                                    </select>
                                    @error('service_id')
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
                            <a href="{{ Route('admin.service.index') }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
