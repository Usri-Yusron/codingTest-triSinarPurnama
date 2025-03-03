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
        @include('components.manager.main')
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
