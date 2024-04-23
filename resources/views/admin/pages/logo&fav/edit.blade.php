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
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <form action="{{ route('admin.logoUpdate') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' type="file" name="{{ $logo_dark->slug }}"
                                        id="{{ $logo_dark->id }}" class="change-img" accept=".png, .jpg, .jpeg" />
                                    <label for="{{ $logo_dark->id }}"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div class="imagePreview">
                                        <img src="{{ asset($logo_dark->value) }}" alt="img" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <h5 style="text-align: center">{{ $logo_dark->name }}</h5>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' type="file" name="{{ $logo_light->slug }}"
                                        id="{{ $logo_light->id }}" class="change-img" accept=".png, .jpg, .jpeg" />
                                    <label for="{{ $logo_light->id }}"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div class="imagePreview">
                                        <img src="{{ asset($logo_light->value) }}" alt="img" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <h5 style="text-align: center">{{ $logo_light->name }}</h5>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' type="file" name="{{ $favicon->slug }}"
                                        id="{{ $favicon->id }}" class="change-img" accept=".png, .jpg, .jpeg" />
                                    <label for="{{ $favicon->id }}"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div class="imagePreview">
                                        <img src="{{ asset($favicon->value) }}" alt="img" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <h5 style="text-align: center">{{ $favicon->name }}</h5>
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
