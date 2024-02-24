<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Object Function in PHP</h1>";

        class student {
            //data member declaration
            var $name, $major, $gpa;

            //constructor for assigning values
            function __construct($name,$major,$gpa){
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }

            //object function in PHP
            function hasHonors(){
                if ($this->gpa >=3.5) {
                    return "true";
                }
               return "false";
            }

            # if return type is boolean, o/p is either 1 or 0 ...
        }

        $s1 = new student("Ram","CS",3.0);
        echo $s1->name;
        echo "<br>";

        // function call by object
        echo $s1->hasHonors();
    ?>
</body>
</html>