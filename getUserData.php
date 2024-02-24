<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>form</h2>

   <form action="getUserData.php" method="get">
    Name :- <input type="text" name="username" placeholder="Name">
    Age :- <input type="number" name="age">
    <input type="submit">
   </form>
   <br />

   <?php
    echo $_GET["username"];
    echo $_GET["age"];
    echo $_GET["address"]
   ?>
</body>
</html>