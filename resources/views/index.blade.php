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

<body id="page-top">
    
@include('layouts.header')

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-capitalize section-heading" style="font-family: 'Kaushan Script', cursive;text-align: center;">Weeeb DE できること</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fas fa-user fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">パートナーを見つける</h4>
                    <p class="text-muted">喜びを分かち合える相棒探し‼️</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-laptop fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">一緒に勉強したい</h4>
                    <p class="text-muted">仲間を探して挫折を防ごう‼️</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-comments fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">話しを聞きたい</h4>
                    <p class="text-muted">憧れの人・メンターを見つけよう‼️</p>
                </div>
            </div>
        </div>
        <p class="text-muted"></p>
        <div class="row">
            <div class="col text-center">
                <a class="btn btn-primary text-center btn-xl text-uppercase js-scroll-trigger" 
                    role="button" href="{{ url('/userregist')}}" style="color: rgb(18,18,18);text-align: center;">ユーザー登録</a>
            </div>
        </div>
    </section>

    <section id="how to">
        <div class="row">
            <div class="col">
                <p style="text-align: center;">&nbsp; &nbsp; &nbsp;〜&nbsp;Weeeb 1分で分かる使い方 〜&nbsp;</p>
                <p style="text-align: center;">&nbsp; &nbsp; &nbsp;(&nbsp;現在作成中です。こちらの動画は私立探求学園で過去作成しました)&nbsp;</p>
                <iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/D-BhMdpCcP8" width="560" height="315" style="margin: auto;display: block;width: 70%;"></iframe>
            </div>
        </div>
    </section>

    <section id="connect" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">
                        <a href="{{ url('/serch')}}" style="font-size: 50px; color: rgb(18,18,18);">さぁ、つながろう</a>
                    </h2>
                    <h3 class="section-subheading text-muted">〜最高の出会いを〜</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="{{ url('/') }}">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('/assets/images/バックエンド.jpg') }}" alt="フロントエンド">
                    </a>
                    <div class="portfolio-caption text-center">
                        <h4>フロントエンド</h4>
                        <p class="text-muted">Vue.js CSS Sass</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="{{ url('/') }}">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('/assets/images/バックエンド2.jpg') }}" alt="バックエンドエンジニア">
                    </a>
                    <div class="portfolio-caption text-center">
                        <h4>バックエンド</h4>
                        <p class="text-muted">PHP Ruby laravel</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="{{ url('/') }}">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('/assets/images/フロント女性.jpg') }}" alt="デザイナー">
                    </a>
                    <div class="portfolio-caption text-center">
                        <h4>デザイナー</h4>
                        <p class="text-muted">dezain</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="{{ url('/') }}">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('/assets/images/インフラ.jpg') }}" alt="インフラエンジニア">
                    </a>
                    <div class="portfolio-caption text-center">
                        <h4>インフラ</h4>
                        <p class="text-muted">AWS</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="boards">
        <div class="container">
            <div class="row">
                <h2 class="col text-center text-uppercase">
                    <a href="{{ url('/boards') }}" style="font-size: 50px; color: rgb(18,18,18);">イベントはこちら</a>
                </h2>
            </div>
            <div style="text-align: center">
                <img class="img-fluid" src="{{ asset('/assets/images/ビジネス交流会.jpg') }}" alt="イベント・交流会">
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">お問い合わせ</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="contactForm" novalidate="novalidate">
                        <div class="form-row text-center" style="text-align: center;">
                            <div class="col-lg-8 offset-lg-2 text-right col-md-6" style="text-align: right;">
                                <div class="form-group"><input class="form-control" type="text" id="name" placeholder="Your Name *" required=""><small class="form-text text-danger flex-grow-1 help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="email" id="email" placeholder="Your Email *" required=""><small class="form-text text-danger help-block lead"></small></div>
                                <div class="form-group"><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col-md-6 col-lg-8 offset-lg-2">
                                <div class="form-group"><textarea class="form-control" id="message" placeholder="Your Message *" required=""></textarea><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">送信</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="bg-light">
        <h1 style="text-align: center;">&nbsp; &nbsp; &nbsp; 開発メンバー</h1>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="{{ asset('/assets/images/人物画像/ヨネ.jpg') }}">
                        <h4>ヨネ</h4>
                        <p class="text-muted">PM</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="https://twitter.com/yone3_43" style="background: rgb(29,161,242);"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="{{ asset('/assets/images/人物画像/フク.png') }}">
                        <h4>フク</h4>
                        <p class="text-muted">PL</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="https://twitter.com/fuku_2021tokyo" style="background: rgb(29,161,242);"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"></li>
                            <li class="list-inline-item"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="{{ asset('/assets/images/人物画像/Mayumi.jpg') }}">
                        <h4>Mayumi</h4>
                        <p class="text-muted">Backend</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="https://twitter.com/zumi00i" style="background: rgb(29,161,242);"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"></li>
                            <li class="list-inline-item"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="{{ asset('/assets/images/人物画像/ぽぽ.jpg') }}">
                        <h4>ぽぽ</h4>
                        <p class="text-muted">Backend</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="https://twitter.com/popo0129tt35" style="background: rgb(29,161,242);"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"></li>
                            <li class="list-inline-item"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="{{ asset('/assets/images/人物画像/hiyoko.jpg') }}">
                        <h4>hiyoko</h4>
                        <p class="text-muted">Backend</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="https://twitter.com/yokopiyohiyoko" style="background: rgb(29,161,242);"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"></li>
                            <li class="list-inline-item"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="{{ asset('/assets/images/人物画像/funa.png') }}">
                        <h4>フナ</h4>
                        <p class="text-muted">Backend</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="https://twitter.com/funassiiy" style="background: rgb(29,161,242);"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"></li>
                            <li class="list-inline-item"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="{{ asset('/assets/images/人物画像/task.jpg') }}">
                        <h4>task</h4>
                        <p class="text-muted">Backend</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="https://twitter.com/plusninesty" style="background: rgb(29,161,242);"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"></li>
                            <li class="list-inline-item"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>
</html>