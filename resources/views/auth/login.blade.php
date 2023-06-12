<!DOCTYPE html>
<html lang="tr">
<head>
    @section('title')
       Giriş
    @endsection
    <title>@yield('title')</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('Login_v4')}}/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('Login_v4')}}/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('Login_v4')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('Login_v4')}}/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('Login_v4')}}/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('Login_v4')}}/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('Login_v4')}}/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('Login_v4')}}/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('Login_v4')}}/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{asset('Login_v4')}}/css/main.css">
    <!--===============================================================================================-->
</head>
<body>
    @if (session('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
    @endif

<div class="limiter">
    <div class="container-login100" style="background-image: url('{{asset('Login_v4')}}/images/bg-01.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    @csrf
					<span class="login100-form-title p-b-49">
						{{ __('Login') }}
					</span>
                <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                    <span for="email" class="label-input100">Kullanıcı Email</span>
                    <input  id="email" class="input100  @error('email') is-invalid @enderror" value="{{ old('email') }}"  type="email" name="email" placeholder="Type your Email">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span for="password" class="label-input100">Password</span>
                    <input id="password" class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Type your password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div class="text-right p-t-8 p-b-31">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Şifreni mi unuttun?') }}
                        </a>
                    @endif
                </div>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn">
                            {{ __('Login') }}
                        </button>


                    </div>
                  </div>

                <div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Başka bir şekilde giriş yap
						</span>
                </div>

                <div class="flex-c-m">
                    <a href="#" class="login100-social-item bg1">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="#" class="login100-social-item bg2">
                        <i class="fa fa-twitter"></i>
                    </a>

                    <a href="#" class="login100-social-item bg3">
                        <i class="fa fa-google"></i>
                    </a>
                </div>

                <div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Başka bir şekilde çıkış yap
						</span>

                    <a href="#" class="txt2">
                        çıkış yap
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{asset('Login_v4')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('Login_v4')}}/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('Login_v4')}}/vendor/bootstrap/js/popper.js"></script>
<script src="{{asset('Login_v4')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('Login_v4')}}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('Login_v4')}}/vendor/daterangepicker/moment.min.js"></script>
<script src="{{asset('Login_v4')}}/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="{{asset('Login_v4')}}/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="{{asset('Login_v4')}}/js/main.js"></script>

</body>
</html>

