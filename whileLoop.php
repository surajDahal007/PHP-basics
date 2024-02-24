<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>While Loop in PHP</h1>";

        $index = 1;

        while($index <6){
            echo $index;
            echo "<br>";
            $index++;
        }

        //do-while Loop
        $i = 1;

        do{
            echo "DO while $i <br>";
            $i--;
        }while($i>1)

    ?>
</body>
</html>