<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <?php
        echo "<h1>From Function page</h1>";

        // function func_name(arguments...)
        function sayHi($name,$age){
            echo "Hello $name, $age from php function <br>";
        }

        //function call
        sayHi("sita",19);
        sayHi("Rita",20);
        sayHi("Preeti",80);
    ?>

    <?php
        echo "<h2>Functions with return statement</h2>";

        //function to cube a number
        function cube($num){
            return ($num * $num * $num);
        }

        // $cubenum = cube(5);
        // echo "$cubenum <br>";

        // OR
        echo cube(6);
    ?>
</body>
</html>