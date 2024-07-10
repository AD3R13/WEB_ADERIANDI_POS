<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>WEB_ADERIANDI_POS</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    {{-- > ! Favicons ! < --}}
    @include('layouts.inc.favicon')
    <!-- Fonts and icons -->
    @include('layouts.inc.script')
    <!-- CSS Files -->
    @include('layouts.inc.css')
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        @include('layouts.inc.sidebar')
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">

                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="index.html" class="logo">
                            <img src="assets/kai/assets/img/kaiadmin/logo_light.svg" alt="navbar brand"
                                class="navbar-brand" height="20" />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                </div>
                <!-- End Logo Header -->

                <!-- Navbar Header -->
                @include('layouts.inc.navbar')
                <!-- End Navbar -->

            </div>
            <div class="container">
                <div class="row">
                    <div class="page-inner">
                        <div class="d-flex align-items-left align-items-md flex-column flex-md-col pt-2 pb-4">
                            <section class="content">
                                <!-- Default box -->
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-6" align="left">
                                                <h4><b>@yield('title')</b></h4>
                                            </div>
                                            <div class="col-6">
                                                <div class="card-tools" align="right">
                                                    <button type="button" class="btn btn-tool btn-collapse collapsed"
                                                        data-card-widget="collapse" title="Collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-tool btn-remove"
                                                        data-card-widget="remove" title="Remove">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <style>
                                            .btn-collapse {
                                                color: #1e7e34;
                                            }

                                            .btn-collapse:visited {
                                                background-color: #1e7e34;
                                                border-color: rgb(60, 255, 0);
                                            }

                                            .btn-remove {
                                                color: #c82333;
                                            }

                                            .btn-remove:visited {
                                                background-color: #c82333;
                                                border-color: rgb(255, 0, 0);
                                            }
                                        </style>
                                    </div>
                                    <div class="card-body">
                                        @yield('content')
                                    </div>

                                    <!-- /.card-body -->

                                    <!-- /.card-footer-->
                                    <div class="card-footer">
                                        <h6><i><b>Perpustakaan</b></i></h6>
                                    </div>
                                </div>

                                <!-- /.card -->
                            </section>
                        </div>
                    </div>
                </div>
            </div>

            {{-- > FOOTER! < --}}
            @include('layouts.inc.footer')

            <!-- Custom template | don't include it in your project! -->
            <div class="custom-template">
                <div class="title">Settings</div>
                <div class="custom-content">
                    <div class="switcher">
                        <div class="switch-block">
                            <h4>Logo Header</h4>
                            <div class="btnSwitch">
                                <button type="button" class="selected changeLogoHeaderColor"
                                    data-color="dark"></button>
                                <button type="button" class="changeLogoHeaderColor" data-color="blue"></button>
                                <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
                                <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
                                <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
                                <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
                                <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
                                <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
                                <br />
                                <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
                                <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
                                <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
                                <button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
                                <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
                                <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
                                <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
                            </div>
                        </div>
                        <div class="switch-block">
                            <h4>Navbar Header</h4>
                            <div class="btnSwitch">
                                <button type="button" class="changeTopBarColor" data-color="dark"></button>
                                <button type="button" class="changeTopBarColor" data-color="blue"></button>
                                <button type="button" class="changeTopBarColor" data-color="purple"></button>
                                <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
                                <button type="button" class="changeTopBarColor" data-color="green"></button>
                                <button type="button" class="changeTopBarColor" data-color="orange"></button>
                                <button type="button" class="changeTopBarColor" data-color="red"></button>
                                <button type="button" class="selected changeTopBarColor"
                                    data-color="white"></button>
                                <br />
                                <button type="button" class="changeTopBarColor" data-color="dark2"></button>
                                <button type="button" class="changeTopBarColor" data-color="blue2"></button>
                                <button type="button" class="changeTopBarColor" data-color="purple2"></button>
                                <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
                                <button type="button" class="changeTopBarColor" data-color="green2"></button>
                                <button type="button" class="changeTopBarColor" data-color="orange2"></button>
                                <button type="button" class="changeTopBarColor" data-color="red2"></button>
                            </div>
                        </div>
                        <div class="switch-block">
                            <h4>Sidebar</h4>
                            <div class="btnSwitch">
                                <button type="button" class="changeSideBarColor" data-color="white"></button>
                                <button type="button" class="selected changeSideBarColor"
                                    data-color="dark"></button>
                                <button type="button" class="changeSideBarColor" data-color="dark2"></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-toggle">
                    <i class="icon-settings"></i>
                </div>
            </div>
        </div>
        <!-- End Custom template -->

        <!--   Core JS Files   -->
        @include('layouts.inc.js')

</body>

</html>
