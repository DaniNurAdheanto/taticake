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

                <table class="table" style="color:white;">
                    <H1 align="center">Payment Confirmation</H1>
                    <br>
                    <tr align="center">
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Address</th>
                        <th>Image</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>

                    @foreach($data as $data)
                    <tr align="center">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->date}}</td>
                        <td>{{$data->address}}</td>
                        <td><img height="50" width="50" src="/payment_confirmation/{{$data->image}}"></td>
                        <td>{{$data->message}}</td>
                        <td><a href="{{url('/deletereservation',$data->id)}}" onclick="return confirm('Yakin DiHapus')">Delete</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>
    @include("admin.adminscript")
</body>

</html>