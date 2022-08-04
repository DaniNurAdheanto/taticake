<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <base href="/public"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Tati Cake </title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/templatemo-klassy-cafe.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="" class="logo">
                            <img style="margin-bottom: 15px;" height="70" width="170" src="/assets/images/logotaticake.png">

                            <a class="menu-trigger">

                                <span>Menu</span>
                            </a>

                        </a>
                        <!-- ***** Navbar ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
                            <li class="scroll-to-section"><a href="#about">Tentang</a></li>
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#pembuat">Pembuat</a></li>
                            <li class="scroll-to-section"><a href="#reservation">Kontak</a></li>
                            <li class="scroll-to-section">
                                @auth
                                <a href="{{url('/showcart',Auth::user()->id)}}">
                                    <span class="menu-icon">
                                        <i class="material-icons">shopping_cart</i>
                                        <span class="badge badge-danger">{{$count}}</span>
                                    </span>
                                </a>
                                @endauth
                                @guest
                                <span class="menu-icon">
                                    <i class="material-icons">shopping_cart</i>
                                </span>
                                @endguest
                                </a>
                            </li>
                            <li class="scroll-to-section">
                                @auth
                                <a href="{{url('/myorders',Auth::user()->id)}}">
                                    <span class="menu-icon">
                                        <i class="material-icons">shopping_bag</i>
                                    </span>
                                </a>
                                @endauth
                                @guest
                                <span class="menu-icon">
                                    <i class="material-icons">shopping_bag</i>
                                </span>
                                @endguest
                                </a>
                            </li>


                            <li>
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                            <li>
                                <x-app-layout>

                                </x-app-layout>
                            </li>
                            @else
                            <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                            @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                            @endif
                            @endauth
                </div>
                @endif

                </li>
                </ul>
                <a class='menu-trigger'>
                </a>
                <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>Tati Cake</h4>
                            <h6>THE BEST EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#menu">MENU</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                            <div class="item">
                                <div class="img-fill">
                                    <img src="/assets/images/slidebar3.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="img-fill">
                                    <img src="/assets/images/slidebar2.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="img-fill">
                                    <img src="/assets/images/slidebar4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Tentang</h6>
                            <h2>Tati Cake </h2>
                        </div>
                        <p style="font-size :15px; text-align: justify ">Tati Cake Yang Merupakan Sebuah Usaha Rumahan Yang Melayani Pesanan Dan Pembelian Berbagai Macam Kue Bolu Dan Kue Kering Lebaran Dengan Menggunakan Sistem Pre Order Untuk Metode Pembelian. Pada Saat Ini Toko Tati Cake Masih Mengadaptasi Startegi Pemasaran (WOM) Word Of Mouth Atau Strategi Pemasaran Mulut Ke Mulut.</p>
                        <div class="row">
                            <div class="col-4">
                                <img src="/assets/images/about1.png" alt="">
                            </div>
                            <div class="col-4">
                                <img src="/assets/images/tengah.png" alt="">
                            </div>
                            <div class="col-4">
                                <img src="/assets/images/about2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <img src="assets/images/about5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    @include("food")
    @include("menu")
    @include("konfirmasipayment")
    @include("foodchef")


    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="https://api.whatsapp.com/send?phone=6285156061958"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a><img height="90" width="200" src="/assets/images/logotaticakefooter.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Tati Cake

                            <br>Design: TemplateMo
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('assets/js/popper.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('assets/js/accordions.js')}}"></script>
    <script src="{{asset('assets/js/datepicker.js')}}"></script>
    <script src="{{asset('assets/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/imgfix.min.js')}}"></script>
    <script src="{{asset('assets/js/slick.js')}}"></script>
    <script src="{{asset('assets/js/lightbox.js')}}"></script>
    <script src="{{asset('assets/js/isotope.js')}}"></script>

    <!-- Global Init -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
</body>

</html>