<x-app-layout>

</x-app-layout>



<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
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
                    <label style="padding: 15px;">Title</label>
                    <input style="color:blue;" type="text" name="title" value="{{$data->title}}" required>
                </div>

                <div>
                    <label style="padding: 15px;">Price</label>
                    <input style="color:blue;" type="num" name="Price" value="{{$data->Price}}" required>
                </div>

                <div>
                    <label style="padding: 15px;">Description</label>
                    <input style="color:blue;" type="text" name="description" value="{{$data->description}}" required>
                </div>

                <div>
                    <label style="padding: 15px;">Old Image</label>
                    <img height="100" width="100" src="/foodimage/{{$data->image}}" alt="">
                </div>

                <div>
                    <label style="padding: 15px;">New Image</label>
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