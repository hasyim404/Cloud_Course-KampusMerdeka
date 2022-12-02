@extends('admin.index')
@section('title', 'Dashboard')
@section('info', 'Dashboard')
@section('data1', 'Dashboard')
@section('content')
<div class="col-lg-12">
    <div class="row">

        <div class="col-lg-12">
            <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card sales-card">

                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Course <span>| Saat ini</span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-cloud-haze2"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $course }}</h6>
                            {{-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}
                        </div>
                    </div>
                </div>

                </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card revenue-card">

                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Feedback <span>| Di Terima</span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-info-lg"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $feedback }}</h6>
                            {{-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}

                        </div>
                    </div>
                </div>

                </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-md-4">

                <div class="card info-card customers-card">

                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Users <span>| Telah mendaftar</span></h5>

                    <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                        <h6>{{ $user }}</h6>
                        {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}

                    </div>
                    </div>

                </div>
                </div>

            </div><!-- End Customers Card -->

            </div>
        </div>
        <!-- End Left side columns -->

        <div class="col-lg-8">
            <div class="card" >
                <div class="card-body">
                    <h5 class="card-title">Testimoni <span>| Yang Masuk</span></h5>

                    <div class="table-responsive">
                        <table class="table table-borderless datatable" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama&nbsp;User</th>
                                    <th scope="col">Isi&nbsp;Testimoni</th>
                                    <th class="text-center" scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php $no=1; @endphp
                                @foreach ( $testimoni as $data )
                                @php
                                    switch ($data->status) {
                                        case 0:
                                            $class = 'bg-danger';
                                            $status = 'Hide';
                                            break;
                                        case 1:
                                            $class = 'bg-success';
                                            $status = 'Show';
                                            break;

                                        default;
                                        break;
                                    };
                                @endphp
                                <tr>
                                    <th scope="row">{{ $no++ }}.</th>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->isi_pesan }}</td>
                                    <td class="text-center"><span class="badge {{ $class }}">{{ $status }}</span></div></td>
                                </tr>    
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Grafik Perbandingan Status</h5>
            
                    <!-- Pie Chart -->
                    <div id="pieChart" style="min-height: 400px;" class="echart"></div>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                echarts.init(document.querySelector("#pieChart")).setOption({
                                    title: {
                                        text: '',
                                        subtext: '',
                                        left: 'center'
                                    },
                                    tooltip: {
                                        trigger: 'item'
                                    },
                                    legend: {
                                        orient: 'vertical',
                                        left: 'left'
                                    },
                                    series: [{
                                        name: 'Access From',
                                        type: 'pie',
                                        radius: '50%',
                                        data: [
                                            @foreach ($ar_status as $status)
                                                {
                                                value: {{ $status->jumlah }},
                                                name: '{{ $status->status }}'
                                                },    
                                            @endforeach
                                        ],
                                        emphasis: {
                                            itemStyle: {
                                                shadowBlur: 10,
                                                shadowOffsetX: 0,
                                                shadowColor: 'rgba(0, 0, 0, 0.5)'
                                            }
                                        }
                                    }]
                                });
                            });
                        </script>
                    </div>
                    <!-- End Pie Chart -->
                </div>
            </div>
        </div>
            
        
    </div>
</div>
@endsection