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
                    <div class="breadcrumb-title pe-3">Work</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="{{ url('manager/detail_orders') }}"><i class="bx bx-task"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Add Orders</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->

                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="card-title">Add New Work Order</h5>
                        <hr />
                        <div class="form-body mt-4">
                            <div class="row">
                                <div class="col-lg">
                                    <div class="border border-3 p-4 rounded">
                                        <form action="{{ url('/manager/save_order') }}"
                                            method="post"enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="inputProductName" class="form-label">Product Name</label>
                                                <input type="text" class="form-control" id="inputProductName"
                                                    name="product_name" placeholder="Enter product name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputProductQuantity" class="form-label">Quantity</label>
                                                <input type="number" class="form-control" id="inputQuantity"
                                                    name="quantity" placeholder="00">
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputProductDate" class="form-label">Due datee</label>
                                                <input type="date" class="form-control" id="inputdate"
                                                    name="due_date" placeholder="00">
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputProductOperator" class="form-label">Operator</label>
                                                <select class="form-select" id="inputProductOperator"
                                                    name="operator_id">
                                                    <option value="" disabled selected>Pilih Operator</option>
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputProductStatus" class="form-label">Status</label>
                                                <select class="form-select" id="inputProductStatus" name="status">
                                                    <option></option>
                                                    <option value="pending">Pending</option>
                                                    <option value="in progress">In Progres</option>
                                                    <option value="completed">Completed</option>
                                                    <option value="Canceled">Cancel</option>
                                                </select>
                                            </div>
                                            <div class="input_deg">
                                                <input class="btn btn-success" type="submit" value="Submit">
                                            </div>
                                        </form>
                                    </div>
                                </div><!--end row-->
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
