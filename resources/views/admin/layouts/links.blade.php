<?php $favicon = DB::table('logo')->where('slug', 'favicon')->where('tag', 'logo_fav')->first(); ?>

<link rel="icon" href="{{ asset($favicon->value ?? '') }}" type="image/png" sizes="">
<link href="{{ asset('assets/admin/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/admin/css/bootstrap.css.map') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/admin/css/bootstrap.min.css.map') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/admin/css/animate.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css">
<link rel="stylesheet" href="{{ asset('assets/admin/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/css/owl.theme.default.min.css') }}">
<link href="{{ asset('assets/admin/css/custom.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/admin/css/responsive.css') }}" rel="stylesheet" type="text/css">
<link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
