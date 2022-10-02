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
        <!-- <div class="container"> -->
        <div align="center" style="position: relative; margin:0 auto;">
            <h1 style="color :black; padding: 20px; text-align: center;">Infomasi Data Pembayaran</h1>
            <div style=" width: auto;" class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 style="text-align: center; " class="card-title">Data Konfirmasi Pembayaran</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr style="color :white;" align=" center">
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
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach($data as $data)
                                    <tr style="color:white;" align="center">
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
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    @include("admin.adminscript")
</body>

</html>