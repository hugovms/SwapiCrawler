<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <!-- Favicon -->
    <link href="assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{asset('vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{asset('css/argon.css?v=1.0.0')}}" rel="stylesheet">
    <style>
    .hidden{
        display:0!important;
        opacity:100%;
        visibility:hidden;
    }
    .container{
        height:98vh;
    }
     .card{
        width: 40rem; 
        padding-left:4px; 
        padding-top:8px;
    }
    .card-img-top{
        border-radius:100%; 
        width:250px; 
        height:250px;
    }
    </style>
    <title>index</title>
</head>
<body>
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container mt--7">
        <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @yield('content')
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>

</body>

</html>