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
                                <h6 class="mb-0">Orders Status</h6>
                            </div>
                            <div class="dropdown ms-auto">
                                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#"
                                    data-bs-toggle="dropdown"><i
                                        class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:;">Add Order</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Product</th>
                                        <th>Photo</th>
                                        <th>Product ID</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Shipping</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Iphone 5</td>
                                        <td><img src="{{ asset('/assets/images/products/01.png') }}"
                                                class="product-img-2" alt="product img"></td>
                                        <td>#9405822</td>
                                        <td><span
                                                class="badge bg-gradient-quepal text-white shadow-sm w-100">Paid</span>
                                        </td>
                                        <td>$1250.00</td>
                                        <td>03 Feb 2020</td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-gradient-quepal" role="progressbar"
                                                    style="width: 100%"></div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Earphone GL</td>
                                        <td><img src="{{ asset('/assets/images/products/02.png') }}"
                                                class="product-img-2" alt="product img"></td>
                                        <td>#8304620</td>
                                        <td><span
                                                class="badge bg-gradient-blooker text-white shadow-sm w-100">Pending</span>
                                        </td>
                                        <td>$1500.00</td>
                                        <td>05 Feb 2020</td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-gradient-blooker" role="progressbar"
                                                    style="width: 60%"></div>
                                            </div>
                                        </td>
                                    </tr>
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
</body>

</html>
