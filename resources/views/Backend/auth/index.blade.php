<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mac Capital">
    <meta name="robots" content="index, follow">
    <title>Mac Capital :: Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/assets/mac-img/fav-icon.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('backend/assets/mac-img/fav-icon.png')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/plugins/tabler-icons/tabler-icons.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
</head>

<body class="account-page bg-white">
    <div class="main-wrapper">
        <div class="account-content">
            <div class="login-wrapper login-new">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <div class="login-content user-login">
                            <div class="login-logo">
                                <img src="{{asset('backend/assets/mac-img/mac-capital-logo.png')}}" alt="img">
                                <a href="{{route('login')}}" class="login-logo logo-white">
                                    <img src="{{asset('backend/assets/mac-img/mac-capital-logo.png')}}" alt="Img">
                                </a>
                            </div>
                            <form action="{{route('login')}}" method="post">
                                @csrf
                                <div class="card">
                                    <div class="card-body p-5">
                                        <div class="login-userheading">
                                            <h3>Sign In</h3>
                                        </div>
                                        @if($errors->any())
                                        <div class="alert alert-danger">
                                            <p><strong>Opps Something went wrong</strong></p>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                        @if(session()->has('error'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('error') }}
                                        </div>
                                        @endif
                                        @if(session()->has('success'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('success') }}
                                        </div>
                                        @endif
                                        <div class="mb-3">
                                            <label class="form-label">Email OR User id <span class="text-danger"> *</span></label>
                                            <div class="input-group">
                                                <input type="text" value="" class="form-control border-end-0" name="email">
                                                <span class="input-group-text border-start-0">
                                                    <i class="ti ti-mail"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password <span class="text-danger"> *</span></label>
                                            <div class="pass-group">
                                                <input type="password" class="pass-input form-control" name="password">
                                                <span class="ti toggle-password ti-eye-off text-gray-9"></span>
                                            </div>
                                        </div>
                                        <div class="form-login authentication-check">
                                            <div class="row">
                                                <div class="col-12 d-flex align-items-center justify-content-between">
                                                    <div class="custom-control custom-checkbox">
                                                        <label class="checkboxs ps-4 mb-0 pb-0 line-height-1 fs-16 text-gray-6">
                                                            <input type="checkbox" class="form-control">
                                                            <span class="checkmarks"></span>Remember me
                                                        </label>
                                                    </div>
                                                    <div class="text-end">
                                                        <a class="text-orange fs-16 fw-medium" href="{{route('forget.password')}}">Forgot Password?</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-login">
                                            <button type="submit" class="btn btn-primary w-100">Sign In</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                            <p>Copyright &copy; {{ date('Y') }} Mac Capital</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->
    <script src="{{asset('backend/assets/js/jquery-3.7.1.min.js')}}" type="0eb3a26489d0b5ca9711629f-text/javascript"></script>
    <script src="{{asset('backend/assets/js/feather.min.js')}}" type="0eb3a26489d0b5ca9711629f-text/javascript"></script>
    <script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}" type="0eb3a26489d0b5ca9711629f-text/javascript"></script>
    <script src="{{asset('backend/assets/js/script.js')}}" type="0eb3a26489d0b5ca9711629f-text/javascript"></script>
    <!-- <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"></script> -->
</body>

</html>