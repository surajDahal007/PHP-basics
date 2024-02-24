<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>From Switch Page</h1>";

        // switch statement - special type of 
        // 'if' statement to check bunch of 
        // conditions
    ?>

    <form action="switch.php" method="post">
        <input type="text" name="grade">
        <br>
        <input type="submit">
    </form>

    <?php
        $grade = $_POST["grade"];
        echo "$grade <br>";

        switch($grade){
            case "A":
                echo ("Amazing");
                break;
            case "B":
                echo "Pretty Good";
                break;
            case 'C':
                echo "Good enough";
                break;
            case 'D':
                echo "Yo just passed";
                break;
            case 'F':
                echo "Oops you failed";
                break;
            default:
                echo "Invalid grade";
                //why initally it shows this line 
                // ???
        }
    ?>
    
</body>
</html>