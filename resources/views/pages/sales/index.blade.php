@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <section id="multilingual-datatable">
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
                            <table id="colabs-table">
                                <thead>
                                    <tr>
                                        <th>Categoria</th>
                                        <th>Código</th>
                                        <th>Porcentagem</th>
                                        <th>Valor</th>
                                    </tr>
                                </thead>
                                <tbody id="body_table_colabs">
                                    <tr style="width:100%;">
                                        <td>Conversão Geral</td>
                                        <td>
                                            256
                                        </td>
                                        <td class="d-flex justify-content-center align-items-center">
                                           65,5%
                                        </td>
                                        <td class="">
                                           R$ 3.458,00
                                        </td>
                                    </tr>
                                    <tr style="width:100%;">
                                        <td>Conversão Cartão</td>
                                        <td>
                                            189
                                        </td>
                                        <td class="d-flex justify-content-center align-items-center">
                                           65,5%
                                        </td>
                                        <td class="">
                                           R$ 2.458,00
                                        </td>
                                    </tr>
                                    <tr style="width:100%;">
                                        <td>Conversão Boleto</td>
                                        <td>
                                            67
                                        </td>
                                        <td class="d-flex justify-content-center align-items-center">
                                           25,5%
                                        </td>
                                        <td class="">
                                           R$ 1.000,00
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
