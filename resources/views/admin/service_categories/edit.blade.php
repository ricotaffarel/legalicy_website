@extends('admin.layout.index')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Data Service Category</h3>
                        <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span
                                class="text-primary">3 unread alerts!</span></h6>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Recipient's username"
                                aria-label="Recipient's username">
                            <div class="input-group-append">
                                <button class="btn btn-sm btn-primary" type="button">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Data</h4>
                    <form action={{ route('admin.service.category.update', $service_category->id) }} method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="exampleInputUsername1">Category Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $service_category->title }}" placeholder="Category Name">
                        </div>
                        <button class="btn btn-primary" type="submit">Update Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
