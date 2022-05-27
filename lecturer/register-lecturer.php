<?php
    require_once('php/connect.php'); /*=== ดึงไฟล์เชื่อมต่อ Database เข้ามาใช้งานผ่านโฟลเดอร์ php ===*/
    /**
     * ตรวจสอบเงื่อนไขที่ว่า ตัวแปร $_POST['submit'] ได้ถูกกำหนดขึ้นมาหรือไม่
     */
    if(isset($_POST['submit'])){
        $username = $conn->real_escape_string($_POST['username']);
        $password = $conn->real_escape_string($_POST['password']);
        $passwordHashed = password_hash($password, PASSWORD_DEFAULT);       
        /**
         * สร้างตัวแปร $sql เพื่อเก็บคำสั่ง Sql
         * จากนั้นให้ใช้คำสั่ง $conn->query($sql) เพื่อที่จะประมาณผลการทำงานของคำสั่ง sql
         */
        $sqlUser = "SELECT * FROM `lecturer` WHERE `username` = '".$username."'";
        $checkUser = $conn->query($sqlUser);
        if( !$checkUser->num_rows ) {
            $sql = "INSERT INTO `lecturer` (`username`, `password`,`prefix`, `first_name`, `last_name`, `branch`, `email`, `telephone`, `created_at`) 
            VALUES ('".$username."', 
                    '".$passwordHashed."', 
                    '".$_POST['prefix']."', 
                    '".$_POST['first_name']."', 
                    '".$_POST['last_name']."', 
                    '".$_POST['branch']."', 
                    '".$_POST['email']."', 
                    '".$_POST['telephone']."', 
                    '".date("Y-m-d H:i:s")."')";
            // echo $sql;
            // exit;
            $result = $conn->query($sql);
            /**
             * ตรวจสอบเงื่อนไขที่ว่าการประมวณผลคำสั่งนี่สำเร็จหรือไม่
             */
            if($result){
                echo '<script> alert("สมัครสมาชิกสำเร็จ")</script>';
                header('Refresh:0; url=login.php');
            }else{
                echo '<script> alert("ระบบผิดพลาด โปรดติดต่อผู้ดูแลระบบ")</script>';
                header('Refresh:0; url=index.php');
            }
        } else {
            echo '<script> alert("ชื่อผู้ใช้นี้ ถูกใช้ไปเรียบร้อยแล้ว")</script>';
            header('Refresh:0; url=register-student.php');
        }
       
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" >
    <title>สมัครสมาชิก</title>
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
<body>
    <div class="d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 mx-auto mt-5 col-lg-12">
                    <div class="card border-0 shadow">
                        <!-- action ด้วยค่าว่าง "" คือการส่ง Form นี้เข้าสู่หน้าปัจจุบัน -->
                        <!-- method POST คือการส่ง Form ให้อยู่ในรูปของ POST เพื่อส่งข้อมูล Form ในพื้นหลังการทำงาน -->
                        <form action="" method="POST">
                            <h4 class="card-header text-center">กรอกข้อมูลเพื่อสมัครสมาชิก<br>ระบบฝึกประสบการณ์วิชาชีพครู(สำหรับนักศึกษา)</h4>
                            <div class="card-body px-3">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                        <label for="prefix" class="col-form-label">คำนำหน้าชื่อ:</label>
                                        <input type="text" class="form-control" id="prefix" name="prefix" placeholder="คำนำหน้าชื่อ" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="first_name" class="col-form-label">ชื่อจริง:</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="ชื่อจริง" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name" class="col-form-label">นามสกุล:</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="นามสกุล" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">อีเมลล์:</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="อีเมลล์" required>
                                </div>

                                <div class="form-row">
                                    <!-- <div class="form-group col-md-6">
                                        <label for="id_student" class="col-form-label">รหัสนักศึกษา:</label>
                                        <input type="text" class="form-control" id="id_student" name="id_student" placeholder="รหัสนักศึกษา" required>
                                    </div> -->
                                    <div class="form-group col-md-6">
                                        <label for="telephone" class="col-form-label">หมายเลขโทรศัพท์:</label>
                                        <input type="text" class="form-control" id="telephone" name="telephone" placeholder="หมายเลขโทรศัพท์" required>
                                    </div>
                                </div>

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

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="username" class="col-form-label">ชื่อผู้ใช้งาน(รหัสประชาชน 13 หลัก):</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="รหัสประชาชน 13 หลัก" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password" class="col-form-label">รหัสผ่าน:</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="รหัสผ่าน" required>
                                    </div>
                                </div>
                                <div class="text-center py-3">
                                    <input type="submit" name="submit" class="btn btn-primary btn-block mx-auto w-75" value="สมัครสมาชิก">
                                    <a href="login.php">กลับหน้าหลัก</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>