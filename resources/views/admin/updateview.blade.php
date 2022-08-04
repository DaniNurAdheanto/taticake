<x-app-layout>

</x-app-layout>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <base href="/public"> -->
    @include("admin.admincss")
</head>

<body>
    @include('sweetalert::alert')
    <div class="container-scroller">
        @include("admin.navbar")


        <div style="position: relative; top: 60px; right : -150px">
            <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf

                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{session()->get('message')}}
                </div>
                @endif

                <h1>Update Menu</h1>
                <div>
                    <label style="padding: 15px;">Nama Menu</label>
                    <input style="color:black;" type="text" name="title" value="{{$data->title}}" required>
                </div>

                <div>
                    <label style="padding: 15px;">Harga</label>
                    <input style="color:black;" type="num" name="Price" value="{{$data->Price}}" required>
                </div>

                <div>
                    <label style="padding: 15px;">Deskripsi</label>
                    <input style="color:black;" type="text" name="description" value="{{$data->description}}" required>
                </div>

                <div>
                    <label style="padding: 15px;">Gambar Lama</label>
                    <img height="100" width="100" src="{{asset('/storage/menu/'.$data->image)}}" alt="">
                </div>

                <div>
                    <label style="padding: 15px;">Gambar Baru</label>
                    <input type="file" name="image" required>
                </div>

                <div>
                    <input style="color: blue;" type="Submit" value="Save">
                </div>

            </form>

        </div>
        @include("admin.adminscript")
</body>

</html>