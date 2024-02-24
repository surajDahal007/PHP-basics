<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="associativeArray.php" method="post">
        <input type="text" name="student">
        <br>
        <input type="submit">
    </form>

    <?php
        echo "<h1>From associative array page</h1>";

        $grades = array("Ram"=>"A", "shyam"=>"B+", "sita"=>'C-');
        // key => value 
        // key must be unique in associative array

        echo $grades[$_POST["student"]];
        // using post to get entry from input to display its' corresponding 
        // value


        // echo $grades["sita"];
        // // key used to access content in associative array

        // // modify element
        // $grades["Ram"]= "F";
        // echo $grades["Ram"]; 

        // echo count($grades);
    ?>
</body>
</html>