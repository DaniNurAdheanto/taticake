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
    <title>Keranjang</title>
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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

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
                            <img style="margin-bottom: 15px;" height="70" width="150" src="/assets/images/logotaticake.png" align="klassy cafe html template">
                        </a>

                        <a class="menu-trigger">

                            <span>Menu</span>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{url('/redirects')}}">Beranda</a></li>
                            <li class="scroll-to-section"><a href="{{url('/#about')}}">Tentang</a></li>
                            <li class="scroll-to-section"><a href="{{url('/#menu')}}">Menu</a></li>
                            <li class="scroll-to-section"><a href="{{url('/#pembuat')}}">Pembuat</a></li>
                            <li class="scroll-to-section"><a href="{{url('/#contact')}}">Kontak</a></li>
                            <li class="scroll-to-section">
                                @auth
                                <a href="{{url('/showcart',Auth::user()->id)}}" class="active">
                                    <span class="menu-icon">
                                        <i class="material-icons">shopping_cart</i>
                                        <span class="badge badge-danger">{{$count}}</span>
                                    </span>
                                </a>
                                @endauth
                                @guest
                                <span class="menu-icon">
                                    <i class="material-icons">shopping_cart</i>[ {{$count}} ]
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


    <div id="top">
        <div class="container">
            <table align="center" bgcolor='white'>
                <tr>
                    <th style="padding: 30px;">No</th>
                    <th style="padding: 30px;">Menu</th>
                    <th style="padding: 30px;">Harga</th>
                    <th style="padding: 30px;">Jumlah</th>
                    <th style="padding: 30px;">Action</th>
                </tr>
                <form action="{{url('orderconfirm')}}" method="POST">
                    @csrf
                    <?php $totalprice = 0; ?>
                    @foreach($data as $data)
                    <tr align="center">
                        <td>
                            <input type="text" name="No" value="" hidden="">
                            {{$loop->iteration}}
                        </td>
                        <td>
                            <input type="text" name="foodname[]" value="{{$data->title}}" hidden="">
                            {{$data->title}}
                        </td>

                        <td>
                            <input type="text" name="price[]" value="{{$data->Price}}" hidden="">
                            {{$data->Price * $data->quantity}}K
                        </td>

                        <td>
                            <input type="text" name="quantity[]" value="{{$data->quantity}}" hidden="">
                            {{$data->quantity}}
                        </td>
                    </tr>

                    <?php $totalprice += ($data->Price * $data->quantity) ?>
                    @endforeach

                    @foreach($data2 as $data2)
                    <tr style="position: relative; top:-90px; right: -420px;">
                        <td>
                            <a href="{{url('/remove',$data2->id)}}" class="btn btn-danger" style="font-size: 12px;" onclick="return confirm('Yakin Barang DiHapus')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach

            </table>

            <h1 style="text-align: center ;">Total Harga : Rp.{{$totalprice}}.000</h1>
            <br>
            <div align="center" style="padding: 10px;">
                <button type="button" class="btn btn-outline-primary" id="order">Order Sekarang</button>
            </div>

            <div id="appear" align="center" style="padding: 10px; display:none;">
                <div style="width: 10cm;" class="mb-3" style="padding: 10px;">
                    <label class="form-label">Nama</label>
                    <input type="text" class=" @error('name') is-invalid @enderror" name="name" placeholder="Nama" required value="{{old('name')}}">
                    @error('name')
                    <div style="color: red;" class="invalid-freedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3" style="padding: 10px;">
                    <label>No Telpon</label>
                    <input type="number" class=" @error('name') is-invalid @enderror" name="phone" placeholder="No Telepon" value="{{old('phone')}}">
                    @error('phone')
                    <div style="color: red;" class="invalid-freedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3" style="padding: 10px;">
                    <label>Alamat</label>
                    <input type="text" class=" @error('name') is-invalid @enderror" name="address" placeholder="Alamat Lengkap" value="{{old('address')}}">
                    @error('address')
                    <div style="color: red;" class="invalid-freedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div style="padding: 10px;">
                    <input class="btn btn-outline-success" type="submit" value="Order Confirm"></input>
                    <button type="button" id="close" class="btn btn-outline-danger">Close</button>
                </div>
            </div>
            </form>

        </div>
    </div>
    <script type="text/javascript">
        $("#order").click(
            function() {
                $("#appear").show();
            }
        );

        $("#close").click(
            function() {
                $("#appear").hide();
            }
        );
    </script>

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