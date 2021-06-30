<?php include_once('../authen.php') ?>  
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>infodaily Management</title>
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
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
            <!-- <h1>เพิ่มสมาชิกกองทุนฯ</h1> -->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="../dashboard">หน้าแรก</a></li>
              <li class="breadcrumb-item"><a href="../member">หน้าจัดการสมาชิก กองทุนหมู่บ้าน</a></li> -->
              <!-- <li class="breadcrumb-item active">เพิ่ม สมาชิกกองทุนฯ</li> -->
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-primary"> 
        <div class="card-header">
        <h3 class="card-title">เพิ่มกรอกข้อมูลประจำวัน</h3>
        
                <!-- ดึง รหัสกองทุน ชื่อกองทุนหมู่บ้านและชุมชนเมือง มาแสดง--> 
                <!-- <div class="form-group">
                    <label for="id_village">ชื่อกองทุนหมู่บ้านและชุมชนเมือง</label>
                    <?php echo $_SESSION['name_village']; ?><br>
                    <label for="id_village">รหัสกองทุน</label>
                    <?php echo $_SESSION['id_village']; ?>  
                    <input type="hidden"  class="form-control" name="id_village" id="id_village" placeholder="<?php echo $_SESSION['id_village']."-".$_SESSION['name_village']; ?>" value = "<?php echo $_SESSION['id_village']; ?>" required>
                </div> -->
        </div>
        <!-- <h5>กรุณากรอกข้อมูล ประธาน กทบ. ด้วยคะ</h5> -->
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="create.php" method="post"> 
          <div class="card-body">
          <div class="form-group">
              <label for="id_card">เลขบัตรประชาชน</label>
              <?php echo $_SESSION['id_card']; ?>
              <label for="id_card">ชื่อ-สกุล</label>
              <?php echo $_SESSION['first_name']."  ".$_SESSION['last_name'];?>
              <input type="hidden"  class="form-control" name="id_card" id="id_card" placeholder="<?php echo $_SESSION['id_card']."-".$_SESSION['first_name']."  ".$_SESSION['last_name']; ?>" value = "<?php echo $_SESSION['id_card']; ?>" required>
            </div>
           
            <!-- <div class="form-group">
              <label for="id_card">เลขบัตรประชาชน</label>
              <input type="text" class="form-control" name="id_card" id="id_card" placeholder="เลขบัตรประชาชน" required>
            </div> -->

            <!-- Start Input Date -->
          <div class="form-group col-md-4">
            <label for="date">กรุณาเลือกวันเดือนปี ที่ท่านต้องการกรอกข้อมูลประจำวัน</label>
            <input type="date" class="form-control" id="date" name="date" required/>
            <small class="form-text text-muted">กรุณาเลือก วันเดือนปี ที่ท่านต้องการกรอกข้อมูลประจำวัน</small>
          </div>
          <!-- End Input Date -->


            <div class="form-group">
                <label for="work">สิ่งที่ทำในวันนี้</label>
                <input type="text" class="form-control" name="work" id="work" placeholder="สิ่งที่ทำในวันนี้" required>
            </div>
            <div class="form-group">
                <label for="location">สถานที่อยู่ที่ใด</label>
                <input type="text" class="form-control" name="location" id="location" placeholder="สถานที่อยู่ที่ใด" required>
            </div>
            <!-- <div class="form-group">
                <label for="attachment">ไฟล์แนบ</label>
                <input type="text" class="form-control" name="attachment" id="attachment" placeholder="ไฟล์แนบ" required>
            </div> -->

            <div class="form-group">
                <label for="attachment">ไฟล์แนบ</label>
                    <input type="file" class="form-control" id="attachment" name="attachment" onchange="readURL(this)">
            </div>

            <div class="form-group">
                <label for="fileUpload">อัพโหลดรูปภาพ</label>
                    <input type="file" class="form-control" id="fileUpload" name="fileUpload" onchange="readURL(this)">
            </div>

            <!-- <div class="form-group">
                <label for="status">สถาณะ</label>
                <input type="text" class="form-control" name="status" id="status" placeholder="สถาณะ" required>
            </div> -->

            <div class="form-group">
              <label>เลือกสถาณะ</label>
              <select class="form-control" required name="status">
                <option value="" disabled selected>เลือกสถาณะ</option>
                <option value="ส่งตรวจสอบ">ส่งตรวจสอบ</option>
                <!-- <option value="checked">Admin</option> -->
              </select>
            </div>
            
            
          </div>
          <div class="card-footer">
              <button type="submit" name="submit" class="btn btn-primary">ส่ง</button> 
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
