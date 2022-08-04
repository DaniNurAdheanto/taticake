<x-app-layout>

</x-app-layout>



<!DOCTYPE html>
<html lang="en">

<head>
    @include("admin.admincss")
</head>

<body>
    <div class="container-scroller">
        @include("admin.navbar")

        <div class="container">
            <h1 style="text-align: center; margin-top:30px;">Status Pesanan Customer </h1>

            <br>
            <table class="table" style="color:white; width: auto; margin:0 auto;">
                <tr align="center">
                    <td style="padding: 20px;">No</td>
                    <td style="padding: 30px;">Nama</td>
                    <td style="padding: 30px;">No Telpon</td>
                    <td style="padding: 20px;">Alamat</td>
                    <td style="padding: 20px;">Nama Menu</td>
                    <td style="padding: 20px;">Harga</td>
                    <td style="padding: 20px;">Jumlah</td>
                    <td style="padding: 20px;">Total Harga</td>
                    <td style="padding: 20px;">Status</td>
                    <td style="padding: 30px;">Button</td>
                </tr>

                @foreach($data as $data)
                <tr align="center">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->foodname}}</td>
                    <td>{{$data->price}}K</td>
                    <td>{{$data->quantity}}</td>
                    <td>{{$data->price * $data->quantity}}K</td>
                    <td>{{$data->status}}</td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Ubah Status
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a style="color: green;" class=" dropdown-item" href="{{url('waitingforpayment',$data->id)}}">Menunggu Pembayaran</a></li>
                                <li><a style="color: red;" class="dropdown-item" href="{{url('inproses',$data->id)}}">Proses</a></li>
                                <li><a style="color: blue;" class="dropdown-item" href="{{url('delivery',$data->id)}}">Pengiriman</a></li>
                                <li><a style="color: Yellow;" class="dropdown-item" href="{{url('done',$data->id)}}">Selesai</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    @include("admin.adminscript")
</body>

</html>