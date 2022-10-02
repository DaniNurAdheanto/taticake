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
        <div style="position: relative; width: 800px; top: 30px; margin:0 auto;">
            <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
                @csrf

                <h1 align="center" style="color :black;">Upload Menu</h1>

                <div style=" padding :20 px;margin: auto; width: 800px;" class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Menu</label>
                                <input style="color :white;" type="text" name="title" class="form-control form-control-lg" placeholder="Nama Menu*" required>
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input style="color :white;" type="num" name="Price" class="form-control" name="Price" placeholder=" Harga*" required>
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input style="color :white;" type="file" name="image" class="form-control form-control-sm" name="image" required>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input style="color :white;" type="text" name="description" class="form-control form-control-sm" name="description" placeholder="Deskripsi*" required>
                            </div>
                            <div>
                                <input style="color: blue; padding: 10px;" type="Submit" value="Save">
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <br>
            <div style=" width: auto; margin: 0 auto;" class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 style="text-align: center; " class="card-title">Data Menu</h4>

                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{session()->get('message')}}
                        </div>
                        @endif

                        @if(session()->has('message1'))
                        <div class="alert alert-danger">
                            {{session()->get('message1')}}
                        </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr style="color :white;" align=" center">
                                        <th>No </th>
                                        <th>Nama Menu </th>
                                        <th>Harga</th>
                                        <th>Deskripsi</th>
                                        <th>Gambar</th>
                                        <th>Hapus</th>
                                        <th>Ubah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach($data as $data)
                                    <tr style="color :white;" align="center">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$data->title}}</td>
                                        <td>{{$data->Price}} K</td>
                                        <td>{{$data->description}}</td>
                                        <td><img height="50" width="50" src="{{asset('/storage/menu/'.$data->image)}}"></td>
                                        <td><a href="{{url('/deletemenu',$data->id)}}" onclick="return confirm('Yakin Barang DiHapus')">Hapus</a></td>
                                        <td><a href="{{url('/updateview',$data->id)}}">Ubah</a></td>
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