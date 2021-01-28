<!DOCTYPE html>
<html lang="zh-TW">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Laravel 練習</title>
<!--
Elegance Template
https://templatemo.com/tm-528-elegance
-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <link rel="stylesheet" href="/css/font-awesome.css">

    <link rel="stylesheet" href="/css/fullpage.min.css">

    <link rel="stylesheet" href="/css/owl.carousel.css">

    <link rel="stylesheet" href="/css/animate.css">

    <link rel="stylesheet" href="/css/templatemo-style.css">

    <link rel="stylesheet" href="/css/responsive.css">

    </head>

    <body>

    <div id="video">
        <div class="preloader">
            <div class="preloader-bounce">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <header id="header">
            <div class="container-fluid">
                <div class="navbar">
                    <a href="/" id="logo" title="Elegance by TemplateMo">
                        Laravel 練習
                    </a>
                    {{-- <div class="navigation-row"> --}}
                        <nav id="navigation">
                            <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
                            <div class="nav-box navbar-collapse">
                                <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                                    <li ><a href="/">主頁</a></li>
                                    <li ><a href="/about">關於</a></li>
                                    <li ><a href="/skill">技能</a></li>
                                    <li ><a href="/works">作品</a></li>
                                    <li ><a href="/contact">聯繫</a></li>
                                </ul>
                            </div>
                        </nav>
                    {{-- </div> --}}
                </div>
            </div>
        </header>

        <video autoplay muted loop id="myVideo">
            <source src="/images/video-bg.mp4" type="video/mp4">
        </video>

        <div id="fullpage" class="fullpage-default">
            @yield('content')
        </div>

    <script src="/js/jquery.js"></script>

    <script src="/js/bootstrap.min.js"></script>

    <script src="/js/fullpage.min.js"></script>

    <script src="/js/scrolloverflow.js"></script>

    <script src="/js/owl.carousel.min.js"></script>

    <script src="/js/jquery.inview.min.js"></script>

    <script src="/js/form.js"></script>

    <script src="/js/custom.js"></script>


  </body>
</html>
