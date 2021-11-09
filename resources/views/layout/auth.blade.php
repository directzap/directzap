<!DOCTYPE html>
<html  class="loading dark-layout" lang="pt-br" data-layout="dark-layout" data-textdirection="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DirectZap</title>
  <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
        crossorigin="anonymous">

<link rel="sortcut icon" href="{{url('imagens/LogoSite.png')}}" type="image/x-icon" />
  <!--<link rel="stylesheet" href="{{ asset('app.css') }}">-->
  <link rel="stylesheet" href="{{ asset('assets/pages/page-auth.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/themes/dark-layout.css') }}">

  <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap-extended.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/colors.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/components.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/themes/dark-layout.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/themes/bordered-layout.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/themes/semi-dark-layout.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('assets/custom.css')}}">


</head>


  <body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content">
                <div class="auth-wrapper auth-v1 px-2">
                    <div class="auth-inner py-2">
                        @yield('content-auth')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->


<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6028aaec9c4f165d47c311fc/1eufdnb4p';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
  })();
</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous">
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous">
</script>



</body>

</html>
