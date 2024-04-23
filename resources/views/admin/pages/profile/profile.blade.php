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
                <form action="{{ route('admin.profileUpdate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $profile->id }}">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type="file" name="image" id="imageUpload1" class="change-img"
                                        accept=".png, .jpg, .jpeg">
                                    <label for="imageUpload1"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div class="imagePreview">
                                        <img src="{{ asset($profile->image) }}"
                                            alt="img" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="input-main">
                                <label for="">Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" id=""
                                    value="{{ $profile->name }}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="input-main">
                                <label for="">Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email " id=""
                                    value="{{ $profile->email }}" disabled="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="input-main">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" placeholder="Phone" name="phone" id=""
                                    value="{{ $profile->phone }}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="input-main">
                                <label for="">Address</label>
                                <textarea class="form-control" id="" rows="7" name="address" placeholder="Address">{{ $profile->address }}</textarea>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="btn-box col-12 col-sm-6 col-md-6 col-lg-12 col-xl-6 col-xxl-4 mx-auto">
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
