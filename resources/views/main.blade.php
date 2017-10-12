<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="webkit" name="renderer">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta id="token" value="{{ csrf_token() }}">
    <meta name="description" content="Founded in Beijing,China in 2001,Shinetech Software is a global software &amp; development outsourcing, testing, and systems integration services provider. Learn more." />
    <meta name="abstract" content="Shinetech software" />
    <meta name="keywords" content="global outsourcing services" />
    <link rel="stylesheet" href="{{ asset('css/style-01.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-02.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-03.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-04.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-05.css') }}">
    <title>Shinetech Software-@yield('title')</title>
</head>
<body>
	@yield('content')
</body>
<script type="text/javascript" src="{{ asset('js/jquery-3.1.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/classie.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</html>
