@extends('layout.app')
@section('content')
    <section id="page-account-settings ">
        <div class="row">
            <!-- left menu section -->
            <div class="col-md-3 mb-2 mb-md-0 ">
                <ul class="nav nav-pills flex-column nav-left">
                    <!-- general -->
                    <li class="nav-item">
                        <a class="nav-link active" id="account-pill-general" data-toggle="pill"
                            href="#account-vertical-general" aria-expanded="true">

                            <i data-feather='user'></i>
                            <span class="font-weight-bold">Opções Gerais</span>
                        </a>
                    </li>
                    <!-- change password -->
                    <li class="nav-item">
                        <a class="nav-link" id="account-pill-password" data-toggle="pill"
                            href="#account-vertical-password" aria-expanded="false">
                            <i data-feather='lock'></i>
                            <span class="font-weight-bold">Mudar Senha</span>
                        </a>
                    </li>
                    <!-- Time -->
                    <li class="nav-item">
                        <a class="nav-link" id="account-pill-info" data-toggle="pill"
                            href="#account-vertical-info" aria-expanded="false">
                            <i data-feather='info'></i>
                            <span class="font-weight-bold">Conta Directzap</span>
                        </a>
                    </li>
                    @if (auth()->user()->type == 'user')
                        <li class="nav-item">
                            <a class="nav-link" id="account-pill-password" data-toggle="pill"
                                href="#account-vertical-acess" aria-expanded="false">
                                <i data-feather='clock'></i>
                                <span class="font-weight-bold">Acesso ao sistema</span>
                            </a>
                        </li>
                    @endif
                    <!-- information --
                                   <li class="nav-item">
                                       <a class="nav-link" id="account-pill-info" data-toggle="pill" href="#account-vertical-info" aria-expanded="false">
                                           <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info font-medium-3 mr-1"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                                           <span class="font-weight-bold">Informações</span>
                                       </a>
                                   </li>
                                   <!-- social --
                                   <li class="nav-item">
                                       <a class="nav-link" id="account-pill-social" data-toggle="pill" href="#account-vertical-social" aria-expanded="false">
                                           <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link font-medium-3 mr-1"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                                           <span class="font-weight-bold">Social</span>
                                       </a>
                                   </li>
                                   <!-- notification --
                                   <li class="nav-item">
                                       <a class="nav-link" id="account-pill-notifications" data-toggle="pill" href="#account-vertical-notifications" aria-expanded="false">
                                           <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell font-medium-3 mr-1"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                                           <span class="font-weight-bold">Notifications</span>
                                       </a>
                                   </li>
                                -->
                </ul>
            </div>
            <!--/ left menu section -->

            <!-- right content section -->
            <div class="col-md-9">
                <div class="card ">
                    <div class="card-body">
                        <div class="tab-content">
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
                            <!-- general tab -->
                            <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                                aria-labelledby="account-pill-general" aria-expanded="true">
                                <!-- form -->
                                <form class="validate-form" method="post"
                                    action="{{ route('user.update', auth()->user()->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <!-- header media -->
                                    <div class=" media">
                                        <a href="javascript:void(0);" class="mr-25">
                                            <img src="@if ($user->avatar)
                                            {{ asset("uploads/avatars/$user->avatar") }}
                                        @else
                                            {{ asset('assets/images/profile/userPlaceholder.png') }} @endif"
                                            id="account-upload-img" class="rounded mr-50" alt="profile image"
                                            height="80" width="80" />
                                        </a>
                                        <!-- upload and reset button -->
                                        <div class="media-body mt-75 ml-1">
                                            <label for="account-upload" class="btn btn-sm btn-primary mb-75 mr-75">Enviar
                                                Imagem</label>
                                            <input type="file" id="account-upload" name="avatar" hidden accept="image/*" onchange="document.getElementById('account-upload-img').src = window.URL.createObjectURL(this.files[0])"/>
                                            <button class="btn btn-sm btn-outline-secondary mb-75">Resetar</button>
                                            <p>JPG, GIF ou PNG. Com tamanho máximo de 800kB</p>
                                        </div>
                                        <div>
                                            <img src="" id="testimg" alt="">
                                        </div>
                                        <!--/ upload and reset button -->
                                    </div>
                                    <!--/ header media -->
                                    <div class="row mt-2">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-username">Nick</label>
                                                <input type="text" class="form-control" id="account-username"
                                                    name="username" placeholder="Username"
                                                    value="{{ $user->username }}" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-name">Nome</label>
                                                <input type="text" class="form-control" id="account-name" name="name"
                                                    placeholder="Nome" value="{{ $user->name }}" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-e-mail">E-mail</label>
                                                <input type="email" class="form-control" id="account-e-mail" name="email"
                                                    placeholder="Email Principal" value="{{ $user->email }}" disabled />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-company">Nome Empresa</label>
                                                <input type="text" class="form-control" id="account-company"
                                                    name="company" placeholder="Nome da Empresa"
                                                    value="{{ $user->company }}" />
                                            </div>
                                        </div>
                                        <!--
                                                                                <div class="col-12 mt-75">
                                                                                    <div class="alert alert-warning mb-50" role="alert">
                                                                                        <h4 class="alert-heading">Your email is not confirmed. Please check your inbox.</h4>
                                                                                        <div class="alert-body">
                                                                                            <a href="javascript: void(0);" class="alert-link">Resend confirmation</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                -->
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-2 mr-1">Salvar
                                                alterações</button>
                                            <button type="reset" class="btn btn-outline-secondary mt-2">Cancelar</button>
                                        </div>
                                    </div>
                                </form>
                                <!--/ form -->
                            </div>
                            <!--/ general tab -->

                            <!-- change password -->
                            <div class="tab-pane fade" id="account-vertical-password" role="tabpanel"
                                aria-labelledby="account-pill-password" aria-expanded="false">
                                <!-- form -->
                                <form class="validate-form" action="{{ route('user.updatePass', auth()->user()->id) }}"
                                    method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-old-password">Senha Antiga</label>
                                                <div class="input-group form-password-toggle input-group-merge">
                                                    <input type="password" class="form-control" id="account-old-password"
                                                        name="password" placeholder="Senha Antiga" />
                                                    <div class="input-group-append">
                                                        <div class="input-group-text cursor-pointer">
                                                            <i data-feather="eye"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-new-password">Nova Senha</label>
                                                <div class="input-group form-password-toggle input-group-merge">
                                                    <input type="password" id="account-new-password" name="new_password"
                                                        class="form-control" placeholder="Nova Senha" />
                                                    <div class="input-group-append">
                                                        <div class="input-group-text cursor-pointer">
                                                            <i data-feather="eye"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-retype-new-password">Confirme a Senha</label>
                                                <div class="input-group form-password-toggle input-group-merge">
                                                    <input type="password" class="form-control"
                                                        id="account-retype-new-password" name="confirm_password"
                                                        placeholder="Nova Senha" />
                                                    <div class="input-group-append">
                                                        <div class="input-group-text cursor-pointer"><i
                                                                data-feather="eye"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mr-1 mt-1">Salvar
                                                alterações</button>
                                            <button type="reset" class="btn btn-outline-secondary mt-1">Cancelar</button>
                                        </div>
                                    </div>
                                </form>
                                <!--/ form -->
                            </div>
                            <!--/ change password -->

                            @if (auth()->user()->type == 'user')
                                <!-- Acesso -->
                                <div class="tab-pane fade" id="account-vertical-acess" role="tabpanel"
                                    aria-labelledby="account-pill-info" aria-expanded="false">
                                    <!-- form -->
                                    <form class="validate-form">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="account-acess-time">Tempo de Acesso Restante</label>
                                                    <input type="text" class="form-control flatpickr" disabled
                                                        placeholder="" id="account-acess-time" name=""
                                                        value="30 dias restantes" />
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mt-1 mr-1">Renovar
                                                    Acesso</button>
                                                <button type="reset"
                                                    class="btn btn-outline-secondary mt-1">Cancelar</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!--/ form -->
                                </div>
                                <!--/ Acesso -->
                            @endif
                            <!-- information -->
                            <div class="tab-pane fade" id="account-vertical-info" role="tabpanel"
                                aria-labelledby="account-pill-info" aria-expanded="false">
                                <!-- form -->
                                <form class="validate-form">
                                    <div class="row">
                                        <!--
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="accountSelect">Country</label>
                                                <select class="form-control" id="accountSelect">
                                                    <option>USA</option>
                                                    <option>India</option>
                                                    <option>Canada</option>
                                                </select>
                                            </div>
                                        </div>
                                        -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="">Data da Compra</label>
                                                <input type="text" class="form-control" name=""
                                                    id="" value="20/12/2022" placeholder="" disabled />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="">Dias restantes</label>
                                                <input type="text" class="form-control" id=""
                                                    placeholder="" value="27 dias" name="" disabled />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="">Quantidade de colaboradores</label>
                                                <input type="text" class="form-control" id=""
                                                    placeholder="" value="8" name="" disabled />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="">Telefone</label>
                                                <input type="text" class="form-control" id=""
                                                    placeholder="" value="(11) 9 8475-7899" name="" disabled />
                                            </div>
                                        </div>

                                    </div>
                                </form>
                                <!--/ form -->
                            </div>
                            <!--/ information -->

                            <!-- social -->
                            <div class="tab-pane fade" id="account-vertical-social" role="tabpanel"
                                aria-labelledby="account-pill-social" aria-expanded="false">
                                <!-- form -->
                                <form class="validate-form">
                                    <div class="row">
                                        <!-- social header -->
                                        <div class="col-12">
                                            <div class="d-flex align-items-center mb-2">
                                                <i data-feather="link" class="font-medium-3"></i>
                                                <h4 class="mb-0 ml-75">Social Links</h4>
                                            </div>
                                        </div>
                                        <!-- twitter link input -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-twitter">Twitter</label>
                                                <input type="text" id="account-twitter" class="form-control"
                                                    placeholder="Add link" value="https://www.twitter.com" />
                                            </div>
                                        </div>
                                        <!-- facebook link input -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-facebook">Facebook</label>
                                                <input type="text" id="account-facebook" class="form-control"
                                                    placeholder="Add link" />
                                            </div>
                                        </div>
                                        <!-- google plus input -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-google">Google+</label>
                                                <input type="text" id="account-google" class="form-control"
                                                    placeholder="Add link" />
                                            </div>
                                        </div>
                                        <!-- linkedin link input -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-linkedin">LinkedIn</label>
                                                <input type="text" id="account-linkedin" class="form-control"
                                                    placeholder="Add link" value="https://www.linkedin.com" />
                                            </div>
                                        </div>
                                        <!-- instagram link input -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-instagram">Instagram</label>
                                                <input type="text" id="account-instagram" class="form-control"
                                                    placeholder="Add link" />
                                            </div>
                                        </div>
                                        <!-- Quora link input -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-quora">Quora</label>
                                                <input type="text" id="account-quora" class="form-control"
                                                    placeholder="Add link" />
                                            </div>
                                        </div>

                                        <!-- divider -->
                                        <div class="col-12">
                                            <hr class="my-2" />
                                        </div>

                                        <div class="col-12 mt-1">
                                            <!-- profile connection header -->
                                            <div class="d-flex align-items-center mb-3">
                                                <i data-feather="user" class="font-medium-3"></i>
                                                <h4 class="mb-0 ml-75">Profile Connections</h4>
                                            </div>

                                            <div class="row">
                                                <!-- twitter user -->
                                                <div class="col-6 col-md-3 text-center mb-1">
                                                    <p class="font-weight-bold">Your Twitter</p>
                                                    <div class="avatar mb-1">
                                                        <span class="avatar-content">
                                                            <img src="../../../app-assets/images/avatars/11-small.png"
                                                                alt="avatar img" width="40" height="40" />
                                                        </span>
                                                    </div>
                                                    <p class="mb-0">@johndoe</p>
                                                    <a href="javascript:void(0)">Disconnect</a>
                                                </div>
                                                <!-- facebook button -->
                                                <div class="col-6 col-md-3 text-center mb-1">
                                                    <p class="font-weight-bold mb-2">Your Facebook</p>
                                                    <button class="btn btn-outline-primary">Connect</button>
                                                </div>
                                                <!-- google user -->
                                                <div class="col-6 col-md-3 text-center mb-1">
                                                    <p class="font-weight-bold">Your Google</p>
                                                    <div class="avatar mb-1">
                                                        <span class="avatar-content">
                                                            <img src="../../../app-assets/images/avatars/3-small.png"
                                                                alt="avatar img" width="40" height="40" />
                                                        </span>
                                                    </div>
                                                    <p class="mb-0">@luraweber</p>
                                                    <a href="javascript:void(0)">Disconnect</a>
                                                </div>
                                                <!-- github button -->
                                                <div class="col-6 col-md-3 text-center mb-2">
                                                    <p class="font-weight-bold mb-1">Your GitHub</p>
                                                    <button class="btn btn-outline-primary">Connect</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <!-- submit and cancel button -->
                                            <button type="submit" class="btn btn-primary mr-1 mt-1">Save changes</button>
                                            <button type="reset" class="btn btn-outline-secondary mt-1">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                                <!--/ form -->
                            </div>
                            <!--/ social -->

                            <!-- notifications -->
                            <div class="tab-pane fade" id="account-vertical-notifications" role="tabpanel"
                                aria-labelledby="account-pill-notifications" aria-expanded="false">
                                <div class="row">
                                    <h6 class="section-label mx-1 mb-2">Activity</h6>
                                    <div class="col-12 mb-2">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" checked
                                                id="accountSwitch1" />
                                            <label class="custom-control-label" for="accountSwitch1">
                                                Email me when someone comments onmy article
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" checked
                                                id="accountSwitch2" />
                                            <label class="custom-control-label" for="accountSwitch2">
                                                Email me when someone answers on my form
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="accountSwitch3" />
                                            <label class="custom-control-label" for="accountSwitch3">Email me hen someone
                                                follows me</label>
                                        </div>
                                    </div>
                                    <h6 class="section-label mx-1 mt-2">Application</h6>
                                    <div class="col-12 mt-1 mb-2">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" checked
                                                id="accountSwitch4" />
                                            <label class="custom-control-label" for="accountSwitch4">News and
                                                announcements</label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" checked
                                                id="accountSwitch6" />
                                            <label class="custom-control-label" for="accountSwitch6">Weekly product
                                                updates</label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-75">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="accountSwitch5" />
                                            <label class="custom-control-label" for="accountSwitch5">Weekly blog
                                                digest</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-2 mr-1">Save changes</button>
                                        <button type="reset" class="btn btn-outline-secondary mt-2">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <!--/ notifications -->
                        </div>
                    </div>
                </div>
            </div>
            <!--/ right content section -->
        </div>
    </section>
@endsection
@section('css')

@endsection
@section('js')
@endsection
