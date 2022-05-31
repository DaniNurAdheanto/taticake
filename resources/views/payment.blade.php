<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">

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
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
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



    <div id="top">
        <div class="container">
            <?php $totalprice = 0; ?>
            <h1 align="center">Payment</h1>
            <br>
            <div align="center" class="alert alert-success" style="width: auto; position: center; margin:0 auto;" role="alert">
                <h1 class="alert-heading" style="font-size: 20px;"><b> Pesanan Akan Di Proses!</b> </h1>
                <p>Segerakan Lakukan Pembayaran Melalui <strong>Bank Permata = 2351727 AN. Dani </strong> dengan Jumlah <strong>Rp.{{$totalprice}}.0{{Auth::user()->id}}0</strong></p>
                <hr>
                <p class="mb-0"> Setelah Transfer Konfirmasi Ke Whatsapp <strong> No 08999231334 </strong> Atau Klik di sini
                    <a href="https://api.whatsapp.com/send?phone=6285156061958"> <button><i class="fa fa-whatsapp"></i></button></a>
                </p>
            </div>
            <br>
            <table class="table" align="center" bgcolor='white'>
                <tr align="center">
                    <th>No</th>
                    <th>Food Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
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

                <?php $totalprice += ($orders->price * $orders->quantity) ?>
                @endforeach
            </table>
            <br>
            <!-- <table>
                <tr style="text-align:center ;">
                    <td>Total Price : {{$totalprice}} K</td>
                    <td>Unique Code : {{Auth::user()->id}} K</td>
                </tr>
            </table> -->
            <h5 style="text-align: center ;">Sub Total: Rp. {{$totalprice}}.000 </h5>
            <h5 style="text-align: center ;">Unique Code : 0{{Auth::user()->id}}0 </h5>
            <h5 style="text-align: center ;">Total Price: Rp.{{$totalprice}}.0{{Auth::user()->id}}0</h5>
            <a style="margin: 0 auto ;" href="{{ url('myorders' , Auth::user()->id) }}" class="btn btn-danger">Back</a>
        </div>
    </div>
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
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