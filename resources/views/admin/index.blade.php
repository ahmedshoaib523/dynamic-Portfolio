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
