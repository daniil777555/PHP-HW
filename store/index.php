<?php
    include "config.php";

    $sql = "select * from goodses";
    $res = mysqli_query($connect,$sql);
    $dirImg = Array();
    while($data = mysqli_fetch_assoc($res)){
        array_push($dirImg, $data);
    }


    $x = rand(1,10);
    $y = rand(1,10);
    $res = $x + $y;



    $sqlrev = "select * from reviews";
    $resrev = mysqli_query($connect,$sqlrev);
    $reviews = Array();
    while($data = mysqli_fetch_assoc($resrev)){
        array_push($reviews, $data);
    }


    
    
?>
<style>
    .capt{
        width: 200px;
        border:1px solid black;
        border-radius:5px;
        text-align:center;
        padding:8px 5px;
        box-sizing:border-box;
        margin:auto;
    }
    </style>
<form class="capt" action="captcha.php" method="POST">
    <input type="hidden" name="correct" value="<?= $res?>">
    <p>Calculate <?= $x?> + <?= $y?> = <input name="answer" style="width:30px;" type="text"></p>
    <button type="submit">Send</button>
</form>
<?php
if($_GET['log']):?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css">
        <title>Document</title>
    </head>
    <style>
    .capt{
        display:none;
    }
    </style>
    <body>
        <div class="container">
            <div class="goodses">
                <? 
                    foreach($dirImg as $el):
                        
                ?>
                <div class="about">
                    <a  href="server.php?img=<?= $el["path"]?>&price=<?= $el["price"]?>&id=<?= $el["id"]?>" target="_blank">
                        <img class="img" src="<?=$el["path"]?>" width="300" alt="photo">	
                    </a>
                    <p class="desc"><?= $el["short-desc"]?></p>
                    <p class="price">Price <?= $el["price"]?></p>
                    <button class="btn">BUY</button>
                
                </div>
                
                <? 
                    endforeach;
                ?>
            </div>
            <hr>
            <div class="reviews">
                <? 
                    foreach($reviews as $el):
                        
                ?>

                <div class="review">
                    <p class="name"><?= $el["name"]?>:</p>
                    <p class="text"><?= $el["reviews"]?></p>
                    <span class="date"><?= $el["date"]?></span>
                </div>
                <hr>

                <? 
                    endforeach;
                ?>

                <form class="form-rev" action="sendRev.php">
                    <p class="add-rev">Add your review</p>
                    <input type="hidden" name="date" value="<?= date("Y-m-d")?>">
                    <input class="input-name" type="text" required name="name" placeholder="Your name">
                    <textarea class="input-rev" required  name="rev" placeholder="input sm"></textarea>
                    <input class="send" type="submit" value="Send">
                </form>
                    
            </div>

        </div>

    </body>
    </html>

    <?php
    endif;
    ?>
</form>

