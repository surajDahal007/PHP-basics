<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Working With String in PHP</h1>";

        $phrase = 'Hello World';
        echo $phrase;
        echo "<br>";

        // echo strtolower($phrase); To lower-case
        // echo strtoupper('rameshwor'); to uppercase

        // echo strlen('ram'); length of given string 

        echo $phrase[0]; // prints H 'first character'
        // $phrase[index]
        // index context same as of array
        // first position 0

        echo "<br>";
        echo "Ram"[0]; // output : R
        echo "<br>";


        // modify individual index

        // $phrase[0] = "B";
        // echo $phrase;
        // echo "<br>";

        // to replace string
        echo str_replace("Hello","Byy",$phrase);
        #("find","replace","given string")

        echo "<br>";

        echo substr($phrase, 6,3);
        // to get substring
        // substr(phrase,from,to)
    ?>
</body>
</html>