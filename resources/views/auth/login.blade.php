@extends('layouts.navfooter')

@section('content')
<body>
    

<div class="container" style=" margin:60px auto;">
    <div class="row justify-content-center">
        <h2 style="text-align: center">Login</h2> <br>  
        <div class="col-md-12">
            <div class="card">
               
                @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="font-size: 18px; font-weight:600; text-align:right;">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="font-size: 18px; font-weight:600; text-align:right;">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 offset-md-4">
                                <div class="form-check" style="text-align: center">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="font-size: 14px; font-weight:600; ">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0" style="text-align: center">
                            <div class="col-md-12 offset-md-4">
                                <button type="submit" class="btn btn-primary " style="background: rgb(3, 158, 68);color: #ffffff;padding: 5px 10px 5px 10px;border-radius:7px; margin-right:10px;">
                                    {{ __('Login') }}
                                </button>

                               

                                <a class="ml-1 btn btn-primary" href="{{ url('auth/facebook') }}" style="margin-top: 0px !important;background: rgb(0, 112, 187);color: #ffffff;padding: 5px 10px 5px 10px;border-radius:7px;" id="btn-fblogin">
                    <i class="fa fa-facebook-square" aria-hidden="true"></i> Login with Facebook
                </a></div>
            </div>

                <div class="form-group row">
                    <div class="col-md-12 offset-md-4">
                        <div class="form-check" style="text-align: center">
                           

                            <label class="form-check-label" for="remember" >
                                <a class="btn btn-link" style="font-size: 14px; color:rgb(206, 87, 8); font-weight:600; " href="/forget-password">
                                    Forgot Your Password?
                                </a>
                            </label>
                        </div>
                    </div>
                </div>

                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection