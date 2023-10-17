@extends('admin.layout.index')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Config Form</h4>
                        <div class="row-lg-12 mt-3">
                            @if (session()->has('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('message') }}
                                </div>
                            @endif
                        </div>
                        <form class="forms-sample" method="POST" action="{{ Route('admin.config.update', $config->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <div class="col-sm-12">
                                <label for="title" class="">Home Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        value="{{ old('title', $config->title) }}" id="title" name="title"
                                        placeholder="Add title">
                                    @error('title')
                                        <div class="invalid invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                    <label for="promo" class="">Promo Title</label>
                                        <input type="text" class="form-control @error('promo') is-invalid @enderror"
                                            value="{{ old('promo', $config->promo) }}" id="promo" name="promo"
                                            placeholder="Add promo title">
                                        @error('promo')
                                            <div class="invalid invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                    <label for="about" class="">About Title</label>
                                        <input type="text" class="form-control @error('about') is-invalid @enderror"
                                            value="{{ old('about', $config->about) }}" id="about" name="about"
                                            placeholder="Add About Title">
                                        @error('about')
                                            <div class="invalid invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                    <label for="service" class="">Service Title</label>
                                        <input type="text" class="form-control @error('service') is-invalid @enderror"
                                            value="{{ old('service', $config->service) }}" id="service" name="service"
                                            placeholder="Add service title">
                                        @error('service')
                                            <div class="invalid invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                    <label for="service_detail" class="">Service Detail Title</label>
                                        <input type="text" class="form-control @error('service_detail') is-invalid @enderror"
                                            value="{{ old('service_detail', $config->service_detail) }}" id="service_detail" name="service_detail"
                                            placeholder="Add Service Detail Title">
                                        @error('service_detail')
                                            <div class="invalid invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                    <label for="faq" class="">FaQ</label>
                                        <input type="text" class="form-control @error('faq') is-invalid @enderror"
                                            value="{{ old('faq', $config->faq) }}" id="faq" name="faq"
                                            placeholder="Add FaQ Title">
                                        @error('faq')
                                            <div class="invalid invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                    <label for="contact" class="">Contact Title</label>
                                        <input type="text" class="form-control @error('contact') is-invalid @enderror"
                                            value="{{ old('contact', $config->contact) }}" id="contact" name="contact"
                                            placeholder="Add Contact Title">
                                        @error('contact')
                                            <div class="invalid invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                    <label for="keyword" class="">Meta Keyword</label>
                                        <input type="text" class="form-control @error('keyword') is-invalid @enderror"
                                            value="{{ old('keyword', $config->keyword) }}" id="keyword" name="keyword"
                                            placeholder="Add Keyword">
                                        @error('keyword')
                                            <div class="invalid invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                    <label for="desc" class="">Meta Description</label>
                                        <input type="text" class="form-control @error('desc') is-invalid @enderror"
                                            value="{{ old('desc', $config->desc) }}" id="desc" name="desc"
                                            placeholder="Add Meta Description">
                                        @error('desc')
                                            <div class="invalid invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="favicon" class="col-sm-3 col-form-label">Favicon</label>
                                <div class="col-sm-9">
                                    <input type="file" class="file-upload-info @error('favicon') is-invalid @enderror"
                                        value="{{ old('favicon') }}" id="image" name="favicon"
                                        placeholder="Masukkan Gambar">
                                    <img src="{{ asset('favicon/' . $config->favicon) }}" alt="" class="img-preview img-fluid mt-2" id="image-preview"
                                        width="100px">
                                    @error('favicon')
                                        <div class="invalid invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a href="{{ Route('admin.config.edit', $config->id) }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
