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



        <div style="position: relative; top: 60px; right : -150px">
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
                    <label style="padding: 10px;">Title</label>
                    <input style="color:blue;" type="text" name="title" placeholder="Write Title" required>
                </div>
                <div>
                    <label style="padding: 10px;">Price</label>
                    <input style="color:blue;" type="num" name="Price" placeholder="Write Price" required>
                </div>
                <div>
                    <label style="padding: 10px;">Image</label>
                    <input type="file" name="image" required>
                </div>
                <div>
                    <label style="padding: 10px;">Description</label>
                    <input style="color:blue;" type="text" name="description" placeholder="Description" required>
                </div>
                <div>
                    <input style="color: blue; padding: 10px;" type="Submit" value="Save">
                </div>

            </form>

            <div>
                <table bgcolor="black">
                    <tr>
                        <th style="padding: 30px;">Food Name</th>
                        <th style="padding: 30px;">Price</th>
                        <th style="padding: 30px;">Descripsion</th>
                        <th style="padding: 30px;">Image</th>
                        <th style="padding: 30px;">Action</th>
                        <th style="padding: 30px;">Action2</th>
                    </tr>

                    @foreach($data as $data)
                    <tr align="center">
                        <td>{{$data->title}}</td>
                        <td>{{$data->Price}}</td>
                        <td>{{$data->description}}</td>
                        <td><img height="50" width="50" src="/foodimage/{{$data->image}}"></td>
                        <td><a href="{{url('/deletemenu',$data->id)}}" onclick="return confirm('Yakin Barang DiHapus')">Delete</a></td>
                        <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>

    @include("admin.adminscript")
</body>

</html>