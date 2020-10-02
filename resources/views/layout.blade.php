<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weeeb</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">

    <link rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
        crossorigin="anonymous"
    > 

</head>

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Weeeb</a>
            <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" 
                    type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation"><i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background:
            url(&quot;https://publicdomainq.net/images/201706/22s/publicdomainq-0010381tzy.jpg&quot;);">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">
                    <span style="color: rgb(14,14,14);">最高のパートナーを見つけよう!!</span>
                </div>
                <div class="intro-heading text-uppercase">
                    <span>It's Nice To Meet You</span>
                </div>
                <a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" 
                role="button" href="#services" style="color: rgb(18,18,18);">さっそくはじめる</a>
            </div>
        </div>
    </header>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-capitalize section-heading"><i>Weeebの３つの機能</i></h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-warning"></i><i class="fas fa-user fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">パートナーを見つける</h4>
                    <p class="text-muted">喜びを分かち合える相棒探し‼️</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-warning"></i><i class="fa fa-laptop fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">一緒に勉強したい</h4>
                    <p class="text-muted">仲間を探して挫折を防ごう‼️</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-warning"></i><i class="fa fa-comments fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">話しを聞きたい</h4>
                    <p class="text-muted">憧れの人・メンターを見つけよう‼️</p>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">さぁ、つながろう</h2>
                    <h3 class="section-subheading text-muted">〜最高の出会いを〜</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="{{ url('/') }}">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="{{ asset('/assets/images/バックエンド.jpg') }}" alt="フロントエンド"></a>
                    <div class="portfolio-caption">
                        <h4>フロントエンド</h4>
                        <p class="text-muted">Vue.js CSS Sass</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="{{ url('/') }}">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="{{ asset('/assets/images/バックエンド.jpg') }}" alt="バックエンドエンジニア"></a>
                    <div class="portfolio-caption">
                        <h4>バックエンド</h4>
                        <p class="text-muted">PHP Ruby laravel</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="{{ url('/') }}">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="{{ asset('/assets/images/フロント女性.jpg') }}" alt="デザイナー"></a>
                    <div class="portfolio-caption">
                        <h4>デザイナー</h4>
                        <p class="text-muted">dezain</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="{{ url('/') }}">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="{{ asset('/assets/images/インフラ.jpg') }}" alt="インフラエンジニア"></a>
                    <div class="portfolio-caption">
                        <h4>インフラ</h4>
                        <p class="text-muted">AWS</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team" class="bg-light">
        <h1 style="text-align: center;">&nbsp; &nbsp; &nbsp; 開発メンバー</h1>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="{{ asset('/assets/images/team/1.jpeg') }}">
                        <h4>ヨネ</h4>
                        <p class="text-muted">PM</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a class="bg-primary" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="{{ asset('/assets/images/team/4.jpeg') }}">
                        <h4>フク</h4>
                        <p class="text-muted">PL</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a class="bg-primary" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"></li>
                            <li class="list-inline-item"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="{{ asset('/assets/images/team/3.jpeg') }}">
                        <h4>ぽぽ</h4>
                        <p class="text-muted">Backend</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a class="bg-primary" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"></li>
                            <li class="list-inline-item"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="{{ asset('/assets/images/team/2.jpeg') }}">
                        <h4>Mayumi</h4>
                        <p class="text-muted">Backend</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a class="bg-primary" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"></li>
                            <li class="list-inline-item"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="row">
            <div class="col">
                <p style="text-align: center;">&nbsp; &nbsp; &nbsp;〜探求学園 〜第一回 技求祭 〜&nbsp;</p><iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/D-BhMdpCcP8" width="560" height="315" style="margin: auto;width: 100%;"></iframe></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3"><a href="#"></a></div>
                <div class="col-sm-6 col-md-3"><a href="#"></a></div>
                <div class="col-sm-6 col-md-3"><a href="#"></a></div>
            </div>
        </div>
    </section>
    <section id="contact" style=" background-image: url('{{asset('/assets/images/地図.png')}}');">
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
                        <div class="form-row">
                            <div class="col col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" id="name" placeholder="Your Name *" required="">
                                    <small class="form-text text-danger flex-grow-1 help-block lead"></small>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" id="email" placeholder="Your Email *" required="">
                                    <small class="form-text text-danger help-block lead"></small>
                                </div>
                                <div class="form-group">
                                    <small class="form-text text-danger help-block lead"></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Your Message *" required=""></textarea>
                                    <small class="form-text text-danger help-block lead"></small>
                                </div>
                            </div>
                            <div class="col">
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button class="btn btn-warning btn-xl text-uppercase" id="sendMessageButton" type="submit">送信</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright">Copyright&nbsp;© Brand 2020</span></div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a class="bg-primary" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a class="bg-pink" href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a class="bg-danger" href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li class="list-inline-item"></li>
                        <li class="list-inline-item"></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p><img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1-full.jpg">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-unstyled">
                                        <li>Date: January 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal2">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p><img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2-full.jpg">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-unstyled">
                                        <li>Date: January 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal3">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p><img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3-full.jpg">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-unstyled">
                                        <li>Date: January 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal4">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p><img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4-full.jpg">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-unstyled">
                                        <li>Date: January 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal5">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p><img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5-full.jpg">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-unstyled">
                                        <li>Date: January 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal6">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p><img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6-full.jpg">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-unstyled">
                                        <li>Date: January 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>
</html>
