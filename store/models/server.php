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
  <link rel="stylesheet" href="../main.css">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <header class="header">
      <div class="menu">
          <a href="../index.php" class="home">Home</a>
          <a href="./reg.php" class="reg">Registration</a>
          <a href="../basket.php" class="basket">Basket</a>
      </div>
    </header>
    <div id="<?= $_GET["id"]?>" class="description for-buy">
        <img src=".<?= $img?>" width="500px" alt="">
        <p class="price-in-desc">Price: <?= $price?></p>
        <button  class="btn btn-desc">BUY</button>
        <p class="desc-in-desc"><?= $desc["description"]?></p>
    </div>
  </div>    
</body>
</html>
