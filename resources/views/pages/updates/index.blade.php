@extends('layout.app')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-lg-12" style="display: flex; gap: 12px">
                <h1>Atualizações</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a class="note-link" data-toggle="modal" data-target="#modal_update">
                            <div class="header-note">
                                <div class="mail-items">
                                    <h5 class="mb-25">Titulo da Menssagem</h5>

                                </div>
                                <div class="mail-meta-item">
                                    <span class="mr-50 bullet bullet-warning bullet-sm"></span>
                                    <small>Em Andamento</small>
                                </div>
                            </div>
                            <div class="mail-message">
                                <p class="text-truncate mb-0">
                                    Hey John, bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders
                                    demidolmen Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored
                                    fulfillment scientifical Pianokoto CheloniaFreudian sperate unchary hyperneurotic phlogiston duodecahedron
                                    unflown Paguridea catena disrelishable Stygian paleopsychology cantoris phosphoritic disconcord fruited
                                    inblow somewhatly ilioperoneal forrard palfrey Satyrinae outfreeman melebiose
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="note-link" data-toggle="modal" data-target="#modal_update">
                            <div class="header-note">
                                <div class="mail-items">
                                    <h5 class="mb-25">Titulo da Menssagem</h5>
                                </div>
                                <div class="mail-meta-item">
                                    <span class="mr-50 bullet bullet-success bullet-sm"></span>
                                    <small>Atualizado</small>
                                </div>
                            </div>
                            <div class="mail-message">
                                <p class="text-truncate mb-0">
                                    Hey John, bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders
                                    demidolmen Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored
                                    fulfillment scientifical Pianokoto CheloniaFreudian sperate unchary hyperneurotic phlogiston duodecahedron
                                    unflown Paguridea catena disrelishable Stygian paleopsychology cantoris phosphoritic disconcord fruited
                                    inblow somewhatly ilioperoneal forrard palfrey Satyrinae outfreeman melebiose
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="note-link" data-toggle="modal" data-target="#modal_update">
                            <div class="header-note">
                                <div class="mail-items">
                                    <h5 class="mb-25">Titulo da Menssagem</h5>
                                </div>
                                <div class="mail-meta-item">
                                    <span class="mr-50 bullet bullet-info bullet-sm"></span>
                                    <small>Em Breve</small>
                                </div>
                            </div>
                            <div class="mail-message">
                                <p class="text-truncate mb-0">
                                    Hey John, bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders
                                    demidolmen Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored
                                    fulfillment scientifical Pianokoto CheloniaFreudian sperate unchary hyperneurotic phlogiston duodecahedron
                                    unflown Paguridea catena disrelishable Stygian paleopsychology cantoris phosphoritic disconcord fruited
                                    inblow somewhatly ilioperoneal forrard palfrey Satyrinae outfreeman melebiose
                                </p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row align-items-center justify-content-center" style="display: none">
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
<!-- Modal -->
<div class="modal fade" id="modal_update" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="TituloModalCentralizado">Título da Atualização</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="title-box-modal">
                <h5>Sobre a Atualização</h5>
                <div class="mail-meta-item mb-1">
                    <span class="mr-50 bullet bullet-success bullet-sm"></span>
                    <small>Status da Atualização</small>
                </div>
            </div>

            <p class="text-update">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, error rerum minima ratione repellendus vel fugit fuga ipsum rem, temporibus, ad quasi reprehenderit reiciendis sapiente exercitationem sed voluptate molestias culpa.
            </p>
        </div>
        <div class="modal-footer">

        </div>
    </div>
    </div>
</div>
@endsection
