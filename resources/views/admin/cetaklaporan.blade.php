<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta neme="csrf-token" content="{{ csrf_token() }}">
    <title>Cetak Laporan</title>
    <style>
        table.static {
            position: relative;
            border: 1px solid #545454;
        }
    </style>
</head>

<body>
    <div class="form-group">
        <p align="center">
        <h1 align="center">Laporan Data Order</h1>
        </p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">

            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Food Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Date</th>
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
                <td>{{$data->created_at}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>


</body>

</html>