@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!--<section id="multilingual-datatable">-->
            <section id="sales-datatable">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center"></h4>
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
                            <div class="status-legend">
                                <span class="title-legend">Legenda dos Status:</span> <br>
                                <div class="content-status">
                                    <h6 class="text-legend">
                                        <i class="icon-legend aprove-icon text-success" data-feather='check-circle'></i>
                                        Pagamento Aprovado
                                    </h6>
                                    <h6 class="text-legend">
                                        <i class="icon-legend partial-aprove-icon text-info"
                                            data-feather="minus-circle"></i>
                                        Parcialmente Pago
                                    </h6>
                                    <h6 class="text-legend">
                                        <i class="icon-legend pending-icon text-warning" data-feather='alert-circle'></i>
                                        Pendente
                                    </h6>
                                    <h6 class="text-legend">

                                        <i class="icon-legend abandonment-icon text-warning text-darken-2"
                                            data-feather='stop-circle'></i>
                                        Abandono do Checkout
                                    </h6>
                                    <h6 class="text-legend">
                                        <i class="icon-legend cancel-icon text-danger" data-feather='x-circle'></i>
                                        Cancelado
                                    </h6>
                                    <h6 class="text-legend">
                                        <i class="icon-legend unknow-icon" data-feather='help-circle'></i>
                                        Remarketing | Desconhecido
                                    </h6>
                                </div>
                            </div>
                            <table id="colabs-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h4 class="title-table">
                                                Data
                                            </h4>
                                        </th>
                                        <th>
                                            <h4 class="title-table">
                                                Afiliação
                                            </h4>
                                        </th>
                                        <th>
                                            <h4 class="title-table">
                                                Status
                                            </h4>
                                        </th>
                                        <th>
                                            <h4 class="title-table">
                                                Plano
                                            </h4>
                                        </th>

                                        <th>
                                            <h4 class="title-table">
                                                Produto
                                            </h4>
                                        </th>
                                        <!--
                                                        <th>
                                                            <h4 class="title-table">
                                                                Cliente
                                                            </h4>
                                                        </th>-->
                                        <th>
                                            <h4 class="title-table">
                                                Opções
                                            </h4>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="body_table_colabs">
                                    @foreach ($sales as $sale)
                                        <tr style="width:100%;">
                                            <td>
                                                <h6 class="content-text">
                                                    {{ getDateComplete($sale['trans_createdate']) }}
                                                </h6>
                                            </td>
                                            <td>
                                                <h6 class="content-text">
                                                    {{ $sale['postback_type'] }}
                                                </h6>
                                            </td>
                                            <td class="d-flex justify-content-center align-items-center">
                                                <h6 class="content-text">
                                                    @if ($sale['trans_status'] == 'Pagamento Aprovado')
                                                        <i class="icon-legend aprove-icon text-success"
                                                            data-feather='check-circle' data-toggle="tooltip"
                                                            data-placement="top" title=""
                                                            data-original-title="Pagamento Aprovado"></i>

                                                    @elseif ($sale['trans_status'] == 'Parcialmente Pago')
                                                        <i class="icon-legend partial-aprove-icon text-info"
                                                            data-feather="minus-circle" data-toggle="tooltip"
                                                            data-placement="top" title=""
                                                            data-original-title="Parcialmente Pago"></i>

                                                    @elseif ($sale['trans_status'] == 'Pendente')
                                                        <i class="icon-legend pending-icon text-warning"
                                                            data-feather='alert-circle' data-toggle="tooltip"
                                                            data-placement="top" title=""
                                                            data-original-title="Pendente"></i>

                                                    @elseif ($sale['trans_status'] == 'Abandono do Checkout')
                                                        <i class="icon-legend abandonment-icon text-warning text-darken-2"
                                                            data-feather='stop-circle' data-toggle="tooltip"
                                                            data-placement="top" title=""
                                                            data-original-title="Abandono do Checkout"></i>

                                                    @elseif ($sale['trans_status'] == 'Cancelada')
                                                        <i class="icon-legend cancel-icon text-danger"
                                                            data-feather='x-circle' data-toggle="tooltip"
                                                            data-placement="top" title=""
                                                            data-original-title="Cancelado"></i>
                                                    @else
                                                        <i class="icon-legend unknow-icon" data-feather='help-circle'
                                                            data-toggle="tooltip" data-placement="top" title=""
                                                            data-original-title="Desconhecido"></i>

                                                    @endif

                                                </h6>
                                            </td>
                                            <td class="">
                                                <h6 class="content-text">
                                                    {{ $sale['plan_name'] }}
                                                </h6>
                                            </td>

                                            <td class="">
                                                <h6 class="content-text">
                                                    {{ $sale['product_name'] }}
                                                </h6>
                                            </td>
                                            <td class="last-td">
                                                <button class="btn btn-info rounded-circle btn-icon" data-toggle="modal"
                                                    data-target="#info_compra_modal">
                                                    <i data-feather='info'></i>
                                                </button>
                                                <!-- {{ $sale['client_name'] }}-->

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection

