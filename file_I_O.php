<?php
    echo "<h1>File I/O </h1>";

    $a = readfile("myfile.txt");

    echo $a; 
    // also displays no of characters read
    
    echo "<br>";
    // for no return value  
    readfile("myfile.txt");

    readfile("file.html");
    //displays file.html as it is when 
    // viewed in page source
?>