<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud PHP</title>
</head>
<style>
    table{
        border: 1px solid black; 
        border-collapse: collapse;
    }

    tr{
        border: 2px solid black;
    }

    td,th{
        padding : 8px;
    }
   
</style>
<body>
    <button>
        <a href="user.php">
            Add User
        </a>
    </button>
    <br>
    <br>

    <table>
        <thead>User Data Display from DB</thead>
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Mobile No.</th>
            <th>Email</th>
            <th>Password</th>
            <th>Operations </th>
            
        </tr>
        <tbody>
                <?php
                    $sql = "SELECT * FROM `crud`";
                    $result = mysqli_query($conn, $sql);

                    if(!$result){
                        die(mysqli_error($conn));
                    }

                    $num = mysqli_num_rows($result);

                    if($num >0){
                        while ($row = mysqli_fetch_assoc($result)) {
                            $sn = $row['sno'];
                            $name = $row['name'];
                            $mobile = $row['mobile'];
                            $email = $row['email'];
                            $password = $row['password'];
                            echo '<tr>
                            <td>'. $sn.'</td>
                            <td>'.$name.'</td>
                            <td>'.$mobile.'</td>
                            <td>'.$email.'</td>
                            <td>'.$password.'</td>
                            <td><button><a href="update.php?updateId='.$sn.'">UPDATE</a></button></td>
                            <td><button><a href="delete.php?deleteId='.$sn.'">DELETE</a></button></td>
                        </tr>';
                        }
                    }
                ?>
        </tbody>
    </table>
</body>
</html>