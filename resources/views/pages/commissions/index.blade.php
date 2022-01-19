@extends('layout.app')
@section('content')
<div class="content-sales">
    <div class="row ">
        <div class="col-12  text-center">
            <div class="card">
                <div class="card-header justify-content-center flex-column" >
                    <label for="">Comissões/ Valor Liquido</label>
                    <h4>R$ 3.768,28</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-6 mt-2 text-center">
            <div class="card">
                <div class="card-header flex-column align-items-start">
                    <h4 class="card-title mb-75">Conversões de Boleto</h4>
                    <span class="card-subtitle text-muted"></span>
                </div>
                <div class="card-body" style="position: relative;">
                    {!! $chart->container() !!}
                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 505px; height: 340px;"></div></div><div class="contract-trigger"></div></div></div>
            </div>
           <!-- <div class="container-chart chart-boletos">

            </div>-->
        </div>
        <div class="col-md-6 mt-2 text-center">
            <div class="card">
                <div class="card-header flex-column align-items-start">
                    <h4 class="card-title mb-75">Conversões de Pix</h4>
                    <span class="card-subtitle text-muted"></span>
                </div>
                <div class="card-body">
                    {!! $chart2->container() !!}
                </div>
            </div>

        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-7 ">
            <section id="conversion_datatable">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center">Estatisticas de Conversão</h4>
                    </div>
                    <div class="col-12 no-padding-mobile">
                        <div class="card">
                            @if ($alertFm = Session::get('success'))
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{{ $alertFm }}</strong>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($alertFm = Session::get('error'))
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{{ $alertFm }}</strong>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <table id="conversion_table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h4 class="title-table">
                                                Categoria
                                            </h4>
                                        </th>
                                        <th>
                                            <h4 class="title-table">
                                                Código
                                            </h4>
                                        </th>
                                        <th>
                                            <h4 class="title-table">
                                                Porcentagem
                                            </h4>
                                        </th>
                                        <th>
                                            <h4 class="title-table">
                                                Valor
                                            </h4>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="body_table_colabs">
                                    <tr style="width:100%;">
                                        <td>
                                            <h6 class="content-text">
                                                Conversão Geral
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="content-text">
                                               256
                                            </h6>
                                        </td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <h6 class="content-text">
                                                65,5%
                                            </h6>
                                        </td>
                                        <td class="">
                                            <h6 class="content-text">
                                                R$ 3.458,00
                                            </h6>
                                        </td>
                                    </tr>
                                    <tr style="width:100%;">
                                        <td>
                                            <h6 class="content-text">
                                                Conversão Geral
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="content-text">
                                               256
                                            </h6>
                                        </td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <h6 class="content-text">
                                                65,5%
                                            </h6>
                                        </td>
                                        <td class="">
                                            <h6 class="content-text">
                                                R$ 3.458,00
                                            </h6>
                                        </td>
                                    </tr>
                                    <tr style="width:100%;">
                                        <td>
                                            <h6 class="content-text">
                                                Conversão Geral
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="content-text">
                                               256
                                            </h6>
                                        </td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <h6 class="content-text">
                                                65,5%
                                            </h6>
                                        </td>
                                        <td class="">
                                            <h6 class="content-text">
                                                R$ 3.458,00
                                            </h6>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-5">
            <!--
            <section id="multilingual-datatable" style="margin-top: 58px;">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center">Tempo online dos atendentes</h4>
                    </div>
                    <div class="col-12 no-padding-mobile">
                        <div class="card">
                            @if ($alertFm = Session::get('success'))
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{{ $alertFm }}</strong>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($alertFm = Session::get('error'))
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{{ $alertFm }}</strong>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <table id="colabs-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h4 class="title-table">
                                                Atendente
                                            </h4>
                                        </th>
                                        <th>
                                            <h4 class="title-table">
                                                Dias online
                                            </h4>
                                        </th>
                                        <th>
                                            <h4 class="title-table">
                                                Tempo  online
                                            </h4>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="body_table_colabs">
                                    <tr style="width:100%;">
                                        <td>
                                            <h6 class="content-text">
                                                Bruno Carrilo
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="content-text">
                                                2
                                            </h6>
                                        </td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <h6 class="content-text">
                                                133h
                                            </h6>
                                        </td>
                                    </tr>
                                    <tr style="width:100%;">
                                        <td>
                                            <h6 class="content-text">
                                                Bruno Carrilo
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="content-text">
                                                2
                                            </h6>
                                        </td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <h6 class="content-text">
                                                133h
                                            </h6>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            -->
            <div class="card">
                <div class="card-header flex-column align-items-start">
                    <h4 class="card-title mb-75">Conversões de Cartão</h4>
                    <span class="card-subtitle text-muted"></span>
                </div>
                <div class="card-body">
                    {!! $chart5->container() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header flex-column align-items-start">
                    <h4 class="card-title mb-75">Gráfico de comissões durante o ano</h4>
                    <span class="card-subtitle text-muted"></span>
                </div>
                <div class="card-body">
                    {!! $chart4->container() !!}
                </div>
            </div>

        </div>
    </div>
</div>



<script src="{{ $chart->cdn() }}"></script>
<script src="{{ $chart2->cdn() }}"></script>
<script src="{{ $chart4->cdn() }}"></script>
<script src="{{ $chart5->cdn() }}"></script>

{{ $chart->script() }}
{{ $chart2->script() }}
{{ $chart4->script() }}
{{ $chart5->script() }}

@endsection
