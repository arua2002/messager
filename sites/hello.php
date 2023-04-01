<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/hom.css">
    <link rel="stylesheet" href="css/reg.css">
    <title>blog</title>
  </head>
  <body>
<?php include('input/host.php');?>
<header>
  <ul>
    <li><a href="home_page.php">чат</a></li>
  </ul>
    <?php
    $reg = mysqli_query($con, "INSERT INTO `client` (`id`, `name`, `surname`, `location`, `type`) VALUES (NULL, '$name', '$surname', '$loc', '$catigories')");
    $count = mysqli_query($con, "SELECT * FROM `client` WHERE  `name` = '$name' and `surname` = '$surname'");
    while ($re = mysqli_fetch_assoc($count)){
      echo "<h1>добро пожаловать :: ".$re['name'].'<h1>';
    }
    ?>
</header>
  </body>
</html>
