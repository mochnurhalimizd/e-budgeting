<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<?php
  $con = mysqli_connect("localhost","root","","ebudget");
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Budgeting</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-yellow.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>E-</b>BUDGETING</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/avatar04.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">DEV IT PAD 1</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/avatar04.png" class="img-circle" alt="User Image">

                <p>
                  DEV IT PAD 1 - Web Developer
                  <small>Member since June. 2017</small>
                </p>
              </li>
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <!-- <a href="#" class="btn btn-default btn-flat">Profile</a> -->
                </div>
                <div class="pull-right">
                  <a href="login.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/avatar04.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>DEV IT PAD</p>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <?php  $page= $_REQUEST['page']; ?>
        <!-- Optionally, you can add icons to the links -->
        <li <?php echo ($page == 'home')|| ($page == '')? "class='active'" : ""; ?>>
          <a href="?page=home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li <?php echo ($page == 'skpd') || ($page == 'bpkd_view_pegawai')|| ($page == 'bpkd_add')  || ($page == 'diskopukm_view_pegawai')|| ($page == 'diskopukm_add') || ($page == 'bpkd_view_anggaran') || ($page == 'diskopukm_view_anggaran') || ($page == 'disbudpar_view_pegawai')|| ($page == 'dispora_view_pegawai')|| ($page == 'dpmtsp_view_pegawai')|| ($page == 'lh_view_pegawai')? "class='active'" : ""; ?>>
          <a href="?page=skpd"><i class="fa fa-institution"></i> <span>SKPD</span></a></li>
        <li <?php echo ($page == 'kecamatan')|| ($page == 'parongpong_view_pegawai')|| ($page == 'parongpong_add') || ($page == 'parongpong_view_anggaran')|| ($page == 'cisarua_view_pegawai')|| ($page == 'padalarang_view_pegawai')|| ($page == 'lembang_view_pegawai') ? "class='active'" : ""; ?>>
          <a href="?page=kecamatan"><i class="glyphicon glyphicon-tower"></i> <span>Kecamatan</span></a></li>

        <li class="header">FORM MASTER NAVIGATION</li>

        <li <?php echo ($page == 'form_master_pegawai') || ($page == 'table_master_pegawai')? "class='treeview active'" : "class='treeview'"; ?>>
          <a href="#">
            <i class="fa fa-folder"></i> <span>Master Pegawai</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php echo ($page == 'form_master_pegawai') || ($page == 'table_master_pegawai')? "class='active'" : ""; ?>>   
              <a href="?page=form_master_pegawai"><i class="fa fa-circle-o text-aqua"></i> <span>Form Pegawai</span></a></li>
            <li <?php echo ($page == 'table_master_pegawai') ? "class='active'" : ""; ?>>   
              <a href="?page=table_master_pegawai"><i class="fa fa-circle-o text-aqua"></i> <span>Table Pegawai</span></a></li>
          </ul>
        </li>

        <li <?php echo ($page == 'form_master_skpd') || ($page == 'table_master_skpd')? "class='treeview active'" : "class='treeview'"; ?>>
          <a href="#">
            <i class="fa fa-folder"></i> <span>Master SKPD</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php echo ($page == 'form_master_skpd') ? "class='active'" : ""; ?>>   
              <a href="?page=form_master_skpd"><i class="fa fa-circle-o text-aqua"></i> <span>Form SKPD</span></a></li>
            <li <?php echo ($page == 'table_master_skpd') ? "class='active'" : ""; ?>>   
              <a href="?page=table_master_skpd"><i class="fa fa-circle-o text-aqua"></i> <span>Table SKPD</span></a></li>
          </ul>
        </li>

        <li <?php echo ($page == 'form_master_kecamatan') || ($page == 'table_master_kecamatan')? "class='treeview active'" : "class='treeview'"; ?>>
          <a href="#">
            <i class="fa fa-folder"></i> <span>Master Kecamatan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php echo ($page == 'form_master_kecamatan') ? "class='active'" : ""; ?>>   
              <a href="?page=form_master_kecamatan"><i class="fa fa-circle-o text-aqua"></i> <span>Form Kecamatan</span></a></li>
            <li <?php echo ($page == 'table_master_kecamatan') ? "class='active'" : ""; ?>>   
              <a href="?page=table_master_kecamatan"><i class="fa fa-circle-o text-aqua"></i> <span>Table Kecamatan</span></a></li>
          </ul>
        </li>

        <li <?php echo ($page == 'form_master_gapok_skpd') || ($page == 'table_master_gapok_skpd')? "class='treeview active'" : "class='treeview'"; ?>>
          <a href="#">
            <i class="fa fa-folder"></i> <span>Master Gapok SKPD</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php echo ($page == 'form_master_gapok_skpd') ? "class='active'" : ""; ?>>   
              <a href="?page=form_master_gapok_skpd"><i class="fa fa-circle-o text-aqua"></i> <span>Form Gapok SKPD</span></a></li>
            <li <?php echo ($page == 'table_master_gapok_skpd') ? "class='active'" : ""; ?>>   
              <a href="?page=table_master_gapok_skpd"><i class="fa fa-circle-o text-aqua"></i> <span>Table Gapok SKPD</span></a></li>
          </ul>
        </li>

        <li <?php echo ($page == 'form_master_gapok_kecamatan') || ($page == 'table_master_gapok_kecamatan')? "class='treeview active'" : "class='treeview'"; ?>>
          <a href="#">
            <i class="fa fa-folder"></i> <span>Master Gapok Kecamatan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php echo ($page == 'form_master_gapok_kecamatan') ? "class='active'" : ""; ?>>   
              <a href="?page=form_master_gapok_kecamatan"><i class="fa fa-circle-o text-aqua"></i> <span>Form Gapok Kecamatan</span></a></li>
            <li <?php echo ($page == 'table_master_gapok_kecamatan') ? "class='active'" : ""; ?>>   
              <a href="?page=table_master_gapok_kecamatan"><i class="fa fa-circle-o text-aqua"></i> <span>Table Gapok Kecamatan</span></a></li>
          </ul>
        </li>

        <li <?php echo ($page == 'form_master_dtl_tunjangan') || ($page == 'table_master_dtl_tunjangan')? "class='treeview active'" : "class='treeview'"; ?>>
          <a href="#">
            <i class="fa fa-folder"></i> <span>Master Detail Tunjangan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php echo ($page == 'form_master_dtl_tunjangan') ? "class='active'" : ""; ?>>   
              <a href="?page=form_master_dtl_tunjangan"><i class="fa fa-circle-o text-aqua"></i> <span>Form Detail Tunjangan</span></a></li>
            <li <?php echo ($page == 'table_master_dtl_tunjangan') ? "class='active'" : ""; ?>>   
              <a href="?page=table_master_dtl_tunjangan"><i class="fa fa-circle-o text-aqua"></i> <span>Table Detail Tunjangan</span></a></li>
          </ul>
        </li>

       <!--  <li <?php echo ($page == 'form_master_golongan') || ($page == 'table_master_golongan')? "class='treeview active'" : "class='treeview'"; ?>>
          <a href="#">
            <i class="fa fa-folder"></i> <span>Master Golongan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php echo ($page == 'form_master_golongan') ? "class='active'" : ""; ?>>   
              <a href="?page=form_master_golongan"><i class="fa fa-circle-o text-aqua"></i> <span>Form Golongan</span></a></li>
            <li <?php echo ($page == 'table_master_golongan') ? "class='active'" : ""; ?>>   
              <a href="?page=table_master_golongan"><i class="fa fa-circle-o text-aqua"></i> <span>Table Golongan</span></a></li>
          </ul>
        </li>

        <li <?php echo ($page == 'form_master_eselon') || ($page == 'table_master_eselon')? "class='treeview active'" : "class='treeview'"; ?>>
          <a href="#">
            <i class="fa fa-folder"></i> <span>Master Eselon</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php echo ($page == 'form_master_eselon') ? "class='active'" : ""; ?>>   
              <a href="?page=form_master_eselon"><i class="fa fa-circle-o text-aqua"></i> <span>Form Eselon</span></a></li>
            <li <?php echo ($page == 'table_master_eselon') ? "class='active'" : ""; ?>>   
              <a href="?page=table_master_eselon"><i class="fa fa-circle-o text-aqua"></i> <span>Table Eselon</span></a></li>
          </ul>
        </li> -->

        <li <?php echo ($page == 'form_master_tunjangan') || ($page == 'table_master_tunjangan')? "class='treeview active'" : "class='treeview'"; ?>>
          <a href="#">
            <i class="fa fa-folder"></i> <span>Master Tunjangan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php echo ($page == 'form_master_tunjangan') ? "class='active'" : ""; ?>>   
              <a href="?page=form_master_tunjangan"><i class="fa fa-circle-o text-aqua"></i> <span>Form Tunjangan</span></a></li>
            <li <?php echo ($page == 'table_master_tunjangan') ? "class='active'" : ""; ?>>   
              <a href="?page=table_master_tunjangan"><i class="fa fa-circle-o text-aqua"></i> <span>Table Tunjangan</span></a></li>
          </ul>
        </li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <?php include 'switch_page.php'; ?>

  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      <b>E-Budgeting</b> Ver 0.0.3 Beta
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="#">DEV IT PAD 1</a>.</strong> All rights reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- TabletoExcel -->
<script src="dist/js/tableToExcel.js"></script>
<!-- bootstrap datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    $('#skpd-table').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : false
    })
    $('#kecamatan-table').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : false
    })
    $('#bpkd-table').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
    $('#bpkd-table2').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : false
    })
    
  })
</script>

</body>
</html>