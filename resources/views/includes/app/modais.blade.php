 <!-- Modais -->
 <div class="modal fade" id="modal_register_phone" tabindex="-1" aria-labelledby="modal_colaboradores"
     aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="">Cadastre seu número de telefone (whatsapp)</h5>

                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>

             <div class="modal-body">

                 <form method="POST" action="{{ route('user.storePhone') }}">
                     @csrf
                     <div class="form-group">
                         <label for="phone">Telefone (whatsapp)</label>
                         <input type="text" class="form-control" id="phone" name="phone" placeholder="ex: 21911112222"required>
                     </div>

                     <div class="modal-footer">
                         <button type="submit" class="btn btn-primary btn-block">
                            Cadastrar
                         </button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
{{--
 <div class="modal fade" id="modal_colaboradores" tabindex="-1" aria-labelledby="modal_colaboradores"
     aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="title-modal-colaboradores"> Cadastrar Novo Colaborador </h5>

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
 --}}

 <!-- Pixel Facebook -->
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
                 <div id="mensagem-facebook"></div>
                 <form method="post" action="">
                     @csrf

                     <div class="form-group">
                         <p class="p-1">Insira abaixo seu Pixel</p>

                         <input type="number" class="form-control" id="pixel_facebook" name="pixel_facebook"
                             placeholder="Ex: 1282707308773467" value="{{ auth()->user()->pixel_facebook }}" required>
                     </div>

                     <div class="modal-footer">
                         <button type="button" onclick="salvarPixelFacebook()" class="btn btn-primary btn-block">Salvar</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>

 <!-- Pixel GTM -->
 <div class="modal fade" id="pixelGtmModal" tabindex="-1" aria-labelledby="PixelModal" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered ">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="configModal">
                     Adicionar Pixel GTM
                 </h5>

                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>

             <div class="modal-body">
                 <div id="mensagem-facebook"></div>
                 <form method="post" action="">
                     @csrf

                     <div class="form-group">
                         <p class="p-1">Insira abaixo seu Pixel GTM</p>

                         <input type="number" class="form-control" id="pixel_facebook" name="pixel_facebook"
                             placeholder="Ex: 1282707308773467" value="{{ auth()->user()->pixel_facebook }}" required>
                     </div>

                     <div class="modal-footer">
                         <button type="button" onclick="salvarPixelFacebook()" class="btn btn-primary btn-block">Salvar</button>
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
                <div id="mensagem-gtm"></div>
                 <form method="POST" action="">
                     @csrf

                     <div class="form-group">
                         <div class="col-md-12">
                             <button type="button" class="btn btn-info btn-block mt-2" id="gera-codigo"
                                 onclick="makeCod()">Gerar Código</button>
                         </div>
                     </div>
                     <input type="text" class="form-control" id="code" name="code" value="{{ auth()->user()->pixel_gtm }}" placeholder="Ex: dr89f"
                         minlength="1">



                     <div class="modal-footer">
                         <button type="button" onclick="salvarPixelGtm()" class="btn btn-primary btn-block">
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
    <div class="modal-dialog modal-dialog-centered modal-lg">
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
                                                        Valor
                                                    </h4>
                                                </th>
                                                <th>
                                                    <h4 class="title-table">
                                                        Comissão
                                                    </h4>
                                                </th>
                                                <th>
                                                    <h4 class="title-table">
                                                        Forma de pagamento
                                                    </h4>
                                                </th>
                                                <th>
                                                    <h4 class="title-table">
                                                        Código da venda
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
                <form method="POST" action="{{ route('links.store') }}">
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
                                <input type="radio" class="custom-control-input" id="com_precell" name="precell" value="1">
                                <label class="custom-control-label" for="com_precell">Com Precell</label>

                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="sem_precell" name="precell" value="0">
                                <label class="custom-control-label" for="sem_precell">Sem Precell</label>
                            </div>

                            <div class="dominios-select mt-n2">
                                <h4 class="mt-3">Selecione o Dominio</h4>
                                <div class="demo-inline-spacing mt-n1">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="directzap_dominio"  name="dominio" value="direct">
                                        <label class="custom-control-label" for="directzap_dominio">directzap.com</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="zapdownloader_dominio"  name="dominio" value="zap">
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

