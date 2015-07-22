<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/roboto.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ripples.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mycss.css') }}">
    <title>我的部落格</title>
</head>

<body>

@include('partials.nav')

<!-- main body -->
<div class="container">

    @yield('main-content')

</div>
<!-- main body end -->

@include('partials.footer')

<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.bootstrap-autohidingnavbar.min.js') }}"></script>
<script src="{{ asset('js/ripples.min.js') }}"></script>
<script src="{{ asset('js/material.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $.material.init();
    });

    $('nav').autoHidingNavbar();
</script>

</body>
</html>