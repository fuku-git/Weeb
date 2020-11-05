<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">Weeeeeeeeeeb</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
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
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">Weeeb</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
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
    <header class="masthead" style="/*background: url(&quot;https://publicdomainq.net/images/201706/22s/publicdomainq-0010381tzy.jpg&quot;), url(&quot;https://publicdomainq.net/images/201706/22s/publicdomainq-0010381tzy.jpg&quot;);*/">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><span style="color: rgb(14,14,14);">掲示板投稿</span></div>
                <div class="row">
                    <div class="col">
                        <fieldset>
                            <div class="row">
                                <div class="col">
                                    <legend class="text-left" style="color: rgb(14,13,13);background: rgb(254,209,54);text-align: left;"></legend>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <fieldset>
                            <legend class="text-center" style="color: rgb(14,13,13);background: rgb(254,209,54);text-align: center;">最近の投稿
                                <div class="btn-group"><button class="btn btn-primary" type="button" style="background: rgb(249,249,247);color: rgb(23,22,22);">並び替え </button><button class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false"
                                        type="button" style="background: rgb(254,253,251);color: rgb(13,12,12);"></button>
                                    <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                                </div>
                            </legend>
                        </fieldset>
                        <fieldset>
                        
                            <div class="row">
                                <div class="col offset-lg-1" style="display:flex;">
                                    <P><img style="text-align: left; width: 100px;" src="assets/images/インフラ.jpg"></P>
                                        <div class="thread" style="color: rgb(0,0,0)";>


                                        @foreach($boards as $board)
                                            <dl>
                                                <dd>投稿日：{{ $board->created_at ->format('Y.m.d') }}</dd>
                                                <dd>ユーザー：{{ $board->name }}</dd>
                                                <dd>タイトル：{{ $board->post_contents }}</dd>
                                                <dd>内容：{{ nl2br(e(Str::limit($board->post_body, 80))) }}</dd>
                                                    <? if($boards->comments->count() >= 1): //コメント未作成 ?> -->
                                                        <p><span class="badge badge-primary">コメント：<? $boards->comments->count() ?>件</span></p>
                                                    <? endif; ?>
                                            </dl>
                                        @endforeach


                                        </div>
                        </fieldset>
                    </div>
                </div>
                <fieldset></fieldset>
                <fieldset>
                    <legend class="text-center" style="color: rgb(11,11,11);text-align: left;background: rgb(254,209,54);">新規投稿</legend>
                    <div class="row text-center">
                        <div class="col">
                            <fieldset>
                                <legend>Field Group</legend>
                            </fieldset>

            <form method="post" action="{{ url('/creater') }}">
                @csrf

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3"><span class="text-center" style="color: rgb(14,14,14);">タイトル</span></div>
                        <div class="col"><input type="text" maxlength="100" placeholder="タイトルを書いてください" style="width: 600px;height: 45px;"></div>
                    </div>
                </fieldset>
                <div class="row">
                    <div class="col">
                        <fieldset>
                            <legend>Field Group</legend>
                            <div class="row">
                                <div class="col-lg-3"><span class="text-center" style="color: rgb(14,14,14);">投稿内容</></span></div>
                                <div class="col"><textarea maxlength="1000" placeholder="投稿内容を書いてください" style="height: 300px;width: 600px;"></textarea></div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <fieldset>
                    <legend>Field Group</legend>
                </fieldset><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" role="button" href="#services" style="color: rgb(18,18,18);text-align: left;">投稿</a></div>

            </form>

        </div>
    </header>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright">Copyright&nbsp;© Brand 2020</span></div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
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
    <script src="assets/js/script.min.js"></script>
</body>

</html>