<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) ? $title : 'Dashboard' }}</title>
    @include('admin.layouts.links')
    @yield('css')
</head>

<body>
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')
    <main>
        <div class="content-body">
            <div class="container-fluid pad-cl">
                @yield('content')
            </div>
        </div>
    </main>
    @include('admin.layouts.footer')
    @include('admin.layouts.scripts')
    @yield('scripts')

</body>

</html>
