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
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h6 class="mb-0">All Operators</h6>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Panjang</th>
                                        <th>Pas Photo</th>
                                        <th>Jabatan</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Tanggal Bergabung</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($operators as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <a href="{{ url('manager/detail_operator', $item->id) }}">{{ $item->name }}</a>
                                            </td>
                                            <td>
                                                <a href="{{ url('manager/detail_operator', $item->id) }}">
                                                <img src="{{ asset($item->photo ?? 'Tidak Diketahui') }}"
                                                    class="product-img-2" alt="operator">
                                                </a>
                                            </td>
                                            <td>{{ $item->usertype }}</td>
                                            <td class="text-center">{{ $item->email }}</td>
                                            <td class="text-center">jl.sukarajin 2</td>
                                            <td class="text-center">{{ $item->created_at->diffForHumans() }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
                    title: "Are You Sure To Delete This",
                    text: "This delete will be parmanent",
                    icon: "warning",
                    buttons: true,
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
