<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>From checkbox</h1>";
    ?>

    <form action="checkbox.php" method="post">
        <!-- fruit[] is an array-->

        Apple : <input type="checkbox" name="fruit[]" value="apple"> <br>
        mango : <input type="checkbox" name="fruit[]" value="mango"> <br>
        orange : <input type="checkbox" name="fruit[]" value="orange"> <br>

        <input type="submit">
    </form>

    <?php
        $fruits = $_POST['fruit']; // this is an array
        //no need of [] bracket here.
        //input value grabbed in server side by name of input type.
        echo $fruits[1];
    ?>
</body>
</html>