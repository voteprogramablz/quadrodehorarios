<?php
include_once 'db_connect.php';

$name = $_POST['professor'];

$sql = "INSERT INTO `professor`(`nome`) VALUES ('$name')";
$result = mysqli_query($conn, $sql);
