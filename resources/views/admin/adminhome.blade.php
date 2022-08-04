<x-app-layout>

</x-app-layout>



<!DOCTYPE html>
<html lang="en">

<head>
    @include("admin.admincss")
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
</head>

<body>

    <div class="container-scroller">
        @include("admin.navbar")
        <div style="position: relative; margin:0 auto; padding: 30px;">
            <H1 align="center">Selamat Datang Di Halaman Admin</H1>
            <br>
            <div class="row">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0">{{$total_user}}</h3>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="icon icon-box-success ">
                                        <i class="material-icons">people_alt</i>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal">Total Pengguna</h6>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0">{{$total_menu}}</h3>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="icon icon-box-success">
                                        <i class="material-icons">cake</i>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal">Total Menu</h6>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0">{{$total_orders}}</h3>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="icon icon-box-success ">
                                        <i class="material-icons">border_color</i>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal">Total Pesanan</h6>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0">Rp.{{$total_income}}.000</h3>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="icon icon-box-success ">
                                        <i class="material-icons">monetization_on</i>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal">Total Pendapatan</h6>
                        </div>
                    </div>
                </div>

                <div style="margin:0 auto ;" class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0">{{$total_inproses}}</h3>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="icon icon-box-success ">
                                        <i class="material-icons">cookie</i>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal">Pesanan Proses</h6>
                        </div>
                    </div>
                </div>
                <div style="margin:0 auto ;" class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0">{{ $total_done}}</h3>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="icon icon-box-success ">
                                        <i class="material-icons">done_all</i>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal">Pesanan Selesai</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include("admin.adminscript")
</body>

</html>