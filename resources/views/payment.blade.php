<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <base href="/public"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Payment</title>
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
    <div id="top">
        <div style="padding-bottom: 40px;" class="container">
            <?php $totalprice = 0; ?>
            <?php $ongkir = 20; ?>
            <?php $kodeunik = (rand(111, 500)); ?>
            <h2 style="padding-bottom: 10px;" align="center">PEMBAYARAN</h2>
            <br>

            <table class="table" align="center" bgcolor='white'>
                <tr align="center">
                    <th>No</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
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
                </tr>

                <?php $totalprice += ($orders->price * $orders->quantity)  ?>
                @endforeach
            </table>
            <br>

            <h5 style="text-align: center ;">Total: Rp. {{$totalprice}}.000 </h5>
            <h5 style="text-align: center ;">Kode Unik: {{$kodeunik}} </h5>
            <h5 style="text-align: center ;">Ongkir: Rp. {{$ongkir}}.000 </h5>
            <br>
            <h5 style="text-align: center ;"><b>Total Harga: Rp.{{$totalprice + $ongkir}}.{{$kodeunik}}</b></h5>
            <br>
            <div align="center" class="alert alert-success" style="width: auto; position: center; margin:0 auto;" role="alert">
                <h1 class="alert-heading" style="font-size: 20px;"><b> Pesanan Akan Di Proses!</b> </h1>
                <p>Segerakan Lakukan Pembayaran Melalui <strong>Bank Permata = 2351727 AN. Dani </strong> dengan Jumlah <strong>Rp.{{$totalprice + $ongkir}}.{{$kodeunik}}</strong></p>
                <hr>
                <p class="mb-0"> Setelah Transfer Konfirmasi Ke Whatsapp <strong> No 08999231334 </strong> Atau Klik di sini
                    <a href="https://api.whatsapp.com/send?phone=6285156061958"> <button><i class="fa fa-whatsapp"></i></button></a>
                </p>
            </div>
            <br>
            <div align="center" style="padding: 10px;">
                <a style="margin: 0 auto ;" href="{{ url('myorders' , Auth::user()->id) }}" class="btn btn-danger">Kembali</a>
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