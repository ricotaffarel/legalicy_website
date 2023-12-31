<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href={{ asset('backend/vendors/feather/feather.css') }}>
    <link rel="stylesheet" href={{ asset('backend/vendors/ti-icons/css/themify-icons.css') }}>
    <link rel="stylesheet" href={{ asset('backend/vendors/css/vendor.bundle.base.css') }}>
    <link rel="stylesheet" href={{ asset('backend/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('backend/vendors/select2/select2.min.css') }}>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href={{ asset('backend/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}>
    <link rel="stylesheet" href={{ asset('backend/vendors/ti-icons/css/themify-icons.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('backend/js/select.dataTables.min.css') }}>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href={{ asset('backend/css/vertical-layout-light/style.css') }}>
    <!-- endinject -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="shortcut
        icon" href={{ asset('backend/images/favicon.png') }} />
</head>

<body>
    <div class="container-scroller">
        {{-- navbar --}}
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="index.html"><img
                        src={{ asset('backend/images/logo.svg') }} class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img
                        src={{ asset('backend/images/logo-mini.svg') }} alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src={{ asset('backend/images/faces/face28.jpg') }} alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <a class="dropdown-item">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        {{-- end navbar --}}

        <div class="container-fluid page-body-wrapper">
            {{-- sidebar --}}
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('admin.dashboard') }}>
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ Route('admin.slider.index') }}">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">Slider</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('admin.discount.index') }}>
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">Discount</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('admin.service.index') }}>
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">Service</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">Master Data</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href={{ route('admin.service.category.index') }}>Category
                                        Service</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('admin.choiseus.index') }}">Choise
                                        Us</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
            {{-- end sidebar --}}
            <div class="main-panel">
                @yield('content')
                {{-- footer --}}
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.
                            Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin
                                template</a> from BootstrapDash. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                            with <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a
                                href="https://www.themewagon.com/" target="_blank">Themewagon</a></span>
                    </div>
                </footer>
                {{-- end footer --}}
            </div>
        </div>
    </div>

    <!-- plugins:js -->
    <script src={{ asset('backend/vendors/js/vendor.bundle.base.js') }}></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src={{ asset('backend/vendors/chart.js/Chart.min.js') }}></script>
    <script src={{ asset('backend/vendors/datatables.net/jquery.dataTables.js') }}></script>
    <script src={{ asset('backend/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}></script>
    <script src={{ asset('backend/vendors/select2/select2.min.js') }}></script>
    <script src={{ asset('backend/vendors/typeahead.js/typeahead.bundle.min.js') }}></script>
    <script src={{ asset('backend/js/dataTables.select.min.js') }}></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src={{ asset('backend/js/off-canvas.js') }}></script>
    <script src={{ asset('backend/js/hoverable-collapse.js') }}></script>
    <script src={{ asset('backend/js/template.js') }}></script>
    <script src={{ asset('backend/js/settings.js') }}></script>
    <script src={{ asset('backend/js/todolist.js') }}></script>

    <script src="{{asset('backend/js/file-upload.js')}}"></script>
    <script src="{{asset('backend/js/typeahead.js')}}"></script>
    <script src="{{asset('backend/js/select2.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src={{ asset('backend/js/dashboard.js') }}></script>
    <script src={{ asset('backend/js/Chart.roundedBarCharts.js') }}></script>
    <!-- End custom js for this page-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#image').on('change', function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image-preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
            });
        });
    </script>
</body>

</html>
