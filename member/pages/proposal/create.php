<?php include_once('../authen.php') ?> 
<?php
if (isset($_POST['submit'])) {
    // $sql_check_date = "SELECT * FROM `infodaily` WHERE `date` = '" . $_POST['date'] . "' ";
    // $check_date = $conn->query($sql_check_date);
    // if (!$check_date->num_rows) {
        // $hashed = password_hash($_POST['password'], PASSWORD_DEFAULT); 
        
        $sql = "INSERT INTO `proposal`(`id_card`, `topic`, `detail`, `cash`, `upload_pdf`, `upload_word`)  
                    VALUES ('" . $_POST['id_card'] . "',
                            '" . $_POST['topic'] . "',
                            '" . $_POST['detail'] . "',
                            '" . $_POST['cash'] . "',
                            '" . $_POST['upload_pdf'] . "',
                            '" . $_POST['upload_word'] . "');"; 
         $result = $conn->query($sql);
         if ($result) {
             echo '<script> alert("Finished Creating!")</script>';
             header('Refresh:0; url=index.php');
         } else {
             echo '<script> alert("Creating Error!")</script>';
             header('Refresh:0; url=index.php');
         }
    //  } else {
    //      echo '<script> alert("date is already exists!")</script>';
    //      header('Refresh:0; url=form-create.php');
    //  }
 } else {
     header('Refresh:0; url=index.php');
 }
 
 ?>
