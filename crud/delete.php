<?php
    include 'connect.php';

    if (isset($_GET['deleteId'])) {
        $sn = $_GET['deleteId'];

        $sql = "DELETE FROM `crud` WHERE `crud`.`sno` = $sn";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            die(mysqli_error($conn));
        }

        // echo "Deleted Successfully";
        header('location:display.php');
    }
?>