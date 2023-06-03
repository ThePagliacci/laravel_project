<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mini Blog</title>
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
<body>
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
                                <li><a href="/login">Giriş</a></li>
                                <li class="d-none d-lg-inline-block"><a href="#" class="js-search-toggle"><span class="icon-search"></span></a></li>
                            </ul>
                        </nav>
                        <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
                </div>
    
            </div>
        </header>
        <section class="site-section py-lg">
            <div class="container">
    
                <div class="row blog-entries element-animate">
                    <div class="col-md-12 col-lg-8 main-content">
                        <div class="post-content-body">
                            <div class="row mb-5 mt-5">
                                <div class="col-md-12 mb-4">
                                    <img src="../uploads/category/{{ $book->image }}" alt="Image placeholder" class="img-fluid rounded">
                                </div>
                            </div>

                            @if ($book->id == true)
                            kitap adi: {{ $book->name }} <br>
                            türü ismi: {{ $book->BookGenre->name }} <br>
                            yazarin adi: {{ $book->writer->name }} <br>
                            <br>
                            <div class="pt-5">
                                <h3 class="mb-5">Comments</h3>
                                @foreach ($book->comments as $comment)
                                <ul class="comment-list">
                                    <div class="vcard">
                                    <h3>{{ $comment->user->name }} </h3>
                                    </div>
                                    <div class="comment-body">
                                        <div class="meta">{{ $comment->created_at->format('Y-m-d H:i:s') }}</div>
                                    </div>
                                    <li class="comment">
                                            <p>{{ $comment->description }}</p>
                                        </div>
                                    </li>
                                    @if (Auth::check() && Auth::user()->id == $comment->user_id)
                                    <form action="/comments/{{ $comment->id }}/edit">
                                        @csrf
                                        <a href=""><p>Edit</p></a>
                                    </form>
                                    <form action="/comments/{{ $comment->id }}/delete" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href=""><p>Delete</p></a>
                                    </form>
                                    @endif
                                    @endforeach


                                    <h6>
                                        <a href="">Add comment</a> 
                                    </h6>
                                    @endif
                                </ul>
                        </div>
                        </div>
                    </div>
                    <!-- END main-content -->
                    <div class="col-md-12 col-lg-4 sidebar">
                        <div class="sidebar-box search-form-wrap">
                            <form action="#" class="search-form">
                                <div class="form-group">
                                    <span class="icon fa fa-search"></span>
                                    <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </section>

    <div class="site-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <h3 class="footer-heading mb-4">About Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit magnam deleniti quasi saepe, consequatur atque sequi delectus dolore veritatis obcaecati quae, repellat eveniet omnis, voluptatem in. Soluta, eligendi, architecto.</p>
                </div>
                <div class="col-md-3 ml-auto">
                    <!-- <h3 class="footer-heading mb-4">Navigation</h3> -->
                    <ul class="list-unstyled float-left mr-5">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Subscribes</a></li>
                    </ul>
                    <ul class="list-unstyled float-left">
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Nature</a></li>
                    </ul>
                </div>
                <div class="col-md-4">


                    <div>
                        <h3 class="footer-heading mb-4">Connect With Us</h3>
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
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
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