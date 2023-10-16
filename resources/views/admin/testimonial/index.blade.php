@extends('admin.layout.index')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Data Testimonial</h3>
                        <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span
                                class="text-primary">3 unread alerts!</span></h6>
                    </div>
                    <div class="col-12 col-xl-4">
                        <form action={{ route('admin.testimonial.index') }} method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-sm btn-primary" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Testimonial Table</h4>
                        </div>
                        <div class="col-4">
                            <a class="btn btn-primary float-right" href={{ route('admin.testimonial.create') }}>Add
                                Data</a>
                        </div>
                    </div>
                    <div class="row-lg-12 mt-3">
                        @if (session()->has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Job</th>
                                    <th>Testimony</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($testimonials as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td> <img src="{{ asset('testimonials/' . $item->image) }}" alt=""
                                                class="img-fluid"
                                                style="max-width: 200px; max-height: 100px; border-radius:0;"></td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->job }}</td>
                                        <td>{{ $item->testimony }}</td>
                                        <td><a class="btn btn-warning" style="margin-right: 10px"
                                                href={{ route('admin.testimonial.edit', $item->id) }}>Edit</a>
                                            <a class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#modaldelete">Hapus</a>

                                            <div class="modal fade" id="modaldelete" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Are you sure
                                                                delete this data ?</h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <form action={{ route('admin.testimonial.destroy', $item->id) }}
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button class="btn btn-danger" type="submit">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Data not found</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center" id="pagination">
                            {{ $testimonials->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
