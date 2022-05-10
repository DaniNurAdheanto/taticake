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

        <div style="position: relative; top: 70px; right: -150px;">

            <table border="1px">
                <H1 align="center">Reservation</H1>
                <br>
                <tr>
                    <th style="padding: 40px;">Name</th>
                    <th style="padding: 50px;">Email</th>
                    <th style="padding: 50px;">Phone</th>
                    <th style="padding: 40px;">Date</th>
                    <th style="padding: 40px;">Time</th>
                    <th style="padding: 40px;">Message</th>
                </tr>

                @foreach($data as $data)
                <tr align="center">
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->date}}</td>
                    <td>{{$data->time}}</td>
                    <td>{{$data->message}}</td>
                </tr>
                @endforeach
            </table>
        </div>

    </div>
    @include("admin.adminscript")
</body>

</html>