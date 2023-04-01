<?php require_once 'host.php';?>
<?php session_start(); ?>
<?php
$txt = $_POST['txt'];
$txt2 = $_SESSION['name'];
$data = date('Y-m-d H:i:s');
$reg = mysqli_query($con, "INSERT INTO `message` (`id`, `text`, `name_user`, `data`) VALUES (NULL, '$txt', '$txt2', '$data');");
 ?>
