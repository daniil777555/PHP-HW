<?php
include "config.php";


$sql = "select description from goodses where id=$_GET[id]";
$res = mysqli_query($connect,$sql);
$desc = mysqli_fetch_assoc($res);

  $img =  $_GET["img"];
  $price = $_GET["price"];
  


  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Document</title>
</head>
<body>
<div class="description">
    <img src="<?= $img?>" width="500px" alt="">
    <p class="desc-in-desc"><?= $desc["description"]?></p>
    <p class="price-in-desc"><?= $price?></p>
    <button class="btn-in-desc">BUY</button>
  </div>
</body>
</html>
