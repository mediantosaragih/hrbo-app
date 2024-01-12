@extends('auth.layouts')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="d-flex align-items-center" style="min-height: 100vh;">
        <div class="col-sm-8 col-md-6 col-lg-4 mx-auto" style="min-width: 500px;">
            <div class="form-container mx-auto" style="">
                <div class="card-header text-center" style="background-color:rgba(255, 255, 255, 0.5)">
                    <a href="{{route('login')}}"><img src="{{ URL::asset('assets/images/logo_2.png') }}" width="30%"></a>
                </div>
                <br>
            <form action="{{route('authenticate')}}" method="post" class="form">
            @csrf
                <input type="email" class="input @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Email">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                <input type="password" class="input @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                <p class="page-link">
                <span class="page-link-label">Forgot Password?</span>
                </p>
                <button type="submit" class="form-btn">Log in</button>
            </form>
            <p class="sign-up-label">
                Don't have an account?<span class="sign-up-link" href=""><a href="{{ route('register') }}">Sign up</a></span>
            </p>
            <div class="buttons-container">
                <div class="google-login-button">
                    <span><a href="{{url('/login/google')}}">Log in with Google</a></span>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

    
@endsection

