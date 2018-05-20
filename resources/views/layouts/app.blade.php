<!DOCTYPE html>
<html ng-app="sampleApp" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Caveiras da Montanha</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
    <!-- Styles -->
    <link href="{{ asset('now-ui-kit-v1.1.0/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('now-ui-kit-v1.1.0/assets/css/now-ui-kit.css') }}" rel="stylesheet">
    <link href="{{ asset('images/favicon.ico') }}" rel="icon" type="image/x-icon"/>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

    <script src="{{ asset('js/bower_components/angular-ui-mask/dist/mask.js') }}"></script>
    <script src="{{ asset('js/init.js') }}"></script>
    <style type="text/css">
        .form-group.required .control-label:after {
            content: " *";
            color: red;
        }
    </style>
</head>
<body class="index-page sidebar-collapse">
<!-- Navbar -->
@include('layouts.navbar')
<!-- End Navbar -->
<div class="wrapper" id="app">
    <div class="section">
        @if (session('aviso'))
            <div class="alert alert-{{session('type')}} alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p><i class="icon fa fa-check"></i> {{ session('aviso') }}</p>
            </div>
        @endif
        @if (isset($results))
            @if($results->lastPage()>1)
                <div class="card">
                    <div class="card-body" style="min-height: auto;">
                        Registros {{ $results->firstItem() }} - {{ $results->lastItem() }}
                        de {{ $results->total() }} (para a página {{ $results->currentPage() }} )
                    </div>
                </div>
            @endif
        @endif
        @yield('content')
        @if (isset($results))

        @endif
    </div>
    @include('layouts.footer')
</div>
<!--   Core JS Files   -->
<script src="{{ asset('now-ui-kit-v1.1.0/assets/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('now-ui-kit-v1.1.0/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('now-ui-kit-v1.1.0/assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('now-ui-kit-v1.1.0/assets/js/now-ui-kit.js') }}" type="text/javascript"></script>
</body>
</html>
