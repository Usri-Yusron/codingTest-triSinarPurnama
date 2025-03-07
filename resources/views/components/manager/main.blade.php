<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-12 col-lg-xl">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h6 class="mb-0">Order Overview</h6>
                            </div>
                        </div>
                        <canvas id="orderChart"></canvas>
                    </div>
                </div>
            </div>
        </div><!--end row-->


        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-5">
            <div class="col">
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary font-14">Total Orders</p>
                                <h5 class="my-0">{{ $order }}</h5>
                            </div>
                            <div class="text-primary ms-auto font-30"><i class='bx bx-task'></i>
                            </div>
                        </div>
                    </div>
                    <div class="mt-1" id="chart1"></div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary font-14">Total Operator</p>
                                <h5 class="my-0">{{ $operator }}</h5>
                            </div>
                            <div class="text-danger ms-auto font-30"><i class='bx bx-user-circle'></i>
                            </div>
                        </div>
                    </div>
                    <div class="mt-1" id="chart2"></div>
                </div>
            </div>
        </div><!--end row-->


        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <h6 class="mb-2">Orders Status</h6>
                    </div>
                </div>
                <div class="table-responsive">

                    <table class="table align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Order ID</th>
                                <th>Operator</th>
                                <th>Quantity</th>
                                <th>Deadline</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->id }}</td>
                                    <td>
                                        <img src="{{ asset($item->operator->photo ?? 'Tidak Diketahui') }}"
                                            class="product-img-2" alt="operator">
                                    </td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ $item->due_date }}</td>
                                    <td>{{ $item->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        fetch("{{ route('chart.data') }}") // Ambil data dari route
            .then(response => response.json())
            .then(data => {
                const labels = data.map(item => item.status); // Ambil status
                const values = data.map(item => item.total); // Ambil jumlah order

                const ctx = document.getElementById('orderChart');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Jumlah Order',
                            data: values,
                            backgroundColor: [
                                'rgb(255, 99, 132, 0.2)',
                                'rgb(54, 162, 235, 0.2)',
                                'rgb(255, 205, 86, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgb(255, 99, 132)',
                                'rgb(54, 162, 235)',
                                'rgb(255, 205, 86)',
                                'rgba(255, 159, 64)'
                            ],
                            borderWidth: 1
                        }]
                    }
                });
            });
    });
</script>
