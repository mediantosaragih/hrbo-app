<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    
<!-- Mirrored from learnplus.demo.frontendmatter.com/# by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Mar 2022 12:20:22 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dashboard</title>

        <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
        <meta name="robots"
              content="noindex">

        <!-- Custom Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500%7CRoboto:400,500&amp;display=swap"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="assets/vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="assets/css/material-icons.css"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="assets/css/fontawesome.css"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="assets/vendor/spinkit.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="assets/css/app.css"
              rel="stylesheet">

    </head>

    <body class=" layout-fluid">

        <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>

            <!-- <div class="sk-bounce">
    <div class="sk-bounce-dot"></div>
    <div class="sk-bounce-dot"></div>
  </div> -->

            <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
        </div>

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            <div id="header"
                 data-fixed
                 class="mdk-header js-mdk-header mb-0">
                <div class="mdk-header__content">

                    <!-- Navbar -->
                    <nav id="default-navbar"
                         class="navbar navbar-expand navbar-dark bg-primary m-0">
                        <div class="container-fluid">
                            <!-- Toggle sidebar -->
                            <button class="navbar-toggler d-block"
                                    data-toggle="sidebar"
                                    type="button">
                                <span class="material-icons">menu</span>
                            </button>

                            <!-- Brand -->
                            <a href="#"
                               class="navbar-brand">
                                <img src="assets/images/logo/white.svg"
                                     class="mr-2"
                                     alt="LearnPlus" />
                                <span class="d-none d-xs-md-block">HRIS</span>
                            </a>
                            <!-- Search -->
                            <form class="search-form d-none d-md-flex">
                                <input type="text"
                                       class="form-control"
                                       placeholder="Search">
                                <button class="btn"
                                        type="button"><i class="material-icons font-size-24pt">search</i></button>
                            </form>
                            <!-- // END Search -->

                            <div class="flex"></div>

                            <!-- Menu -->
                            <ul class="nav navbar-nav flex-nowrap">

                                <!-- User dropdown -->
                                <li class="nav-item dropdown ml-1 ml-md-3">
                                    <a class="nav-link dropdown-toggle"
                                       data-toggle="dropdown"
                                       href="#"
                                       role="button"><img src="assets/images/people/50/guy-6.jpg"
                                             alt="Avatar"
                                             class="rounded-circle"
                                             width="40"></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item"
                                           href="instructor-account-edit.html">
                                            <i class="material-icons">edit</i> Edit Account
                                        </a>
                                        <a class="dropdown-item"
                                           href="instructor-profile.html">
                                            <i class="material-icons">person</i> Public Profile
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="material-icons">power_settings_new</i> Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                <!-- // END User dropdown -->
                            </ul>
                        </div>
                    </nav>
                    <!-- // END Navbar -->

                </div>
            </div>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">

                <div data-push
                     data-responsive-width="992px"
                     class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content page ">

                        <div class="container-fluid page__container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                            <h1 class="h2">Dashboard</h1>
                            <div class="row">

                            @yield('content')

                            </div>
                        </div>

                    </div>

                    <div class="mdk-drawer js-mdk-drawer"
                         id="default-drawer">
                        <div class="mdk-drawer__content ">
                            <div class="sidebar sidebar-left sidebar-dark bg-dark o-hidden"
                                 data-perfect-scrollbar>
                                <div class="sidebar-p-y">
                                    <div class="sidebar-heading"></div>
                                    <ul class="sidebar-menu sm-active-button-bg">
                                        <li class="sidebar-menu-item active">
                                            <a class="sidebar-menu-button"
                                               href="{{ route('dashboard') }}">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i> Home
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item ">
                                            <a class="sidebar-menu-button"
                                               href="{{ route('employee') }}">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> Employee
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item ">
                                            <a class="sidebar-menu-button"
                                               href="{{ route('roster') }}">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> Roster
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item ">
                                            <a class="sidebar-menu-button"
                                               href="{{ route('attendence') }}">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> Attendance
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item ">
                                            <a class="sidebar-menu-button"
                                               href="{{ route('overtime') }}">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> Overtime
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item ">
                                            <a class="sidebar-menu-button"
                                               href="{{ route('compensation') }}">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> Compensation & Benefits
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item ">
                                            <a class="sidebar-menu-button"
                                               href="{{ route('remuneration') }}">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> Company Remuneration
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item ">
                                            <a class="sidebar-menu-button"
                                               href="{{ route('performance') }}">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> Employee Performance
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- App Settings FAB -->
                <div id="app-settings">
                    <app-settings layout-active="default"
                                  :layout-location="{
                                                    'fixed': 'fixed-#',
                                                    'default': '#'
                                                    }"      
                                  sidebar-variant="bg-transparent border-0"></app-settings>
                </div>

            </div>
        </div>

        <!-- jQuery -->
        <script src="assets/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="assets/vendor/popper.min.js"></script>
        <script src="assets/vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="assets/vendor/perfect-scrollbar.min.js"></script>

        <!-- MDK -->
        <script src="assets/vendor/dom-factory.js"></script>
        <script src="assets/vendor/material-design-kit.js"></script>

        <!-- App JS -->
        <script src="assets/js/app.js"></script>

        <!-- Highlight.js -->
        <script src="assets/js/hljs.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="assets/js/app-settings.js"></script>

        <!-- Global Settings -->
        <script src="assets/js/settings.js"></script>

        <!-- Moment.js -->
        <script src="assets/vendor/moment.min.js"></script>
        <script src="assets/vendor/moment-range.js"></script>

        <!-- Chart.js -->
        <script src="assets/vendor/Chart.min.js"></script>
        <script src="assets/js/chartjs-rounded-bar.js"></script>
        <script src="assets/js/chartjs.js"></script>

        <!-- Instructor Dashboard Page JS -->
        <script src="assets/js/page.instructor-dashboard.js"></script>

        <!-- List.js -->
        <script src="assets/vendor/list.min.js"></script>
        <script src="assets/js/list.js"></script>

    </body>


<!-- Mirrored from learnplus.demo.frontendmatter.com/# by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Mar 2022 12:20:30 GMT -->
</html>