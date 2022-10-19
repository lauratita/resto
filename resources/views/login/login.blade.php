@extends('login.layouts.main')
@section('container')

    <body class="auth-wrapper">
        <div class="all-wrapper menu-side with-pattern">
            <div class="auth-box-w">
                <div class="logo-w "><a href="index.html"><img alt="" src="/images/logo-big.png"></a></div>
                <h4 class="auth-header">Login Form</h4>
                @if (session()->has('loginError'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('loginError') }}</div>
                    
                @endif
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-group"><label for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email"
                            placeholder="Enter your Email" autofocus>
                        <div class="pre-icon os-icon os-icon-user-male-circle"></div>
                    </div>
                    <div class="form-group"><label for="password">Password</label>
                        <input class="form-control" name="password" id="password" placeholder="Enter your password"
                            type="password">
                        <div class="pre-icon os-icon os-icon-fingerprint"></div>
                    </div>
                    <div class="buttons-w"><button class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
@endsection
