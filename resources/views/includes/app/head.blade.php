<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direct Zap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="sortcut icon" href="{{ asset('assets/images/logo/icon.png') }}" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <script src="https://kit.fontawesome.com/2f204339a4.js" crossorigin="anonymous"></script>

    <!--
        <link rel="stylesheet" href="{{ asset('assets/themes/dark-layout.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/pages/dashboard-ecommerce.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugin/tables/table-ag-grid.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/core/menu/vertical-overlay-menu.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/components.css') }}">
        -->

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/charts/apexcharts.css') }}">

    <!-- Toast -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/extensions/ext-component-toastr.min.css')}}">

    {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css')}}"> --}}
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/core/menu/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/dashboard-ecommerce.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/app-email.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/charts/chart-apex.css') }}">

    <!-- END: Page CSS-->

    @yield('css')
    <!-- BEGIN: Custom CSS--
    <link rel="stylesheet" type="text/css" href="../../../assets/style.css">
     END: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/custom.css') }}">

    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> --}}

</head>
