@extends('layout.app')
@section('content')
    <section id="admin_datatable">
        <div class="row">
            <div class="col-12 mb-2">
                <h3 class="text-center">Área Administrativa</h3>
            </div>
            <div class="col-md-12">
                <div class="row text-right mb-2">
                    <div class="col-md-12 group-btns-flex">

                        <button type="button" class="btn btn-outline-primary " data-toggle="modal" data-target="#make_update_note">
                            <i class="icon-btn color-white" data-feather='plus-circle'></i> <span class="pc-only">Add Notas de</span> Atualização
                        </button>
                        <button type="button" class="btn btn-outline-primary btn-outline-primary " data-toggle="modal" data-target="#notes_update_modal">
                            <i class="icon-btn color-white" data-feather='eye'></i> <span class="pc-only">Ver Notas de </span> Atualização
                        </button>

                        <button type="button" class="btn btn-outline-primary " data-toggle="modal" data-target="#make_alert">
                            <i class="icon-btn color-white" data-feather='plus-circle'></i> <span class="pc-only">Add </span> Alertas
                        </button>
                        <button type="button" class="btn btn-outline-primary  " data-toggle="modal" data-target="#alerts_modal">
                            <i class="icon-btn color-white" data-feather='eye'></i> <span class="pc-only">Ver</span> Alertas
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#active_account">
                            Ativar Conta
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 no-padding-mobile">
                <div class="table-responsive-sm">
                    <div class="card ">
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
                                @foreach ($users as $user)
                                    <tr style="width:100%;" id="user{{ $user->id }}">
                                        <td>
                                            <h6 class="content-text">
                                                {{ $user->name }}
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="content-text">
                                                {{ $user->email }}
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="content-text">
                                            </h6>
                                        </td>
                                        <td>
                                            <div class="row last-td">
                                                <!-- <div class="col-md-4 col-flex">-->
                                                <button class="btn btn-warning rounded-circle btn-icon" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Deletar Colaborador"
                                                    data-id="" onclick="deleteUser({{ $user->id }})">
                                                    <i data-feather='trash-2'></i>
                                                </button>
                                                <!--</div>-->
                                                <!-- <div class="col-md-4 col-flex">-->
                                                <button class="btn btn-info rounded-circle btn-icon"
                                                    data-target="#modal_adm_info" data-toggle="modal" data-placement="top"
                                                    title="" data-original-title="Ver Colaborador" data-id=""
                                                    onclick="showUser({{ $user->id }})">
                                                    <i data-feather='info'></i>
                                                </button>
                                                <!--</div>-->
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
    
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
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
                    <form method="POST" action="{{ route('alerts.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="title_alert">Título da Alerta</label>
                            <input type="text" class="form-control" id="title_alert" name="title" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="alert_type">Tipo de Alerta</label>
                            <select class="form-control" id="alert_type" name="type">
                                <option value="danger">Cuidado</option>
                                <option value="success">Sucesso</option>
                                <option value="warning">Atenção</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="msg_alert">Menssagem</label>
                            <textarea class="form-control" id="msg_alert" rows="3" placeholder=""
                                name="message"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Criar Alerta</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="make_update_note" tabindex="-1" aria-labelledby="links" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="configModal">Nota de Atualização </h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form method="POST" action="{{ route('updates.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="title_alert">Título da Atualização</label>
                            <input type="text" class="form-control" id="title_alert" name="update_title" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="alert_type">Tipo de Atualização</label>
                            <select class="form-control" id="alert_type" name="update_type">
                                <option value="danger">Atualizado</option>
                                <option value="success">Em Andamento</option>
                                <option value="warning">Em Breve</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="msg_alert">Texto</label>
                            <textarea class="form-control" id="msg_alert" rows="3" placeholder=""
                                name="update_message"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Criar Nota</button>
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
                    <form method="POST" action="{{ route('user.active') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Email que deseja ativar</label>
                            <input type="text" class="form-control" id="email_active" name="email_active" placeholder="">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Ativar Conta</button>
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
                          <!--  <div class="col-lg-4">
                                <div class="custom-control custom-switch custom-control-inline">
                                    <input type="text" class="form-control" id="type_user" name="type_user"
                                        value="">
                                    <label class="" for="type_user">Tipo de Usuário</label>
                                </div>
                            </div>
                        -->
                            <div class="col-lg-4">
                                <div class="custom-control custom-switch custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="turn_adm_check" name="is_adm"
                                        value="1">
                                    <label class="custom-control-label" for="turn_adm_check">Tornar Administrador</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="custom-control custom-switch custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="turn_life_time_check" name="life_time"
                                        value="1">
                                    <label class="custom-control-label" for="turn_life_time_check">Ativar conta Lifetime</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-4 col-flex-center">
                                <button class="btn btn-primary" type="button" data-target="#extend_acess" data-toggle="modal">Extender Acesso</button>
                            </div>
                            <div class="col-lg-4 col-flex-center">
                                <button class="btn btn-primary" type="button" data-target="#add_colab_modal" data-toggle="modal">Adicionar
                                    colaboradores</button>
                            </div>
                            <!--
                            <div class="col-lg-4 col-flex-center">
                                <button class="btn btn-primary" type="button"> Renovar acesso</button>
                            </div>
                        -->
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-4">
                                <label for="">Data de compra: </label>
                                <input type="text" class="form-control" id="date_purchase" name="date_purchase" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label for="">Quantidade de colaboradores:</label>
                                <input type="text" class="form-control" id="qtd_collaborators" name="qtd_collaborators"
                                    value="8" disabled>
                            </div>
                            <div class="col-lg-4">
                                <label for="">Dias restantes de acesso</label>
                                <input type="text" class="form-control" id="missing_days" name="missing_days" disabled>
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
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        value="ex: 21911112222" disabled>
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
                <form method="POST" action="{{ route('addNumberCollaborator') }}" class="mt-2">
                    @csrf
                    <div class="modal-body">
                        <label for="collaborators_liberados">Id Colaborador</label>
                        <input class="form-control" type="text" name="id_user" id="id_user" value="" disabled>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="hidden" id="user_id_add_collaborator">
                                        <label for="collaborators_liberados">Colaboraderes liberados</label>
                                        <input type="text" class="form-control" disabled id="collaborators_liberados" name="collaborators_liberados" value="8"
                                            disabled>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="add_collaboratos">Adicionar mais Colaboradores</label>
                                        <input type="number" min="1" class="form-control" id="add_collaboratos" name="add_collaboratos">
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="addCollaborator()" class="btn btn-primary btn-block">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade  modal-success" id="extend_acess" tabindex="-1" aria-labelledby="extend_acess" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Estender Dias de Acesso</h5>

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
                                        <label for="collaborators_liberados">Coloque os dias adicionais de acesso</label>
                                        <input type="hidden" name="user_id_extend_day" id="user_id_extend_day">
                                        <input type="number" class="form-control"  id="extend_days" name="extend_days">
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="extendDay()" class="btn btn-primary btn-block">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade " id="notes_update_modal" tabindex="-1" aria-labelledby="add_colab_modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Ver Notas de Atualizações</h5>
    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="" class="mt-2">
                    @csrf
                    <div class="modal-body">
                        <h4>Notas de Atualizações</h4>
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
                                                            Titulo
                                                        </h4>
                                                    </th>
                                                    <th>
                                                        <h4 class="title-table">
                                                           Tipo
                                                        </h4>
                                                    </th>
                                                    <th>
                                                        <h4 class="title-table" style="max-width: 180px">
                                                            Menssagem
                                                        </h4>
                                                    </th>
                                                 
                                                    <th>
                                                        <h4 class="title-table">
                                                            Opções
                                                        </h4>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="">
                                                <tr style="width:100%;" >
                                                    <td>
                                                        <h6 class="content-text">
                                                           Titulo da Atualização
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="content-text">
                                                           Tipo da Atualização
                                                        </h6>
                                                    </td>
                                                  
                                                    <td>
                                                        <div class="mail-message colum-resize" >
                                                            <h6 class="text-truncate">
                                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. A harum impedit iste dolores laborum voluptas, expedita recusandae similique ratione amet dolorem, facere ex eius dicta facilis. Obcaecati qui est numquam.
                                                            </h6>
                                                        </div>
                                                    </td>
                                                    <td class="" style="min-width: 100px">
                                                        <div class="row last-td">
                                                            <button class="btn btn-danger rounded-circle btn-icon" data-toggle="tooltip"
                                                            data-placement="top" title="Deletar Nota" data-original-title="Deletar Nota" data-id="">
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
                        </section>
                    </div>
                    <div class="modal-footer">
    
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade " id="alerts_modal" tabindex="-1" aria-labelledby="add_colab_modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Ver Alertas</h5>
    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="" class="mt-2">
                    @csrf
                    <div class="modal-body">
                        <h4>Alertas</h4>
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
                                                            Titulo
                                                        </h4>
                                                    </th>
                                                    <th>
                                                        <h4 class="title-table">
                                                           Tipo
                                                        </h4>
                                                    </th>
                                                    <th>
                                                        <h4 class="title-table" style="max-width: 180px">
                                                            Menssagem
                                                        </h4>
                                                    </th>
                                                 
                                                    <th>
                                                        <h4 class="title-table">
                                                            Opções
                                                        </h4>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="">
                                                <tr style="width:100%;" >
                                                    <td>
                                                        <h6 class="content-text">
                                                           Titulo da Alerta
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="content-text">
                                                           Tipo de Alerta
                                                        </h6>
                                                    </td>
                                                  
                                                    <td>
                                                        <div class="mail-message colum-resize" >
                                                            <h6 class="text-truncate">
                                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. A harum impedit iste dolores laborum voluptas, expedita recusandae similique ratione amet dolorem, facere ex eius dicta facilis. Obcaecati qui est numquam.
                                                            </h6>
                                                        </div>
                                                    </td>
                                                    <td class="" style="min-width: 100px">
                                                        <div class="row last-td">
                                                            <button class="btn btn-danger rounded-circle btn-icon" data-toggle="tooltip"
                                                            data-placement="top" title="Deletar Nota" data-original-title="Deletar Nota" data-id="">
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
                        </section>
                    </div>
                    <div class="modal-footer">
    
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function deleteUser(user_id) {
            $.ajax({
                type: "DELETE",
                dataType: "json",
                url: 'user/' + user_id,
                data: {
                    "_token": '{{ csrf_token() }}',
                },
                success: function(response) {
                    $('#user' + user_id).remove();
                }
            });
        }

        function showUser(user_id) {
            $('#user_id_extend_day').val(user_id);
            $('#user_id_add_collaborator').val(user_id);
            $.ajax({
                type: "GET",
                dataType: "json",
                url: 'user/' + user_id,
                data: {
                    "_token": '{{ csrf_token() }}',
                },
                success: function(response) {
                    if (response.is_admin == 1) {
                        $('#customSwitch1').attr('checked', true);
                    }
                    if (response.count_life_time == 1) {
                        $('#customSwitch2').attr('checked', true);
                    }

                    var date_purchase = response.date_purchase.split('-');
                    date_purchase = date_purchase[2] + '/' + date_purchase[1] + '/' + date_purchase[0];

                    var date_finish = response.date_finish.split('-');
                    date_finish = date_finish[2] + '/' + date_finish[1] + '/' + date_finish[0];

                    var date1 = new Date(response.date_purchase);
                    var date2 = new Date(response.date_finish);
                    var timeDiff = Math.abs(date2.getTime() - date1.getTime());
                    var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

                    $('#date_purchase').val(date_purchase)
                    $('#qtd_collaborators').val(response.qtd_collaborators);
                    $('#missing_days').val(diffDays + ' dias');
                    $('#name').val(response.name);
                    $('#phone').val(response.phone);
                    $('#id_user').val(user_id);
                    $('#collaborators_liberados').val(response.qtd_collaborators);

                }
            });
        }

        function extendDay() {
            var days = $("#extend_days").val()
            var user_id = $("#user_id_extend_day").val()
            $.ajax({
                type: "POST",
                dataType: "json",
                url: 'user-extendDay',
                data: {
                    "_token": '{{ csrf_token() }}',
                    "days"  : days,
                    "user_id": user_id,
                },
                success: function(response) {
                    var date_purchase = response.date_purchase.split('-');
                    date_purchase = date_purchase[2] + '/' + date_purchase[1] + '/' + date_purchase[0];

                    var date_finish = response.date_finish.split('-');
                    date_finish = date_finish[2] + '/' + date_finish[1] + '/' + date_finish[0];

                    var date1 = new Date(response.date_purchase);
                    var date2 = new Date(response.date_finish);
                    var timeDiff = Math.abs(date2.getTime() - date1.getTime());
                    var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));


                    $('#missing_days').val(diffDays + ' dias');
                    $("#extend_days").val('')
                }
            });
        }

        function addCollaborator() {
            var qtd = $("#add_collaboratos").val()
            var user_id = $("#user_id_add_collaborator").val()
            $.ajax({
                type: "POST",
                dataType: "json",
                url: 'user-addNumberCollaborator',
                data: {
                    "_token": '{{ csrf_token() }}',
                    "qtd"  : qtd,
                    "user_id": user_id,
                },
                success: function(response) {
                    $('#qtd_collaborators').val(response);
                    $('#collaborators_liberados').val(response);
                    $("#add_collaboratos").val('')
                }
            });
        }

        //Ativação do checkbox pra tornar adm e lifetiem acount
        $('#turn_adm_check').on('change', function() {
            if($(this).prop("checked")){
              $(this).val('adm');
            }else if( !$(this).prop("checked")){
               $(this).val('user');
            }
        });
        $('#turn_life_time_check').on('change', function() {
            if($(this).prop("checked")){
                $(this).val('life-time');
            }else if( !$(this).prop("checked")){
                $(this).val('normal');
            }
        });

    </script>
@endsection
