<?php

//Task 1
echo "Task 1 \n";

$i = 0;
while($i <= 100){
    if($i % 3 === 0) echo $i."\n";
    $i++;
}


//Task 2
echo "\nTask 2 \n";
$j = 0;

do{     
        if ($j == 0){
            echo $j." ноль \n";
            $j++;
        }
        if ($j % 2 === 0 && $j <= 10){
            echo $j." четное \n";
            $j++;
        }
        if ($j % 2 !== 0 && $j <= 10){
            echo $j." нечетное \n";
            $j++;
        }   
} while($j <= 10);


//Task 3
echo "\nTask 3 \n";

$cityArr = ["Московская область:" => ["Москва", "Зеленоград", "Клин"], 
"Ленинградская область:" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
"Рязанская область" => ["Спас-Клепики‎", "Рязань","Касимов‎"]];
print_r($cityArr)."\n";



//Task 4
echo "\nTask 4 \n";

function translit($str){
    $converter = [
            'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
            'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
            'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
            'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
            'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
            'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
            'э' => 'e',    'ю' => 'yu',   'я' => 'ya'
    ];
    $arrFromStr = preg_split('//u', $str, null, PREG_SPLIT_NO_EMPTY);
   
    
    for($i = 0; $i <= count($arrFromStr) - 1; $i++){
        $el =  $converter[$arrFromStr[$i]];
        if($el === "") $arrFromStr[$i] = "";
        if($el) {
             $arrFromStr[$i] = $el;
        }
        
        
    };
    return implode("", $arrFromStr);
};

 echo translit("й уц ке п ывыфву впа фы ъ ь");


//Task 5
echo "\nTask 5 \n";
$str = "Hello world\n";
echo str_replace(" ", "_", $str);

function replace($sub, $search, $replace){
    if(!(is_array($sub)))$arrFromStr = preg_split('//u', $sub, null, PREG_SPLIT_NO_EMPTY);
    else{ 
        //Так как не известно в каком виде поступит массив, 1 элемент может быть равен 1 букве или целому слову,
        //по-этому я превращаю массив в строку и потом собираю его кладя в 1 элемент 1 символ. 
        //Сделано это для корректной замены.
        $str = implode($sub);
        $arrFromStr = Array();
        for($i = 0; $i < strlen($str); $i++){
            $arrFromStr[$i] = $str[$i];
        }
    }
    foreach($arrFromStr as $key => $el){
        if($el === $search) $arrFromStr[$key] = $replace;
    }
    return implode("", $arrFromStr);
}
echo replace("Hello World", " ", "_")."\n";
echo replace(["Hello"," ","World"], " ", "_")."\n";


//Task 6
echo "\nTask 6 \n";

$arrList = ["N1",["N2","N3"],["N4",["N5","N6",["N7", "N8", ["N1",["N2","N3"],["N4",["N5","N6",["N7", "N8",]]]]]]]];


function innerHtml($arr){
    echo "<ul>";

        for($i = 0; $i < count($arr); $i++){
            $el = $arr[$i];
            if(is_array($el)){
                innerHtml($el);
            } else{
                echo "<li>";

                echo $el;

                echo "</li>";
            }
        }

    echo "</ul>";
}

innerHtml($arrList);


//Task 7
echo "\nTask 7 \n";
function output ($num){ echo $num;};

for($i = 0; $i < 10; output($i++)){};


//Task 8
echo "\nTask 8 \n";

function outputCity($arr){
    foreach($arr as $el){
        foreach($el as $city){
           if(substr($city, 0, 2) === "К") print_r($city." ");
        };
    };
};

outputCity($cityArr);





//Task 9
echo "\nTask 9 \n";

function toURL($str, $search, $replace){
    $strTranslit = translit($str);
    return replace($strTranslit, $search, $replace);
}

echo toURL("курс по пхп", " ", "_");

?>
