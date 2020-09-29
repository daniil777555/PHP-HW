<?php 
    //Task 1
    $a = 5;
    $b = '05';
   
    var_dump($a == $b);                             // Почему true? При использовании такого оператора оба значения приводятся к одному типу данных.
    
    var_dump((int)'012345');                        // Почему 12345? Функция (int) приводит данные к типу int.
    
    var_dump((float)123.0 === (int)123.0);          // Почему false? Разные типы данных.
    
    var_dump((int)0 === (int)'hello, world');       // Почему true? При приведении строки (состоящей из букв и символов, числа приведутся к  int и будут иметь то же числовое значение) к типу int получается 0.
    echo (int)'hello, world';


    //Task 2
    $date = date("d.m.y");
    $copy = date("Y");
    $parOne = 1;
    $parTwo = 2;
    

    //Tsak 3
    $c = 6;
    $d = 21;
    echo "<br><br>Part 1 <br>Var 1 : $c,<br> Var 2 : $d";

    $c += $d; 
    $d = $c - $d;
    $c -= $d; 
    echo "<br><br>Part 2 <br>Var 1 : $c,<br> Var 2 : $d";
?>


<!-- Task 2 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family: 'Roboto', 'sans-serif'
        }
        .container{
            background: #040c54;
            color: white;
            padding: 25px;
            margin: 0 auto;
            width: 1200px;
        }
        h1, header, footer{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Lorem ipsum dolor sit.</h1>
            <p>Date: <?php echo $date; ?></p>
        </header>
        <main>
            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi fugit id ex.</h1>
            <p id="one"><?php echo $parOne; ?>. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab neque, nulla ad distinctio saepe deserunt assumenda fugit amet dolorem molestiae a beatae, consectetur at magnam inventore quod dicta voluptates quos nobis, delectus libero? Nesciunt nihil adipisci inventore porro? Ullam at magni nisi facere qui optio exercitationem quod eius perspiciatis reprehenderit. Voluptatibus ad illum accusantium distinctio, eaque dicta fuga voluptatem saepe optio maxime amet aperiam cupiditate.</p>
            <p id="two"><?php echo $parTwo; ?>. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptatibus dicta porro eum amet aliquam. Iusto officia debitis reiciendis voluptatum voluptates atque aperiam nihil eaque nemo error ex ab doloribus nam dolor eligendi tenetur sit, repellendus omnis vel fugit distinctio mollitia! Placeat itaque vitae praesentium eum necessitatibus dolorum molestiae inventore quasi excepturi voluptates numquam eveniet quod, quae perferendis autem ea culpa facilis ratione libero ipsa enim voluptas, nihil porro. Et quod eligendi atque illo quos vel, sequi quaerat tenetur.</p>
        </main>
        <footer>
            <p>&copy; Copyright <?php echo $copy; ?></p>
        </footer>
    </div>
    
</body>
</html>