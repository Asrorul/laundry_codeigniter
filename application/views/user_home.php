<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Beranda | Laundry</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url()."asset/bootstrap/css/bootstrap.min.css"; ?>" type="text/css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."asset/dist/css/AdminLTE.min.css"; ?>" type="text/css" />
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()."asset/dist/css/skins/_all-skins.min.css"; ?>" type="text/css"/>
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()."asset/plugins/iCheck/flat/blue.css"; ?>" type="text/css" />
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url()."asset/plugins/morris/morris.css"; ?>" type="text/css" />
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()."asset/plugins/jvectormap/jquery-jvectormap-1.2.2.css"; ?>"type = "text/css" />
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()."asset/plugins/datepicker/datepicker3.css"; ?>" type="text/css" />
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()."asset/plugins/daterangepicker/daterangepicker.css"; ?>" type="text/css" />
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()."asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"; ?>"type = "text/css" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Br</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Beranda</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">Selamat Datang, <?php echo $this->session->userdata('login', 11); ?></span>
            </a>
          </li>

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="<?php echo site_url('hal_user/'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
          </li>
        <li class="treeview">
          <a href="<?php echo site_url('editdatadiri/'); ?>">
            <i class="fa fa-edit"></i> <span>Ubah data diri</span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo site_url('do_logout/'); ?>">
            <i class="fa fa-share"></i> <span>Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
    <div class="row">
      <div class="col-xs-12">
      <div class="box">
            <div class="box-header">
              <center><h2>Pesan Layanan Jemput Laundry</h2></center>
            </div>
           <br><br>
        <form action="" method="post">
            <div class="form-group">
                  <label style="margin-left: 5px">Pilih Pewangi yang diinginkan</label>
                  <select class="form-control" name="pewangi">
                    <option>Pewangi 1</option>
                    <option>Pewangi 2</option>
                    <option>Pewangi 3</option>
                    <option>Pewangi 4</option>
                    <option>Pewangi 5</option>
                  </select>
                </div>
           <center><button type="submit" name="pesan" class="btn btn-info ">Pesan Sekarang</button></center>
        </form>
      <br>
      </div>
      </div>
    </div>
    </section>
    
    <!-- Main content -->
    <section class="content">
    <div class="row">
      <div class="col-xs-12">
      <div class="box">
            <div class="box-header">
              <center><h2 >Riwayat dan Status transaksi</h2></center><br>
            </div>
            <!-- /.box-header -->
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Detail transaksi anda</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                     Kode Transaksi 
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                      Berat Cucian
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                      Pewangi
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                      Harga Total 
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                      Status Cucian
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                      Tanggal Pesan dan jam Pesan
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                      Opsi
                  </th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; foreach($customer->result() as $list){ ?>
                <tr role="row" class="odd">
                  <td class="sorting_1"><?php echo $list->id_transaksi ?></td>
                  <td><?php echo $list->berat_cucian ?></td>
                  <td><?php echo $list->pewangi ?></td>
                  <td><?php echo $list->harga ?></td>
                  <td><?php if($list->status_cucian == 0){ 
                    echo "Menunggu Penjemputan cucian"; 
                    } elseif($list->status_cucian == 1){
                      echo "Sedang Dalam Proses";
                    } elseif($list->status_cucian == 2){
                          echo "Transaksi Selesai";
                    } ?></td>
                  <td><?php echo $list->tanggal_pesan, " pada pukul ". $list->jam_pesan ?></td>
                  <?php if($list->status_cucian == '0'){ ?>
                  <td><a href=" <?= site_url("hapustransaksi/").$list->id_transaksi ?>" class="btn btn-primary" >Batalkan Pesanan</a></td>
                  <?php } else{ ?>
                  <td>Pesanan Sudah Diproses</td>
                  <?php } ?>
                </tr>
                <?php } ?>
                </tbody>
                
                
                
            
                <tfoot>
                
                </tfoot>
              </table></div></div>

              <div class="row">
                <div class="col-sm-7">
                  <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                    <ul class="pagination">
                      <li class="paginate_button previous disabled" id="example2_previous">
                        <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous
                        </a>
                      </li>
                      <li class="paginate_button active">
                        <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a>
                      </li>
                      <li class="paginate_button next disabled" id="example2_next">
                        <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">Next</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

          
          </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()."asset/plugins/jQuery/jquery-2.2.3.min.js"; ?>" ></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()."asset/bootstrap/js/bootstrap.min.js"; ?>" ></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url()."asset/plugins/morris/morris.min.js"; ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()."asset/plugins/sparkline/jquery.sparkline.min.js"; ?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url()."asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"; ?>" ></script>
<script src="<?php echo base_url()."asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"; ?>" ></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()."asset/plugins/knob/jquery.knob.js"; ?>"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url()."asset/plugins/daterangepicker/daterangepicker.js"; ?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url()."asset/plugins/datepicker/bootstrap-datepicker.js"; ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()."asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"; ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()."asset/plugins/slimScroll/jquery.slimscroll.min.js"; ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url()."asset/plugins/fastclick/fastclick.js"; ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."asset/dist/js/app.min.js"; ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()."asset/dist/js/pages/dashboard.js"; ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()."asset/dist/js/demo.js"; ?>"></script>
</body>
</html>
