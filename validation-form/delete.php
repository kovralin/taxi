<?php
    $connect = mysqli_connect("localhost", "root", "", "taxibase");
    if (!$connect) {
        die ('Error connect to database');
    }
    

    $id = $_GET['id'];
    mysqli_query($connect, "DELETE FROM `ordertaxi` WHERE `ordertaxi`.`id` = '$id'");
    header('Location: avtoriz.php');
      
?>