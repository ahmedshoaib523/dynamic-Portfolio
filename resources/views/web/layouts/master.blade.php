<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) ? $title : 'My portfolio' }}</title>
    @include('web.layouts.links')
    @yield('css')
</head>

<body>

    @include('web.layouts.header')
        @yield('content')
    @include('web.layouts.footer')

    @include('web.layouts.scripts')
    @yield('scripts')
</body>

</html>
