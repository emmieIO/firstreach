<!doctype html>
<html class="fixed">

<head>
    <!-- Basic -->
    <meta charset="UTF-8">
    <title>::FirstReach admin</title>

    <meta name="description" content="FirstReach Admin">
    <link rel="shortcut icon" href="{{ asset("dist/front/images/logo-2.png") }}" type="image/x-icon">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light"
        rel="stylesheet" type="text/css">
    <!-- Vendor CSS -->

    <link rel="stylesheet" href="{{ asset("dist/porto/vendor/bootstrap/css/bootstrap.css") }}" />
    <link rel="stylesheet" href="{{asset("dist/porto/vendor/animate/animate.compat.css")}}">
    <link rel="stylesheet" href="{{asset("dist/porto/vendor/font-awesome/css/all.min.cs")}}s" />
    <link rel="stylesheet" href="{{asset("dist/porto/vendor/boxicons/css/boxicons.min.css")}}" />
    <link rel="stylesheet" href="{{asset("dist/porto/vendor/magnific-popup/magnific-popup.css")}}" />
    <link rel="stylesheet" href="{{asset("dist/porto/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css")}}" <!--
        Specific Page Vendor CSS -->

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset("dist/porto/css/theme.css") }}" />
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset("dist/porto/css/custom.css") }}">
    <!-- Head Libs -->
    <script src="{{ asset("dist/porto/vendor/modernizr/modernizr.js") }}"></script>
    <script src="{{ asset("master/style-switcher/style.switcher.localstorage.js") }}"></script>
</head>

<body>
    <section class="body">
        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="" class="logo">
                    <img src="{{ asset("dist/front/images/logo-2.png") }}" width="75" height="35" alt="Admin" />
                </a>
                <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
                    data-fire-event="sidebar-left-opened">
                    <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>
            <!-- start: search & user box -->
            <div class="header-right">

                <span class="separator"></span>

                <span class="separator"></span>
                <div id="userbox" class="userbox">
                    <a href="#" data-bs-toggle="dropdown">
                        <figure class="profile-picture">
                            <img src="{{ asset("dist/porto/img/logged-user.jpg") }}" alt="Joseph Doe"
                                class="rounded-circle" data-lock-picture="img/%21logged-user.jpg" />
                        </figure>
                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                            <span class="name">{{ Auth::user()->name }}</span>
                            <span class="role">{{ Str::ucfirst(Auth::user()->role) }}</span>
                        </div>
                        <i class="fa custom-caret"></i>
                    </a>
                    <div class="dropdown-menu">
                        <ul class="list-unstyled mb-2">
                            <li class="divider"></li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="{{ route('profile.edit') }}"><i
                                        class="bx bx-user-circle"></i> My Profile</a>
                            </li>

                            <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <a role="menuitem" tabindex="-1" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class="bx bx-power-off"></i>
                                        Logout</a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->
        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">
                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed"
                        data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>
                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                                <li>
                                    <a class="nav-link" href="{{ route("dashboard") }}">
                                        <i class="bx bx-home-alt" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-parent">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-location" aria-hidden="true"></i>
                                        <span>Locations</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a class="nav-link" href="{{ route('locations.index') }}">
                                                Locations
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ route('locations.create') }}">
                                                Create Location
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a class="nav-link" href="#">
                                        <i class="bx bx-cube" aria-hidden="true"></i>
                                        <span>Categories</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a class="nav-link" href="{{ route("categories.index") }}">
                                                Categories
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ route("categories.create") }}">
                                                Add Category
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-truck-fast" aria-hidden="true"></i>
                                        <span>Shipments</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a class="nav-link" href="{{ route('shipments.index') }}">
                                                Shipment List
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ route('shipments.create') }}">
                                                Create Shipment
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                @if (auth()->user()->role == 'super admin')
                                    <li class="nav-parent">
                                        <a class="nav-link" href="#">
                                            <i class="bx bx-map" aria-hidden="true"></i>
                                            <span>Users</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a class="nav-link" href="{{ route('register') }}">
                                                    Add New User
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="{{ route("admin.users") }}">
                                                    User list
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                                <li class="nav-parent">
                                    <a class="nav-link" href="#">
                                        <i class="bx bx-envelope" aria-hidden="true"></i>
                                        <span>Support</span>
                                    </a>
                                    <ul class="nav nav-children">

                                        <li>
                                            <a class="nav-link" href="{{ route('messages.index') }}">
                                                Messages
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>

                            </ul>
                        </nav>

                    </div>
                    <script>
                        // Maintain Scroll Position
                        if (typeof localStorage !== 'undefined') {
                            if (localStorage.getItem('sidebar-left-position') !== null) {
                                var initialPosition = localStorage.getItem('sidebar-left-position'),
                                    sidebarLeft = document.querySelector('#sidebar-left .nano-content');
                                sidebarLeft.scrollTop = initialPosition;
                            }
                        }
                    </script>
                </div>
            </aside>
            <!-- end: sidebar -->
            <section role="main" class="content-body">
                <header class="page-header">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Well done!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Oh snap!</strong> {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"
                                aria-label="Close"></button>
                        </div>
                    @endif
                </header>

                <!-- start: page -->
                {{ $slot }}

            </section>
        </div>

    </section>

    <script src="{{asset("dist/porto/vendor/jquery-browser-mobile/jquery.browser.mobile.js")}}"></script>
    <script src="{{asset("dist/porto/vendor/jquery/jquery.js")}}"></script>
    <script src="{{asset("dist/porto/vendor/jquery-cookie/jquery.cookie.js")}}"></script>
    <script src="{{asset("dist/porto/master/style-switcher/style.switcher.js")}}"></script>
    <script src="{{asset("dist/porto/vendor/popper/umd/popper.min.html")}}"></script>
    <script src="{{asset("dist/porto/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("dist/porto/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js")}}"></script>
    <script src="{{asset("dist/porto/vendor/common/common.js")}}"></script>
    <script src="{{asset("dist/porto/vendor/nanoscroller/nanoscroller.js")}}"></script>
    <script src="{{asset("dist/porto/vendor/magnific-popup/jquery.magnific-popup.js")}}"></script>
    <script src="{{asset("dist/porto/vendor/jquery-placeholder/jquery.placeholder.js")}}"></script>
    <!-- Specific Page Vendor -->

    <!-- Theme Base, Components and Settings -->
    <script src="{{asset("dist/porto/js/theme.js")}}"></script>
    <!-- Theme Custom -->
    <script src="{{asset("dist/porto/js/custom.js")}}"></script>
    <!-- Theme Initialization Files -->
    <script src="{{asset("dist/porto/js/theme.init.js")}}"></script>

</body>

</html>
