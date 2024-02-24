<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $title = "My title from includePhp";
        $author = "Suraj Dahal";
        $wordcount = 500;
        # variable name should be same in both layout page and page that includes it...
        include "articleHeader.php";
        # articleHeader.php in this case acts as a layout page to includePhp.php
    ?>

    <?php 
        include "useful-function.php";
        // functions in other php files can also be used
        sayHi("Suraj");
        echo "<br>";
        echo $feetValue;
    ?>
</body>
</html>