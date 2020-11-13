<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Weeeb</title>
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
            <a class="navbar-brand" href="{{ url('/')}}">Weeeb</a>
            <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item "><a class="nav-link js-scroll-trigger" href="{{ url('/')}}">how to</a></li>
                    <li class="nav-item "><a class="nav-link js-scroll-trigger" href="{{ url('/')}}">team</a></li>
                    <li class="nav-item "><a class="nav-link js-scroll-trigger" href="{{ url('/boards')}}">event</a></li>
                    <li class="nav-item "><a class="nav-link js-scroll-trigger" href="{{ url('/')}}">contact</a></li>
                    <li class="nav-item "><a class="nav-link" href="{{ url('/mypages.edit')}}">mypage</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead" style="/*background: url(&quot;https://publicdomainq.net/images/201706/22s/publicdomainq-0010381tzy.jpg&quot;);*/">
        <div class="container">
            <div class="intro-text">
                    <div class="intro-lead-in">
                        <span style="color:rgb(14,14,14);font size=12"><big><b>パートナーを見つける</big></b></span>
                    </div>
                    <div class="row">
                        <div class="col">
                            <fieldset>
                                <legend>Field Group</legend>
                            </fieldset>
                        </div>
                    </div>
                <div class="row">
                    <div class="col">
                        <form action="{{ url('/posts.result')}}" method="get">
                                {{ csrf_field()}}
                                {{method_field('get')}}
                            <div class="form-group">
                                <label>名前</label>
                                <input type="search" class="form-control　text-center col-md-4" 
                                placeholder="検索したい名前を入力してください" name="search" required>
                            </div>
                            <button type="submit" class="btn btn-primary col-md-2">検索🔍</button>
                        </form>
                        <fieldset>
                            <legend>Field Group</legend>
                        </fieldset>
                        <fieldset>
                            <legend>Fiel</legend>
                            <div class="row">
                                <div class="col">
                                    <fieldset>
                                        <legend style="color: rgb(10,9,9);">〜このような出会いがあります〜</legend>
                                    </fieldset>
                                </div>
                            </div>
                            <br>
                            <br>
                        </fieldset>
                        <div class="row">
                            <div class="col-lg-4">
                                <h3 class="text-right" style="color: rgb(10,9,9);width: 300px;">パートナーが見つかる</h3>
                                <p style="color:#000000;text-align:center;">喜びを分かち合える相棒探し!!</p>
                                <br>
                                <picture><img src="assets/images/1.jpg"></picture>
                                <br><br><br>
                            </div>
                            <div class="col-lg-4">
                                <h3 class="text-right" style="color: rgb(10,9,9);width: 300px;">一緒に勉強できる</h3>
                                <p style="color:#000000;text-align:center;">仲間を探して挫折を防ごう!!</p>
                                <br>
                                <picture><img src="assets/images/2.jpg"></picture>
                                <br><br><br>
                            </div>
                            <br>
                            <div class="col-lg-4">
                                <h3 class="text-center" style="color: rgb(10,9,9);width: 300px;">相談できる</h3>
                                <p style="color:#000000;text-align:center;">憧れの人・メンターを見つけよう!!</p>
                                <br>
                                <picture><img src="assets/images/3.jpg"></picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright&nbsp;© Brand 2020</span>
                </div>
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
                    <div class="list-inline-item">Terms of Weeeb</div>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>
