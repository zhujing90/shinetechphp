<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ config('borgert.name') }}</title>

    <link href="{!! asset('assets/components/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/components/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet">

    <link href="{!! asset('assets/components/animate.css/animate.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/admin/css/app.css') !!}" rel="stylesheet">

</head>
<body class="gray-bg">

<br>
<br>

<div class="text-center" style="background-color: rgba(0, 0, 0, 0.6);">
    <img src="{{ asset('imgs/logo.png') }}" width="250px">
</div>

<br>

@yield('content')

<hr>

<p class="m-t text-center">
    <small>{{ config('borgert.name') }} {{ date('Y') }}</small>
</p>

<!-- Mainly scripts -->
<script src="{!! asset('assets/components/jquery/jquery.min.js') !!}"></script>
<script src="{!! asset('assets/components/tether/js/tether.min.js') !!}"></script>
<script src="{!! asset('assets/components/bootstrap/js/bootstrap.min.js') !!}"></script>

</body>
</html>