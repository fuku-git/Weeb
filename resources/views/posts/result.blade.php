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
        <div class="container"><a class="navbar-brand" href="#page-top">Weeeb</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
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

    <header class="masthead text-dark" style="/*background: url(&quot;https://publicdomainq.net/images/201706/22s/publicdomainq-0010381tzy.jpg&quot;);*/">
        <div class="container" style="padding-top: 150px;">
            @foreach ($posts as $post)
            <div class="container my-4">
                <div class="card mb-4">
                    <div class="card-header">
                    <h2>
                        {{$post->role}}
                    </h2>
                    </div>
                    <div class="card-body">
                    <p class="card-text">
                        {{$post->name}}
                    </p>
                    <div class="card-body">
                    <p class="card-text">
                        {{$post->skill}}
                    </p>
                    </div>
                    <div class="card-footer">
                    <span>
                        投稿日時：{{$post->created_at->format('Y-m-d')}}
                    </span>
                    </div>
                </div>
                </div>
                @endforeach

                {{-- <div class="d-flex justify-content-center mb-5">
                    {{ $posts->links() }}
                </div> --}}
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
