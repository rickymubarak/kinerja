<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>KINERJA</title>
    <link rel="icon" href="https://simtpp.pontianakkota.go.id/assets/themes/admin/images/logo-kota-pontianak.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.5 -->
	<link rel="stylesheet" href="source/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="source/bootstrap/css/bootstrap.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="source/dist/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="source/dist/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="source/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="source/dist/css/AdminLTE.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="source/dist/css/skins/_all-skins.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="source/plugins/iCheck/flat/blue.css">
	<link rel="stylesheet" href="source/plugins/iCheck/square/blue.css">
	<!-- Morris chart -->
	<link rel="stylesheet" href="source/plugins/morris/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="source/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="source/plugins/datepicker/bootstrap-datetimepicker.min.css">
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="source/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="source/plugins/datatables/dataTables.bootstrap.css">
</head>
<body class="hold-transition skin-purple fixed sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <a href="rencana/home" class="logo">e-Peformence<span class="logo-mini"><b>KIN</b></span><span class="logo-lg">e-Peformence<b>Elektronik Peformence</b> BKPSDM Kota Pontianak</span></a>
                <nav class="navbar navbar-static-top" role="navigation">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"><span class="sr-only">Toggle navigation</span></a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src='source/dist/img/profile/administrasi.jpg' class='user-image' alt='User Image'>
                                    <span class="hidden-xs">KINERJA</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-header">
                                        <img src='source/dist/img/profile/administrasi.jpg' class='img-circle' alt='User Image'>
                                        <p>Hanya Admin yang Berhak Mengakses!</p>
                                    </li>
                                    <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-12 text-center">
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <aside class="main-sidebar">
                <section class="sidebar">
                    <ul class="sidebar-menu">
                        <li class="header">NAVIGASI</li>
                        <li class="treeview"><a href="/"><i class="fa fa-home"></i> <span>Beranda</span></a></li>
                        <li class="treeview"><a href="/rencana"><i class="fa fa-edit"></i> <span>Rencana</span></a></li>
                        <li class="treeview"><a href="#"><i class="fa fa-book"></i> <span>Validasi</span></a></li>
                        <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i> <span>Progres</span></a></li>
                    </ul>
                </section>
            </aside>
            <div class="content-wrapper">
                <section class="content">
                    @yield('content')
                </section>
            </div>

        <footer class="main-footer text-center">
                Copyright &copy; <span id="tahun"></span> e-Performence BKPSDM Kota Pontianak
                <p><span id="time"></span></p>
            </ul>
        </footer>
    </div>

    <script>
        var dt = new Date();
        document.getElementById("tahun").innerHTML = (dt.getFullYear());
        document.getElementById("time").innerHTML = (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2)) +" WIB";
    </script>

<!-- ./wrapper -->
<!-- jQuery 2.1.4 -->
<script src="source/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="source/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="source/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="source/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="source/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="source/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="source/plugins/knob/jquery.knob.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="source/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="source/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="source/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="source/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="source/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="source/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="source/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="source/plugins/datatables/dataTables.bootstrap.min.js"></script>
</body>