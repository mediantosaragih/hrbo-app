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
        <title>Employee Remuneration</title>

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
                                        <a class="dropdown-item"
                                           href="guest-login.html">
                                            <i class="material-icons">lock</i> Logout
                                        </a>
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
                                <li class="breadcrumb-item active">Employee Remuneration</li>
                            </ol>
                            <h1 class="h2">Employee Remuneration</h1>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header d-flex align-items-center">
                                            <div class="flex">
                                                <h4 class="card-title">Earnings</h4>
                                                <p class="card-subtitle">Last 7 Days</p>
                                            </div>
                                            <a href="instructor-earnings.html"
                                               class="btn btn-sm btn-primary"><i class="material-icons">trending_up</i></a>
                                        </div>
                                        <div class="card-body">
                                            <div id="legend"
                                                 class="chart-legend mt-0 mb-24pt justify-content-start"></div>
                                            <div class="chart"
                                                 style="height: 200px;">
                                                <canvas id="earningsChart"
                                                        class="chart-canvas js-update-chart-bar"
                                                        data-chart-legend="#legend"
                                                        data-chart-line-background-color="primary"
                                                        data-chart-prefix="$"
                                                        data-chart-suffix="k"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header d-flex align-items-center">
                                            <div class="flex">
                                                <h4 class="card-title">Transactions</h4>
                                                <p class="card-subtitle">Latest Transactions</p>
                                            </div>
                                            <a href="instructor-statement.html"
                                               class="btn btn-sm btn-primary"><i class="material-icons">receipt</i></a>
                                        </div>
                                        <div data-toggle="lists"
                                             data-lists-values='[
            "js-lists-values-course", 
            "js-lists-values-document",
            "js-lists-values-amount",
            "js-lists-values-date"
          ]'
                                             data-lists-sort-by="js-lists-values-date"
                                             data-lists-sort-desc="true"
                                             class="table-responsive">
                                            <table class="table table-nowrap m-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th colspan="2">
                                                            <a href="javascript:void(0)"
                                                               class="sort"
                                                               data-sort="js-lists-values-course">Course</a>
                                                            <a href="javascript:void(0)"
                                                               class="sort"
                                                               data-sort="js-lists-values-document">Document</a>
                                                            <a href="javascript:void(0)"
                                                               class="sort"
                                                               data-sort="js-lists-values-amount">Amount</a>
                                                            <a href="javascript:void(0)"
                                                               class="sort"
                                                               data-sort="js-lists-values-date">Date</a>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list">

                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <a href="instructor-course-edit.html"
                                                                   class="avatar avatar-4by3 avatar-sm mr-3">
                                                                    <img src="assets/images/vuejs.png"
                                                                         alt="course"
                                                                         class="avatar-img rounded">
                                                                </a>
                                                                <div class="media-body">
                                                                    <a class="text-body js-lists-values-course"
                                                                       href="instructor-course-edit.html"><strong>Angular Routing In-Depth</strong></a><br>
                                                                    <small class="text-muted mr-1">
                                                                        Invoice
                                                                        <a href="instructor-invoice.html"
                                                                           style="color: inherit;"
                                                                           class="js-lists-values-document">#8734</a> -
                                                                        &dollar;<span class="js-lists-values-amount">89</span> USD
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-right">
                                                            <small class="text-muted text-uppercase js-lists-values-date">12 Nov 2018</small>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <a href="instructor-course-edit.html"
                                                                   class="avatar avatar-4by3 avatar-sm mr-3">
                                                                    <img src="assets/images/vuejs.png"
                                                                         alt="course"
                                                                         class="avatar-img rounded">
                                                                </a>
                                                                <div class="media-body">
                                                                    <a class="text-body js-lists-values-course"
                                                                       href="instructor-course-edit.html"><strong>Angular Unit Testing</strong></a><br>
                                                                    <small class="text-muted mr-1">
                                                                        Invoice
                                                                        <a href="instructor-invoice.html"
                                                                           style="color: inherit;"
                                                                           class="js-lists-values-document">#8735</a> -
                                                                        &dollar;<span class="js-lists-values-amount">89</span> USD
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-right">
                                                            <small class="text-muted text-uppercase js-lists-values-date">13 Nov 2018</small>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <a href="instructor-course-edit.html"
                                                                   class="avatar avatar-4by3 avatar-sm mr-3">
                                                                    <img src="assets/images/github.png"
                                                                         alt="course"
                                                                         class="avatar-img rounded">
                                                                </a>
                                                                <div class="media-body">
                                                                    <a class="text-body js-lists-values-course"
                                                                       href="instructor-course-edit.html"><strong>Introduction to TypeScript</strong></a><br>
                                                                    <small class="text-muted mr-1">
                                                                        Invoice
                                                                        <a href="instructor-invoice.html"
                                                                           style="color: inherit;"
                                                                           class="js-lists-values-document">#8736</a> -
                                                                        &dollar;<span class="js-lists-values-amount">89</span> USD
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-right">
                                                            <small class="text-muted text-uppercase js-lists-values-date">14 Nov 2018</small>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <a href="instructor-course-edit.html"
                                                                   class="avatar avatar-4by3 avatar-sm mr-3">
                                                                    <img src="assets/images/gulp.png"
                                                                         alt="course"
                                                                         class="avatar-img rounded">
                                                                </a>
                                                                <div class="media-body">
                                                                    <a class="text-body js-lists-values-course"
                                                                       href="instructor-course-edit.html"><strong>Learn Angular Fundamentals</strong></a><br>
                                                                    <small class="text-muted mr-1">
                                                                        Invoice
                                                                        <a href="instructor-invoice.html"
                                                                           style="color: inherit;"
                                                                           class="js-lists-values-document">#8737</a> -
                                                                        &dollar;<span class="js-lists-values-amount">89</span> USD
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-right">
                                                            <small class="text-muted text-uppercase js-lists-values-date">15 Nov 2018</small>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header d-flex align-items-center">
                                            <div class="flex">
                                                <h4 class="card-title">Sales today</h4>
                                                <p class="card-subtitle">by course</p>
                                            </div>
                                            <a class="btn btn-sm btn-primary"
                                               href="instructor-earnings.html">Earnings</a>
                                        </div>
                                        <ul class="list-group list-group-fit mb-0">
                                            <li class="list-group-item">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <a href="instructor-course-edit.html"
                                                           class="text-body"><strong>Basics of HTML</strong></a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="text-center">
                                                            <span class="badge badge-pill badge-primary">15</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <a href="instructor-course-edit.html"
                                                           class="text-body"><strong>Angular in Steps</strong></a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="text-center">
                                                            <span class="badge badge-pill badge-success">50</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <a href="instructor-course-edit.html"
                                                           class="text-body"><strong>Bootstrap Foundations</strong></a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="text-center">
                                                            <span class="badge badge-pill badge-warning">14</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <a href="instructor-course-edit.html"
                                                           class="text-body"><strong>GitHub Basics</strong></a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="text-center">
                                                            <span class="badge badge-pill  badge-danger ">14</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card">
                                        <div class="card-header d-flex align-items-center">
                                            <div class="flex">
                                                <h4 class="card-title">Comments</h4>
                                                <p class="card-subtitle">Latest comments</p>
                                            </div>
                                            <div class="text-right"
                                                 style="min-width: 80px;">
                                                <a href="#"
                                                   class="btn btn-outline-primary btn-sm"><i class="material-icons">keyboard_arrow_left</i></a>
                                                <a href="#"
                                                   class="btn btn-outline-primary btn-sm"><i class="material-icons">keyboard_arrow_right</i></a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#"
                                                       class="avatar avatar-sm">
                                                        <img src="assets/images/people/110/guy-9.jpg"
                                                             alt="Guy"
                                                             class="avatar-img rounded-circle">
                                                    </a>
                                                </div>
                                                <div class="media-body d-flex flex-column">
                                                    <div class="d-flex align-items-center">
                                                        <a href="instructor-profile.html"
                                                           class="text-body"><strong>Laza Bogdan</strong></a>
                                                        <small class="ml-auto text-muted">27 min ago</small><br>
                                                    </div>
                                                    <span class="text-muted">on <a href="instructor-course-edit.html"
                                                           class="text-black-50"
                                                           style="text-decoration: underline;">Data Visualization With Chart.js</a></span>
                                                    <p class="mt-1 mb-0 text-black-70">How can I load Charts on a page?</p>
                                                </div>
                                            </div>
                                            <div class="media ml-sm-32pt mt-3 border rounded p-3 bg-light">
                                                <div class="media-left">
                                                    <a href="#"
                                                       class="avatar avatar-sm">
                                                        <img src="assets/images/people/110/guy-6.jpg"
                                                             alt="Guy"
                                                             class="avatar-img rounded-circle">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex align-items-center">
                                                        <a href="instructor-profile.html"
                                                           class="text-body"><strong>FrontendMatter</strong></a>
                                                        <small class="ml-auto text-muted">just now</small>
                                                    </div>
                                                    <p class="mt-1 mb-0 text-black-70">Hi Bogdan,<br> Thank you for purchasing our course! <br><br>Please have a look at the charts library documentation <a href="#">here</a> and follow the instructions.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <form action="#"
                                                  id="message-reply">
                                                <div class="input-group input-group-merge">
                                                    <input type="text"
                                                           class="form-control form-control-appended"
                                                           required=""
                                                           placeholder="Quick Reply">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text pr-2">
                                                            <button class="btn btn-flush"
                                                                    type="button"><i class="material-icons">tag_faces</i></button>
                                                        </div>
                                                        <div class="input-group-text pl-0">
                                                            <div class="custom-file custom-file-naked d-flex"
                                                                 style="width: 24px; overflow: hidden;">
                                                                <input type="file"
                                                                       class="custom-file-input"
                                                                       id="customFile">
                                                                <label class="custom-file-label"
                                                                       style="color: inherit;"
                                                                       for="customFile">
                                                                    <i class="material-icons">attach_file</i>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="input-group-text pl-0">
                                                            <button class="btn btn-flush"
                                                                    type="button"><i class="material-icons">send</i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="./">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i> Home
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item ">
                                            <a class="sidebar-menu-button"
                                               href="./employee">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> Employee
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item ">
                                            <a class="sidebar-menu-button"
                                               href="./roster">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> Roster
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item ">
                                            <a class="sidebar-menu-button"
                                               href="./attendance">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> Attendance
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item ">
                                            <a class="sidebar-menu-button"
                                               href="./overtime">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> Overtime
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item ">
                                            <a class="sidebar-menu-button"
                                               href="./compensation">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> Compensation & Benefits
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="./remuneration">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> Company Remuneration
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item active">
                                            <a class="sidebar-menu-button"
                                               href="./performance">
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