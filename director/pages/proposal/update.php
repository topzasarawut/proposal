<?php include_once('../authen.php') ?>
<?php
    if(isset($_POST['submit'])){
        $sql = "UPDATE `proposal` 
                SET
                `date` = '".$_POST['date']."',
                `work` = '".$_POST['work']."', 
                `location` = '".$_POST['location']."',
                `attachment` = '".$_POST['attachment']."',
                `status` = '".$_POST['status']."'
                WHERE `id` = '".$_POST['id']."';";

        $result = $conn->query($sql);
        if($result){
            echo '<script> alert("Finished Updating!")</script>'; 
            header('Refresh:0; url=index.php');
        } else {
            echo '<script> alert("Update Error!")</script>'; 
            header('Refresh:0; url=index.php');
        }

    } else {
        header('Refresh:0; url=index.php');
    }

?>
