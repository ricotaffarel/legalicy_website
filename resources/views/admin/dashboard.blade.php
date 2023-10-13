@extends('admin.layout.index')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Dashboard</h3>
                        <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span
                                class="text-primary">3 unread alerts!</span></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col grid-margin transparent">
                <div class="row">
                    <div class="col-md-2 stretch-card transparent" style="margin-bottom: 10px">
                        <div class="card card-light-blue">
                            <div class="card-body">
                                <p class="mb-4">Slider</p>
                                <p class="fs-30 mb-2">34040</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 stretch-card transparent" style="margin-bottom: 10px">
                        <div class="card card-light-danger">
                            <div class="card-body">
                                <p class="mb-4">Service</p>
                                <p class="fs-30 mb-2">47033</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 stretch-card transparent" style="margin-bottom: 10px">
                        <div class="card card-light-blue">
                            <div class="card-body">
                                <p class="mb-4">Service Category</p>
                                <p class="fs-30 mb-2">47033</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 stretch-card transparent" style="margin-bottom: 10px">
                        <div class="card card-light-danger">
                            <div class="card-body">
                                <p class="mb-4">Discount</p>
                                <p class="fs-30 mb-2">47033</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 stretch-card transparent" style="margin-bottom: 10px">
                        <div class="card card-light-blue">
                            <div class="card-body">
                                <p class="mb-4">Choise Us</p>
                                <p class="fs-30 mb-2">47033</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
