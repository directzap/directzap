 <!-- Modais -->
 <div class="modal fade" id="modal_colaboradores" tabindex="-1" aria-labelledby="modal_colaboradores"
     aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id=""> Cadastrar Novo Colaborador </h5>

                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>

             <div class="modal-body">

                 <form method="POST" action="">
                     @csrf

                     <div class="form-group">
                         <label for="name">Nome</label>

                         <input type="text" class="form-control" id="name" name="name" placeholder="Nome e Sobrenome"
                             required>
                     </div>

                     <div class="form-group">
                         <label for="message">Mensagem</label>

                         <input type="text" class="form-control" id="message" name="message"
                             placeholder="ex: Olá, John!" required>
                     </div>

                     <div class="form-group">
                         <label for="phone">Telefone</label>

                         <input type="text" class="form-control" id="phone" name="phone" placeholder="ex: 21911112222"
                             required>
                     </div>

                     <div class="modal-footer">
                         <button type="submit" class="btn btn-primary btn-block">
                             Adicionar
                         </button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>

 <div class="modal fade" id="pixelModal" tabindex="-1" aria-labelledby="PixelModal" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered ">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="configModal">
                     Adicionar Pixel
                 </h5>

                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>

             <div class="modal-body">
                 <form method="post" action="">
                     @csrf

                     <div class="form-group">
                         <p class="p-1">Insira abaixo seu Pixel</p>

                         <input type="number" class="form-control" id="pixel" name="pixel"
                             placeholder="Ex: 1282707308773467" required>
                     </div>

                     <div class="modal-footer">
                         <button type="submit" class="btn btn-primary btn-block">Salvar</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>

 <div class="modal fade" id="modal_colaboradores" tabindex="-1" aria-labelledby="modal_colaboradores"
     aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="modal_colaboradores">Colaborador</h5>

                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>

             <div class="modal-body">
                 <form method="POST" action="{{ route('colaboradores.store') }}">
                     @csrf

                     <div class="form-group">
                         <label for="name">Nome</label>

                         <input type="text" class="form-control" id="name" name="name" placeholder="Nome e Sobrenome">
                     </div>

                     <div class="form-group">
                         <label for="message">Mensagem</label>

                         <input type="text" class="form-control" id="message" name="message"
                             placeholder="ex: Olá, John!">
                     </div>

                     <div class="form-group">
                         <label for="phone">Telefone</label>

                         <input type="text" class="form-control" id="phone" name="phone" placeholder="ex: 21911112222">
                     </div>

                     <div class="modal-footer">
                         <button type="submit" class="btn btn-primary btn-block">
                             Adicionar
                         </button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>

 <div class="modal fade" id="distriCod" tabindex="-1" aria-labelledby="distriCod" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="configModal"> Configurações</h5>

                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <x-distribution></x-distribution>
         </div>
     </div>
 </div>

 <div class="modal fade" id="gerarCod" tabindex="-1" aria-labelledby="gerarCod" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="configModal">Adicionar Código</h5>

                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>

             <div class="modal-body">
                 <form method="POST" action="">
                     @csrf

                     <div class="form-group">
                         <div class="col-md-12">
                             <button type="button" class="btn btn-info btn-block mt-2" id="gera-codigo"
                                 onclick="makeCod()">Gerar Código</button>
                         </div>
                     </div>
                     <input type="text" class="form-control" id="code" name="code" value="" placeholder="Ex: dr89f"
                         minlength="1">



                     <div class="modal-footer">
                         <button type="submit" class="btn btn-primary btn-block">
                             Salvar
                         </button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>

 <div class="modal fade" id="mudarSenha" tabindex="-1" aria-labelledby="mudarSenha" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="configModal">Trocar senha</h5>

                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>

             <div class="modal-body">

                 <form method="POST" action="">
                     @csrf

                     <div class="form-group">
                         <label for="name">Senha Antiga</label>
                         <input type="password" class="form-control" id="password" name="password"
                             placeholder="Senha antiga">
                     </div>

                     <div class="form-group">
                         <label for="name">Nova Senha</label>
                         <input type="password" class="form-control" id="new-password" name="new-password"
                             placeholder="Senha nova">
                     </div>

                     <div class="form-group">
                         <label for="name">Confirme a Senha</label>
                         <input type="password" class="form-control" id="confirm-password" name="confirm-password"
                             placeholder="Confirme a senha nova">
                     </div>

                     <button type="submit" class="btn btn-primary btn-block">Trocar senha</button>
                 </form>
             </div>
         </div>
     </div>
 </div>

 <div class="modal fade" id="active_account" tabindex="-1" aria-labelledby="active_account" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="configModal">Ativar Conta</h5>

                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>

             <div class="modal-body">
                <form method="POST" action="">
                    @csrf

                    <div class="form-group">
                        <label for="name">Email que deseja ativar</label>
                        <input type="password" class="form-control" id="email_active" name="password"
                            placeholder="">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Ativar Conta</button>
                </form>
             </div>
         </div>
     </div>
 </div>

 <div class="modal fade" id="links" tabindex="-1" aria-labelledby="links" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="configModal">Clique nos Links Para copiar</h5>

                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>

             <div class="modal-body">
                 <form>

                     <div class="form-group">
                         <label for="">Link Facebook Ads</label>
                         <input class="link-copy form-control" id="link-face-ads" target="__blank"
                             style="text-decoration: none; font-weight: bold;" href="" data-toggle="tooltip"
                             data-placement="top" title="Link Face ads" value="">
                         <button type="button" class="btn btn-primary btn-block" onclick="copyCodFace()">Copiar Link
                             do face ads</button>
                     </div>

                     <div class="form-group">
                         <label for="">Link Parceria</label>
                         <input class="form-control link-copy" id="link-parceria" target="__blank"
                             style="text-decoration: none; font-weight: bold;" href="" data-toggle="tooltip"
                             data-placement="top" title="Link Parceria" value="">
                         <button type="button" class="btn btn-primary btn-block" onclick="copyCodParceria()">Copiar
                             Link De Parceria</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>


 <div class="modal fade" id="make_alert" tabindex="-1" aria-labelledby="links" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="configModal">Criar Alerta </h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form method="POST" action="">
                    @csrf

                    <div class="form-group">
                        <label for="title_alert">Título da Alerta</label>
                        <input type="text" class="form-control" id="title_alert" name="title_alert"
                            placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="alert_type">Tipo de Alerta</label>
                        <select class="form-control" id="alert_type">
                            <option>Cuidado</option>
                            <option>Sucesso</option>
                            <option>Atenção</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="msg_alert">Menssagem</label>
                        <textarea class="form-control" id="msg_alert" rows="3" placeholder=""></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Criar Alerta</button>
                </form>

            </div>
        </div>
    </div>
</div>

 <div class="modal fade" id="modal_adm_info" tabindex="-1" aria-labelledby="modal_adm_info" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id=""> Informações do Cliente</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form method="POST" action="" class="mt-2">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="custom-control custom-switch custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1">Tornar Administrador</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="custom-control custom-switch custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2">Ativar conta Lifetime</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-4 col-flex-center">
                            <button class="btn btn-primary">Atvar Conta</button>
                        </div>
                        <div class="col-lg-4 col-flex-center">
                            <button class="btn btn-primary" data-target="#add_colab_modal"
                            data-toggle="modal">Adicionar colaboradores</button>
                        </div>

                        <div class="col-lg-4 col-flex-center">
                            <button class="btn btn-primary"> Renovar acesso</button>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4">
                            <label for="">Data de compra: </label>
                            <input type="text" class="form-control" id="name" name="name" value="25/10/2019"
                                disabled>
                        </div>
                        <div class="col-lg-4">
                            <label for="">Quantidade de colaboradores:</label>
                            <input type="text" class="form-control" id="name" name="name" value="8"
                                disabled>
                        </div>
                        <div class="col-lg-4">
                            <label for="">Dias restantes de acesso</label>
                            <input type="text" class="form-control" id="name" name="name" value="25 dias"
                                disabled>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" value="Colab Name"
                                    disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Telefone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="ex: 21911112222"
                                    disabled>
                            </div>

                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3 w-25">Salvar</button>
                </form>

            </div>
        </div>
    </div>
</div>

 <div class="modal fade  modal-warning" id="add_colab_modal" tabindex="-1" aria-labelledby="add_colab_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Adicionar Mais Colaboradores</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="" class="mt-2">
                @csrf
                <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Colaboraderes liberados</label>
                                    <input type="text" class="form-control" disabled id="name" name="name" value="8"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="phone">Adicionar mais Colaboradores</label>
                                    <input type="number" class="form-control" id="phone" name="phone" value=""
                                        >
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-block">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>

 <div class="modal fade  modal-success" id="copy_modal" tabindex="-1" aria-labelledby="add_colab_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Info</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="" class="mt-2">
                @csrf
                <div class="modal-body">
                    <h4>Link Copiado com sucesso</h4>
                </div>
                <div class="modal-footer">
                    <button type="button"  data-dismiss="modal" aria-label="Close" class="btn btn-success btn-block">Ok</button>
                </div>
            </form>
        </div>
    </div>
</div>

 <div class="modal fade " id="info_compra_modal" tabindex="-1" aria-labelledby="add_colab_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Informação da compra</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="" class="mt-2">
                @csrf
                <div class="modal-body">
                    <h4>Informções da compra</h4>
                    <section id="more_info_datatable">
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
                                    <table id="more_info_table">
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

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">

                </div>
            </form>
        </div>
    </div>
</div>



<!-- Modais Link -->

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
               <div id="add_colab_link_section">
                    <div class="row my-2">
                        <div class="col-md-12">
                            <h4>Selecione o(s) colaborador(es) para este link</h4>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 no-padding-mobile">
                            <div class="card">
                                <table id="add_colab_link_datatable">
                                    <thead>
                                        <tr>
                                            <th class="name-colab-th">
                                                <h4 class="title-table">
                                                    Colaboradores
                                                </h4>
                                            </th>
                                            <th class="qnt-link-th">
                                                <h4 class="title-table">
                                                  Qnt Links Cadastrados
                                                </h4>
                                            </th>
                                            <th>
                                                <h4 class="title-table">
                                                    Links
                                                </h4>
                                            </th>
                                        <!-- <th class="options" style="max-width: 180px !important">Opções</th>-->
                                        </tr>
                                    </thead>
                                    <tbody id="add_colab_link_body">
                                        <tr style="width:100%;">
                                            <td class="">
                                                <div class="d-flex justify-content-center">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                                        <label class="custom-control-label content-text" for="customCheck1">Bruno</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td >
                                                <h6 class="content-text">
                                                    2
                                                </h6>
                                            </td>
                                            <td>
                                                <h6 class="content-text">
                                                    <span> Bruno TikTok</span>
                                                    <span>Faceads</span>
                                                </h6>
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
                                            <td>
                                                <h6 class="content-text">
                                                    2
                                                </h6>
                                            </td>
                                            <td>
                                                <h6 class="content-text">
                                                    <span> Bruno TikTok</span>
                                                    <span>Faceads</span>
                                                </h6>
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
                                            <td>
                                                <h6 class="content-text">
                                                    2
                                                </h6>
                                            </td>
                                            <td>
                                                <h6 class="content-text">
                                                    <span> Bruno TikTok</span>
                                                    <span>Faceads</span>
                                                </h6>
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
                                            <td>
                                                <h6 class="content-text">
                                                    2
                                                </h6>
                                            </td>
                                            <td>
                                                <h6 class="content-text">
                                                    <span> Bruno TikTok</span>
                                                    <span>Faceads</span>
                                                </h6>
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
               <div id="info_colab_link_section">
                    <div class="row my-2">
                        <div class="col-md-12">
                            <h4>Aqui estão o(s) colaborador(es) desse link</h4>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 no-padding-mobile">
                            <div class="card">
                                <table id="info_colab_link_table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <h4 class="title-table">
                                                   Colaboradores
                                                </h4>
                                            </th>
                                            <th>
                                                <h4 class="title-table">
                                                   Remover
                                                </h4>
                                            </th>
                                        <!-- <th class="options" style="max-width: 180px !important">Opções</th>-->
                                        </tr>
                                    </thead>
                                    <tbody id="body_table_colabs">
                                        <tr style="width:100%;">
                                            <td class="">
                                                <h6 class="content-text">
                                                   Bruno
                                                </h6>
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
