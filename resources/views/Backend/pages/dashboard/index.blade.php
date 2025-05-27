@extends('backend.layouts.master')
@section('title','Dashboard')
@push('styles')

@endpush
@section('main-content')
<div class="content">
    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-2">
        <div class="mb-3">
            <h1 class="mb-1">Welcome, {{auth()->user()->name ?? ''}}</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-xl-3 col-sm-6 col-12 d-flex">
            <div class="card bg-primary sale-widget flex-fill">
                <div class="card-body d-flex align-items-center">
                    <span class="sale-icon bg-white text-primary">
                        <i class="ti ti-file-text fs-24"></i>
                    </span>
                    <div class="ms-2">
                        <p class="text-white mb-1">Total Pages</p>
                        <div class="d-inline-flex align-items-center flex-wrap gap-2">
                            <h4 class="text-white">{{ $data['totalPages'] }}</h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 d-flex">
            <div class="card bg-secondary sale-widget flex-fill">
                <div class="card-body d-flex align-items-center">
                    <span class="sale-icon bg-white text-secondary">
                        <i class="ti ti-repeat fs-24"></i>
                    </span>
                    <div class="ms-2">
                        <p class="text-white mb-1">Total Menu</p>
                        <div class="d-inline-flex align-items-center flex-wrap gap-2">
                            <h4 class="text-white">{{ $data['totalMenus'] }}</h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 d-flex">
            <div class="card bg-teal sale-widget flex-fill">
                <div class="card-body d-flex align-items-center">
                    <span class="sale-icon bg-white text-teal">
                        <i class="ti ti-gift fs-24"></i>
                    </span>
                    <div class="ms-2">
                        <p class="text-white mb-1">Total Menu Items</p>
                        <div class="d-inline-flex align-items-center flex-wrap gap-2">
                            <h4 class="text-white">{{ $data['totalMenuItems'] }}</h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12 d-flex">
            <div class="card bg-info sale-widget flex-fill">
                <div class="card-body d-flex align-items-center">
                    <span class="sale-icon bg-white text-info">
                        <i class="ti ti-brand-pocket fs-24"></i>
                    </span>
                    <div class="ms-2">
                        <p class="text-white mb-1">Total Visitor</p>
                        <div class="d-inline-flex align-items-center flex-wrap gap-2">
                            <h4 class="text-white">{{ $data['visitorTracking'] }}</h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row sales-board">
        <div class="col-md-12 col-lg-7 col-sm-12 col-12 d-flex">
            <div class="card flex-fill flex-fill">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Daily Visitors</h5>
                    <div class="graph-sets">
                        <div class="dropdown dropdown-wraper">
                            <button class="btn btn-white btn-sm dropdown-toggle d-flex align-items-center" type="button" id="dropdown-day" data-bs-toggle="dropdown" aria-expanded="false">
                                <i data-feather="calendar" class="feather-14"></i>
                                <span id="current-day">Last 30 Days</span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdown-day">
                                <li><a href="javascript:void(0);" class="dropdown-item day-filter" data-days="7">Last 7 Days</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item day-filter" data-days="14">Last 14 Days</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item day-filter" data-days="30">Last 30 Days</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item day-filter" data-days="90">Last 90 Days</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-1 pb-0">
                    <div id="visitors_chart" class="chart-set"></div>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-12 col-lg-5 col-sm-12 col-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Sales by Countries</h5>
                    <div class="graph-sets">
                        <div class="dropdown dropdown-wraper">
                            <button class="btn btn-white btn-sm dropdown-toggle d-flex align-items-center" type="button" id="dropdown-country-sales" data-bs-toggle="dropdown" aria-expanded="false">This Week</button>
                            <ul class="dropdown-menu" aria-labelledby="dropdown-country-sales">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item">This Month</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item">This Year</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="sales_db_world_map" style="height: 265px;"></div>
                    <p class="sales-range"><span class="text-success"><i data-feather="chevron-up" class="feather-16"></i>48%&nbsp;</span>increase compare to last week</p>
                </div>
            </div>
        </div> -->
    </div>
</div>


@endsection
@push('scripts')
<script src="{{asset('backend/assets/plugins/apexchart/apexcharts.min.js')}}"></script>
<!-- <script src="{{asset('backend/assets/plugins/apexchart/chart-data.js')}}"></script> -->
<script>
    $(document).ready(function() {
    let visitorsChart;
    loadVisitorData(30);
    $('.day-filter').on('click', function() {
        const days = $(this).data('days');
        $('#current-day').text($(this).text());
        loadVisitorData(days);
    });
    function loadVisitorData(days) {
        $.ajax({
            url: "{{ route('get-daily-visitors') }}",
            type: 'GET',
            data: { days: days },
            dataType: 'json',
            success: function(response) {
                updateVisitorChart(response);
            },
            error: function(xhr) {
                console.error('Error fetching visitor data:', xhr.responseText);
            }
        });
    }
    function updateVisitorChart(data) {
        if (visitorsChart) {
            visitorsChart.destroy();
        }

        const chartCtx = document.getElementById("visitors_chart");
        const chartConfig = {
            colors: ['#7638ff', '#fda600'],
            series: [
                {
                    name: "Unique Visitors",
                    type: "line",
                    data: data.unique_visitors
                },
                {
                    name: "Page Views",
                    type: "column",
                    data: data.total_visits
                }
            ],
            chart: {
                type: 'line',
                fontFamily: 'Poppins, sans-serif',
                height: 350,
                toolbar: { show: false }
            },
            stroke: {
                width: [3, 0],
                curve: 'smooth'
            },
            plotOptions: {
                bar: {
                    columnWidth: '50%',
                    borderRadius: 4
                }
            },
            dataLabels: {
                enabled: false
            },
            xaxis: {
                categories: data.dates,
                labels: {
                    rotate: -45,
                    style: {
                        fontSize: '12px'
                    }
                }
            },
            yaxis: {
                title: { text: 'Visitors' }
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return val + " visitors";
                    }
                }
            }
        };

        visitorsChart = new ApexCharts(chartCtx, chartConfig);
        visitorsChart.render();
    }
});
</script>
@endpush