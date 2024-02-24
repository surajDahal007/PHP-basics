<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>hello from array php file</h1>";

        $fruits = array('mango','apple','banana',1,2,true);
        //                  0,  1,      2,        3,4,5
        echo $fruits[0];

        $fruits[0] = 'orange'; //modification of array element 

        echo "<br>";
        echo $fruits[0];

        echo count($fruits);

        //adding element in array
        $fruits[6] = 'pineapple';
        echo "<br>";
        echo $fruits[6];
        echo "<br>";

        // count() func. in this case counts number of element
        // in fruits array
        echo count($fruits);
        

    ?>
</body>
</html>