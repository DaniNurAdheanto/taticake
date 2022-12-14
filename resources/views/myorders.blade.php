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
    <title>MyOrders</title>
    <!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe
-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/templatemo-klassy-cafe.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
    <script src="https://kit.fontawesome.com/f048f380da.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    @include('sweetalert::alert')
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
                        <a href="{{url('/redirects')}}" class="logo">
                            <img style="margin-bottom: 15px;" height="90" width="150" src="/assets/images/logotaticake.png" align="klassy cafe html template">
                        </a>

                        <a class="menu-trigger">

                            <span>Menu</span>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{url('/#home')}}">Beranda</a></li>
                            <li class="scroll-to-section"><a href="{{url('/#about')}}">Tentang</a></li>

                            <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="{{url('/#menu')}}">Menu</a></li>
                            <li class="scroll-to-section"><a href="{{url('/#pembuat')}}">Pembuat</a></li>
                            <!-- <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="{{url('/#contact')}}">Kontak</a></li>

                            <li class="scroll-to-section">
                                @auth
                                <a href="{{url('/showcart',Auth::user()->id)}}">
                                    <span class="menu-icon">
                                        <i class="material-icons">shopping_cart</i>
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
                                <a href="{{url('/myorders',Auth::user()->id)}}" class="active">
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


    <div id="top">
        <div style="width: auto;" class="container">
            <h1 align="center" style="font-size: 20px;">Halaman Pesanan</h1>
            <?php $totalprice = 0; ?>
            <br>

            <table class="table" align="center" bgcolor='white'>
                <tr align="center">
                    <th>No</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                </tr>
                @csrf
                <?php $totalprice = 0; ?>
                @foreach($order as $orders)
                <tr align="center">
                    <td>
                        <input type="text" name="No" value="" hidden="">
                        {{$loop->iteration}}
                    </td>
                    <td>
                        <input type="text" name="foodname[]" value="{{$orders->foodname}}" hidden="">
                        {{$orders->foodname}}
                    </td>

                    <td>
                        <input type="text" name="price[]" value="{{$orders->price}}" hidden="">
                        {{$orders->price * $orders->quantity}}K
                    </td>

                    <td>
                        <input type="text" name="quantity[]" value="{{$orders->quantity}}" hidden="">
                        {{$orders->quantity}}
                    </td>

                    <td>
                        <input type="text" name="quantity[]" value="{{$orders->status}}" hidden="">
                        {{$orders->status}}
                    </td>
                </tr>
                <!-- <?php $totalprice += ($orders->price * $orders->quantity) ?> -->
                @endforeach
            </table>
            <br>
            <br>
            <div align="center" style="padding: 10px;">
                <a href="{{ url('payment' , Auth::user()->id) }}" class="btn btn-outline-primary">Bayar</a>
            </div>
        </div>
    </div>

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