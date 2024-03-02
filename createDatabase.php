<?php
        echo "<h1>Create Database from PHP in MYSQL</h1>";

        $servername = "localhost";
        $username = "root";
        $password = "";

        // connection to MYSQL server
        $conn = mysqli_connect($servername,$username,$password);

        // connection check
        if (!$conn) {
            die('<b>Unable to connect to database </b>'. mysqli_connect_error());
        }
    
        echo "<b>Connection is Successfull</b> <br>";
        
        // create a new database
        $sql = "CREATE DATABASE report";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            die('Failed to create database because --->'. mysqli_error($conn));
        }

        echo "<b>Database created successfully !</b>";
        echo "<br>";

        // create a table in newly created database
        $sql = "CREATE TABLE `report`.`random` (`sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , PRIMARY KEY (`sno`)) ENGINE = InnoDB";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die('Failed to create table because --->'. mysqli_error($conn));
        }

        echo "<b>Table Created Successfully !</b>";
?>

