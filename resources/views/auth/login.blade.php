@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
<div class="d-flex align-items-center" style="min-height: 100vh;">
        <div class="col-sm-8 col-md-6 col-lg-4 mx-auto" style="min-width: 500px;">
            <div class="card navbar-shadow" style="">
                <!-- <div class="col-md-6; ">
                    <div class="card-header text-center" style="background-color:rgba(255, 255, 255, 0.5)">
                        <a href="{{route('login')}}"><img src="{{ URL::asset('assets/images/logo_2.png') }}" width="30%"></a>
                    </div>
                </div> -->
                <div class="col-md-6; card navbar-shadow" >
                    
                    <div class="card-header text-center" style="background-color:rgba(255, 255, 255, 0.5)">
                        <a href="{{route('login')}}"><img src="{{ URL::asset('assets/images/logo_2.png') }}" width="30%"></a>
                    </div>
                    <div class="card-body" style="background-color:rgba(255, 255, 255, 0.5)">
                        <form action="{{route('authenticate')}}" method="post">
                        @csrf
                            <div class="mb-3 row">
                                <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                </div>
                            </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Login">
                            </div>
                            <div class="mb-3 row; text-center">
                                <a href="{{url('/login/google')}}"><img src="{{ URL::asset('assets/images/google.png') }}" width="30%"></a>
                            </div>
                            <div class="mb-3 row">
                                <a class="col-md-7 offset-md-3" href="{{ route('register') }}">Don't have an account yet? Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>   
    </div>    
</div>
    
@endsection

