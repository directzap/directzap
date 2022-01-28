<!DOCTYPE html>
<html class="loading dark-layout" lang="pt-br" data-layout="dark-layout" data-textdirection="ltr">
@include('includes.app.head')

<body class="vertical-layout vertical-menu-modern navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="blank-page">
    @include('includes.app.nav')
    @include('includes.app.menu')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row ">
            </div>
            <div class="content-body">
                <section class="" id="background-flutuante">
                    @yield('content')
                    {{--<div class="card principal-row">
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>--}}
                </section>
            </div>
        </div>
    </div>
    @include('includes.app.modais');

    @include('includes.app.scripts');
    <script>
        function salvarPixelFacebook() {
            $.ajax({
                type: "POST",
                dataType: "json",
                data: {
                    "_token": '{{ csrf_token() }}',
                    "pixel_facebook": $('#pixel_facebook').val(),
                },
                url: 'pixel-facebook/',
                success: function(response) {
                    $('#mensagem-facebook').html('<div class="alert alert-primary" role="alert">Salvo com sucesso</div>')
                }
            });
        }
        function salvarPixelGtm() {
            $.ajax({
                type: "POST",
                dataType: "json",
                data: {
                    "_token": '{{ csrf_token() }}',
                    "pixel_gtm": $('#code').val(),
                },
                url: 'pixel-gtm/',
                success: function(response) {
                    $('#mensagem-gtm').html('<div class="alert alert-primary" role="alert">Salvo com sucesso</div>')
                }
            });
        }
        //Script pra abrir o modal a primeira vez
        $(document).ready(function() {
            var ls = localStorage.getItem("modal");
            if(!ls){
                $('#modal_register_phone').modal('show');
            }
            $('#modal_register_phone').on('shown.bs.modal', function(){
                localStorage.setItem("modal", true);
            });
        })

        //Abrindo os dropdowns quando inicia o sistema para desbugar eles
        $('#dropdown_notification').dropdown('toggle');
        $('#dropdown_user').dropdown('toggle');


    </script>
    @yield('js')
</body>

</html>
