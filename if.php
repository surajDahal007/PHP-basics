<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>From IF statement PHP page</h1>";
        
        $isMale = false;
        $isTall = false;

        if ($isMale && $isTall) {
            echo "User is male and Tall <br>";
        }
        elseif($isMale && !$isTall){
            echo "User is Male and not Tall <br>";
        }
        elseif(!$isMale && $isTall){
            echo "User is female and Tall <br>";
        }
        else{
            echo "User is female and short <br>";
        }
    ?>


        <?php
        // function to find max value
            function getMax($num1,$num2){
                if($num1 > $num2){
                    return $num1;
                }
                elseif($num1 < $num2) {
                    return $num2;
                }
                else{
                    return "Numbers are equal.";
                }
            }

            // echo getMax(90,90);
            $result = getMax(10,9);
            echo "Result :- $result <br>";
        ?>
</body>
</html>