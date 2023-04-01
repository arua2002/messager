<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/hom.css">
    <link rel="stylesheet" href="css/reg.css">
    <title>hello</title>
  </head>
  <body>
    <style media="screen">
      body{
        text-align: center;
      }
    </style>
<?php include('input/host.php');?>
<header>
  <ul>
    <li><a href="home.php">чат</a></li>
  </ul>

</header>
<?php
$count = mysqli_query($con, "SELECT * FROM `client` WHERE  `name` = '$name' and `surname` = '$surname'");
$d = mysqli_num_rows($count);
if($d!=0)
{
  while ($re = mysqli_fetch_assoc($count))
    {
    $_SESSION['name'] = $re['name'];
    $_SESSION['surname'] =  $re['surname'];
    $_SESSION['loc'] =  $re['location'];
  }
    echo "привет ".$_SESSION['name']." ".$_SESSION['surname'];
}
else {
  echo "такого пользователя нет";
}
?>
  </body>
</html>
