<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Users</title>
</head>

<body>
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

            <div style="position: relative; top: 60px; margin:0 auto;">
                <h1 style="color :aliceblue; text-align: center;">Infomasi User</h1>

                @if(session()->has('message1'))
                <div class="alert alert-danger">
                    {{session()->get('message1')}}
                </div>
                @endif

                <table class="table" style="color :white;">
                    <tr>
                        <th style="padding: 50px;">No </th>
                        <th style="padding: 50px;">Name </th>
                        <th style="padding: 50px;">Email</th>
                        <th style="padding: 50px;">Action</th>
                    </tr>

                    @foreach($data as $data)
                    <tr align="center">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        @if($data->usertype=="0")
                        <td><a href="{{url('/deleteusers', $data->id)}}" onclick="return confirm('Yakin User DiHapus ?')">Delete</a></td>
                        @else
                        <td><a>Not Allowed</a></td>
                        @endif
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

        @include("admin.adminscript")
    </body>

    </html>
</body>

</html>