<?php
function g($num1, $num2, $sel){
    if(!is_numeric($num1) || !is_numeric($num2)) return "Некорректные данные";
    elseif($num2 != 0){
        switch($sel){
            case "-":
                return $num1 - $num2;
                
            case "*":
                return $num1 * $num2;
                
            case "/":
                return $num1 / $num2;  
           default:    
                return $num1 + $num2;      
        }
    } else{
            return "На 0 делить нельзя";
        }
    
}
 echo g($_GET["num1"],$_GET["num2"], $_GET["sel"]);
?>