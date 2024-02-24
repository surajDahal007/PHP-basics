<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Inheritance in PHP</h1>";

        class chef{
            function makeChicken(){
                echo "Make Chicken <br>";
            }

            function makeSalad(){
                echo "Make salad <br>";
            }

            function specialDish(){
                echo "Make Special chicken Tikka <br>";
            }
        }

        // chef class inherited by italianChef
        class italianChef extends chef {
            function makePizza(){
                echo "Make Pizza <br>";
            }

            // override base class function
            function specialDish(){
                echo "Italian special pasta <br>";
            }
        } 

        $c1 = new chef;
        $c1->makeChicken();
        $c1->specialDish();

        $i = new italianChef();
        $i->makeChicken();
        $i->makePizza();
        $i->specialDish();
    ?>
</body>
</html>