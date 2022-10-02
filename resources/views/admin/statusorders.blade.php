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
        <div align="center" style="position: relative; margin:0 auto;">
            <h1 style="color :black; padding: 20px; text-align: center;">Infomasi Data Status Pesanan</h1>
            <div style=" width: 1250px;" class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 style="text-align: center; " class="card-title">Data Status Pesanan</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr style="color :white;" align=" center">
                                        <td>No</td>
                                        <td>Nama</td>
                                        <td>No Telpon</td>
                                        <td>Alamat</td>
                                        <td>Nama Menu</td>
                                        <td>Harga</td>
                                        <td>Jumlah</td>
                                        <td>Total Harga</td>
                                        <td>Status</td>
                                        <td>Button</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>@foreach($data as $data)
                                    <tr style="color:white;" align="center">
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
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("admin.adminscript")
</body>

</html>