    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <!-- partial:partials/_sidebar.html -->
    <base href="/public">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo">
                <h1 style="color: white; position: relative; top: 40px; text-align: center;">Tati Cake</h1>
            </a>
            <a class="sidebar-brand brand-logo-mini"><img src="public/admin/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
            <li class="nav-item nav-category">
                <span class="nav-link">Navigation Admin</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/users')}}">
                    <span class="menu-icon">
                        <i class="material-icons">account_circle</i>
                    </span>
                    <span " class=" menu-title">Users</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/foodmenu')}}">
                    <span class="menu-icon">
                        <i class="material-icons">cake</i>
                    </span>
                    <span class="menu-title">Food Menu</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/viewchef')}}">
                    <span class="menu-icon">
                        <i class="material-icons">people</i>
                    </span>
                    <span class="menu-title">Chefs</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/viewreservation')}}">
                    <span class="menu-icon">
                        <i class="material-icons">paid</i>
                    </span>
                    <span class="menu-title">Payment Confirmation</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/orders')}}">
                    <span class="menu-icon">
                        <i class="material-icons">border_color</i>
                    </span>
                    <span class="menu-title">Orders</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/statusorders')}}">
                    <span class="menu-icon">
                        <i class="material-icons">library_add_check</i>
                    </span>
                    <span class="menu-title">Status Orders</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- partial -->