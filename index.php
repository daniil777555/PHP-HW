<?php
    // я не совсем понял разницу между первым и вторым заданием, думаю это решение можно считать решением обоих.
     $dirImg = scandir("big");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <? 
            for($i = 2; $i < count($dirImg); $i++):
                
        ?>
        <a href="server.php?img=<?echo $dirImg[$i]?>" target="_blank"><img src="<? echo "big/$dirImg[$i]"?>"width="300" alt=""></a>
        <? 
            endfor;
        ?>

    </div>

</body>
</html>