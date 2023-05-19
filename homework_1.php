<?php
$title = 'Базовый курс PHP';
$h1 = 'Урок 1. Введение в PHP. Домашнее задание';
$year = date('Y');
$a = 111;
$b = 777;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="author" content="Luka Cvrk (www.solucija.com)" />
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <title><?= $title; ?></title>
    <style>
        html {
            background-color: #e3ebe2;
        }

        body {
            width: 1300px;
            margin: 0 auto;
            background-color: #95a792;
            padding: 20px 100px;
            border: 2px solid #4a4b02;
            font: .8em Georgia, "Times New Roman", Serif;
            background-image: url(img/oldpaper.jpeg);
            background-repeat: repeat-x repeat-y;
            background-position: center center;
            background-attachment: fixed;
            margin: 25px auto;
        }

        a {
            color: #D40000;
            text-decoration: none;
        }

        a:hover {
            color: #8F0000;
        }

        p {
            line-height: 3em;
            margin: 0 0 15px;
        }

        .x {
            clear: both;
        }

        h1 {
            float: left;
            font-size: 2em;
            font-weight: normal;
            font-style: italic;
            padding: 0 0 25px 10px;
            margin: 0 0 10px;
        }

        h2 {
            font-weight: normal;
            font-size: 2.6em;
            padding: 0 0 10px;
            margin: 0 0 15px;
            font-size: 24px;
        }

        h3 {
            font-size: 1.7em;
            font-weight: normal;
            margin: 0 0 20px;
        }

        h3 a {
            color: #222;
        }

        #content {
            width: 960px;
            margin: 40px auto;
        }

        #menu {
            float: right;
            margin: 10px 10px 0 0;
        }

        #menu li {
            display: inline;
            list-style: none;
        }

        #menu li a {
            float: left;
            margin: 0 0 0 20px;
            color: #888;
        }

        #menu li a:hover {
            color: #555;
        }

        .post {
            clear: both;
            padding: 30px 10px;
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            margin: 0 0 40px;
        }

        .post .details {
            float: left;
            width: 250px;
        }

        .post .details .info {
            font-size: .9em;
            color: #999;
        }

        .post .details .info a {
            color: #777;
            border-bottom: 1px dotted #999;
            padding: 3px 1px;
        }

        .post .body {
            float: right;
            width: 618px;
            padding: 0 0 0 30px;
            border-left: 1px solid #ddd;
        }

        .col {
            width: 290px;
            margin: 0 40px 30px 0;
            float: left;
            font-size: .9em;
        }

        .col.last {
            margin-right: 0;
        }

        #footer {
            clear: both;
            border-top: 1px solid #ddd;
            padding: 20px 0;
            font-size: .9em;
            color: #999;
        }
    </style>
</head>

<body>
    <div id="content">
        <h1 style="color: #013b33;"><?= $h1; ?></h1>

        <ul id="menu">
            <li><a href="#">home</a></li>
            <li><a href="#">archive</a></li>
            <li><a href="#">contact</a></li>
        </ul>

        <div class="post">
            <div class="details">
                <h2><a href="#">Nunc commodo euismod massa quis vestibulum</a></h2>
                <p class="info">posted 3 hours ago in <a href="#">general</a></p>

            </div>
            <div class="body">
                <p style="color: #013b33;">
                    $a = 5; $b = '05'; var_dump($a == $b). Получаем значение:
                    <strong><?php
                            $A = 5;
                            $B = '05';
                            var_dump($A == $B);
                            ?>.</strong><br><br>Почему true?
                </p>
                <p> В языке PHP используется слабая типизация данных, поэтому при сравнении значений разных типов выполняется
                    неявное преобразование типов. Если переменные $a и $b имеют разные типы, то они приводятся к одному типу и
                    сравниваются.<br>В данном случае, строковое значение '05' приводится к числовому типу и сравнивается с "5".<br>
                    Это неявное приведение типов позволяет установить, что значение переменной $a равно значению переменной $b.<br>
                    Поэтому выражение var_dump($a==$b) возвращает true.
                </p>
            </div>
            <div class="x"></div>
        </div>

        <div class="col">
            <h3><a href="#">Ut enim risus rhoncus</a></h3>
            <p style="color: #013b33;">
                var_dump((int)'012345'). Получаем значение: <strong><?php var_dump((int)'012345'); ?>.</strong><br><br>Почему 12345?
            </p>
            <p>
                Функция var_dump() используется для вывода информации о переменной или выражении, включая ее тип и значение.<br>
                В данном выражении строка '012345' приводится к целочисленному типу с помощью функции (int), которая удаляет
                ведущие нули. Поэтому результатом будет число 12345.<br>
                В PHP ведущие нули в целочисленных литералах интерпретируются как восьмеричные цифры.<br>
                Например, число 012345 воспринимается как восьмеричное число, которое равно 41301 в десятичной системе счисления.<br>
                Однако, если в строке присутствуют символы, не являющиеся восьмеричными цифрами (такие как 8 или 9),
                то строка будет интерпретирована как десятичное число.<br>
                Таким образом, приведение строки '012345' к целочисленному типу с помощью функции (int) приводит к удалению ведущих
                нулей и получению числа 12345.
            </p>
            <p>&not; <a href="#">read more</a></p>
        </div>
        <div class="col">
            <h3><a href="#">Maecenas iaculis leo</a></h3>
            <p style="color: #013b33;">
                var_dump((float)123.0 === (int)123.0). Получаем значение:
                <strong><?php var_dump((float)123.0 === (int)123.0); ?>.</strong><br><br>Почему false?
            </p>
            <p>
                Pезультат "false" потому, что оператор " === " выполняет не только операцию сравнения, но еще и сравнивает типы операндов.<br>
                "(float)123.0" - это число с плавающей точкой (тип "float"), а "(int)123.0" - целое число (тип "int").<br>
                Числа 123.0 и 123 содержат одинаковые значения, но они имеют разные типы.<br>
                Поэтому, сравнение (float)123.0 === (int)123.0 дает "false", потому что типы различны, и только значения равны.<br>
                Если бы мы сравнивали только значения оператором ( == ), то результат был бы "true".
            </p>
            <p>&not; <a href="#">read more</a></p>
        </div>
        <div class="col last">
            <h3><a href="#">Quisque consectetur odio</a></h3>
            <p style="color: #013b33;">
                var_dump((int)0 === (int)'hello, world'). Получаем значение:
                <strong><?php var_dump((int)0 === (int)'hello, world'); ?>.</strong><br><br>Почему true?
            </p>
            <p>
                Выражение var_dump((int)0 === (int)'hello, world'); возвращает "true", потому что при приведении строки
                'hello, world' к целочисленному типу, PHP пытается прочитать число из начала строки.<br>
                Но так как в начале строки нет числа, то приведение к целочисленному типу возвращает 0.<br>
                Следовательно, выражение (int)0 === (int)'hello, world' сравнивает два значения типа int,
                которые равны между собой, поэтому результатом является "true".
            </p>
            <p>&not; <a href="#">read more</a></p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>

        <h3 style="color: #013b33;">
            Дополнительная задача
        </h3>
        <h4>
            Используя только две переменные, поменяйте их значение местами.<br>
            Дополнительные переменные использовать нельзя.<br><br>
        </h4>
        <p>
            В PHP для обмена значениями двух переменных без использования промежуточной переменной можно использовать
            арифметические операции сложения и вычитания:<br>
            $a = $a + $b<br>
            $b = $a - $b<br>
            $a = $a - $b<br>
            <?php
            echo 'a = ' . $a;
            echo '<br>';           // Для получения переноса строки на PHP используется сочетание\ n, которое пишется внутри 
            //  двойных кавычек, но песочницы PHP не видят этого, поэтому используем echo '<br>' 
            echo 'b = ' . $b;
            echo '<br>';
            echo 'обмен значениями по вышеописанному алгоритму :';
            echo '<br>';
            $a = $a + $b;
            $b = $a - $b;
            $a = $a - $b;
            echo 'a = ' . $a;
            echo '<br>';
            echo 'b = ' . $b;
            ?>
        </p>
        <p>
            В PHP можно поменять местами значения переменных без использования промежуточной переменной с помощью операции
            исключающего ИЛИ (XOR):<br>
            $a = $a ^ $b<br>
            $b = $a ^ $b<br>
            $a = $a ^ $b<br>
            <?php
            echo 'a = ' . $a;
            echo '<br>';
            echo 'b = ' . $b;
            echo '<br>';
            echo 'обмен значениями по вышеописанному логическому алгоритму :';
            echo '<br>';
            $a = $a ^ $b;
            $b = $a ^ $b;
            $a = $a ^ $b;
            echo 'a = ' . $a;
            echo '<br>';
            echo 'b = ' . $b;
            ?>
        </p>

        <div id="footer">
            <p>Copyright &copy; <strong style="color: #013b33; font-size: 1.7em;"><?= $year; ?></strong> &middot; <em>minimalistica</em> &middot;
                Design: Luka Cvrk, <a href="http://www.solucija.com/" title="Free CSS Templates">Solucija</a></p>
        </div>
    </div>
</body>

</html>