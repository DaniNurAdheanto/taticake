    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
    </head>

    <!-- partial:partials/_sidebar.html -->
    <!-- <base href="/public"> -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo">

                <!-- <h1 style="color: white; position: relative; top: 40px; text-align: center;">Tati Cake</h1> -->
            </a>
            <a> <img align="center" style="position: relative; top: 30px; left :-40px;" src="assets/images/logotaticakefooter.png"></a>
        </div>
        <ul class="nav">
            <li class="nav-item nav-category">
                <span class="nav-link">Navigation Admin</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/redirects')}}">
                    <span class="menu-icon">
                        <i class="material-icons">account_circle</i>
                    </span>
                    <span class=" menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/users')}}">
                    <span class="menu-icon">
                        <i class="material-icons">account_circle</i>
                    </span>
                    <span class=" menu-title">Pengguna</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/foodmenu')}}">
                    <span class="menu-icon">
                        <i class="material-icons">cake</i>
                    </span>
                    <span class="menu-title">Menu</span>
                </a>
            </li>
            <!-- <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/viewchef')}}">
                    <span class="menu-icon">
                        <i class="material-icons">people</i>
                    </span>
                    <span class="menu-title">Pembuat</span>
                </a>
            </li> -->
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/viewkonfirmasipayment')}}">
                    <span class="menu-icon">
                        <i class="material-icons">paid</i>
                    </span>
                    <span class="menu-title">Pembayaran</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/orders')}}">
                    <span class="menu-icon">
                        <i class="material-icons">border_color</i>
                    </span>
                    <span class="menu-title">Pesanan</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/statusorders')}}">
                    <span class="menu-icon">
                        <i class="material-icons">library_add_check</i>
                    </span>
                    <span class="menu-title">Status Pesanan</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- partial -->