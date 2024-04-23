<?php $favicon = DB::table('logo')->where('slug', 'favicon')->where('tag', 'logo_fav')->first(); ?>
<link rel="shortcut icon" type="image/x-icon" href="{{ asset($favicon->value ?? '') }}">
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css">
<link rel="stylesheet" href="maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<link rel="stylesheet" href="{{ asset('assets/web/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/web/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/web/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/web/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/web/css/smooth-scrollbar.css') }}">
<link rel="stylesheet" href="{{ asset('assets/web/css/lightbox.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/web/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/web/css/responsive.css') }}">
