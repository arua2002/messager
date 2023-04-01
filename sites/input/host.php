<?php session_start(); ?>
<?php $con = mysqli_connect('127.0.0.1','root','','messager');
if ($con==false) {
 echo "not connection";
 echo mysqli_connect_error();
 exit();
}
$password = $_POST['password'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$loc = $_POST['loc'];
$catigories = $_POST['categori'];
 ?>
