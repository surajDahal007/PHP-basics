<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Getter & Setter in PHP</h1>";

        class movie {
            public $title; // public access 
            private $rating; // private access

            function __construct($title,$rating){
                $this->title = $title;
                $this->setRating($rating);
                // only after function call rating is set
            }

            // getter function for private variable
            function getRating(){
                return $this->rating;
            }

            // setter function for private variable
            function setRating($rating){
                if($rating == "R" || $rating == "PG-13" || $rating == "PG" || $rating == "NR"){
                    $this->rating = $rating;
                }
                else{
                    $this->rating = "NR";
                }
            }
        }

        $m1 = new movie("Avengers","DOG");
        // echo $m1->rating; no longer allowed if
        // variable is made private

        // setting value using function
        $m1->setRating("R");

        // getting value using function
        echo $m1->getRating();
    ?>
</body>
</html>