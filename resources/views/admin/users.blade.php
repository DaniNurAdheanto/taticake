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

            <div style="position: relative; width: 800px; top: 60px; margin:0 auto;">
                <h1 style="color :black; text-align: center;">Infomasi Data Pengguna</h1>
                <br>

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 style="text-align: center;" class="card-title">Data Pengguna</h4>

                            @if(session()->has('message1'))
                            <div class="alert alert-danger">
                                {{session()->get('message1')}}
                            </div>
                            @endif

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr align=" center">
                                            <th style="padding: 20px; color :white;">No </th>
                                            <th style="padding: 20px; color :white;">Nama </th>
                                            <th style="padding: 20px; color :white;">Email</th>
                                            <th style="padding: 20px; color :white;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach($data as $data)
                                        <tr style="color :white;" align=" center">
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
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            @include("admin.adminscript")
    </body>

    </html>
</body>

</html>