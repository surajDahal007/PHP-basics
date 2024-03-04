<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "record";

    $conn = mysqli_connect($servername,$username,$password, $database);

    if (!$conn) {
        die("<b>Unable to connect to database due to ---> </b>" . mysqli_connect_error());
    }

    // echo "<b>Connection Successfull !!</b>";
    

?>