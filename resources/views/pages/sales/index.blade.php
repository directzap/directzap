@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <section id="multilingual-datatable">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center"></h4></h4>
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
                                                Data
                                            </h4>
                                        </th>
                                        <th>
                                            <h4 class="title-table">
                                                Tipo
                                            </h4>
                                        </th>
                                        <th>
                                            <h4 class="title-table">
                                                Status
                                            </h4>
                                        </th>
                                        <th>
                                            <h4 class="title-table">
                                                Mensagem
                                            </h4>
                                        </th>
                                        <th>
                                            <h4 class="title-table">
                                                Atendente
                                            </h4>
                                        </th>
                                        <th>
                                            <h4 class="title-table">
                                                Produto
                                            </h4>
                                        </th>
                                        <th>
                                            <h4 class="title-table">
                                                Cliente
                                            </h4>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="body_table_colabs">
                                    <tr style="width:100%;">
                                        <td>
                                            <h6 class="content-text">
                                               27/10/2021 18:21
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="content-text">
                                               cart
                                            </h6>
                                        </td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <h6 class="content-text">
                                                <i data-feather='circle'></i>
                                            </h6>
                                        </td>
                                        <td class="">
                                            <h6 class="content-text">
                                                <i data-feather='check'></i>
                                            </h6>
                                        </td>
                                        <td class="">
                                            <h6 class="content-text">
                                                JP
                                            </h6>
                                        </td>
                                        <td class="">
                                            <h6 class="content-text">
                                                Corporação Milionário
                                            </h6>
                                        </td>
                                        <td class="">
                                            <h6 class="content-text">
                                                Dirceu Gadelha
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
    </div>

@endsection
