<?php
session_start();
$_SESSION['displayH1'] = "none";
    include "config.php";
    $r;

if($_POST["login"] && $_POST["pass"]){
    $login = md5($_POST["login"]);
    $pass = md5($_POST["pass"]);
    setcookie("login", $login, time()+3000000 ,"/");
    setcookie("pass", $pass, time()+3000000 ,"/");

    $sql = "select * from reg where login='$login'";
    $res = mysqli_query($connect,$sql);
    $isLogin = mysqli_fetch_assoc($res);
    //Предотвращает повторную регистрацию одних  и тех же данных
    if(!$isLogin["id"]){
        $sql = "insert into reg(login, pass) values('$login', '$pass')";
            if($res = mysqli_query($connect,$sql)){
                header("Location: ../index.php?log=true"); 
            }
    } elseif($isLogin["id"]) {
        $_SESSION['displayH1'] = "block";
    }
}        
?>

<?php if($_COOKIE["login"] && $_COOKIE["pass"]):?>
    <!-- Это выведется, когда есть куки с логином и паролем, чтобы не прорходить регистрацию повторно -->
    <link rel="stylesheet" href="../main.css">
    <header class="header">
        <div class="menu">
            <a href="../index.php" class="home">Home</a>
            <a href="reg.php" class="reg">Registration</a>
            <a href="../basket.php" class="basket">Basket</a>
        </div>
    </header>
    <h1>You have already registred</h1>

<?php else:?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="menu">
            <a href="../index.php" class="home">Home</a>
            <a href="reg.php" class="reg">Registration</a>
            <a href="../basket.php" class="basket">Basket</a>
        </div>
    </header>
    <form  class="form-reg" method="POST" action="reg.php">
        <p class="reg-t">Your login</p>
        <input class="input-reg" type="text" required name="login" placeholder="Your login">
        <p class="reg-t">Your pass</p>
        <input class="input-reg" type="text" required name="pass" placeholder="Your pass">
        <input class="send" type="submit" value="Send">
    </form>
    <h1 style="display:<?=$_SESSION["displayH1"]?>">You have already registred</h1>
</body>
</html>
<?php endif?>