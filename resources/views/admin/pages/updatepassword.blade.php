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
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                <form action="{{ route('admin.PasswordUppdate') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="input-main">
                                <label for="">Old Password</label>
                                <div class="form-group">
                                    <input id="password-field" type="password" class="form-control"
                                        placeholder="**************" name="current_password" required="">
                                    <span toggle="#password-field"
                                        class="fa-eye-slash field-icon1 toggle-password"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="input-main">
                                <label for="">New Password</label>
                                <div class="form-group">
                                    <input id="password-field1" type="password" class="form-control"
                                        placeholder="**************" name="newpassword" required="">
                                    <span toggle="#password-field1"
                                        class="fa-eye-slash field-icon1 toggle-password"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="input-main">
                                <label for="">Confirm Password</label>
                                <div class="form-group">
                                    <input id="password-field2" type="password" class="form-control"
                                        placeholder="**************" name="cnfpassword" required="">
                                    <span toggle="#password-field2"
                                        class="fa-eye-slash field-icon1 toggle-password"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="btn-box col-12 col-sm-8 col-md-6 col-lg-5 col-xl-5 col-xxl-5 mx-auto">
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
@section('scripts')
    <script>
        @if (Session::has('validationerror'))
            @foreach (Session::get('validationerror') as $error)
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    "debug": false,
                    "positionClass": "toast-bottom-right",
                }
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    </script>
@endsection
