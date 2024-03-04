<?php
    include 'connect.php';
    $sn = $_GET['updateId'];
    
    $sql = "SELECT * FROM `crud` WHERE `sno` = '$sn'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    // echo $name;
    $mobile = $row['mobile'];
    $email = $row['email'];
    $password = $row['password'];

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql1 = "UPDATE `crud` SET `name` = '$name', `mobile` = '$mobile', `email` = '$email', `password` = '$password' where `crud`.`sno` = '$sn'";
        $result1 = mysqli_query($conn, $sql1);

        if(!$result1){
            die('Unable to insert data in table due to ---> ' . mysqli_error($conn));
        }

        // echo "Updated successfully";
        header('location:display.php');
    }

?>

<h1>USER PAGE</h1>

<form method="post">
    <input type="text" name="name" placeholder = "Name" value = <?php echo $name; ?> >
    <br>
    <br>
    <input type="text" name="mobile" placeholder = "Mobile No." value = <?php echo $mobile; ?>>
    <br>
    <br>
    <input type="email" name="email" placeholder = "E-mail" value = <?php echo $email; ?>>
    <br>
    <br>
    <input type="password" name="password" placeholder = "Password" value =<?php echo $password; ?>>
    <br>
    <br>
    <button type="submit" name="submit">Update</button>
</form>