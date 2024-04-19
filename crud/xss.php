<?php
    include "connect.php";
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == 'POST') {
        $username = $_POST['username'];
        $textarea = $_POST['comment'];

        $textarea = str_replace("<","&lt;",$textarea);
        $textarea = str_replace(">","&gt;",$textarea);

        $sql = "INSERT INTO `xss_prevention` (`sno`, `username`, `comment`) VALUES ('', '$username', '$textarea')";
        $result = mysqli_query($conn,$sql);

        if (!$result) {
            echo "Data not inserted";
        }

    }
?>

<form action="xss.php" method="post">
    <input type="text" name="username" placeholder= "username">
    <br>
    <br>
    <input type="text" name="comment">
    <input type="submit">
</form>