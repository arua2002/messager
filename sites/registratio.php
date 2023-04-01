<?php
header("Content-Type: text/html; charset=UTF-8");
session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <link rel="stylesheet" href="css/hom.css">
  <link rel="stylesheet" href="css/reg.css">
    <title>registration</title>
  </head>
  <body>
<header>
  <ul>
    <li><a href="home.php">чат</a></li>
  </ul>
</header>
<br>
<div class="enter">
  <form  action="hello.php" method="post">
    регистрация<br>
    <input type="text" placeholder="введите имя" name="name"><br>
    <input type="text" placeholder="введите фамилию" name="surname"><br>
    <input type="text" placeholder="придумайте пароль" name="password"><br>
    <input type="text" placeholder="введите место работы и номер помещения" name = "loc"><br>
    <select class="cat" name="categori">
          <option value="tither">преподователь</option>
          <option value="student">студент</option>
  </select><br>
    <input  class="entrance" type="submit"  value="зарегистрироваться">
  </form>
</div>
  </body>
</html>
