<?php $logo_dark = DB::table('logo')->where('slug', 'logo_dark')->where('tag', 'logo_fav')->first(); ?>

<header class="header" id="header">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid p-0">
            <a class="navbar-brand" href="#"></a>
            <ul class="main-ul">
                <div class="spaces">
                    <ul>
                        <li class="nav-item">
                            <button type="button" class="toggle" id="toggle">
                                <span></span>
                            </button>
                        </li>

                        <li class="nav-item no-bg">
                            <a href="javascriprt:;">
                                <img src="{{ asset($logo_dark->value ?? '') }}" alt="img" class="img-fluid logo-top">
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="spaces">
                    <ul>
                        <li class="nav-item dropdown">
                            <a class="nav-link profile-box" href="#" role="button" data-bs-toggle="dropdown">
                                <div class="main-img">
                                    <img src="{{ asset(Auth::user()->image) }}" alt="img" class="img-fluid">
                                </div>
                                <div class="info">
                                    <h5>Name</h5>
                                    <p>Role</p>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="{{ route('admin.profileEdit') }}" class="dropdown-item ai-icon">
                                    <i class="fa-regular fa-user"></i>
                                    <span class="ms-2">Profile</span>
                                </a>
                                <a href="{{ route('admin.PasswordEdit') }}" class="dropdown-item ai-icon">
                                    <i class="fa-regular fa-unlock"></i>
                                    <span class="ms-2">Update Password</span>
                                </a>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item ai-icon">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    <span class="ms-2">{{ __('Logout') }}</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </ul>
        </div>
    </nav>

    <div class="sub-header">
        <div class="d-flex align-items-center flex-wrap me-auto">
            <h5 class="dashboard_bar">Dashboard</h5>
        </div>
    </div>
</header>
