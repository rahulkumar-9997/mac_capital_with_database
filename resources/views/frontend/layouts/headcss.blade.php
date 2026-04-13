@yield('meta')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>@yield('title')</title>
<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('keywords')">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="canonical" href="{{ url()->current() }}" />
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FS2B0NCWK3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FS2B0NCWK3');
</script>
<link rel="icon" href="{{asset('fronted/mac-image/logo/fav-icon.png')}}" type="image/x-icon">
<!-- <link rel='stylesheet'
      href='https://fonts.googleapis.com/css?family=Spartan%3A400%2C500%2C600%2C700%2C800%2C900%7CInter%3A300%2C400%2C500%2C600%2C700%2C800%2C900&amp;subset=latin%2Clatin-ext'
      type='text/css' media='all' /> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<!-- Google Fonts -->
<!-- Style -->
<link rel='stylesheet' href="{{asset('fronted/css/bootstrap.min.css')}}" type='text/css' media='all' />
<link rel='stylesheet' href="{{asset('fronted/css/owl.css')}}"  type='text/css' media='all' />
<link rel='stylesheet' href="{{asset('fronted/css/swiper.min.css')}}" type='text/css' media='all' />
<link rel='stylesheet' href="{{asset('fronted/css/jquery.fancybox.min.css')}}" type='text/css' media='all' />
<link rel='stylesheet' href="{{asset('fronted/css/icomoon.css')}}" type='text/css' media='all' />
<link rel='stylesheet' href="{{asset('fronted/css/flexslider.css')}}" type='text/css' media='all' />
<link rel='stylesheet' href="{{asset('fronted/css/font-awesome.min.css')}}" type='text/css' media='all' />
<link rel='stylesheet' href="{{asset('fronted/css/style.css')}}?v={{ env('ASSET_VERSION') }}" type='text/css' media='all' />
<link rel='stylesheet' href="{{asset('fronted/css/scss/elements/theme-css.css')}}?v={{ env('ASSET_VERSION') }}" type='text/css' media='all' />
<link rel='stylesheet' id="creote-color-switcher-css" href="{{asset('fronted/css/scss/elements/color-switcher/color.css')}}" type='text/css' media='all' />
<!-- Style-->
<!----woocommerce---->
<link rel='stylesheet' href="{{asset('fronted/css/woocommerce-layout.css')}}?v={{ env('ASSET_VERSION') }}" type='text/css' media='all' />
<link rel='stylesheet' href="{{asset('fronted/css/woocommerce.css')}}" type='text/css' media='all' />
<link rel='stylesheet' href="{{asset('fronted/css/mac-capital.css')}}?v={{ env('ASSET_VERSION') }}" type='text/css' media='all' />
<link rel='stylesheet' href="{{asset('fronted/css/animate.min.css')}}" type='text/css' media='all' />
<!----woocommerce---->

@stack('css')