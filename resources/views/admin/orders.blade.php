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
            <h1 style="text-align: center; padding-bottom:10;">Customer Orders</h1>
            <form align="right" action="{{url('/search')}}" method="GET">
                @csrf
                <input type="text" name="search" style="color:blue;">
                <input type="submit" value="Search" class="btn btn-success">
                <a href="{{url('/cetaklaporan')}}" class="btn btn-primary">Cetak Laporan<i class="fa-solid fa-print"></i></a>
            </form>
            <br>
            <table align="center">
                <tr align="center">
                    <td style="padding: 20px;">No</td>
                    <td style="padding: 30px;">Name</td>
                    <td style="padding: 30px;">Phone</td>
                    <td style="padding: 20px;">Address</td>
                    <td style="padding: 20px;">Food Name</td>
                    <td style="padding: 20px;">Price</td>
                    <td style="padding: 20px;">Quantity</td>
                    <td style="padding: 20px;">Total Price</td>
                </tr>

                @foreach($data as $data)
                <tr align="center">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->foodname}}</td>
                    <td>{{$data->price}}K</td>
                    <td>{{$data->quantity}}</td>
                    <td>{{$data->price * $data->quantity}}K</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    @include("admin.adminscript")
</body>

</html>