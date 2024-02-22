<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIM Antrian | @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | SIM Antrian</title>
    <link rel="icon" href="https://antrian.retechapps.com/assets/img/AdminLTELogo.png">

    {{-- icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://antrian.retechapps.com/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://antrian.retechapps.com/assets/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="https://antrian.retechapps.com/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="https://antrian.retechapps.com/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
        href="https://antrian.retechapps.com/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- jQuery -->
    <script src="https://antrian.retechapps.com/assets/plugins/jquery/jquery.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @yield('content')
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="https://antrian.retechapps.com" class="brand-link">
                <img src="https://i.pinimg.com/564x/9a/45/83/9a4583dee6e55be1d07b92044e75c397.jpg"
                    alt="Logo Outlet" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"> SIM Antrian </span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="https://antrian.retechapps.com/assets/img/blank-profile.jpg"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info text-white">
                        Admin
                    </div>
                </div>

                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="/rincian" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Rincian Loket
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/user" class="nav-link ">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Data Pengguna
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/data" class="nav-link ">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Data Outlet
                                </p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Data Setting Antrian
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/tujuan" class="nav-link ">
                                        <i class="nav-icon far fa-flag"></i>
                                        <p>Data Tujuan Loket</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/loket" class="nav-link ">
                                        <i class="nav-icon far fas fa-th"></i>
                                        <p>Data Loket</p>
                                    </a>
                                </li>
                            </ul>
                        <li class="nav-item">
                            <form action="/" method="get">
                                <input type="hidden" name="_token" value="QKK1By8vjx9ZBh2SA0nBhC9izQqG2c2UBpBtUb8T">
                                <button class="btn btn-danger btn-block text-left" type="submit"
                                    onclick="return confirm('Are you sure?')">&nbsp;<i
                                        class="nav-icon fas fa-power-off"></i>Logout</button>
                            </form>
                        </li>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
    </div>
    <!-- /.content-wrapper -->


    <div class="modal fade" id="modal-contact">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hubungi Developer</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <!-- Widget: user widget style 1 -->
                        <div class="card card-widget widget-user shadow">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-info">
                                <h3 class="widget-user-username">Suhari</h3>
                                <h5 class="widget-user-desc">Leader & Developer Retech ID</h5>
                            </div>
                            <div class="widget-user-image">
                                <img class="img-circle elevation-2"
                                    src="https://antrian.retechapps.com/assets/img/suhari.jpg" alt="User Avatar">
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-6 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">Email</h5>
                                            <span class="card-text">
                                                <a href="mailto:cs.retech@gmail.com" class="text-decoration-none">
                                                    cs.retech@gmail.com
                                                </a>
                                            </span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-6 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">No. Telepon</h5>
                                            <span class="description-text">
                                                <a href="https://wa.me/6283824441192" class="text-decoration-none">
                                                    +6283824441192
                                                </a>
                                            </span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                        <!-- /.widget-user -->
                    </div>
                    <!-- /.col -->
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2022 <a href="" data-toggle="modal" data-target="#modal-contact">UPTD
                DISDUKCAPIL</a>.</strong> All rights reserved.
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- Bootstrap 4 -->
    <script src="https://antrian.retechapps.com/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="https://antrian.retechapps.com/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="https://antrian.retechapps.com/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://antrian.retechapps.com/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js">
    </script>
    <script src="https://antrian.retechapps.com/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
    </script>
    <script src="https://antrian.retechapps.com/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js">
    </script>
    <script src="https://antrian.retechapps.com/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js">
    </script>
    <script src="https://antrian.retechapps.com/assets/plugins/jszip/jszip.min.js"></script>
    <script src="https://antrian.retechapps.com/assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="https://antrian.retechapps.com/assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="https://antrian.retechapps.com/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="https://antrian.retechapps.com/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="https://antrian.retechapps.com/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://antrian.retechapps.com/assets/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->


    <script>
        $(function () {
            $('#table-user').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });

    </script>
</body>

</html>
