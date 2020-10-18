<?php

    include "config.php";

    $sql = "insert into reviews(name, reviews, `date`) values('$_GET[name]', '$_GET[rev]', '$_GET[date]')";
    if($res = mysqli_query($connect,$sql))
        header("Location: index.php?log=true"); 

?>