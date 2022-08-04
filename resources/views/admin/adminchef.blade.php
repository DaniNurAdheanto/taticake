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

        <form action="{{url('/uploadchef')}}" method="Post" enctype="multipart/form-data">
            @csrf
            <h1>Upload Data Pembuat</h1>
            <div>
                <label style="padding: 20px;">Nama</label>
                <input style="color: blue;" type="text" name="name" required="" placeholder="Nama*">
            </div>
            <div>
                <label style="padding: 20px;">Speciality</label>
                <input style="color: blue;" type="text" name="speciality" required="" placeholder="Speciality*">
            </div>

            <div>
                <input style="padding: 20px;" type="file" name="image" required="">
            </div>
            <div>
                <input style="padding: 20px; color: blue;" type="submit" value="save">
            </div>
        </form>

        <div>
            <table class="table" style="color:white; width: auto; margin:0 auto;">
                <tr>
                    <th style="padding:30px;">Nama</th>
                    <th style="padding:30px;">Speciality</th>
                    <th style="padding:20px;">Gambar</th>
                    <th style="padding:20px;">Ubah</th>
                    <th style="padding:20px;">Hapus</th>
                </tr>
                @foreach($data as $data)
                <tr align="center">
                    <td>{{$data->name}}</td>
                    <td>{{$data->speciality}}</td>
                    <td><img height="80" width="80" src="{{asset('/storage/pembuat/'.$data->image)}}"></td>
                    <td><a href="{{url('updatechef',$data->id)}}">Ubah</a></td>
                    <td><a href="{{url('deletechef',$data->id)}}">Hapus</a></td>
                </tr>
                @endforeach
            </table>
        </div>

    </div>
    @include("admin.adminscript")
</body>

</html>