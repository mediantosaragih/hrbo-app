<!DOCTYPE html>
<html lang="en">
<head>
    <style>     
        body{
            background-image: url("{{ URL::asset('assets/images/bg-login.png') }}");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-color: transparent;
        }
        .form-container {
        width: 350px;
        height: 500px;
        background-color: #fff;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        border-radius: 10px;
        box-sizing: border-box;
        padding: 20px 30px;
        }

        .title {
        text-align: center;
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
                "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
        margin: 10px 0 30px 0;
        font-size: 28px;
        font-weight: 800;
        }

        .form {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 18px;
        margin-bottom: 15px;
        }

        .input {
        border-radius: 20px;
        border: 1px solid #c0c0c0;
        outline: 0 !important;
        box-sizing: border-box;
        padding: 12px 15px;
        }

        .page-link {
        text-decoration: underline;
        margin: 0;
        text-align: end;
        color: #747474;
        text-decoration-color: #747474;
        }

        .page-link-label {
        cursor: pointer;
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
                "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
        font-size: 9px;
        font-weight: 700;
        }

        .page-link-label:hover {
        color: #000;
        }

        .form-btn {
        padding: 10px 15px;
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
                "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
        border-radius: 20px;
        border: 0 !important;
        outline: 0 !important;
        background: teal;
        color: white;
        cursor: pointer;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .form-btn:active {
        box-shadow: none;
        }

        .sign-up-label {
        margin: 0;
        font-size: 10px;
        color: #747474;
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
                "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
        }

        .sign-up-link {
        margin-left: 1px;
        font-size: 11px;
        text-decoration: underline;
        text-decoration-color: teal;
        color: teal;
        cursor: pointer;
        font-weight: 800;
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
                "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
        }

        .buttons-container {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        margin-top: 20px;
        gap: 15px;
        }

        .apple-login-button,
            .google-login-button {
        border-radius: 20px;
        box-sizing: border-box;
        padding: 10px 15px;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
                rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
                "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
        font-size: 11px;
        gap: 5px;
        }

        .apple-login-button {
        background-color: #000;
        color: #fff;
        border: 2px solid #000;
        }

        .google-login-button {
        border: 2px solid #747474;
        }

        .apple-icon,
            .google-icon {
        font-size: 18px;
        margin-bottom: 1px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HRIS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    <!-- <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
          <a class="navbar-brand" href="{{ URL('/') }}">Custom Login Register</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                    </li>
                @else    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            >Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </li>
                        </ul>
                    </li>
                @endguest
            </ul>
          </div>
        </div>
    </nav>     -->

    <div class="container">
        @yield('content')
    </div>
       
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    
</body>
</html>