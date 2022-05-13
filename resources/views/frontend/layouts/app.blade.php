<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('web-title') | Asiavina Fans</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ url('css/theme.css') }}">
    <link rel="stylesheet" href="{{url('css/style.min.css')}}">
    @yield('link-include')
</head>
<body @yield('body-class')>
    @include('frontend.layouts.navigation')

        <main>
            @yield('content')
            @include('frontend.layouts.contact_modal')
        </main>

        @include('frontend.layouts.footer')
        @include('frontend.layouts.search')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    @yield('custom-scripts')
</body>
</html>
