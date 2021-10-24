@extends('layout.auth')
@section('content-auth')
    <!-- Login v1 -->
    <div class="card mb-0">
        <div class="card-body">

            <h4 class="card-title mb-2 text-center">
                <img class="text-center" style="width: 90px" src="{{ asset('assets/images/logo/LogoSite.png') }}" alt="">
            </h4>
            <!--<p class="card-text mb-2 text-center">Acesse o sistema</p>-->
            <form class="auth-login-form mt-2" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="login-email" class="form-label">Email</label>
                    <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email"
                        placeholder="john@exemplo.com" aria-describedby="login-email" tabindex="1" autofocus
                        value="{{ old('email') }}" />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="d-flex justify-content-between">
                        <label for="login-password">Password</label>
                        <a href="">
                            <small>Esqueceu a Senha?</small>
                        </a>
                    </div>
                    <div class="input-group input-group-merge form-password-toggle">
                        <input type="password"
                            class="form-control form-control-merge @error('password') is-invalid @enderror" type="password"
                            id="password" name="password" placeholder="Senha" tabindex="2"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="login-password" />
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <!-- <div class="input-group-append">
                            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                         </div>-->
                    </div>
                </div>
                <!--
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="remember-me" tabindex="3" />
                            <label class="custom-control-label" for="remember-me"> Remember Me </label>
                        </div>
                    </div>
                -->
                <button type="submit" class="btn btn-primary btn-block" tabindex="4">Entrar</button>

            </form>

            <p class="text-center mt-2">
                <span>Ainda não tem conta?</span>
                <a href="">
                    Crie sua conta
                </a>
            </p>
        </div>
    </div>
    <!-- /Login v1 -->
@endsection
