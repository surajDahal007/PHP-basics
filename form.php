<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Form page php</h1>";
    ?>

    <form action="form.php" method="post">
        <input type="text" name="fname" placeholder="First Name">
        <br>
        <br>

        <input type="text" name="lname" placeholder="Last Name">
        <br>
        <br>

        <input type="email" name="email" placeholder="E-mail">
        <br>
        <br>

        <input type="password" name="password" placeholder="Password">
        <br>
        <br>

        Birthday <br>
        <input type="date" name="birthday">
        <br>
        <br>


        <!-- Gender <br> -->

        <input type="submit">
    </form>

    <?php

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $birthday = $_POST["birthday"];

    if($fname =="" || $lname =="" || $email =="" || $password ="" || $birthday ==""){
        die("Invalid");
    }

    //password encryption
    $encPassword = md5($password);


    // Ways to connect to MYSQL Database
    // 1. MYSQLi extension (works with MYSQL only)
    // 2. PDO (works with many database)

    // connecting to database

    $servername = "localhost";
    $username = "root";
    $password = ""; 
    // for local host no password but in server, password present
    $database = "record";

    // create a connection
    $conn = mysqli_connect($servername,$username,$password,$database);

    //die if connection was not successful

    if(!$conn){
        //didn't show this message
        die("Connection failed: ".mysqli_connect_error());
    }

    $sql = "INSERT INTO `createaccount` (`sno`, `First Name`, `Last Name`, `E-mail`, `Password`, `Birthday`) VALUES ('','$fname', '$lname', '$email', '$encPassword', '$birthday')";
    $result = mysqli_query($conn,$sql);
    

    if($result){
        echo "<br><b>Data stored in Database</b>";
    }
    ?>
</body>
</html>

<!-- INSERT INTO `createaccount` (`sno`, `First Name`, `Last Name`, `E-mail`, `Password`, `Birthday`) VALUES ('1', 'Ram', 'Bahadur', 'rambahadur22@hotmail.com', 'rambahadur22', '2024-02-07'); -->
