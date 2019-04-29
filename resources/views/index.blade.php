@extends('layouts.app')

@section('content')
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>
                
                <span class="login100-form-title p-b-34 p-t-27">
						{{ __('Login') }}
					</span>
                
                <div class="wrap-input100 validate-input {{ $errors->has('email') ? ' is-invalid' : '' }}"
                     data-validate="Enter username">
                    <input class="input100" type="text" name="username" placeholder="Логин">
                    <span class="focus-input100" data-placeholder=""></span>
                </div>
                
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="pass" placeholder="Пароль">
                    <span class="focus-input100" data-placeholder=""></span>
                </div>
                
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">
                        {{ __('Войти') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
