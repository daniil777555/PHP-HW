<?php
    include "./models/config.php";
    //Это функция добавления в карзину.
    if($_COOKIE["login"] && $_GET["id"]){
        $sql = "select * from basket where id_goods=$_GET[id] and login_user='$_COOKIE[login]'";
        $res = mysqli_query($connect,$sql);
        $data = mysqli_fetch_assoc($res);
        if($data['login_user'] === $_COOKIE['login']){//логин в таблице basket также является идентификатором, если запрос, который выше, вернет строку таблицы, значит количество увеличется, иначе добавится как новый товар.
            $sql = "update basket set quantity = quantity + 1 where id_goods=$_GET[id] and login_user='$_COOKIE[login]'";
            $res = mysqli_query($connect, $sql);
        } 
        else{
            $sql = "insert into basket(login_user, id_goods, quantity) values('$_COOKIE[login]', $_GET[id], 1)";
            $res = mysqli_query($connect,$sql);
        }
        
    }

    if($_COOKIE["login"]){
        $sql = "select * from basket where login_user='$_COOKIE[login]'";
        $res = mysqli_query($connect,$sql);
        $arrBasket = [];
        while($data = mysqli_fetch_assoc($res)){
            array_push($arrBasket, $data);
        }

        //Тут импорт пути до картинки и цены
        $j = 0;
        foreach($arrBasket as $el){
            $sql = "select path, price from goodses where id=$el[id_goods]";
            $res = mysqli_query($connect,$sql);
            $data = mysqli_fetch_assoc($res);
            $arrBasket[$j] += $data;
            $j++;
        }
    } else{
        header("Location: ./models/reg.php");
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="menu">
            <a href="./index.php" class="home">Home</a>
            <a href="models/reg.php" class="reg">Registration</a>
            <a href="basket.php" class="basket">Basket</a>
        </div>
    </header>
    <div class="container basket-container">
        <h2 class="basket-h2">Basket</h2>
        <?php foreach($arrBasket as $el):?>
        <div class="goodses">
            <img width="250" src ="<?= $el['path']?>" >
            <p class="price">Price: <?= $el['price']?></p>
            <p class="quantity">Quantity: <?= $el['quantity']?></p>
        </div>
        <?php endforeach?>
    </div>
</body>
</html>