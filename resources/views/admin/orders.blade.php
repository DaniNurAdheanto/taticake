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
            <h1 style="text-align: center; margin-top:30px;">Pesanan Customer</h1>
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
                    <td style="padding: 20px;">Tanggal Order</td>
                    <td>Hapus</td>
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
                    <td>{{$data->created_at}}</td>
                    <td><a href="{{url('/deleteorders',$data->id)}}" onclick="return confirm('Yakin DiHapus')">Hapus</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    @include("admin.adminscript")
</body>

</html>