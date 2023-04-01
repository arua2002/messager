<?php require_once 'host.php';?>
<?php session_start(); ?>
<style media="screen">
  .us{
    text-align: right;
    color: red;
    width: 30%;
    background-color: black;
    padding: 4px;
    margin: 10px;
    margin-left: 65%;
    word-wrap: break-word;

  }
  .client{
    text-align: left;
    color: red;
    width: 30%;
    background-color: black;
    padding: 4px;
    margin: 10px;
    color: yellow;
  }
  div{
    border-radius: 10px;
  }
  div > p{
    color: white;
  }
</style>
<?php
$count = mysqli_query($con, "SELECT * FROM `message` ORDER BY id DESC");
while ($re = mysqli_fetch_assoc($count)){
  if($re['name_user']==$_SESSION['name'])
  {
    echo "<div class = 'us'><p>".$re['name_user']." ".$re['data']."</p>".$re['text']."</div>";
    echo "<br>";
  }
  else {
    echo "<div class='client'><p>".$re['name_user']." ".$re['data']."</p>".$re['text']."</div>";
  }
}
  ?>
