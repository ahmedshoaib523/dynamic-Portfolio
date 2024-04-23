<?php $logo_dark = DB::table('logo')->where('slug', 'logo_dark')->where('tag', 'logo_fav')->first(); ?>

<div class="page-loader">
    <div class="bounceball"></div>
</div>

<span class="icon-menu">
    <span class="bar"></span>
    <span class="bar"></span>
</span>

<div class="global-color">
    <span class="setting-toggle">
        <i class="fa-regular fa-gear"></i>
    </span>
    <div class="inner">
        <div class="overlay"></div>
        <div class="global-color-option">
            <span class="close-settings">
                <i class="fa-regular fa-times"></i>
            </span>
            <h2>Configuration</h2>
            <div class="global-color-option-inner">
                <p>Colors</p>
                <div class="color-boxed">
                    <a href="#" class="clr-active" onclick="color1();"></a>
                    <a href="#" onclick="color2();"></a>
                    <a href="#" onclick="color3();"></a>
                    <a href="#" onclick="color4();"></a>
                    <a href="#" onclick="color5();"></a>
                    <a href="#" onclick="color6();"></a>
                    <a href="#" onclick="color7();"></a>
                    <a href="#" onclick="color8();"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="responsive-sidebar-menu">
    <div class="overlay"></div>
    <div class="sidebar-menu-inner">
        <div class="menu-wrap">
            <p>Menu</p>
            <ul class="menu scroll-nav-responsive d-flex">
                <li>
                    <a class="scroll-to" href="#home">
                        <i class="fa-regular fa-home"></i> <span>Home</span>
                    </a>
                </li>
                <li>
                    <a class="scroll-to" href="#about">
                        <i class="fa-regular fa-user"></i> <span>About</span>
                    </a>
                </li>

                <li>
                    <a class="scroll-to" href="#resume">
                        <i class="fa-regular fa-briefcase"></i> <span>Resume</span>
                    </a>
                </li>
                <li>
                    <a class="scroll-to" href="#services">
                        <i class="fa-regular fa-stream"></i> <span>Services</span>
                    </a>
                </li>
                <li>
                    <a class="scroll-to" href="#skills">
                        <i class="fa-regular fa-shapes"></i> <span>Skills</span>
                    </a>
                </li>
                <li>
                    <a class="scroll-to" href="#portfolio">
                        <i class="fa-regular fa-grip-vertical"></i> <span>Portfolios</span>
                    </a>
                </li>
                <li>
                    <a class="scroll-to" href="#testimonial">
                        <i class="fa-regular fa-comment"></i> <span>Testimonial</span>
                    </a>
                </li>
                <li>
                    <a class="scroll-to" href="#contact">
                        <i class="fa-regular fa-envelope"></i> <span>Contact</span>
                    </a>
                </li>
            </ul>
        </div>


        <div class="sidebar-social">
            <p>Social</p>
            <ul class="social-links d-flex align-items-center">
                <li>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-dribbble"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>

<ul class="menu scroll-nav d-flex">
    <li>
        <a class="scroll-to" href="#home">
            <span>Home</span> <i class="fa-regular fa-home"></i>
        </a>
    </li>
    <li>
        <a class="scroll-to" href="#about">
            <span>About</span> <i class="fa-regular fa-user"></i>
        </a>
    </li>
    <li>
        <a class="scroll-to" href="#resume">
            <span>Resume</span> <i class="fa-regular fa-briefcase"></i>
        </a>
    </li>
    <li>
        <a class="scroll-to" href="#services">
            <span>Services</span> <i class="fa-regular fa-stream"></i>
        </a>
    </li>
    <li>
        <a class="scroll-to" href="#skills">
            <span>Skills</span> <i class="fa-regular fa-shapes"></i>
        </a>
    </li>
    <li>
        <a class="scroll-to" href="#portfolio">
            <span>Portfolios</span> <i class="fa-regular fa-grip-vertical"></i>
        </a>
    </li>
    <li>
        <a class="scroll-to" href="#testimonial">
            <span>Testimonial</span> <i class="fa-regular fa-comment"></i>
        </a>
    </li>
    <li>
        <a class="scroll-to" href="#contact">
            <span>Contact</span> <i class="fa-regular fa-envelope"></i>
        </a>
    </li>
</ul>

<div class="left-sidebar">
    <div class="sidebar-header d-flex align-items-center justify-content-between">
        <img src="{{ asset('assets/web/images/logo.png') }}" alt="Logo">
        <span class="designation">Front-End Developer</span>
    </div>
    <img class="me" src="{{ asset('assets/web/images/me.jpg') }}" alt="Me">
    <h2 class="email">ahmedshoaib9381@gmail.com</h2>
    <h2 class="address">Base in Los Angeles, CA</h2>
    <p class="copyright">&copy; 2023 Ahmed Shoaib. All Rights Reserved</p>
    <ul class="social-profile d-flex align-items-center flex-wrap justify-content-center">
        <li>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
        </li>
        <li>
            <a href="#"><i class="fa-regular fa-globe"></i></a>
        </li>
        <li>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </li>
        <li>
            <a href="#"><i class="fa-brands fa-github"></i></a>
        </li>
    </ul>
    <a href="#" class="theme-btn">
        <i class="fa-regular fa-envelope"></i> Hire Me!
    </a>
</div>
