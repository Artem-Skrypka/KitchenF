<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<link href="{{ asset('assets/fontawesome/css/fontawesome.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/fontawesome/css/brands.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/fontawesome/css/solid.css') }}" rel="stylesheet">
    @livewireStyles
	<title>KitchenF</title>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    @if(Request::is('/'))
    <x-parallax/>   
    <x-popup_login/>
    <x-popup_singup/>    
    @endif
	<div class="wrapper">
        @if(Request::is('/'))
            <x-__header_big/>
        @else
            <x-__header_small/>
        @endif
		<div class="container">
            @yield('content')
		</div>
	</div>

    @yield('js_src')

    @livewireScripts
    
	<script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>
</body>
</html>