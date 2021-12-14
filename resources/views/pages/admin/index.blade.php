@extends('layout.app')
@section('content')



    <section id="admin_datatable">
        <div class="row">
            <div class="col-12 mb-2">
                <h3 class="text-center" >Área Administrativa</h3>
            </div>
            <div class="col-md-12">
                <div class="row text-right mb-2">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-4 text-end">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#make_alert">
                            Criar Alerta para usuários
                        </button>
                    </div>
                    <div class="col-md-2 text-end">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#active_account">
                            Ativar Conta
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 no-padding-mobile">
                <div class="card">
                    <table id="admin_table">
                        <thead>
                          <tr>
                            <th>
                                <h4 class="title-table">
                                   Nome Completo
                                </h4>
                            </th>
                            <th>
                                <h4 class="title-table">
                                   Email
                                </h4>
                            </th>
                            <th>
                                <h4 class="title-table">
                                   Telefone
                                </h4>
                            </th>
                            <th class="options" style="max-width: 180px !important">
                                <h4 class="title-table">
                                    Opções
                                </h4>
                            </th>
                          </tr>
                        </thead>
                        <tbody id="body_table_admin">
                            <tr style="width:100%;">
                              <td>
                                 <h6 class="content-text">
                                    Nome
                                 </h6>
                                </td>
                              <td>
                                 <h6 class="content-text">
                                    mikewade2k16@gmail.com
                                 </h6>
                                </td>
                              <td>
                                 <h6 class="content-text">
                                    Número
                                 </h6>
                                </td>
                              <td>
                                  <div class="row last-td">
                                      <!-- <div class="col-md-4 col-flex">-->
                                          <button class="btn btn-warning rounded-circle btn-icon"
                                          data-toggle="tooltip" data-placement="top" title="" data-original-title="Deletar Colaborador"
                                              data-id="">
                                              <i data-feather='trash-2'></i>
                                          </button>
                                      <!--</div>-->
                                      <!-- <div class="col-md-4 col-flex">-->
                                          <button class="btn btn-info rounded-circle btn-icon"   data-target="#modal_adm_info"
                                          data-toggle="modal" data-placement="top" title="" data-original-title="Ver Colaborador"
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

  <!-- Basic table -->


@endsection
