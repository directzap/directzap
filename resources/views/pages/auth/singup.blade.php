@extends('layout.auth')
@section('content-auth')
     <!-- Register v1 -->
     <div class="card mb-0">
        <div class="card-body">
            <h4 class="card-title mb-2 text-center">
                <img class="text-center" style="width: 90px" src="{{asset('assets/images/logo/LogoSite.png')}}" alt="">


            </h4>
            <p class="card-text mb-1 text-center">Faça aqui sua contae comece a usar o sistema</p>

            @error('errors')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror

            <form method="POST"
                action="">
                @csrf

                <div class="form-group">
                    <label for=""
                        class="form-label">Nome</label>
                    <input type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        placeholder="Nome">
                </div>

                <div class="form-group">
                    <label for=""
                        class="form-label">Sobrenome</label>
                    <input type="text"
                        class="form-control"
                        id="surname"
                        name="surname"
                        placeholder="Sobrenome">
                </div>

                <div class="form-group">
                    <label for=""
                        class="form-label">Email</label>
                    <input type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="E-mail">
                </div>

                <div class="form-group">
                    <label for=""
                        class="form-label">Senha</label>
                    <input type="password"
                        class="form-control"
                        id="password"
                        name="password"
                        placeholder="Senha">
                </div>


                <button type="submit"
                    class="btn btn-primary btn-block"
                    tabindex="5">Criar Conta</button>
            </form>

            <p class="text-center mt-2">
                <span>Já Possui uma Conta?</span>
                <a href="">
                    <span>Faça o Login</span>
                </a>
            </p>


        </div>
    </div>
    <!-- /Register v1 -->
@endsection
