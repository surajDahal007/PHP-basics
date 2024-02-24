<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $name = 'Johnyy';
        $age = '40';

        echo "<h1>Hello World from Variables file</h1>";
        echo "<br>";
        echo "There was a man name $name.";
        echo "He was $age years old. <br>";
        $age = 20; 
        // we can change the variable values in php
        echo "He liked his name $name. <br>";
        echo "But he would like being $age. <br>";
    
    ?>
</body>
</html>