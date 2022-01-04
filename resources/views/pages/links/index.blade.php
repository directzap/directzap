@extends('layout.app')


@section('content')

    <section id="links_datatable">
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
        <div class="row mb-3">
            <div class="col-md-4">
                <h4>Lista de Links</h4>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" id="link_limit" name="link_limit" placeholder=""
                    value="Limite de links: 16" disabled>
            </div>
            <div class="col-md-4 text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#register_link">
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
                                <th class="">
                                    <h4 class="title-table">
                                        Link
                                    </h4>
                                </th>
                                <th class="">
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
                            @foreach ($links as $link)

                                <tr style="width:100%;">
                                    <td>
                                        <h6 class="content-text">
                                            {{ $link->name }}
                                        </h6>
                                    </td>
                                    <td>
                                        <h6 class="content-text">
                                            {{ $link->qtd_collaborators }}
                                        </h6>
                                    </td>
                                    <td class="">
                                        <div class="row last-td">

                                            <!-- <div class="col-md-4 col-flex">-->
                                            <button class="btn btn-danger rounded-circle btn-icon" data-toggle="tooltip"
                                                data-placement="top" title="" data-original-title="Deletar Link" data-id=""
                                                onclick="deletelink({{ $link->id }})">
                                                <i data-feather='trash-2'></i>
                                            </button>
                                            <!--</div>-->
                                            <!-- <div class="col-md-4 col-flex">-->
                                            <button class="btn btn-success rounded-circle btn-icon"
                                                data-target="#add_colab_link" data-toggle="modal" data-placement="top"
                                                title="" data-original-title="Add Colaborador ao Link" data-id=""
                                                onclick="showAddCollaborators({{ $link->id }})">
                                                <i data-feather='plus-circle'></i>
                                            </button>
                                            <button class="btn btn-info rounded-circle btn-icon"
                                                data-target="#info_colab_link" data-toggle="modal" data-placement="top"
                                                title="" data-original-title="Info Colaborador ao Link" data-id=""
                                                onclick="collaboratoresLink({{ $link->id }})">
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
    </section>
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
                        <form action="{{ route('addCollaborators') }}" method="post">
                            @csrf
                            <div id="input"></div>
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
                        </form>
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
                                        <tbody id="info_colab_link_body">
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

@section('js')
    <script>
        function deletelink(id) {
            $.ajax({
                type: "DELETE",
                dataType: "json",
                data: {
                    "_token": '{{ csrf_token() }}',
                },
                url: 'links/' + id,
                success: function(response) {
                    location.reload();
                }
            });
        }

        function showAddCollaborators(id) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: 'links/show-add-collaborators/' + id,
                success: function(collaborators) {
                    $.each(collaborators, function(index, collaborator) {
                        $('#add_colab_link_body').append(' <tr style="width:100%;">' +
                            '<td class="">' +
                            '<div class="d-flex justify-content-center">' +
                            '<div class="custom-control custom-checkbox">' +
                            '<input type="checkbox" class="custom-control-input" id="customCheck' +
                            index + '" name="collaborator[]" value="' + collaborator.id + '"">' +
                            '<label class="custom-control-label content-text" for="customCheck' +
                            index + '">' +
                            collaborator.name +
                            ' </label>' +
                            ' </div>' +
                            '   </div>' +
                            ' </td>' +
                            ' <td>' +
                            '  <h6 class="content-text">' +
                            collaborator.qtd_link +
                            '  </h6>' +
                            '  </td>' +
                            ' <td>' +
                            '   <h6 class="content-text">' +
                            '  <span> Bruno TikTok</span>' +
                            ' <span>Faceads</span>' +
                            '   </h6>' +
                            '  </td>' +
                            '</tr>')
                    });

                    $('#input').append(
                        '<input type="hidden" value="' + id + '" name="link"/>'
                    )
                }
            });
        }

        function collaboratoresLink(id) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: 'links/collaborators-link/' + id,
                success: function(collaborators) {
                    $.each(collaborators, function(index, collaborator) {
                        $('#info_colab_link_body').append(' <tr style="width:100%;">' +
                            '<td class="">' +
                            '<h6 class="content-text">' +
                            collaborator.name +
                            '</h6>' +
                            '</td>' +
                            '<td>' +
                            '<div class="row last-td">' +
                            '<button class="btn btn-danger rounded-circle btn-icon"' +
                            'data-toggle="tooltip" data-placement="top" title=""' +
                            'data-original-title="Deletar Link" data-id=""'+
                            `onclick="deleteCollaboratorLink(`+ id , collaborator.id +`)"`
                            '>' +
                            '<i data-feather="trash-2"></i>' +
                            '</button>' +
                            ' </div>' +
                            '</td>' +
                            '</tr>')
                    });

                    $('#input').append(
                        '<input type="hidden" value="' + id + '" name="link"/>'
                    )
                }
            });
        }

        function deleteCollaboratorLink(link_id, collaborator_id) {
            $.ajax({
                type: "POST",
                dataType: "json",
                url: 'links/delete-collaborator-link/',
                data: {
                    'link_id': link_id,
                    'collaborator_id': collaborator_id
                }
                success: function(response) {
                    alert('ok');
                }
            });
        }
    </script>
@endsection
