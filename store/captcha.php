<?php
        if($_POST["answer"] === $_POST["correct"])
            header("Location: index.php?log=true"); 
        else{
            echo "<h1>Get out</h1>";
        }   


?>