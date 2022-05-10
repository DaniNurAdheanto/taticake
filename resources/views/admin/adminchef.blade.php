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
            <h1>Upload Chefs</h1>
            <div>
                <label>Name</label>
                <input style="color: blue;" type="text" name="name" required="" placeholder="Enter Name">
            </div>

            <div>
                <label>Speciality</label>
                <input style="color: blue;" type="text" name="speciality" required="" placeholder="Enter The Speciality">
            </div>

            <div>
                <input type="file" name="image" required="">
            </div>

            <div>
                <input style="color: blue;" type="submit" value="save">
            </div>
        </form>

        <div>
            <table bgcolor="black">
                <tr>
                    <th style="padding:20px;">Chef Name</th>
                    <th style="padding: 30px;">Speciality</th>
                    <th style="padding:20px;">Image</th>
                    <th style="padding:20px;">Action</th>
                    <th style="padding:20px;">Action2</th>
                </tr>
                @foreach($data as $data)
                <tr align="center">
                    <td>{{$data->name}}</td>
                    <td>{{$data->speciality}}</td>
                    <td><img height="80" width="80" src="/chefimage/{{$data->image}}"></td>
                    <td><a href="{{url('updatechef',$data->id)}}">Update</a></td>
                    <td><a href="{{url('deletechef',$data->id)}}">Delete</a></td>
                </tr>
                @endforeach
            </table>
        </div>

    </div>
    @include("admin.adminscript")
</body>

</html>