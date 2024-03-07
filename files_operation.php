<?php
    echo "<h1>Fopen, Fclose...etc file function</h1>";

    $fptr = fopen("myfile.txt","r");
    // (file_name, mode)
    // fopen() --> returns resource if found, else returns false.

    # echo $fptr;
    // returns resource_source pointer finds & performs task.

    if (!$fptr) {
        die("Unable to read file");
    }

    $content = fread($fptr, filesize("myfile.txt"));
    // filesize(file_name) ---> returns no. of characters in given file

    echo $content;

    fclose($fptr);
    // to close file --> fclose(file_pointer)
    // closing file absolutely necessary
    
?>