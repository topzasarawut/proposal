<?php include_once('../authen.php') ?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>President Management</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../../dist/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../dist/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../dist/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="../../dist/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="../../dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../../dist/img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="../../dist/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
  
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar & Main Sidebar Container -->
  <?php include_once('../includes/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>President Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="../president">President Management</a></li>
              <li class="breadcrumb-item active">Create Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
      <?php
            if(@addslashes($_GET['check']=="complete")){
        ?>
            <div class="alert alert-success">เพิ่มข้อมูลสำเร็จ!</div>
        <?php
          }
      ?>

      <?php
          if(@addslashes($_GET['check']=="error")){
      ?>
          <div class="alert alert-danger">เพิ่มข้อมูลไม่สำเร็จ!</div>
      <?php
          }
      ?>
        <div class="card-header">
        <h3 class="card-title">Create Data</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="create.php" method="post">
          <div class="card-body">

            <div class="form-group">
              <label>คำนำหน้า</label>
              <select class="form-control" required name="prefix">
                <option value="" disabled selected>คำนำหน้า</option>
                <option value="อาจารย์">อาจารย์</option>
                <option value="อาจารย์ ดร.">อาจารย์ ดร.</option>
                <option value="ผศ.">ผศ.</option>
                <option value="ผศ.ดร.">ผศ.ดร.</option>
                <option value="รศ.">รศ.</option>
                <option value="รศ.ดร.">รศ.ดร.</option>
                <option value="ศ.">ศ.</option>
                <option value="ศ.ดร.">ศ.ดร.</option>
              </select>
            </div>

            <div class="form-group">
              <label for="first_name">ชื่อ</label>
              <input type="text" class="form-control" id="first_name" name="first_name" placeholder="ชื่อ" required>
            </div>

            <div class="form-group">
              <label for="last_name">สกุล</label>
              <input type="text" class="form-control" id="last_name" name="last_name" placeholder="สกุล" required>
            </div>

            <div class="form-group">
              <label for="id_card">เลขบัตรประชาชน</label>
              <input type="text" class="form-control" id="id_card" name="id_card" placeholder="เลขบัตรประชาชน" required>
            </div>

            <div class="form-group">
              <label for="birthday">birthday</label>
              <input type="text" class="form-control" id="birthday" name="birthday" placeholder="birthday" required>
            </div>

            <div class="form-group">
              <label for="age">age</label>
              <input type="text" class="form-control" id="age" name="age" placeholder="age" required>
            </div>

            <div class="form-group">
              <label for="email">email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="email" required>
            </div>

            <div class="form-group">
              <label for="telephone">telephone</label>
              <input type="text" class="form-control" id="telephone" name="telephone" placeholder="telephone" required>
            </div>
            
            <div class="form-group">
              <label for="username">username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
            </div>

            <div class="form-group">
              <label for="password">password</label>
              <input type="text" class="form-control" id="password" name="password" placeholder="password" required>
            </div>

          </div>
          <div class="card-footer">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  <?php include_once('../includes/footer.php') ?>
  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- DataTables -->
<script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- CK Editor -->
<script src="../../plugins/ckeditor/ckeditor.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/select2.full.min.js"></script>

<script>
  $(function () {
    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>
</body>
</html>
