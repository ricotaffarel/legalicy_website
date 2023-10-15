@extends('admin.layout.index')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Service Category</h4>
                        <form class="forms-sample" method="POST" action="{{ Route('admin.service.category.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Judul</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}" id="name" name="name"
                                        placeholder="Masukkan Judul">
                                    @error('name')
                                        <div class="invalid invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a href="{{ Route('admin.service.category.index') }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
