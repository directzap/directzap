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


                <form method="POST" action="" class="mt-2">
                    @csrf
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
