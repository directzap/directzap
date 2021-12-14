@extends('layout.app')


@section('content')

<section id="links_datatable">
    <div class="row mb-3">
        <div class="col-md-4">
            <h4>Lista de Links</h4>
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control" id="link_limit" name="link_limit"
            placeholder="" value="Limite de links: 16" disabled>
        </div>
        <div class="col-md-4 text-right">
            <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#register_link">
               Cadastrar Link
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-12 no-padding-mobile">
            <div class="card">
                <table id="links_table">
                    <thead>
                      <tr>
                        <th class="" >
                            <h4 class="title-table">
                                Link
                            </h4>
                        </th>
                        <th class="" >
                            <h4 class="title-table">
                                Qtd Colaboradores
                            </h4>
                        </th>
                        <th class="options" style="max-width: 180px !important">
                            <h4 class="title-table">
                                Opções
                            </h4>
                        </th>
                      </tr>
                    </thead>
                    <tbody id="body_table_links">
                        <tr style="width:100%;">
                            <td>
                                <h6 class="content-text">
                                    Bruno TikTok
                                </h6>
                            </td>
                            <td>
                                <h6 class="content-text">
                                    3
                                </h6>
                            </td>
                            <td class="">
                                <div class="row last-td">

                                    <!-- <div class="col-md-4 col-flex">-->
                                        <button class="btn btn-danger rounded-circle btn-icon"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="Deletar Link"
                                            data-id="">
                                            <i data-feather='trash-2'></i>
                                        </button>
                                    <!--</div>-->
                                    <!-- <div class="col-md-4 col-flex">-->
                                        <button class="btn btn-success rounded-circle btn-icon"   data-target="#add_colab_link"
                                        data-toggle="modal" data-placement="top" title="" data-original-title="Add Colaborador ao Link"
                                            data-id="">
                                            <i data-feather='plus-circle'></i>
                                        </button>
                                        <button class="btn btn-info rounded-circle btn-icon"   data-target="#info_colab_link"
                                        data-toggle="modal" data-placement="top" title="" data-original-title="Info Colaborador ao Link"
                                            data-id="">
                                            <i data-feather='info'></i>
                                        </button>
                                    <!--</div>-->
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>




@endsection
