<?php
$from_adres = filter_var(trim($_POST['from_adres']), 
FILTER_SANITIZE_STRING);

$to_adres = filter_var(trim($_POST['to_adres']), 
FILTER_SANITIZE_STRING);

$phone = filter_var(trim($_POST['phone']), 
FILTER_SANITIZE_STRING);

$time = filter_var(trim($_POST['time']), 
FILTER_SANITIZE_STRING);

$comment = filter_var(trim($_POST['comment']), 
FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost','root','','taxibase');
$mysql->query("INSERT INTO `ordertaxi` (`from_adres`, `to_adres`, `phone`, `time`, `comment`)
VALUES('$from_adres', '$to_adres', '$phone', '$time', '$comment')");

$mysql->close();

header('Location: /');
?>