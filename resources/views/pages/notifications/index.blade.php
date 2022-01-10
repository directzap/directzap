@extends('layout.app')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-lg-12" style="display: flex; gap: 12px">
                <h1>Notificações</h1>
            </div>
        </div>
        <div class="row ml-1 mt-4 ">
            <div class="col-md-11 border-bottom">
                <h4>Menssagens</h4>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12">
                <div class="collapse-margin collapse-icon mt-2" id="updates_collapse">
                    <div class="card bg-success">
                        <div class="card-header" id="paymentOne" data-toggle="collapse" role="button" data-target="#faq-payment-one" aria-expanded="false" aria-controls="faq-payment-one">
                            <span class="lead collapse-title">Criação e distribuição de links</span> <span class="bg-success  box-update-status">Atualizado</span>
                        </div>

                        <div id="faq-payment-one" class="collapse" aria-labelledby="paymentOne" data-parent="#updates_collapse">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="paymentOne" data-toggle="collapse" role="button" data-target="#faq-payment-one" aria-expanded="false" aria-controls="faq-payment-one">
                            <span class="lead collapse-title">Integração com Plataforma Braip</span> <span class="bg-warning   box-update-status">Em andamento</span>
                        </div>

                        <div id="faq-payment-one" class="collapse" aria-labelledby="paymentOne" data-parent="#updates_collapse">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="paymentOne" data-toggle="collapse" role="button" data-target="#faq-payment-one" aria-expanded="false" aria-controls="faq-payment-one">
                            <span class="lead collapse-title">Integração com Plataforma Eduz</span> <span class="bg-info  box-update-status">Em Breve</span>
                        </div>

                        <div id="faq-payment-one" class="collapse" aria-labelledby="paymentOne" data-parent="#updates_collapse">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row ml-1 mt-4">
            <div class="col-md-11 border-bottom">
                <h4>Atualizações</h4>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12">
                <div class="collapse-margin collapse-icon mt-2" id="updates_collapse">
                    <div class="card">
                        <div class="card-header" id="paymentOne" data-toggle="collapse" role="button" data-target="#faq-payment-one" aria-expanded="false" aria-controls="faq-payment-one">
                            <span class="lead collapse-title">Criação e distribuição de links</span> <span class="bg-success  box-update-status">Atualizado</span>
                        </div>

                        <div id="faq-payment-one" class="collapse" aria-labelledby="paymentOne" data-parent="#updates_collapse">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="paymentOne" data-toggle="collapse" role="button" data-target="#faq-payment-one" aria-expanded="false" aria-controls="faq-payment-one">
                            <span class="lead collapse-title">Integração com Plataforma Braip</span> <span class="bg-warning   box-update-status">Em andamento</span>
                        </div>

                        <div id="faq-payment-one" class="collapse" aria-labelledby="paymentOne" data-parent="#updates_collapse">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="paymentOne" data-toggle="collapse" role="button" data-target="#faq-payment-one" aria-expanded="false" aria-controls="faq-payment-one">
                            <span class="lead collapse-title">Integração com Plataforma Eduz</span> <span class="bg-info  box-update-status">Em Breve</span>
                        </div>

                        <div id="faq-payment-one" class="collapse" aria-labelledby="paymentOne" data-parent="#updates_collapse">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection
