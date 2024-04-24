@extends('admin.layouts.master')
@section('content')
    <div class="db-banner">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                <div class="welcom-text">
                    <h4>Hi, welcome back!</h4>
                    <p>Your business dashboard template</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                <div class="welcom-text">
                    <ul>
                        <li>Url</li>
                        <li><a href="javascript:;">Your-link.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="card-box">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                <div class="card card-count">
                    <div class="main-img">
                        <img src="images/hinata.jpg" alt="img" class="img-fluid">
                    </div>
                    <div class="desc">
                        <h5 id="number1">100<span>K</span></h5>
                        <h4>Items</h4>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                <div class="card card-count">
                    <div class="main-img">
                        <img src="images/hinata.jpg" alt="img" class="img-fluid">
                    </div>
                    <div class="desc">
                        <h5 id="number2">200<span>K</span></h5>
                        <h4>User</h4>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                <div class="card card-count">
                    <div class="main-img">
                        <img src="images/hinata.jpg" alt="img" class="img-fluid">
                    </div>
                    <div class="desc">
                        <h5 id="number3">300<span>K</span></h5>
                        <h4>Products</h4>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                <div class="card card-count">
                    <div class="main-img">
                        <img src="images/hinata.jpg" alt="img" class="img-fluid">
                    </div>
                    <div class="desc">
                        <h5 id="number4">400<span>K</span></h5>
                        <h4>Stokes</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="chart-box">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div dir="ltr">
                    <div id="chart"></div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div dir="ltr">
                    <div id="chart-pie"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        var options = {
            series: [{
                name: "Desktops",
                data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
            }],
            chart: {
                height: 350,
                type: 'line',
                zoom: {
                    enabled: false
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'straight'
            },
            title: {
                text: 'Product Trends by Month',
                align: 'left'
            },
            grid: {
                row: {
                    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.5
                },
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

        var options = {
            series: [{
                name: 'Net Profit',
                data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
            }, {
                name: 'Revenue',
                data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
            }, {
                name: 'Free Cash Flow',
                data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
            }],
            chart: {
                type: 'bar',
                height: 350
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
            },
            yaxis: {
                title: {
                    text: '$ (thousands)'
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return "$ " + val + " thousands"
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart-pie"), options);
        chart.render();
    </script>
@endsection
