<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'users1';

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        # code...
        die("Unable to connect to database deu to  ---> ". mysqli_conn_error());
    }

    // echo "<br> <b>Connected successfully. <b>";

?>