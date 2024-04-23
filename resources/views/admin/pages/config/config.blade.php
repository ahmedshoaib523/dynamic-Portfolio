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

    <div class="sub-content">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                <form action="{{ route('admin.configUpdate') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="input-main">
                                <label for="">Email Address</label>
                                <input type="email" class="form-control" placeholder="Email" name="email" id=""
                                    value="{{ $config->email }}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="input-main">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" placeholder="Phone" name="phone_no"
                                    id="" value="{{ $config->phone_no }}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="input-main">
                                <label for="">Facebook</label>
                                <input type="text" class="form-control" placeholder="Facebook" name="facebook"
                                    id="" value="{{ $config->facebook }}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="input-main">
                                <label for="">Instagram</label>
                                <input type="text" class="form-control" placeholder="Instagram" name="instagram"
                                    id="" value="{{ $config->instagram }}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="input-main">
                                <label for="">Youtube</label>
                                <input type="text" class="form-control" placeholder="Youtube" name="youtube"
                                    id="" value="{{ $config->youtube }}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="input-main">
                                <label for="">Twitter</label>
                                <input type="text" class="form-control" placeholder="Twitter" name="twitter"
                                    id="" value="{{ $config->twitter }}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="form-group">
                                <label for="">Address</label>
                                <textarea class="form-control" id="basic-example" rows="7" name="address" placeholder="Address">{{ $config->address }}</textarea>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="form-group">
                                <label for="">Address</label>
                                <textarea class="form-control" id="" rows="7" name="copyright" placeholder="Address">{{ $config->copyright }}</textarea>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="form-group">
                                <label for="">Address</label>
                                <textarea class="form-control" id="" rows="7" name="foot_desc" placeholder="Address">{{ $config->foot_desc }}</textarea>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="btn-box col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 col-xxl-2 mx-auto">
                                <button type="submit" class="btn btn-primary hvr-bounce-to-right btn-wh">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <style>
        .btn-box {
            margin: 20px 0 0 0;
        }

        .btn-box .btn-wh {
            height: 50px;
            width: 100%;
        }
    </style>
@endsection
