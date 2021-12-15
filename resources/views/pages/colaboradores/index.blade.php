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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_colaboradores">
                Adicionar colaborador
            </button>
        </div>
    </div>

    <!-- Basic table -->
    <section id="multilingual-datatable">
        <div class="row">

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
                                            <button class="btn btn-outline-info rounded-circle btn-icon"
                                                data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Ver Colaborador" data-id="">
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
                    } else{
                        $('#pause' + id).removeClass('d-none');
                        $('#play' + id).addClass('d-none');

                    }
                }
            });
        }
    </script>
@endsection
