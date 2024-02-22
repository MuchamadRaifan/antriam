<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rincian Loket | SIM Antrian</title>
    {{-- icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="icon" href="https://antrian.retechapps.com/storage/outlet/UPT_WILAYAH_1_KOTA_PALU_1708412586.jpeg">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://antrian.retechapps.com/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://antrian.retechapps.com/assets/css/adminlte.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet"
        href="https://antrian.retechapps.com/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="https://antrian.retechapps.com/assets/plugins/toastr/toastr.min.css">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="https://antrian.retechapps.com/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="https://antrian.retechapps.com/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
        href="https://antrian.retechapps.com/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- jQuery -->
    <script src="https://antrian.retechapps.com/assets/plugins/jquery/jquery.min.js"></script>

    <!-- Flex Align Center Horizontal & Custom Color for Navbar &-->
    <style>
        .flex-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .footer {
            position: fixed;
            bottom: 0px;
            right: 0px;
            width: 100%;
            z-index: 1000;
            padding: 2px;
            margin: auto;
            text-align: center;
            float: none;
            box-shadow: 0px -2px 10px #c0c0c0;
            background-color: var(--primary);
            color: #fff;
        }

        /* .logo1 {
      background-color: #fff;
      border-style: solid;
      border-width: thin;
    } */

    </style>

</head>

<body class="hold-transition sidebar-mini" onload="startTime()">
    <div class="wrapper hw-100">
        <!-- Navbar -->
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand navbar-primary"
                    style="background-color: #56cdf5!important; color: #ffffff!important;">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item d-none d-sm-inline-block">
                            <div class="flex-container">


                                <img src="assets/img/rumahsakit.png" alt="Logo" height="150" class="p-2">
                                <div class="nav-link align-items-center">
                                    <h1 class="display-4">
                                        <b>ANTRIAN RUMAH SAKIT WILAYAH BOGOR</b>
                                    </h1>
                                    <h5></h5>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <!-- Right navbar links -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item d-none d-sm-inline-block">
                            <div class="nav-link">
                                <h4>
                                    <b>
                                        <div id="timer"></div>
                                    </b>
                                </h4>
                            </div>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                                <h2><i class="fas fa-expand-arrows-alt" style="color: #ffffff"></i></h2>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="container">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row mt-5">

                        <div class="col-md-7">
                            <!-- Line chart -->
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="far fa-star"></i>
                                        Antrian Aktif
                                    </h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table id="table-antrian-aktif" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nomor Antrian</th>
                                                <th>Nomer Loket</th>
                                                <th>Jenis Transaksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body-->
                            </div>
                            <!-- /.card -->
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="far fa-star"></i>
                                        Jumlah Antrian Belum Dipanggil
                                    </h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table id="table-antrian" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Jenis Transaksi</th>
                                                <th>Kode Antrian</th>
                                                <th>Jumlah Antrian</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body-->
                            </div>
                            <!-- /.card -->

                        </div>
                        <!-- /.col -->

                        <div class="col-md-5">
                            <!-- Bar chart -->
                            <div class="card card-primary card-outline" id="setOverlay">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="far fa-check-square"></i>
                                        Action
                                    </h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <button class="btn btn-primary " type="button" id="panggil" data-users="1">Panggil
                                        Loket 1 (Enter)</button>
                                    <button class="btn btn-success " type="button" id="panggil-ulang"
                                        data-users="1">Ulangi (F9)</button>
                                </div>
                                <!-- /.card-body-->
                            </div>
                            <!-- /.card -->

                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="far fa-user"></i>
                                        Detail Loket
                                    </h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row justify-content-center">

                                        <img src="https://antrian.retechapps.com/storage/foto/admin123_1701010208.jpg"
                                            alt="" class="img-thumbnail" width="100">
                                    </div>

                                    <h3 class="profile-username text-center">Harris</h3>

                                    <p class="text-muted text-center">admin123</p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Nomor Loket</b> <a class="float-right">1</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Jenis Loket</b> <a class="float-right">Kode (A) - Layanan Pendaftaran</a>
                                        </li>
                                    </ul>

                                    <a href="/dashboard" class="btn btn-success btn-block mb-2">Kembali ke Menu</a>
                                    <a href="" class="btn btn-secondary btn-block mb-2">Upload Foto Profil</a>
                                    <a href="" class="btn btn-warning btn-block mb-2">Ubah Password</a>
                                    <form action="/" method="">
                                        <input type="hidden" name="_token"
                                            value="ESb4mvNlVBa57Dk7ZpOBLQRofZP0XydWePddRZL6"> <button
                                            class="btn btn-danger btn-block" type="submit"
                                            onclick="return confirm('Are you sure?')">Logout</button>
                                    </form>
                                </div>
                                <!-- /.card-body-->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- /.container -->

    <div class="footer" style="background-color: #56cdf5!important; color: #ffffff!important;">
        <marquee>SELAMAT DATANG DI UPT WILAYAH 1 KOTA PALU ( SAMSAT PALU )
            SENIN- JUMAT : 08.00- 15.00
            SABTU : 08.00- 12.00
            PART OF : BAPENDAPROVSULTENG
            INOVASI TERBARU
            &quot; SAMSAT DRIVE THRU&quot;
            &quot; SAMSAT SONGGOLANGI &quot;</marquee>
    </div>
    </div>
    <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->

    <!-- Bootstrap 4 -->
    <script src="https://antrian.retechapps.com/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://antrian.retechapps.com/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="https://antrian.retechapps.com/assets/plugins/toastr/toastr.min.js"></script>
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

    <!-- Recta JS for print antrian -->
    <script src="https://cdn.jsdelivr.net/npm/recta/dist/recta.js"></script>

    <script type="text/javascript">
        function startTime() {
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1;
            var yyyy = today.getFullYear();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);

            if (dd < 10) {
                dd = '0' + dd;
            }
            document.getElementById('timer').innerHTML =
                "Tanggal: " + dd + "/" + mm + "/" + yyyy + " | " + h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            }; // add zero in front of numbers < 10
            return i;
        }

    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            tableAntrianAktifRefresh();
            var refreshAntrianAktifId = setInterval(tableAntrianAktifRefresh, 5000);
            tableAntrianRefresh();
            var refreshAntrianId = setInterval(tableAntrianRefresh, 5000);

            $(document).keyup(function (event) {
                if (event.keyCode === 13) {
                    $("#panggil").click();
                }
            });

            $(document).keyup(function (event) {
                if (event.keyCode === 120) {
                    panggilUlang();
                }
            });

            $('#panggil').on('click', function () {
                var id_user = $('#panggil').data('users');

                $.ajax({
                    url: "https://antrian.retechapps.com/panggil-loket",
                    method: 'POST',
                    data: {
                        _token: 'ESb4mvNlVBa57Dk7ZpOBLQRofZP0XydWePddRZL6',
                        user_id: id_user
                    },
                    dataType: 'json',
                    success: function (data) {
                        var nomor_loket = data['nomor_loket'];
                        var antrian_sebelumnya = data['antrian_sebelumnya'];
                        var antrian_panggil = data['antrian_panggil'];

                        panggilUlang();
                        tableAntrianAktifRefresh();
                        tableAntrianRefresh();
                    }
                });
            });

            $('#panggil-ulang').on('click', function () {
                panggilUlang();
            });

            function panggilUlang() {
                $('#setOverlay').append(
                    '<div class="overlay" id="overlay"><i class="fas fa-3x fa-sync-alt fa-spin"></i></div>');
                var id_user = $('#panggil-ulang').data('users');

                $.ajax({
                    url: "https://antrian.retechapps.com/ambil-detail-antrian",
                    method: 'POST',
                    data: {
                        _token: 'ESb4mvNlVBa57Dk7ZpOBLQRofZP0XydWePddRZL6',
                        user_id: id_user
                    },
                    dataType: 'json',
                    success: function (data) {
                        var nomor_loket = data['nomor_loket'];
                        var nomor_antrian = data['nomor_antrian'];

                        actionPanggil(nomor_antrian);

                        Toast.fire({
                            icon: 'success',
                            title: 'Berhasil memanggil No. antrian ' + nomor_antrian +
                                ' menuju loket ' + nomor_loket,
                        })
                    }
                }).fail(function () {
                    Toast.fire({
                        icon: 'error',
                        title: 'No. antrian gagal dipanggil! Silahkan cek koneksi database aplikasi.',
                    })
                }).always(function () {
                    $("#overlay").remove();
                });
            }

            function tableAntrianAktifRefresh() {
                $('#table-antrian-aktif').DataTable({
                    serverSide: false,
                    ajax: {
                        url: "https://antrian.retechapps.com/tabel-antrian-aktif",
                        type: 'GET',
                        DataType: 'JSON'
                    },
                    order: [
                        [1, 'asc']
                    ],
                    // scrollX: true,
                    processing: true,
                    columns: [{
                            data: 'nomor_antrian'
                        },
                        {
                            data: 'nomor_loket'
                        },
                        {
                            data: 'keterangan'
                        }
                    ],
                    "responsive": true,
                    "bDestroy": true
                });
            }

            function tableAntrianRefresh() {
                $('#table-antrian').DataTable({
                    serverSide: false,
                    ajax: {
                        url: "https://antrian.retechapps.com/tabel-antrian",
                        type: 'GET',
                        DataType: 'JSON'
                    },
                    order: [
                        [1, 'asc']
                    ],
                    // scrollX: true,
                    processing: true,
                    columns: [{
                            data: 'keterangan'
                        },
                        {
                            data: 'kode'
                        },
                        {
                            data: 'jumlah_antrian'
                        }
                    ],
                    "responsive": true,
                    "bDestroy": true
                });
            }

            function actionPanggil(nomor_antrian) {
                $.ajax({
                    url: "https://antrian.retechapps.com/action",
                    method: 'POST',
                    data: {
                        _token: 'ESb4mvNlVBa57Dk7ZpOBLQRofZP0XydWePddRZL6',
                        nomor_antrian: nomor_antrian
                    },
                    dataType: 'json',
                    success: function (data) {
                        var status_code = data['status_code'];
                    }
                });
            }
        });

    </script>

</body>

</html>
