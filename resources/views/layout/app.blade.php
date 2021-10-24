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
            <div class="content-header row mb-2">
            </div>
            <div class="content-body">
                <section class="" id="background-flutuante">
                    <div class="card principal-row">
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    @include('includes.app.modais');
    @yield('js')
    @include('includes.app.scripts');
</body>
</html>
