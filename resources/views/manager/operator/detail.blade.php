<!doctype html>
<html lang="en">

<head>
    @include('components.manager.header')
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        @include('components.manager.sidebar')
        <!--end sidebar wrapper -->

        <!--start header -->
        @include('components.manager.navbar')
        <!--end header -->

        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Operator Profile</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="{{ url('manager/detail_operators') }}"><i
                                            class="bx bx-user-circle"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Operator Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->
                <div class="container">
                    <div class="main-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <img src="{{ asset($operator->photo ?? 'Tidak Diketahui') }}" alt="operator"
                                                class="" width="110">
                                            <div class="mt-3">
                                                <h4>{{ $operator->name }}</h4>
                                                <p class="text-muted font-size-sm">{{ $operator->usertype }}</p>
                                                <button onclick="confirmation(event)"
                                                    class="btn btn-outline-primary">Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Full Name</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control"
                                                    value="{{ $operator->name }}" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Email</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control"
                                                    value="{{ $operator->email }}" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Jabatan</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control"
                                                    value="{{ $operator->usertype }}" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Address</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control"
                                                    value="Bay Area, San Francisco, CA" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->

        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        @include('components.manager.footer')
        <!--End footer-->
    </div>
    <!--end wrapper-->

    <!--start switcher-->
    @include('components.manager.setting')
    <!--end switcher-->

    <!-- Bootstrap JS -->
    <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('/assets/plugins/chartjs/js/Chart.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/chartjs/js/Chart.extension.js') }}"></script>
    <script src="{{ asset('/assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
    <!--Morris JavaScript -->
    <script src="{{ asset('/assets/plugins/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/morris/js/morris.js') }}"></script>
    <script src="{{ asset('/assets/js/index2.js') }}"></script>
    <!--app JS-->
    <script src="{{ asset('/assets/js/app.js') }}"></script>

    {{-- sweet alert --}}
    <script type="text/javascript">
        function confirmation(ev) {
            ev.preventDefault();

            var urlToRedirect = ev.currentTarget.getAttribute('href');

            console.log(urlToRedirect);

            swal({
                    title: "Under Maintenance!",
                    text: "Fitur ini belum tersedia untuk saat ini!",
                    icon: "warning",
                    buttons: false,
                    dangerMode: true,
                })

                .then((willCancel) => {
                    if (willCancel) {
                        window.location.href = urlToRedirect;
                    }
                });
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- sweet alert selesai --}}
</body>

</html>
