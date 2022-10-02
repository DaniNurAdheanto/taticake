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
            <h1 style="color :black; padding: 10px; text-align: center;">Infomasi Data Pesanan</h1>
            <div style=" width: 1250px;" class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 style="text-align: center; " class="card-title">Data Pesanan</h4>
                        <div class="table-responsive">
                            @if(session()->has('message'))
                            <div class="alert alert-danger">
                                {{session()->get('message')}}
                            </div>
                            @endif
                            <form align="right" action="{{url('/search')}}" method="GET">
                                @csrf
                                <input type="text" name="search" style="color:blue;">
                                <input type="submit" value="Cari" class="btn btn-success">
                                <a href="{{url('/cetaklaporan')}}" class="btn btn-primary">Cetak Laporan<i class="fa-solid fa-print"></i></a>
                            </form>
                            <br>
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
                                    @foreach($data as $data)
                                    <tr style="color :white;" align="center">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->phone}}</td>
                                        <td>{{$data->address}}</td>
                                        <td>{{$data->foodname}}</td>
                                        <td>{{$data->price}}K</td>
                                        <td>{{$data->quantity}}</td>
                                        <td>{{$data->price * $data->quantity}}K</td>
                                        <td>{{$data->created_at}}</td>
                                        <td><a href="{{url('/deleteorders',$data->id)}}" onclick="return confirm('Yakin DiHapus')">Hapus</a></td>
                                    </tr>
                                    @endforeach
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