@extends('layout.app')


@section('content')

<section id="multilingual-datatable">
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
                <table id="admin-table">
                    <thead>
                      <tr>
                        <th class="" >Link</th>
                        <th class="" >Qtd Colaboradores</th>
                        <th class="options" style="max-width: 180px !important">Opções</th>
                      </tr>
                    </thead>
                    <tbody id="body_table_colabs">
                        <tr style="width:100%;">
                          <td>Bruno TikTok</td>
                          <td>3</td>
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


 <div class="modal fade" id="register_link" tabindex="-1" aria-labelledby="links" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="configModal">Criar Link </h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form method="POST" action="">
                    @csrf


                    <div class="form-group">
                        <label for="title_alert">Nome do link: </label>
                        <input type="text" class="form-control" id="link_name" name="link_name"
                            placeholder="">
                        <small class="small-info">O Nome do link deve ser único</small>
                    </div>

                    <div class="form-group ">
                        <div class="demo-inline-spacing">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="com_precell" name="fooby[1][]">
                                <label class="custom-control-label" for="com_precell">Com Precell</label>

                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="sem_precell" name="fooby[1][]">
                                <label class="custom-control-label" for="sem_precell">Sem Precell</label>
                            </div>

                            <div class="dominios-select mt-n2">
                                <h4 class="mt-3">Selecione o Dominio</h4>
                                <div class="demo-inline-spacing mt-n1">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="directzap_dominio"  name="fooby[2][]">
                                        <label class="custom-control-label" for="directzap_dominio">directzap.com</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="zapdownloader_dominio"  name="fooby[2][]">
                                        <label class="custom-control-label" for="zapdownloader_dominio">zapdownloader.com</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Criar Link</button>
                </form>

            </div>
        </div>
    </div>
</div>


 <div class="modal fade" id="add_colab_link" tabindex="-1" aria-labelledby="links" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="configModal">Adicionar Colaborador ao link</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
               <div id="multilingual-datatable">
                    <div class="row my-2">
                        <div class="col-md-12">
                            <h4>Selecione o(s) colaborador(es) para este link</h4>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 no-padding-mobile">
                            <div class="card">
                                <table id="admin-table">
                                    <thead>
                                        <tr>
                                            <th class="" >Colaboradores</th>
                                            <th>Links Cadastrados</th>
                                            <th>Links</th>
                                        <!-- <th class="options" style="max-width: 180px !important">Opções</th>-->
                                        </tr>
                                    </thead>
                                    <tbody id="body_table_colabs">
                                        <tr style="width:100%;">
                                            <td class="">
                                                <div class="d-flex justify-content-center">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                                        <label class="custom-control-label" for="customCheck1">Bruno</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>
                                                <div class="link-name">
                                                    Bruno TikTok
                                                </div>
                                                <div class="link-name">
                                                    Faceads
                                                </div>

                                            </td>
                                            <!--
                                            <td>
                                                <div class="row last-td">
                                                    <button class="btn btn-warning rounded-circle btn-icon"
                                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="Deletar Colaborador"
                                                        data-id="">
                                                        <i data-feather='trash-2'></i>
                                                    </button>
                                                </div>
                                            </td>
                                            -->
                                        </tr>
                                        <tr style="width:100%;">
                                            <td class="">
                                                <div class="d-flex justify-content-center">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                                        <label class="custom-control-label" for="customCheck1">Bruno</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>
                                                <div class="link-name">
                                                    Bruno TikTok
                                                </div>
                                                <div class="link-name">
                                                    Faceads
                                                </div>

                                            </td>

                                        </tr>
                                        <tr style="width:100%;">
                                            <td class="">
                                                <div class="d-flex justify-content-center">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                                        <label class="custom-control-label" for="customCheck1">Bruno</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>
                                                <div class="link-name">
                                                    Bruno TikTok
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary text-center w-25">Salvar</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <div class="modal fade" id="info_colab_link" tabindex="-1" aria-labelledby="links" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="configModal">Informações sobre esse link</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
               <div id="multilingual-datatable">
                    <div class="row my-2">
                        <div class="col-md-12">
                            <h4>Aqui estão o(s) colaborador(es) desse link</h4>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 no-padding-mobile">
                            <div class="card">
                                <table id="admin-table">
                                    <thead>
                                        <tr>
                                            <th class="" >Colaboradores</th>
                                            <th>Remover</th>
                                        <!-- <th class="options" style="max-width: 180px !important">Opções</th>-->
                                        </tr>
                                    </thead>
                                    <tbody id="body_table_colabs">
                                        <tr style="width:100%;">
                                            <td class="">
                                                <div class="d-flex justify-content-center">
                                                   <h4>Bruno</h4>
                                                </div>
                                            </td>
                                            <td >
                                                <div class="row last-td">
                                                    <button class="btn btn-danger rounded-circle btn-icon"
                                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="Deletar Link"
                                                        data-id="">
                                                        <i data-feather='trash-2'></i>
                                                    </button>
                                                </div>
                                            </td>


                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
