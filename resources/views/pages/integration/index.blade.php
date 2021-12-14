@extends('layout.app')

@section('content')
  <!--  <form action="{{ route('integration.update', auth()->user()->id) }}" method="post">
        @csrf
        @method('put')
  -->
        <div class="row mt-2">
            <div class="container">
                <div class="col-md-12 text-center">
                    <h2>
                        Plataformas disponivéis para integração
                    </h2>
                    <small>
                        clique na logo da plataforma para fazer a integração
                    </small>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a class="" data-toggle="modal" data-target="#make_integration">
                            <img class="logo-integration my-1" src="{{ asset('assets/images/logo/logo-braip.webp') }}" alt="">
                        </a>
                        <br>
                        <small class="text-success">Integração Ativa</small>
                    </div>
                </div>
            </div>
        </div>
        <!--
        <div class="row mt-1">
            <div class="col-md-6">
                <label>Token</label>
                <input type="text" name="token_braip" id="token_braip" class="form-control" value="{{ auth()->user()->token_braip ?? '' }}">
                <!--<textarea class="form-control" name="token_braip" id="token_braip" cols="30" rows="10"  value="">{{ auth()->user()->token_braip ?? '' }}</textarea>--
            </div>
            <div class="col-md-2 mt-2">
                <input type="submit" class="btn btn-primary" value="braip">
            </div>
        </div>
    </form>-->


    <div class="modal fade" id="make_integration" tabindex="-1" aria-labelledby="links" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="configModal">Fazer integração</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="{{ route('integration.update', auth()->user()->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label>Token</label>
                            <input type="text" name="token_braip" id="token_braip" class="form-control" value="{{ auth()->user()->token_braip ?? '' }}">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Integrar</button>
                        <!--  <input type="submit" class="btn btn-primary" value="braip"> -->
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection
