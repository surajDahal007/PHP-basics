<!-- 
* This page acts as a layout for includePhp.php file. 
* value for $title, $author, $wordcount is assigned
* in the file "includePhp.php" as it inclides it. 
-->

<h2>
    <?php 
        echo $title; 
    ?>
</h2>

<h4>
    <?php
        echo $author;
    ?>
</h4>

word count: <?php echo $wordcount; ?>