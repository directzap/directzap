@extends('layout.app')

@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-lg-12" style="display: flex; gap: 12px">
                <h1>Colaboradores</h1>
            </div>
        </div>
    </div>
    <div class="row text-right">
        <div class="col-md-4 ml-auto">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_colaboradores"
                onclick="addColaborador()">
                Adicionar colaborador
            </button>
        </div>
    </div>

    <!-- Basic table -->
    <section id="multilingual-datatable">
        <div class="row">

            <div class="col-12 no-padding-mobile">
                <div class="">
                    <table id="colabs-table">
                        <thead>
                            <tr>
                                <th>
                                    <h4 class="title-table">
                                        Nome
                                    </h4>
                                </th>
                                <th>
                                    <h4 class="title-table">
                                        Links
                                    </h4>
                                </th>
                                <th>
                                    <h4 class="title-table">
                                        Qnt de Clicks
                                    </h4>
                                </th>
                                <th>
                                    <h4 class="title-table">
                                        Opções
                                    </h4>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="body_table_colabs">
                            @foreach ($collaborators as $collaborator)
                                <tr style="width:100%;">
                                    <td>
                                        <h6 class="content-text">
                                            {{ $collaborator->name ?? '' }}
                                        </h6>
                                    </td>
                                    <td>
                                        <h6 class="content-text links-column">
                                            <!--<div class="links-column">-->
                                            <span>{{ $collaborator->phone ?? 'sem email' }}</span>
                                            <span>{{ $collaborator->phone ?? 'sem email' }}</span>

                                        </h6>
                                    </td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <h6 class="content-text mr-1" id="count{{ $collaborator->id }}">
                                            {{ $collaborator->count }}
                                        </h6>
                                        <button type="button" class="ml-1 btn btn-outline-warning rounded-circle btn-icon"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Resetar Clicks" data-id=""
                                            onclick="resetClick({{ $collaborator->id }})">
                                            <i data-feather='refresh-ccw'></i>
                                        </button>
                                    </td>
                                    <td class="">
                                        <div class="row last-td">
                                            <!-- <div class="col-md-4 col-flex">-->
                                            <button class=" btn-outline-primary rounded-circle btn-icon "
                                                data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Dá Play/Pause no Colaborador" data-id=""
                                                onclick="pauseOrPlay({{ $collaborator->id }})">
                                                <!--<i data-feather='play'></i>-->
                                                <i data-feather='pause' id="pause{{ $collaborator->id }}"
                                                    class="@if ($collaborator->active == 0)
                                                    d-none
                                                @endif"></i>
                                                <i data-feather='play' id="play{{ $collaborator->id }}"
                                                    class="@if ($collaborator->active == 1)
                                                    d-none
                                                @endif"></i>
                                            </button>
                                            <!--</div>-->
                                            <!-- <div class="col-md-4 col-flex">-->
                                            <button class="btn btn-outline-danger rounded-circle btn-icon"
                                                data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Deletar Colaborador" data-id=""
                                                onclick="destroy({{ $collaborator->id }})">
                                                <i data-feather='trash-2'></i>
                                            </button>
                                            <!--</div>-->
                                            <!-- <div class="col-md-4 col-flex">-->
                                            <button class="btn btn-outline-info rounded-circle btn-icon" data-toggle="modal"
                                                data-target="#modal_colaboradores" title=""
                                                data-original-title="Editar Colaborador" data-id=""
                                                onclick="show({{ $collaborator->id }})">
                                                <i data-feather='edit'></i>
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
    </section>
    <div class="modal fade" id="modal_colaboradores" tabindex="-1" aria-labelledby="modal_colaboradores"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="title-modal-colaboradores">Adicionar Colaborador</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12" id="response-message">

                        </div>
                    </div>
                    <input type="hidden" name="id" id="id" value="">
                    <div class="form-group">
                        <label for="name">Nome</label>

                        <input type="text" class="form-control" id="name" name="name" placeholder="Nome e Sobrenome">
                    </div>

                    <div class="form-group">
                        <label for="message">Mensagem</label>

                        <input type="text" class="form-control" id="message" name="message" placeholder="ex: Olá, John!">
                    </div>

                    <div class="form-group">
                        <label for="phone">Telefone</label>

                        <input type="text" class="form-control" id="phone" name="phone" placeholder="ex: 21911112222">
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-block" id="adicionar"
                            onclick="storeCollaborator()">
                            Adicionar
                        </button>
                        <button type="submit" class="btn btn-primary btn-block" id="editar" onclick="updateColaborator()">
                            Editar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        function destroy(id) {
            $.ajax({
                type: "DELETE",
                dataType: "json",
                data: {
                    "_token": '{{ csrf_token() }}',
                },
                url: 'colaboradores/' + id,
                success: function(response) {
                    location.reload();
                }
            });
        }

        function resetClick(id) {
            $.ajax({
                type: "GET",
                dataType: "json",
                data: {
                    "_token": '{{ csrf_token() }}',
                },
                url: 'resetClick/' + id,
                success: function(response) {
                    $('#count' + id).html('0');
                }
            });
        }

        function pauseOrPlay(id) {

            $.ajax({
                type: "GET",
                dataType: "json",
                data: {
                    "_token": '{{ csrf_token() }}',
                },
                url: 'pause-play/' + id,
                success: function(response) {
                    if (response == 0) {
                        $('#pause' + id).addClass('d-none');
                        $('#play' + id).removeClass('d-none');
                    } else {
                        $('#pause' + id).removeClass('d-none');
                        $('#play' + id).addClass('d-none');
                    }
                }
            });
        }

        function addColaborador() {
            $('#title-modal-colaboradores').html('Adicionar Colaborador')
            $('#name').val('');
            $('#message').val('');
            $('#phone').val('');
            $('#adicionar').show();
            $('#editar').hide();
        }

        function show(id) {
            $('#title-modal-colaboradores').html('Editar Colaborador')
            $.ajax({
                type: "GET",
                dataType: "json",
                data: {
                    "_token": '{{ csrf_token() }}',
                },
                url: 'colaboradores/' + id + '/edit',
                success: function(response) {
                    $('#id').val(response.id)
                    $('#name').val(response.name)
                    $('#message').val(response.message)
                    $('#phone').val(response.phone)
                    $('#adicionar').hide();
                    $('#editar').show();
                }
            });
        }

        function storeCollaborator() {
            $.ajax({
                type: "POST",
                dataType: "json",
                data: {
                    "_token": '{{ csrf_token() }}',
                    "name": $('#name').val(),
                    "message": $('#message').val(),
                    "phone": $('#phone').val(),
                },
                url: 'colaboradores/',
                success: function(response) {
                    if (response == 'success') {
                        $('#response-message').append(
                            '<div class="alert alert-success">' +
                            '  <button type="button" class="close" data-dismiss="alert">×</button>' +
                            ' <strong>Cadastrado com Sucesso</strong>' +
                            ' </div>'
                        )
                        setTimeout(function() {
                            location.reload();
                        }, 1000)
                    } else {
                        $('#response-message').append(
                            '<div class="alert alert-danger">' +
                            '  <button type="button" class="close" data-dismiss="alert">×</button>' +
                            ' <strong>Você possui o limite máximo de colaboradores</strong>' +
                            ' </div>'
                        )
                    }
                }
            });
        }

        function updateColaborator() {
            var id = $('#id').val();
            $.ajax({
                type: "PUT",
                dataType: "json",
                data: {
                    "_token": '{{ csrf_token() }}',
                    "name": $('#name').val(),
                    "message": $('#message').val(),
                    "phone": $('#phone').val(),
                },
                url: 'colaboradores/' + id,
                success: function(response) {
                    if (response == 'success') {
                        $('#response-message').append(
                            '<div class="alert alert-success">' +
                            '  <button type="button" class="close" data-dismiss="alert">×</button>' +
                            ' <strong>Cadastrado com Sucesso</strong>' +
                            ' </div>'
                        )
                        setTimeout(function() {
                            location.reload();
                        }, 1000)
                    } else {
                        $('#response-message').append(
                            '<div class="alert alert-danger">' +
                            '  <button type="button" class="close" data-dismiss="alert">×</button>' +
                            ' <strong>Erro ao editar</strong>' +
                            ' </div>'
                        )
                    }
                }
            });
        }
    </script>
@endsection
