<?php $logo_dark = DB::table('logo')->where('slug', 'logo_dark')->where('tag', 'logo_fav')->first(); ?>

<div class="sidebar" id='sidebar'>
    <div class="sidebar-scroll">
        <div class="nav-header">
            <a href="{{ route('admin.home') }}" class="brand-logo">
                {{-- <img src="{{ asset($logo_dark->value ?? '') }}" alt="img" class="img-fluid"> --}}
                Dashboard
            </a>
        </div>
        <div class="main-profile">
            <div class="image-bx">
                <img src="{{ asset(Auth::user()->image) }}" alt="img" class="img-fluid">
            </div>
            <h5 class="name"><span>Hello,</span> Name</h5>
            <p class="email">yourmail@gmail.com</p>
        </div>
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            {{-- <li>
                <a class="has-arrow ai-icon" data-bs-toggle="collapse" href="javascript:;" aria-expanded="false">
                    <i class="fa-regular fa-house-user"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul class="collapse dropdown" id="collapseExample">
                    <li><a href="javascirpt:;" class="link-child">Page 1</a></li>
                    <li><a href="javascirpt:;" class="link-child">Page 2</a></li>
                    <li><a href="javascirpt:;" class="link-child">Page 3</a></li>
                </ul>
            </li> --}}

            <li>
                <a class="ai-icon" href="{{ route('admin.home') }}">
                    <i class="fa-regular fa-house-user"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="ai-icon" href="{{ route('web.home') }}" target="_blank">
                    <i class="fa-regular fa-house-user"></i>
                    <span class="nav-text">Website</span>
                </a>
            </li>
            <li>
                <a class="ai-icon" href="{{ route('admin.logoEdit') }}">
                    <i class="fa-regular fa-house-user"></i>
                    <span class="nav-text">Logo & fav</span>
                </a>
            </li>
            <li>
                <a class="ai-icon" href="{{ route('admin.configEdit') }}">
                    <i class="fa-regular fa-house-user"></i>
                    <span class="nav-text">Config</span>
                </a>
            </li>

            <li class="nav-label">Form</li>
        </ul>
    </div>
</div>
