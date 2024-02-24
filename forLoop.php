<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    for($i = 1; $i<=5; $i++) {
        echo "Loop number $i<br>";
    }

    // for Loop with array
    $numbers = array(44,77,33,01,99);
    
    for ($i=0; $i <count($numbers) ; $i++) { 
        echo "$numbers[$i] <br>";
    }
?>
    
</body>
</html>