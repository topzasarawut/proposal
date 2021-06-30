<?php include_once('../authen.php') ?> 
<?php
if (isset($_POST['submit'])) {
    $sql_check_id_village = "SELECT * FROM `president` WHERE `id_village` = '" . $_POST['id_village'] . "' ";
    $check_id_village = $conn->query($sql_check_id_village);
    if (!$check_id_village->num_rows) {
        $hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO `president` (`id_village`, `prefix`, `first_name`, `last_name`, `id_card`, `birthday`, `age`, `email`, `telephone`, `username`, `password`) 
                    VALUES ('" . $_POST['id_village'] . "', 
                            '" . $_POST['prefix'] . "', 
                            '" . $_POST['first_name'] . "', 
                            '" . $_POST['last_name'] . "', 
                            '" . $_POST['id_card'] . "',
                            '" . $_POST['birthday'] . "', 
                            '" . $_POST['age'] . "', 
                            '" . $_POST['email'] . "',
                            '" . $_POST['telephone'] . "', 
                            '" . $_POST['username'] . "',
                            '" . $hashed . "');";
        $result = $conn->query($sql);
        if ($result) {
            echo '<script> alert("Finished Creating!")</script>';
            header('Refresh:0; url=index.php');
        } else {
            echo '<script> alert("Creating Error!")</script>';
            header('Refresh:0; url=index.php');
        }
    } else {
        echo '<script> alert("id_village is already exists!")</script>';
        header('Refresh:0; url=form-create.php');
    }
} else {
    header('Refresh:0; url=index.php');
}

?>