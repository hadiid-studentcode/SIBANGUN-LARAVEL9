@extends('layouts.main-login')
@section('container')
    <div class="container-login100" style="background-image: url('assets/images/bg-02.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form class="login100-form validate-form" action="" method="POST">

                @csrf
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="close"></button>
                    </div>
                @endif

                <span class="login100-form-title p-b-37">
                    <img src="assets/images/icons/logo.png" class="" alt="..." width="100">

                </span>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
                    <input class="input100" type="text" name="username" placeholder="username or email">
                    <span class="focus-input100"></span>
                </div>

                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="wrap-input100 validate-input m-b-25" data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="password">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" name="login">
                        Sign In
                    </button>
                </div>

                {{-- <div class="text-center p-t-57 p-b-20">
                    <a href="#" class="txt2 hov1">
                        Daftar
                    </a>
                </div> --}}




            </form>


        </div>
    </div>



    <div id="dropDownSelect1"></div>

















    
@endsection
