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
            <div style="position: relative; margin:0 auto;">

                <table class="table" style="color:white; width: auto; margin:0 auto;">
                    <h1 style="margin-top: 30px;" align="center">Konfirmasi Pembayaran</h1>

                    @if(session()->has('message'))
                    <div class="alert alert-danger">
                        {{session()->get('message')}}
                    </div>
                    @endif

                    <br>
                    <tr align="center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No Telpon</th>
                        <th>Tanggal</th>
                        <th>Alamat</th>
                        <th>Bukti Pembayaran</th>
                        <th>Pesan</th>
                        <th>Hapus</th>
                    </tr>

                    @foreach($data as $data)
                    <tr align="center">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->date}}</td>
                        <td>{{$data->address}}</td>
                        <td><img height="50" width="50" src="{{asset('/storage/konfirmasi-pembayaran/'.$data->image)}}"></td>
                        <td>{{$data->message}}</td>
                        <td><a href="{{url('/deletekonfirmasipayment',$data->id)}}" onclick="return confirm('Yakin DiHapus')">Hapus</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>
    @include("admin.adminscript")
</body>

</html>