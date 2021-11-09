@extends('layout.app')
@section('content')
    <div class="col-12 mb-2">

                <h3 class="text-center" >Área Administrativa</h3>

    </div>
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

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="list_clients-tab" data-toggle="tab" href="#list_clients" aria-controls="home" role="tab" aria-selected="true">Lista de Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="aboutIcon-tab" data-toggle="tab" href="#aboutIcon" aria-controls="about" role="tab" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Account</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="list_clients" aria-labelledby="homeIcon-tab" role="tabpanel">
                    <section id="multilingual-datatable">
                        <div class="row">
                            <div class="col-12 no-padding-mobile">
                                <div class="card">
                                    <table id="admin-table">
                                        <thead>
                                          <tr>
                                            <th class="" >Nome Completo</th>
                                            <th class="" >Email</th>
                                            <th class="" >Telefone</th>
                                            <th class="options" style="max-width: 180px !important">Opções</th>
                                          </tr>
                                        </thead>
                                        <tbody id="body_table_colabs">
                                            <tr style="width:100%;">
                                              <td>Nome</td>
                                              <td>mikewade2k16@gmail.com</td>
                                              <td>Número</td>
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
                </div>

            </div>
        </div>
    </div>
  <!-- Basic table -->


@endsection
