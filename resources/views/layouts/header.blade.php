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
              {{-- <li class="nav-item "><a class="nav-link" href="{{ url('/mypages.edit')}}">mypage</a></li> --}}
          </ul>
          <button class="btn btn-primary" type="button" onclick="location.href='./login'"　style="color: rgb(16,15,15);">ログイン</button>
          <button class="btn btn-primary ml-4" type="button" style="background: #fca311;color: rgb(18,18,18);">ゲスト</button>
      </div>
  </div>
</nav>

<!-- ヘッダー画像 -->
<header class="masthead" style="background-image: url(&quot;https://publicdomainq.net/images/201706/22s/publicdomainq-0010381tzy.jpg&quot;);">
  <div class="container">
      <div class="intro-text">
          <div class="intro-lead-in"></div>
          <div class="intro-heading text-uppercase" style="font-family: 'Droid Serif';"><span class="text-capitalize" style="font-family: 'Kaushan Script', cursive;color: #060605;">Webエンジニアよ集まれ</span></div>
          <div class="intro-heading text-uppercase" style="font-family: 'Droid Serif';"><span class="text-capitalize" style="font-family: 'Kaushan Script', cursive;color: #fcd116;font-size: 50px;">Webエンジニア matching サイト</span></div><span style="color: #080808;font-family: 'Kaushan Script', cursive;font-size: 30px;">あなたの最高のパートナーを見つけよう</span>
          <fieldset>
              <legend style="text-shadow: 0px 0px;"></legend>
              <span>&nbsp;</span>
          </fieldset>
          <div class="row">
              <div class="col">
                  <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" role="button" href="{{ url('/userregist')}}" style="color: rgb(18,18,18);">ユーザー登録</a>
              </div>
          </div>
      </div>
  </div>
</header>
