@extends('admin.layout.index')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Contact Us Form</h4>
                        <div class="row-lg-12 mt-3">
                            @if (session()->has('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('message') }}
                                </div>
                            @endif
                        </div>
                        <form class="forms-sample" method="POST" action="{{ Route('admin.contact.update', $contact->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <div class="col-sm-12">
                                <label for="address" class="">Address</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror"
                                        value="{{ old('address', $contact->address) }}" id="address" name="address"
                                        placeholder="Add address">
                                    @error('address')
                                        <div class="invalid invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                <label for="phone" class="">Phone</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                        value="{{ old('phone', $contact->phone) }}" id="phone" name="phone"
                                        placeholder="Add phone">
                                    @error('phone')
                                        <div class="invalid invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                <label for="email" class="">Email</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email', $contact->email) }}" id="email" name="email"
                                        placeholder="Add email">
                                    @error('email')
                                        <div class="invalid invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                <label for="website" class="">Website</label>
                                    <input type="text" class="form-control @error('website') is-invalid @enderror"
                                        value="{{ old('website', $contact->website) }}" id="website" name="website"
                                        placeholder="Add website">
                                    @error('website')
                                        <div class="invalid invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                    <label for="instagram" class="">Instagram</label>
                                        <input type="text" class="form-control @error('instagram') is-invalid @enderror"
                                            value="{{ old('instagram', $contact->instagram) }}" id="instagram" name="instagram"
                                            placeholder="Add instagram">
                                        @error('instagram')
                                            <div class="invalid invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                    <label for="tiktok" class="">Tik Tok</label>
                                        <input type="text" class="form-control @error('tiktok') is-invalid @enderror"
                                            value="{{ old('tiktok', $contact->tiktok) }}" id="tiktok" name="tiktok"
                                            placeholder="Add tiktok">
                                        @error('tiktok')
                                            <div class="invalid invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                    <label for="twitter" class="">Twitter</label>
                                        <input type="text" class="form-control @error('twitter') is-invalid @enderror"
                                            value="{{ old('twitter', $contact->twitter) }}" id="twitter" name="twitter"
                                            placeholder="Add twitter">
                                        @error('twitter')
                                            <div class="invalid invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                    <label for="facebook" class="">Facebook</label>
                                        <input type="text" class="form-control @error('facebook') is-invalid @enderror"
                                            value="{{ old('facebook', $contact->facebook) }}" id="facebook" name="facebook"
                                            placeholder="Add facebook">
                                        @error('facebook')
                                            <div class="invalid invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                    <label for="youtube" class="">YouTube</label>
                                        <input type="text" class="form-control @error('youtube') is-invalid @enderror"
                                            value="{{ old('youtube', $contact->youtube) }}" id="youtube" name="youtube"
                                            placeholder="Add youtube">
                                        @error('youtube')
                                            <div class="invalid invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                    <label for="linkedin" class="">LinkedIn</label>
                                        <input type="text" class="form-control @error('linkedin') is-invalid @enderror"
                                            value="{{ old('linkedin', $contact->linkedin) }}" id="linkedin" name="linkedin"
                                            placeholder="Add linkedin">
                                        @error('linkedin')
                                            <div class="invalid invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                <label for="maps" class="">Maps</label>
                                    <input type="text" class="form-control @error('maps') is-invalid @enderror"
                                        value="{{ old('maps', $contact->maps) }}" id="maps" name="maps"
                                        placeholder="Add maps">
                                    @error('maps')
                                        <div class="invalid invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                <label for="iframe" class="">Iframe</label>
                                    <input type="text" class="form-control @error('iframe') is-invalid @enderror"
                                        value="{{ old('iframe', $contact->iframe) }}" id="iframe" name="iframe"
                                        placeholder="Add iframe">
                                    @error('iframe')
                                        <div class="invalid invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a href="{{ Route('admin.contact.edit', $contact->id) }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
