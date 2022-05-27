<?php 
    include_once('../authen.php');
    // include('../../php/connect.php');

    $sql = "SELECT * FROM `student`";
    $result = $conn->query($sql);
    // $row = $result->fetch_assoc();

    // echo $row['prefix'];
    // echo $row['first_name'];
    // echo $row['last_name'];
    // echo $row['id_student'];
    // echo $row['email'];
    // exit;
    // $aaa = $_SESSION['branch']; 
    // echo $aaa;
    // exit; 
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>school-data</title>
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
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <?php include_once('../includes/sidebar.php') ?>  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ข้อมูลโรงเรียน</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- <div class="row">
          <div class="col-lg-6 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>0</h3>
                <p>จำนวนการยื่นข้อทุนวิจัย</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-6 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>0</h3>
                <p>จำนวนการยื่นข้อทุนวิจัย</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div> -->
 
        <!-- Main content -->
    <section class="content">

           <!-- Default box -->
           <div class="card">
            <div class="card-header">
              <h3 class="card-title d-inline-block">ค้นหา ข้อมูลโรงเรียน</h3>
              <div class="form-group">
                  <label>สาขาวิชา</label>
                  <select class="form-control" required name="branch">
                      <option value="" disabled selected>เลือก สาขาวิชา</option>
                      <option value="สาขาวิชาการศึกษาปฐมวัย">สาขาวิชาการศึกษาปฐมวัย</option>
                      <option value="สาขาวิชาคณิตศาสตร์">สาขาวิชาคณิตศาสตร์</option>
                      <option value="สาขาวิชาคอมพิวเตอร์ศึกษา">สาขาวิชาคอมพิวเตอร์ศึกษา</option>
                      <option value="สาขาวิชาพลศึกษา">สาขาวิชาพลศึกษา</option>
                      <option value="สาขาวิชาภาษาไทย">สาขาวิชาภาษาไทย</option>
                      <option value="สาขาวิชาภาษาอังกฤษ">สาขาวิชาภาษาอังกฤษ</option>
                      <option value="สาขาวิชาวิทยาศาสตร์ทั่วไป">สาขาวิชาวิทยาศาสตร์ทั่วไป</option>
                      <option value="สาขาวิชาสังคมศึกษา">สาขาวิชาสังคมศึกษา</option>
                  </select>
              </div>
              <a href="#" class="btn btn-primary float-right ">ค้นหา</a href="">
            </div>
          </div>
          <!-- /.card -->

          <?php
            $sql = "SELECT * FROM `student` WHERE branch = '' ";
            $result = $conn->query($sql);
          ?>

          <!-- Default box -->
          <div class="card">
            <!-- <div class="card-header">
              <h3 class="card-title d-inline-block">Project Eresearch List</h3>
              <a href="form-create.php" class="btn btn-primary float-right ">Add Project Eresearch +</a href="">
            </div> -->
            <!-- /.card-header -->
            <div class="card-body">
              <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <!-- <th>No.</th> -->
                  <!-- <th>คำนำหน้า</th>
                  <th>ชื่อ</th>
                  <th>สกุล</th>
                  <th>รหัสนักศึกษา</th>
                  <th>รหัสบัตรประชาชน</th>
                  <th>สาขาวิชา</th>
                  <th>อีเมล</th>
                  <th>เบอร์โทรศัทพ์</th>
                  <th>Edit</th> -->
                </tr>
                </thead>
                <tbody>
                <?php 
                $num = 0;
                while ($row = $result->fetch_assoc()) {
                  $num++;
                  ?>
                  <tr>
                    <!-- <td><?php echo $num; ?></td> -->
                    <td><?php echo $row['prefix']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['id_student']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['branch']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['telephone']; ?></td>
                    <td>
                      <!-- <a href="form-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning text-white">
                        <i class="fas fa-edit"></i> edit
                      </a>  -->
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table> 
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
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

  function deleteItem (id) { 
    if( confirm('Are you sure, you want to delete this item?') == true){
      window.location=`delete.php?id=${id}`;
      //window.location='delete.php?id='+id;
    }
  };

</script>


</body>
</html>
