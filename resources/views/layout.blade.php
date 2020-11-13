<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Weeeb</title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<!-- ナビゲーション -->
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top">Weeeb</a>
        <button data-toggle="collapse" data-target="#navbarResponsive"
            class="navbar-toggler navbar-toggler-right" type="button"
            data-toogle="collapse" aria-controls="navbarResponsive"
            aria-expanded="false"aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button> 

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav text-uppercase mx-auto">
                <li class="nav-item "><a class="nav-link js-scroll-trigger" href="#services">services</a></li>
                <li class="nav-item "><a class="nav-link js-scroll-trigger" href="#connect">connect</a></li>
                <li class="nav-item "><a class="nav-link js-scroll-trigger" href="#how to">how to</a></li>
                <li class="nav-item "><a class="nav-link js-scroll-trigger" href="#team">team</a></li>
                <li class="nav-item "><a class="nav-link js-scroll-trigger" href="#boards">event</a></li>
                <li class="nav-item "><a class="nav-link js-scroll-trigger" href="#contact">contact</a></li>
                <li class="nav-item "><a class="nav-link" href="{{ url('/mypages.edit')}}">mypage</a></li>
            </ul>
            <button class="btn btn-primary" type="button" onclick="location.href='./login'"　style="color: rgb(16,15,15);">ログイン</button>
            <button class="btn btn-primary ml-4" type="button" style="background: #fca311;color: rgb(18,18,18);">ゲスト</button>
        </div>
    </div>
</nav>