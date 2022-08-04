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
        <!-- <div style="position: relative; top: 30px; margin:0 auto;"> -->
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
            @csrf

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


            <h1>Upload Menu</h1>
            <div>
                <label style="padding: 10px;">Nama Menu</label>
                <input style="color:black;" type="text" name="title" placeholder="Nama Menu*" required>
            </div>
            <div>
                <label style="padding: 10px;">Harga</label>
                <input style="color:black;" type="num" name="Price" placeholder=" Harga*" required>
            </div>
            <div>
                <label style="padding: 10px;">Gambar</label>
                <input type="file" name="image" required>
            </div>
            <div>
                <label style="padding: 10px;">Deskripsi</label>
                <input style="color:black;" type="text" name="description" placeholder="Deskripsi*" required>
            </div>
            <div>
                <input style="color: blue; padding: 10px;" type="Submit" value="Save">
            </div>
        </form>

        <div>
            <table class="table" style="color:white; width: auto; margin:0 auto;">
                <tr>
                    <th>No</th>
                    <th style="padding: 30px;">Nama Menu</th>
                    <th style="padding: 30px;">Harga</th>
                    <th style="padding: 30px;">Deskripsi</th>
                    <th style="padding: 30px;">Gambar</th>
                    <th style="padding: 30px;">Hapus</th>
                    <th style="padding: 30px;">Ubah</th>
                </tr>

                @foreach($data as $data)
                <tr align="center">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->title}}</td>
                    <td>{{$data->Price}} K</td>
                    <td>{{$data->description}}</td>
                    <td><img height="50" width="50" src="{{asset('/storage/menu/'.$data->image)}}"></td>
                    <td><a href="{{url('/deletemenu',$data->id)}}" onclick="return confirm('Yakin Barang DiHapus')">Hapus</a></td>
                    <td><a href="{{url('/updateview',$data->id)}}">Ubah</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

    </div>

    @include("admin.adminscript")
</body>

</html>