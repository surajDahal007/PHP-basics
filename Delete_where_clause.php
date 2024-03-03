<?php
    echo "<h1>Delete and Where clause</h1>";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "record";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Unable to connect to database due to --->". mysqli_connect_error());
    }

    echo "<b>Connection successfull</b>";
    echo "<br>";

    $sql = "DELETE FROM `newsletter` WHERE `E-mail` = 'surajdahal402@gmail.com' LIMIT 2";

    $result = mysqli_query($conn,$sql);

    if (!$result) {
        $err = mysqli_error($conn);
        die("Unable to run query due to ---> $err");
    }

    echo "<b>Deleted successfully</b>";
    echo "<br>";

?>