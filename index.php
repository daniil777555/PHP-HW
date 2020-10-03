<?php 
    //Task 1
    echo "\nTask 1 \n";
    function culc(int $a, int $b){
        if($a >= 0 && $b >= 0) return $a - $b;
        else if($a < 0 && $b < 0) return $a * $b;
        else return $a + $b;   
        
    };
    echo culc(-3, -5)."\n";

    //Task 2
    echo "\nTask 2.1 \n";
    $a = 4;
    

    switch ($a < 15){
        case 1: 
            echo $a."\n";
            $a++;
            if($a > 15){
                break;
            };
        case 2: 
            echo $a."\n";
            $a++;
            if($a > 15){
                break;
            };
        case 3 : 
            echo $a."\n";
            $a++;
            if($a > 15){
                break;
            };
        case 4 : 
            echo $a."\n";
            $a++;
            if($a > 15){
                break;
            };
        case 5 : 
            echo $a."\n";
            $a++;
        case 6 : 
            echo $a."\n";
            $a++;
        case 7 : 
            echo $a."\n";
            $a++;
        case 8 : 
            echo $a."\n";
            $a++;
            if($a > 15){
                break;
            };
        case 9 : 
            echo $a."\n";
            $a++;
            if($a > 15){
                break;
            };
        case 10 : 
            echo $a."\n";
            $a++;
            if($a > 15){
                break;
            };
        case 11 : 
            echo $a."\n";
            $a++;
            if($a > 15){
                break;
            };
        case 12 : 
            echo $a."\n";
            $a++;
            if($a > 15){
                break;
            };
        case 13 : 
            echo $a."\n";
            $a++;
            if($a > 15){
                break;
            };
        case 14 : 
            echo $a."\n";
            $a++;
            if($a > 15){
                break;
            };  
        case 15 : 
            echo $a."\n";                                           
    };

    //Либо с функцией, используя рекурсию. Считаю этот вариант более лаконичным.
    echo "\nTask 2.2 \n";
    function countF($a){
        switch($a <= 15){
            case $a :
                echo $a++."\n";
                return $a <= 15 ? countF($a) :  $a;

        };
    }
    countF(1);
    //Tsak 3
    echo "\nTask 3 \n";
    
    function mathAct($a, $b){
        return "Cложение ".($a + $b)."\n"."Вычитание ".($a - $b)."\n"."Умножение ".($a * $b)."\n"."Деление ".($a / $b)."\n";

    }

    echo mathAct(6, 3);
    
    //Tsak 4
    echo "\nTask 4 \n";

    function mathOper($a, $b, $oper){
        switch($oper){
            case "+" :
               return "$a + $b = ".$a + $b."\n"; //Почему-то возвращается только результат действия, а эта часть "$a + $b = " не выводится
            case "-" :
                return $a - $b." = $a - $b"."\n"; //А если поменять местами чтобы вывод был такого типа  7 = 10 - 3, то из функции возврачается все что стоит после return
            case "*" :
                return "$a * $b = ".$a * $b."\n";
            case "/" :
                return "$a / $b = ".$a / $b."\n";
            default: return "Введено не верно значение";
        }
    }
    echo mathOper(5, 2, "-");

    //Tsak 5
    echo "\nTask 5 \n";

    function power($val, $pow){
        if($pow === 0){
            return 1;
        }
        return $pow >= 1 ? $val * power($val, $pow - 1) : $val;
    }

    echo power(2, 8)."\n";


    //Tsak 6
    echo "\nTask 6 \n";


    function culcTime($val){
        
        $valArr =  str_split($val);

        if(!is_numeric($valArr[1]) && !is_numeric($valArr[4])) return "Введите корректное значение";

        if(($valArr[1] == 0 || $valArr[1] == 5 || $valArr[1] == 6 || 
            $valArr[1] == 7 || $valArr[1] == 8 || $valArr[1] == 9) && $valArr[0] != 1  ) $valArr[2] = " часов ";
        if($valArr[0] == 1 ) $valArr[2] = " часов ";
        if($valArr[1] == 1 && $valArr[0] != 1) $valArr[2] = " час ";
        if(($valArr[1] == 2 || $valArr[1] == 3 || $valArr[1] == 4) && $valArr[0] != 1) $valArr[2] = " часа ";

        if(($valArr[4] == 0 || $valArr[4] == 5 || $valArr[4] == 6 || 
            $valArr[4] == 7 || $valArr[4] == 8 || $valArr[4] == 9) && $valArr[3] != 1  ) $valArr[5] = " минут ";
        if($valArr[3] == 1  ) $valArr[5] = " минут ";
        if($valArr[4] == 1 && $valArr[3] != 1) $valArr[5] = " минута ";
        if(($valArr[4] == 2 || $valArr[4] == 3 || $valArr[4] == 4) && $valArr[3] != 1) $valArr[5] = " минуты ";
        
        return implode('', $valArr);
    }

   echo culcTime("21 43")."\n"
?>


