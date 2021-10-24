@extends('layout.auth')
@section('content-auth')
 <!-- Trocar Password v1 -->
 <div class="card mb-0">
    <div class="card-body">

        <h4 class="card-title mb-1 text-center">
            <img class="text-center" style="width: 90px" src="{{asset('assets/images/logo/LogoSite.png')}}" alt="">
        </h4>
        <h4 class="card-title mb-1 text-center">Mudar senha </h4>
        @error('errors')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror

        <form method="POST"action="">
          @csrf

          <div class="form-group">
            <input type="password"
                  class="form-control"
                  id="password"
                  name="password"
                  placeholder="Nova senha">
          </div>

          <div class="form-group">
            <input type="password"
                  class="form-control"
                  id="confirm-password"
                  name="confirm-password"
                  placeholder="Confirmar nova senha">
          </div>

          <button type="submit" class="btn btn-primary btn-block">
            Mudar senha
          </button>
          <p class="text-center mt-2">
            <a href=""> <i data-feather="chevron-left"></i> Voltar a tela de Login</a>
          </p>
        </form>
    </div>
</div>
@endsection
