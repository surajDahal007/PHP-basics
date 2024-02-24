<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Class & Objects in PHP</h1>";

        // creating class
        class book {
           var $title,$author,$pages;
        //    var $author;
        //    var $pages; 

        # constructor ...
        // function __construct(){
        //     echo "New Book Created <br>";
        // }

        // function __construct($name){
        //     echo "Published By $name <br>";
        // }

        # Better use of constructor

        function __construct($Title,$Author,$Pages){
            $this->title = $Title;
            $this->author = $Author;
            $this->pages = $Pages;
        }

        }

        // creating object & assigning value by constructor
        $book1 = new book("C Programming ","Suraj Dahal ",300);
        $book2 = new book("C++ Programming ","Roz Rijal ",700);
        
        //assigning value to attributes
        // $book1->title = "C Programming ";
        // $book1->author = "Suraj Dahal ";
        // $book1->pages = 300;

        echo $book1->title;
        echo $book1->author;
        echo $book1->pages;

        echo "<br>";

        // $book2 = new book("Shyam");
        // $book2->title = "C++ Programming ";
        // $book2->author = "Roz Rijal ";
        // $book2->pages = 700;

        echo $book2->title;
        echo $book2->author;
        echo $book2->pages;
    ?>
</body>
</html>