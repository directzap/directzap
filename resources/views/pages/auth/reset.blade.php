@extends('layout.auth')
@section('content-auth')

 <!-- Reset Password v1 -->
 <div class="card mb-0">
    <div class="card-body">

      <h4 class="card-title mb-1 text-center">
        <img class="text-center" style="width: 90px" src="{{asset('assets/images/logo/LogoSite.png')}}" alt="">

      </h4>

        <!--<h4 class="card-title mb-1 text-center">Recuperar Senha</h4>-->
        <p class="card-text mb-1 text-center">Mandaremos a nova senha para seu e-mail</p>


        <form method="POST" class="auth-reset-password-form mt-2" action="">
          @csrf
            <div class="form-group">
              <div class="form-group">
                <label for="login-email" class="form-label">Email</label>
                <input type="text" class="form-control"   id="email"
                name="email" placeholder="" aria-describedby="login-email" tabindex="1" autofocus />
              </div>
            </div>

            <button type="submit" class="btn btn-primary btn-block" tabindex="3">Recuperar Senha</button>
        </form>

        <p class="text-center mt-2">
            <a href="{{ route('auth.login') }}"> <i data-feather="chevron-left"></i> Voltar a tela de Login</a>
        </p>
    </div>
</div>
<!-- /Reset Password v1 -->


@endsection
