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
                    <li class="nav-item "><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                    <li class="nav-item "><a class="nav-link js-scroll-trigger" href="#connect">connect</a></li>
                    <li class="nav-item "><a class="nav-link js-scroll-trigger" href="#how to">How to</a></li>
                    <li class="nav-item "><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                    <li class="nav-item "><a class="nav-link js-scroll-trigger" href="#boards">EVENT</a></li>
                    <li class="nav-item "><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    <li class="nav-item "><a class="nav-link" href="#">MYPAGE</a></li>
                </ul><button class="btn btn-primary" type="button" style="color: rgb(16,15,15);">ログイン</button><button class="btn btn-primary ml-4" type="button" style="background: #fca311;color: rgb(18,18,18);">＊ゲスト</button></div>
        </div>
    </nav>

<!--
    ***************************************************************
-->

    <header class="masthead" style="/*background: url(&quot;https://publicdomainq.net/images/201706/22s/publicdomainq-0010381tzy.jpg&quot;), url(&quot;https://publicdomainq.net/images/201706/22s/publicdomainq-0010381tzy.jpg&quot;);*/">
        <div class="container">
            <div class="intro-text">
                <form method ="POST" action="{{route('store') }}">
                    @csrf
                    <div class="intro-lead-in"><span style="color: rgb(14,14,14);">新規メンバー登録</span></div>
                    <div class="form-group row">
                        <!-- ユーザーIDは内部で自動付与される為、不要
                        <div class="col-form-label">
                            <fieldset>
                                <div class="row">
                                    <div class="col-xl-4">
                                        <span class="text-center" style="color: rgb(14,14,14);">ユーザーID<span style="color: rgb(14,14,14);"></span></span>
                                    </div>
                                    <div class="col-xl-8"><input type="text" name="id" id="id"style="width: 700px;">
                                    </div>
                                </div>
                                <legend>　</legend>
                            </fieldset>
                        </div>
                        -->
                        <div class="col-form-label">
                            <fieldset>
                                <div class="row">
                                    <div class="col-xl-4">
                                        <span class="text-center" style="color: rgb(14,14,14);">ニックネーム<span style="color: rgb(14,14,14);"></span></span>
                                    </div>
                                    <div class="col-xl-8"><input type="text" name="name" id="name" style="width: 700px;">
                                    </div>
                                </div>
                                <legend>　</legend>
                            </fieldset>
                        </div>
                        <div class="col-form-label">
                            <fieldset>
                                <div class="row">
                                    <div class="col-xl-4">
                                        <span class="text-center" style="color: rgb(14,14,14);">メールアドレス<span style="color: rgb(14,14,14);"></span></span>
                                    </div>
                                    <div class="col-xl-8"><input type="email" class="form-control" name="email" id="email" style="width: 700px;">
                                    </div>
                                </div>
                                <legend>　</legend>
                            </fieldset>
                        </div>
                        <div class="col-form-label">
                            <fieldset>
                                <div class="row">
                                    <div class="col-xl-4">
                                        <span class="text-center" style="color: rgb(14,14,14);">メールアドレス（確認用）<span style="color: rgb(14,14,14);"></span></span>
                                    </div>
                                    <div class="col-xl-8"><input type="email" class="form-control" name="conf_email" id="conf_email"style="width: 700px;">
                                    </div>
                                </div>
                                <legend>　</legend>
                            </fieldset>
                        </div>
                        <div class="col-form-label">
                            <fieldset>
                                <div class="row">
                                    <div class="col-xl-4">
                                        <span class="text-center" style="color: rgb(14,14,14);">パスワード<span style="color: rgb(14,14,14);"></span></span>
                                    </div>
                                    <div class="col-xl-8"><input type="password" name="password" id="password" style="width: 700px;">
                                    </div>
                                </div>
                                <legend>　</legend>
                            </fieldset>
                        </div>
                        <div class="col-form-label">
                            <fieldset>
                                <div class="row">
                                    <div class="col-xl-4">
                                        <span class="text-center" style="color: rgb(14,14,14);">パスワード（確認用）<span style="color: rgb(14,14,14);"></span></span>
                                    </div>
                                    <div class="col-xl-8"><input type="password" name="conf_password" id="conf_password" style="width: 700px;">
                                    </div>
                                </div>
                                <legend>　</legend>
                            </fieldset>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-form-label">
                            <fieldset>
                                <legend>　</legend>
                            </fieldset>
                            <fieldset>
                                <div class="col-xl-4 offset-xl-0"><span class="text-center" style="color: rgb(14,14,14);">ポジション<span style="color: rgb(14,14,14);"></span></span>
                                </div>
                                <div>
                                    <input type="radio" name="role" value="1" checked="checked"><span style="color:black;">フロントエンド</span>
                                    <input type="radio" name="role" value="2" ><span style="color:black;">バックエンド</span>
                                    <input type="radio" name="role" value="3" ><span style="color:black;">インフラ</span>
                                    <input type="radio" name="role" value="4" ><span style="color:black;">デザイン</span>
                                </div>
                            </fieldset>
                            <legend class="text-center"></legend>
                        </div>
                    </div>
                    <fieldset></fieldset>
                    <fieldset>
                        <legend></legend>
                        <div class="form-group row">
                            <div class="col-form-label">
                                <fieldset>
                                    <legend>　</legend>
                                    <div class="row">
                                        <div class="col-xl-4 offset-xl-0"><span class="text-center" style="color: rgb(14,14,14);">スキル</></span>
                                        </div>
                                        <div class="col">
                                            <textarea name="skill" id="skill" maxlength="1000" placeholder="自分のもつスキルを記載して下さい　例:プログラミング言語" style="height: 300px;width: 700px;"></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                <legend class="text-center"></legend>
                            </div>
                        </div>
                        <legend>　</legend>
                    </fieldset>
                    <fieldset>
                        <div class="col-xl-12 offset-lg-0 offset-xl-1">
                            <legend class="text-center" style="color: rgb(21,19,19);"></legend>
                        </div>
                    </fieldset>
                    <fieldset></fieldset>
                    <button type="submit" class="btn btn-primary  btn-xl text-uppercase js-scroll-trigger"  style="color: rgb(18,18,18); border:none" formaction="{{ route('store') }}">登録</button>
                </form>
            </div>
        </div>
    </header>

    <!--
        ***************************************************************
    -->

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