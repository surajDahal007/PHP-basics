<?php
       echo "<h1>Update and Where clause</h1>";

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


       //WHERE clause to fetch data from database
       $sql = "SELECT * FROM `newsletter` WHERE `E-mail` = 'shyambahadur@hotmail.com'";
       $result = mysqli_query($conn, $sql);

       if (!$result) {
        $err = mysqli_error($conn);
        die("Unable to perform query ---> $err");
       }

       $num = mysqli_num_rows($result);
       echo "No of records recorded - $num";
       echo "<br>";

       if ($num > 0) {
            while($row = mysqli_fetch_assoc($result)){
                echo $row['E-mail'] . "<br>";
            }
       }

       // WHERE clause to update data in database
       $sql = "UPDATE `newsletter` SET `E-mail` = 'shyambahadur11@hotmail.com' WHERE `E-mail` = 'shyambahadur@hotmail.com'";
       $result = mysqli_query($conn, $sql);

       if ($result) {
        echo "Record updated successfully";
       }
       else{
        echo "Update not successfull due to ". mysqli_error($conn);
       }

       // number of rows affected
       $aff = mysqli_affected_rows($conn);
       echo "<br>";
       echo "No of affected rows :- $aff";

?>