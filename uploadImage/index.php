<?php
    include "_dbconnect.php";


    if (isset($_POST['submit'])) {
        $file_name = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];
        
        $folder = 'Images/'. $file_name;
        $sql = "INSERT INTO `images` (`id`, `file`) VALUES ('', '$file_name')";

        $query = mysqli_query($conn, $sql);

        if (move_uploaded_file($temp_name, $folder)) {
            echo '<h2>File Uploaded Successfully.</h2>';
        }
        else {
            echo '<b>Unable to upload Image due to ---> </b>'. mysqli_error();
        }
            // $res = mysqli_query($conn, "SELECT * from `images` where `file` = '$file_name'");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image" />
        <br>
        <br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>

    <!-- <div>
        <?php
            $res = mysqli_query($conn, "SELECT * from `images`");
            while($row = mysqli_fetch_assoc($res)){
        ?>
            <img src="Images/ <?php echo $row['file']?>" />
        <?php }?>
    </div> -->
   
</body>
</html>