<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISTEM BASIS DATA</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('/') }}assets/startbootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('/') }}assets/startbootstrap/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="{{ asset('/') }}assets/dist/summernote-0.8.18-dist/summernote.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/dist/summernote-0.8.18-dist/summernote-lite.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- bg-gradient-primary -->
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion"  style="background-color: #012F8B;" id="accordionSidebar">

           
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index1.html">
                <img src="{{ asset('/') }}img/kemendikbud.png" class="rounded-circle" alt="User Image" style="width: 20%; height: 170%;">               
                <div class="sidebar-brand-text mx-3">UNIVERSITAS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            @include('layout.navbar')

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>                 
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">                   

                    @yield('content')
                    <br/>

                </div>               
                 
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; owner <b>lingga qolbu wasih</b> - 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

   
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('/') }}assets/startbootstrap/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('/') }}assets/startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('/') }}assets/startbootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('/') }}assets/startbootstrap/js/sb-admin-2.min.js"></script>

    <!-- Summernote JS - CDN Link -->
    <script src="{{ asset('/') }}assets/dist/summernote-0.8.18-dist/summernote-lite.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#inputRingkasMou").summernote();
            $("#inputDeskripsiMou").summernote();
            $("#misiprogram").summernote();
            $("#targetprogram").summernote();
            $("#alasanmitra").summernote();
            $("#prinsipkerjasama").summernote();
            $("#manfaatkerjasama").summernote();
            $("#tantanganpelaksanaan").summernote();
            $("#kepemilikanhakcipta").summernote();
            $("#mekanismeresipokal").summernote();
            $("#keberlanjutankerjasama").summernote();
            $("#hakdankewajiban").summernote();
            $('.dropdown-toggle').dropdown();
        });
    </script>
    <!-- //Summernote JS - CDN Link -->

</body>

</html>