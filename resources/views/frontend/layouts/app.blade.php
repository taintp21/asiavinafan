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
        @if (Auth::check())
            <div class="dropdown dropend">
                <div class="dropdown-toggle avatar" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer;">
                    <img class="avatar__image" src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" />
                </div>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser" id="menuAuth">
                    <li><a class="dropdown-item" href="{{url('admin')}}">Admin site</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-danger fw-bold" href="{{url('logout')}}">Logout</a></li>
                </ul>
            </div>
        @endif
    </main>

    @include('frontend.layouts.footer')
    @include('frontend.layouts.search')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    @yield('custom-scripts')
</body>
</html>
