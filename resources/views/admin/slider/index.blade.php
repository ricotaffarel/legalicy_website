@extends('admin.layout.index')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="card-title">Slider Table</h4>
                            </div>
                            <div class="col-4">
                                <a href="{{ Route('slider.create') }}" class="btn btn-primary float-right">Tambah Data</a>
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
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $slider)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ asset('sliders/' . $slider->image) }}" alt=""
                                                    class="img-fluid"
                                                    style="max-width: 200px; max-height: 100px; border-radius:0;">
                                            </td>
                                            <td>{{ $slider->title }}</td>
                                            <td>{{ $slider->desc }}</td>
                                            <td>
                                                <a href="/admin/slider/{{ $slider->id }}/edit"
                                                    class="btn btn-warning fw-semibold">Edit</a>
                                                <form action="/admin/slider/{{ $slider->id }}" method="post"
                                                    class="d-inline">
                                                    @csrf <!-- Fitur Security yang berfungsi supaya tidak page expired -->
                                                    @method('delete')
                                                    <button class="btn btn-danger fw-semibold "
                                                        onclick="return confirm('Anda yakin akan menghapus data?');">Delete</button>
                                                </form>
                                                {{-- <a href="/admin/slider/{{ $slider->id }}" onclick="return confirm('Apa Anda yakin akan menghapus data?')" class="btn btn-danger">Delete</a> --}}
                                                {{-- <button onclick="handleDelete({{ $slider->id }})" type="button" data-bs-toggle="modal" data-bs-target="#danger" value="{{ $slider->id }}" class=" btn btn-danger fw-semibold">Delete</button> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Delete --}}
    <form action="/admin/slider/{id}" method="POST" class="d-inline">
        @csrf
        @method('delete')
        <div class="modal fade text-left" id="danger" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="danger">Apakah Anda yakin ingin mengapus data ini?</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-secondary btn-bg-gradient-x-blue-cyan" data-dismiss="modal"
                            value="Tutup">
                        <a id="deleteLink" type="submit" class="btn btn-primary btn-bg-gradient-x-red-pink" name="simpan"
                            value="danger">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        function handleDelete(id) {
            var link = document.getElementById('deleteLink')

            link.href = "{{ URL::to('admin/slider') }}/" + id
            $('#danger').modal('show')
        }
    </script>
@endsection
