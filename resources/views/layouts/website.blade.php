<!DOCTYPE html>
<html lang="en">
<head>
    <title>kitap blog</title> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="../../css.css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('website')}}/fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{asset('website')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('website')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('website')}}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('website')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('website')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('website')}}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{asset('website')}}/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="{{asset('website')}}/css/aos.css">

    <link rel="stylesheet" href="{{asset('website')}}/css/style.css">
</head>
<div>

<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar" role="banner">
        <div class="container-fluid">
            <div class="row align-items-center">

                <div class="col-12 search-form-wrap js-search-form">
                    <form method="get" action="#">
                        <input type="text" id="s" class="form-control" placeholder="Search...">
                        <button class="search-btn" type="submit"><span class="icon-search"></span></button>
                    </form>
                </div>

                <div class="col-4 site-logo">
                    <a href="{{ route('blog') }}" class="text-black h2 mb-0">Evladiyelik Kitaplar</a>
                </div>

                <div class="col-8 text-right">
                    <nav class="site-navigation" role="navigation">
                        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                            <li><a href="{{ route('blog') }}">Anasayfa</a></li>
                            <li><a href="{{ route('yazar') }}">Yazarlar</a></li>
                            <li><a href="{{ route('aboutus') }}">Hakkımızda</a></li>
                            <li><a href="category.html">Contact</a></li>
                            <li><a href="{{ route('login') }}">Giriş</a></li>

                            <li><a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                  href="{{ route('logout') }}">Çıkış</a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            </li>

                            <li class="d-none d-lg-inline-block"><a href="#" class="js-search-toggle"><span class="icon-search"></span></a></li>
                        </ul>
                    </nav>
                    <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
            </div>

        </div>
    </header>


@yield('content')

    <div class="site-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <h3 class="footer-heading mb-4">Hakkımızda</h3>
                    <p>Kitap İnceleme Sitesi</p>
                </div>
                <div class="col-md-3 ml-auto">

                    <ul class="list-unstyled float-left mr-5">
                        <li><a href="#">Hakkımızda</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#">Abonelikler</a></li>
                    </ul>
                    <ul class="list-unstyled float-left">
                        <li><a href="#">Yazarlar</a></li>
                        <li><a href="#">Trendler</a></li>
                        <li><a href="#">Son Yazılanlar</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="col-md-4">


                    <div>
                        <h3 class="footer-heading mb-4">Bizimle İletişime Geçin</h3>
                        <p>
                            <a href="#"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>
                            <a href="#"><span class="icon-twitter p-2"></span></a>
                            <a href="#"><span class="icon-instagram p-2"></span></a>
                            <a href="#"><span class="icon-rss p-2"></span></a>
                            <a href="#"><span class="icon-envelope p-2"></span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p>
                        Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

<script src="{{asset('website')}}/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('website')}}/js/jquery-migrate-3.0.1.min.js"></script>
<script src="{{asset('website')}}/js/jquery-ui.js"></script>
<script src="{{asset('website')}}/js/popper.min.js"></script>
<script src="{{asset('website')}}/js/bootstrap.min.js"></script>
<script src="{{asset('website')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('website')}}/js/jquery.stellar.min.js"></script>
<script src="{{asset('website')}}/js/jquery.countdown.min.js"></script>
<script src="{{asset('website')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('website')}}/js/bootstrap-datepicker.min.js"></script>
<script src="{{asset('website')}}/js/aos.js"></script>

<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="../../gtag/js.js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
