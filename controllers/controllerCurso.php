<?php
include_once 'db_connect.php';

$name = $_POST['curso'];

$sql = "INSERT INTO `curso`(`nome`) VALUES ('$name')";
$result = mysqli_query($conn, $sql);
