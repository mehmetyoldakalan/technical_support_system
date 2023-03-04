<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Larasoft</title>
    <meta name="description" content="Larasoft - Web yazılım, Web uygulama güvenliği çözümleri">
    <meta name="keywords" content="yazılım, özel yazılım, uygulama güvenliği, yazılım geliştirme, development, php, laravel, vue">
    <meta name="author" content="larasoft">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('web_assets/images/favicon/favicon.ico')}}">

    <!-- Bootstrap & Plugins CSS -->
    <link href="{{asset('web_assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web_assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web_assets/css/magnific-popup.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{asset('web_assets/css/blue.css')}}" rel="stylesheet" type="text/css">

    <!-- Global site tag (gtag.js) - Google Analytics -->

    <!--yukarıdaki satır jquery kütüphanesidir -->

</head>
<body>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
    $(document).ready(function ($) {

        $(window).load(function () {
            $('#preloader').fadeOut('slow', function () { $(this).remove(); });
        });
        $('.menu-trigger').click(function(){
            $('.nav').slideToggle();
        })

    });
</script>
<script>

</script>
<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div id="loader" class="spinner">
        <div id="shadow"></div>
        <div id="box"></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class="header-area header-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{route('web.index')}}" class="logo">
                        LARASOFT
                        <!-- <img style="border-radius: 15px 20px; max-width: 90px; max-height:75px" src="assets/images/profile.png" alt="larasoftlogo.png"> -->
                    </a>
                    <!-- ***** Logo End ***** -->


                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{route('web.index')}}">Anasayfa</a></li>
                        <li class="submenu">
                            <a href="javascript:;">Hizmetlerimiz</a>
                            <ul>
                                <li><a href="{{route('web.index')}}#hizmetlerimiz">Sunduğumuz Hizmetler</a></li>
                                <li><a href="{{route('web.index')}}#neden-larasoft">Neden Larasoft</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:;">Kurumsal</a>
                            <ul>
                                <li><a href="{{route('web.about')}}">Hakkımızda</a></li>
                                <li><a href="{{route('web.faq')}}">Sıkça Sorulan Sorular</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('web.contact')}}">İletişim</a></li>
                    </ul>
                    <a class="menu-trigger">
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->

                    <!-- ***** Header Buttons Start ***** -->
                    <ul class="header-buttons">
                        <li><a class="btn-nav-primary" href="{{route('web.contact')}}">Destek</a></li>
                        @auth
                            <li class="dropdown">
                                <a href="#" class="btn-nav-primary dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a style="width: 160px !important" href="{{route('logout')}}">Çıkış</a></li>
                                </ul>
                            </li>
                        @else
                            <li><a class="btn-nav-primary" href="{{route('login')}}">Giriş Yap</a></li>
                            <li><a class="btn-nav-primary" href="{{route('register')}}">Üye Ol</a></li>
                        @endauth

                    </ul>
                    <!-- ***** Header Buttons End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

