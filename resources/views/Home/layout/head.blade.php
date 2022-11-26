<meta charset="UTF-8">
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
{{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
<meta name="viewport" content="width=device-width, user-scalable=no" />
<title>{{ isset($title) ? $title : 'Trang chu' }}</title>
<link href="{{ asset('assets/dist/css/adminlte.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets\css\home\index.css') }}">
<link rel="stylesheet" href="{{ asset('assets\css\checkbox\checkbox-toggle.css') }}">
<link rel="stylesheet" href="{{ asset('assets\css\home\menu.css') }}">
<link rel="stylesheet" href="{{ asset('assets\css\home\ProductList.css') }}">

<link rel="stylesheet" href="{{ asset('assets\css\frontend\bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets\css\frontend\font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets\css\frontend\magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('assets\css\frontend\owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets\css\frontend\stylesheet.css') }}">
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/frontend/owl.carousel.min.js') }}"></script>
@yield('css')
