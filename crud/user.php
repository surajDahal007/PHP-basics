<?php
    include 'connect.php';

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO `crud` (`sno`, `name`, `mobile`, `email`, `password`) VALUES ('', '$name', '$mobile', '$email', '$password')";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            die('Unable to insert data in table due to ---> ' . mysqli_error($conn));
        }

        header('location:display.php');
    }

?>

<h1>USER PAGE</h1>

<form action="user.php" method="post">
    <input type="text" name="name" placeholder = "Name">
    <br>
    <br>
    <input type="number" name="mobile" placeholder = "Mobile No.">
    <br>
    <br>
    <input type="email" name="email" placeholder = "E-mail">
    <br>
    <br>
    <input type="password" name="password" placeholder = "Password">
    <br>
    <br>

    <input type="submit" name = "submit">
</form>