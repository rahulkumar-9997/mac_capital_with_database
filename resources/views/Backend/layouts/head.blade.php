
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="base-url" content="{{URL::to('/')}}">
<meta name="author" content="Mac Capital">
<meta name="robots" content="index, follow">
@yield('meta')
<title>@yield('title')</title>
<link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/assets/mac-img/fav-icon.png')}}">
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('backend/assets/mac-img/fav-icon.png')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap-datetimepicker.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/animate.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/plugins/daterangepicker/daterangepicker.css')}}">

<link rel="stylesheet" href="{{asset('backend/assets/plugins/tabler-icons/tabler-icons.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/plugins/fontawesome/css/all.min.css')}}">

<link rel="stylesheet" href="{{asset('backend/assets/plugins/toastr/toastify.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
@stack('styles')
 