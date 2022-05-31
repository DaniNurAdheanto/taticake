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
            <h1 style="text-align: center; padding-bottom:10px;">Status Orders Customer </h1>

            <br>
            <table class="table" style="color:white;" align="center">
                <tr align="center">
                    <td style="padding: 20px;">No</td>
                    <td style="padding: 30px;">Name</td>
                    <td style="padding: 30px;">Phone</td>
                    <td style="padding: 20px;">Address</td>
                    <td style="padding: 20px;">Food Name</td>
                    <td style="padding: 20px;">Price</td>
                    <td style="padding: 20px;">Quantity</td>
                    <td style="padding: 20px;">Total Price</td>
                    <td style="padding: 20px;">Status</td>
                    <td style="padding: 30px;">Button</td>
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
                    <td>{{$data->status}}</td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Status Orders
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a style="color: green;" class=" dropdown-item" href="{{url('waitingforpayment',$data->id)}}">Waiting For Payment</a></li>
                                <li><a style="color: red;" class="dropdown-item" href="{{url('inproses',$data->id)}}">In Proses</a></li>
                                <li><a style="color: blue;" class="dropdown-item" href="{{url('delivery',$data->id)}}">Delivery</a></li>
                                <li><a style="color: Yellow;" class="dropdown-item" href="{{url('done',$data->id)}}">Done</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    @include("admin.adminscript")
</body>

</html>