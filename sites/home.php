<?php require_once 'input/host.php';?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>office messager</title>
    <link rel="stylesheet" href="css/home.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js"  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="  crossorigin="anonymous"></script>
    <script type="text/javascript" >
    $(function() {//запись
       $("#but").click(function() {
         var txt = document.getElementById('txt');
         if(txt.value!=""){
         $.ajax({
           type: "POST",
           url: "input/text_up.php",
           data:{
             txt: txt.value
           }
         });
         txt.value = "";
       }
       });
       setInterval(function(){
         $.ajax({//чтение
             type: "POST",
             url: "input/text.php",
             dataType: "html",
             success: function(response) {
               $("#mess").html(response);
             }
         });
       },100);
     });
   </script>
  </head>
  <body>
    <header>
      <ul>
        <div class="hh">
            <li><a href="#">главная</a></li>
        </div>
        <div class="hh">
          <?php
            if($_SESSION['name'] == ""){
              echo "  <li><a href='entrance.php'>вход</a></li>";
            }
            else {
                echo "  <li><a href='entrance.php'>выход</a></li>";
            }
           ?>

        </div>
        <div class="hh">
          <li><a href="registratio.php">регистрация</a></li>
        </div>
      </ul>
      <?php
       if($_SESSION['name'] != ""){
        echo '<div class="user">';
            echo $_SESSION['name']." ".$_SESSION['surname']."<br>".$_SESSION['loc']."<br>";
            echo "имя ПК: ". gethostname()."<br>";
            echo "мой IP: ".$_SERVER['REMOTE_ADDR'];
            echo "</div>";
}
         ?>

    </header>
<div class="messager">
  <div class="messages" id="mess"></div>
    <?php  if($_SESSION['name'] != ""){
    echo '<form NAME="fr" class="show_message">
          <input type="text" id = "txt" NAME="text" value="">
          <button type="button" name="bt" id="but" >отправить</button>
          </form>
   ';
 }
   ?>
</div>
  </body>
</html>
