<?php 
  session_start();
  require_once('php/connect.php');
  if (isset($_POST['submit'])) {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    // $sql = "SELECT * FROM `president`,village WHERE `username` = '".$username."' AND president.id_village = village.id_village";
    // $result = $conn->query($sql);
    // $row = $result->fetch_assoc();

    // echo '<pre>' ,print_r($row), '</pre>';

    $sql = "SELECT * FROM `member` WHERE `username` = '".$username."' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if (!empty($row)) {
      echo 'เจอข้อมูล';
    } else {
      echo 'ไม่เจอข้อมูล';
    }

    if (!empty($row)) {
      if (password_verify($password, $row['password'])){
        echo 'พาสเวิดร์ถูกต้อง';
      } else {
        echo 'พาสเวิดร์ไม่ถูกต้อง';
      }
    } else {
      echo 'ไม่เจอข้อมูล';
    }


    if( !empty($row) && password_verify($password, $row['password'] )){
      $_SESSION['authen_id'] = $row['id'];
        $_SESSION['id_village'] = $row['id_village'];
        $_SESSION['prefix'] = $row['prefix'];
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['last_name'] = $row['last_name'];
        $_SESSION['id_card'] = $row['id_card'];
        $_SESSION['birthday'] = $row['birthday'];
        $_SESSION['age'] = $row['age'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['telephone'] = $row['telephone'];
        $_SESSION['id_line'] = $row['id_line'];


        // $_SESSION['name_village'] = $row['name_village'];

        header('Location: pages/dashboard');
        
      } else {
        echo '<script> alert ("ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง") </script>';
      }



    // if( !empty($row) && password_verify($password, $row['password'] )){
    //   $_SESSION['authen_id'] = $row['id'];
    //   $_SESSION['id_village'] = $row['id_village'];
    //   $_SESSION['prefix'] = $row['prefix'];
    //   $_SESSION['fname'] = $row['fname'];
    //   $_SESSION['lname'] = $row['lname'];
    //   $_SESSION['id_card'] = $row['id_card'];
    //   // $_SESSION['last_login'] = $row['last_login'];

    //   $update = "UPDATE `president` WHERE `id` = '".$row['id']."' ";
    //   $result_update = $conn->query($update);

    //   if ($result_update) { 
    //     header('Location: pages/dashboard');
    //   } else {
    //     echo '<script> alert("Error!!!") </script>';
    //   }
    // } else {
    //   echo '<script> alert("ชื่อผู้ใช้ และ รหัสผ่านไม่ถูกต้อง") </script>';
    // }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login Member Proposal</title>
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="dist/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="dist/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="dist/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="dist/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="dist/img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="dist/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>เข้าสู่ระบบ<br>ส่วนของการส่งหัวข้อวิจัย</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">การส่งหัวข้อวิจัย ทุนภายในมหาวิทยาลัยราชภัฏชัยภูมิ</p>

      <form action="" method="post">

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fas fa-lock"></i></span>
            </div>
            <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
        </div>

        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">ลงชื่อเข้าใช้</button>
          </div>
          <!-- /.col -->
        </div>
        
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
