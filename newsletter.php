<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Data write and read in MYSQL from PHP</h1>";
    ?>

    <form action="newsletter.php" method="post">
        <input type="email" name="email">
        <!-- <input type="button" value="" > -->
        <input type="submit">
    </form>

    <?php
        $emailID = $_POST['email'];
        
        if ($emailID == "") {
            die("Email required for subscription");
        }

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "record";

        $conn = mysqli_connect($servername,$username,$password,$database);

        // if connection failed
        if(!$conn){
            die("Connection to database failed");
        }

        $sql = "INSERT INTO `newsletter` (`sno`, `E-mail`, `Date`) VALUES ('', '$emailID', current_timestamp())";

        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die('Unable to store in database');
        }

        echo "<b>Thank you for subscribing ! </b>"
    ?>

    <h3>To display data from database</h3>
    <?php
        $sql2 = "SELECT * FROM `newsletter`";
        $result = mysqli_query($conn,$sql2);

        // to find number of rows
        $num =  mysqli_num_rows($result);

        //display record
        if ($num>0) {

//        $row = mysqli_fetch_assoc($result);
//        # fetch_assoc_ -> returns all data one by one 
//       echo var_dump($row);
//       echo "<br>";

        while ($row = mysqli_fetch_assoc($result)) {
            // echo var_dump($row);
            // echo "<br>";
            # var_dump() for detailed info of variable

            // echo print_r($row);
            // echo "<br><br>";
            # print_r() for limited information

            echo $row['E-mail']. " " . $row['Date'];
            # will only show E-mail
            # column-name should match exactly
            # . operator for concatination purpose
            echo "<br>";
        }
    } 

    ?>
</body>
</html>