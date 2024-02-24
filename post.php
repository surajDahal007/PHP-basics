<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post.php" method="post">
        <h2>Inside Form</h2>
        <input type="password" name="Password" placeholder="password" />
        <br>
        <input type="submit">
    </form>
    <br />

    <?php
        echo $_POST["Password"];
    ?>
</body>
</html>