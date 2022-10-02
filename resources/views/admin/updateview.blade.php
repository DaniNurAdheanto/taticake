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


        <div style="position: relative; top: 30px; margin: 0 auto;">
            <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf



                <h1 align="center" style="color: black;">Update Menu</h1>

                <div style=" padding :20 px;margin: 0 auto; width: 800px;" class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{session()->get('message')}}
                            </div>
                            @endif
                            <div class="form-group">
                                <label>Nama Menu</label>
                                <input style="color :white;" type="text" name="title" class="form-control form-control-lg" name="title" value="{{$data->title}}" required>
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input style="color :white;" type="num" name="Price" class="form-control" name="Price" value="{{$data->Price}}" required>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input style="color :white;" type="text" name="description" class="form-control form-control-sm" name="description" value="{{$data->description}}" required>
                            </div>
                            <div class="form-group">
                                <label>Gambar Lama</label>
                                <img height="100" width="100" src="{{asset('/storage/menu/'.$data->image)}}" alt="">
                            </div>
                            <div class="form-group">
                                <label>Gambar Baru</label>
                                <input type="file" name="image" required>
                            </div>
                            <div>
                                <input style="color: blue; padding: 10px;" type="Submit" value="Save">
                            </div>
                        </div>
                    </div>
                </div>


            </form>

        </div>
        @include("admin.adminscript")
</body>

</html>