<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/hom.css">
    <link rel="stylesheet" href="css/reg.css">
    <title>entrance</title>
  </head>
  <body>
<?php include('input/host.php');?>
<header>
  <ul>
    <li><a href="home.php">чат</a></li>
  </ul>
  <div class="usps"><?php session_unset();?></div>
</header>
<br>
<div class="enter">
  <form  action="hello _user.php" method="post">
    вход<br>
    <input type="text" placeholder="введите ваше имя" name = "name"><br>
    <input type="text" placeholder="введите вашу фамилию" name="surname"><br>
    <input  class="entrance" type="submit"  value="войти">
  </form>
</div>
  </body>
</html>
