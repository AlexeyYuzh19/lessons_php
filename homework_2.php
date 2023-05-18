<?php
    $days = array("Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота");
    $months = array("", "января", "февраля", "марта", "апреля", "мая", "июня", "июля", "августа", "сентября", "октября", "ноября", "декабря");
    $today = date("j");
    $month= date("n");
    $year = date("Y");
    $dayOfWeek = date("w");
    $title = "Базовый курс PHP";
    $h1 = 'Урок 2. Условные блоки, ветвление функции';  
  ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <meta name="Author" content="Южанин Алексей">
    <meta name="Copyright" content="(c) Iuzhanin Alexey, никакая часть данного документа не может быть воспроизведена
                в какой-то бы ни было форме без разрешения владельца авторских прав.">
    <title><?= $title; ?></title>
    <style>
        header, footer {
            background-color: #a7aa70;
            font-size: 30px;
            color: #fff;
            padding: 50px;
        }
        header {
            text-align: right;
        }
        main {
            margin: 20px;
        }
        footer {
            text-align: center;
        }
        h2, h4 { 
            color: #011d01;
        }
        h3 { 
            color:#171757;
        }
        #quote {
            font-size: 30px;
            font-weight: bold;
            color: #013b33;
            margin-bottom: 30px;
        }
        #progress {
            height: 10px;
            background-color: rgb(141, 153, 30);
            width: 0%;
            transition: width 1s linear;
        }
    </style>
</head>

<body>
    <header>
        <p>
            <?= date('l jS F Y') ?> ( Сегодня - <?= $days[$dayOfWeek] . ", " . $today . " " . $months[$month] . " " . $year; ?> )
        </p>
    </header>
    <main>
        <div id="quote"></div>
        <div id="progress"></div>
        <h1><?= $h1; ?><br><span style="color: #013b33;">Практическое задание</span></h1>
        <h2>Задача 1</h2>
        <h3>
            Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, 
            который работает по следующему принципу:<br> 
            a. Если $a и $b положительные, вывести их разность.<br>
            b. Если $а и $b отрицательные, вывести их произведение.<br> 
            c. Если $а и $b разных знаков, вывести их сумму. Ноль можно считать положительным числом.
        </h3>
        <p>Код на PHP <strong>(для упрощения используем echo, в коде - html разметку)</strong>:<br>
            echo "Переменной _ <strong>а</strong> _ присвоено случайное значение : ". $a = rand(-100, 100).";<br>
            echo "Переменной _ <strong>b</strong> _ присвоено случайное значение : ". $b = rand(-100, 100).";<br>
            if ($a >= 0 && $b >= 0) {<br>
            $result = $a - $b;<br>
            echo "<strong>а</strong> и <strong>b</strong> положительные - разность чисел: ". " ". $result;<br>
            }<br>
            elseif ($a < 0 && $b < 0) {<br>
            $result = $a * $b;<br>
            echo "<strong>а</strong> и <strong>b</strong> отрицательные - произведение чисел: ". " ". $result;<br>
            }<br>
            else {<br>
            $result = $a + $b;<br>
            echo "<strong>а</strong> и <strong>b</strong> разных знаков - сумма чисел: ". " ". $result;<br>
            }<br><br>
            <strong>Решение :</strong>

        <p>Переменной _ <strong>а</strong> _ присвоено случайное значение : <?= $a = rand(-100, 100) ?>.<br>
           Переменной _ <strong>b</strong> _ присвоено случайное значение : <?= $b = rand(-100, 100) ?>.</p>
        <?php
            if ($a >= 0 && $b >= 0) {
                $result = $a - $b; ?>
                <p><strong>а</strong> и <strong>b</strong> положительные - разность чисел: <?= $result; ?>.</p><?php
            }
            elseif ($a < 0 && $b < 0) {
                $result = $a * $b; ?>
                <p><strong>а</strong> и <strong>b</strong> отрицательные - произведение чисел: <?= $result; ?>.</p><?php
            }
            else {
                $result = $a + $b; ?>
                <p><strong>а</strong> и <strong>b</strong> разных знаков - сумма чисел: <?= $result; ?>.</p><?php
            }
        ?>
        </p>
        <h2>Задача 2</h2>
        <h3>
            Присвоить переменной а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от
            a до 15.
        </h3>
        <p>Код на PHP:<br>
            $a = rand(0, 20); // <strong>Чуток изменим</strong> условие - присваиваем переменной _ <strong>a</strong> _
            случайное значение в промежутке <strong>[0..20]</strong><br>
            switch ($a) {<br>
            case 0:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "0";<br>
            case 1:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "1";<br>
            case 2:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "2";<br>
            case 3:
            &nbsp;&nbsp;&nbsp;&nbsp;echo "3";<br>
            case 4:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "4";<br>
            case 5:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "5";<br>
            case 6:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "6";<br>
            case 7:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "7";<br>
            case 8:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "8";<br>
            case 9:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "9";<br>
            case 10:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "10";<br>
            case 11:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "11";<br>
            case 12:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "12";<br>
            case 13:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "13";<br>
            case 14:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "14";<br>
            case 15:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "15";<br>
            &nbsp;&nbsp;&nbsp;&nbsp;break;<br>
            default:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "Число не входит в диапазон [0..15]";<br>
            }<br>
            Код генерирует случайное число в диапазоне <strong>от 0 до 20</strong> и выводит на экран все числа от этого
            числа до 15 включительно, используя оператор switch. Если число не входит в диапазон 0..15, то выводится
            сообщение об ошибке.<br>Оператор break нужен только чтобы прервать выполнение switch после последнего case.<br><br>
            <strong>Решение :</strong><br>
        <?php
            echo "Переменной _ <strong>а</strong> _ присвоено случайное значение : ". $a = rand(0, 20).".<br>";
            echo " Выводим числа от ". (int)$a . " до 15, если число входит в диапазон 0..15:<br>";
            switch ((int)$a) {
                case 0:
                    echo "0<br>";
                case 1:
                    echo "1<br>";
                case 2:
                    echo "2<br>";
                case 3:
                    echo "3<br>";
                case 4:
                    echo "4<br>";
                case 5:
                    echo "5<br>";
                case 6:
                    echo "6<br>";
                case 7:
                    echo "7<br>";
                case 8:
                    echo "8<br>";
                case 9:
                    echo "9<br>";
                case 10:
                    echo "10<br>";
                case 11:
                    echo "11<br>";
                case 12:
                    echo "12<br>";
                case 13:
                    echo "13<br>";
                case 14:
                    echo "14<br>";
                case 15:
                    echo "15<br>";
                    break;
                default:
                    echo "Число не входит в диапазон [0..15]<br>";
            }
        ?>
        </p>
        <h2>Задача 3</h2>
        <h3>
        Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.<br>
        Обязательно использовать оператор return.
        </h3>
        <p>
        Код на PHP для реализации основных 4 арифметических операций:<br><br>
        <strong>Сложение :</strong><br>
        function addition($num1, $num2) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;return $num1 + $num2;<br>
        }<br>
        <strong>Разность :</strong><br>
        function subtraction($num1, $num2) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;return $num1 - $num2;<br>
        }<br>
        <strong>Умножение :</strong><br>
        function multiplication($num1, $num2) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;return $num1 * $num2;<br>
        }<br>
        </p>
        <strong>Деление :</strong><br>
        function division($num1, $num2) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;if ($num2 == 0) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return "Нарушено правило деления - на ноль делить нельзя";<br>
            &nbsp;&nbsp;&nbsp;&nbsp;}<br>
            &nbsp;&nbsp;&nbsp;&nbsp;return $num1 / $num2;<br>
        }<br>
        <?php
            function addition($num1, $num2) {
                return $num1 + $num2;
            }

            function subtraction($num1, $num2) {
                return $num1 - $num2;
            }

            function multiplication($num1, $num2) {
                return $num1 * $num2;
            }

            function division($num1, $num2) {
                if ($num2 == 0) {
                    return "Нарушено правило деления - на ноль делить нельзя";
                }
                return $num1 / $num2;
            }
        ?>       
        <h2>Задача 4</h2>
        <h3>
        Реализовать функцию с тремя параметрами:<br>
        function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – 
        строка с названием операции.<br>В зависимости от переданного значения операции выполнить одну из 
        арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).   
        </h3>
        <p><strong>Код на PHP :</strong><br>
        function mathOperation($arg1, $arg2, $operation) {<br>
            &nbsp;&nbsp;switch ($operation) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;case 'addition':<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return addition($arg1, $arg2);<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;case 'subtraction':<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return subtraction($arg1, $arg2);<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;case 'multiplication':<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return multiplication($arg1, $arg2);<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;case 'division':<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return division($arg1, $arg2);<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;default:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return "Неизвестная для функции операция";<br>
            &nbsp;&nbsp;}<br>
        }
        </p>
        <?php
            function mathOperation($arg1, $arg2, $operation) {
                switch ($operation) {
                    case 'addition':
                        return addition($arg1, $arg2);
                        break;
                    case 'subtraction':
                        return subtraction($arg1, $arg2);
                        break;
                    case 'multiplication':
                        return multiplication($arg1, $arg2);
                        break;
                    case 'division':
                        return division($arg1, $arg2);
                        break;
                    default:
                        return "Неизвестная для функции операция";
                }
            }
            ?>
        <h4>Решение :</h4>
        <p>Значения аргументов для операции сложение - mathOperation(5, 3, 'addition').<br> 
            <strong>Результат: <?= mathOperation(5, 3, 'addition'); ?>.</strong></p>
        <p>Значения аргументов для операции разности - mathOperation(10, 4, 'subtraction').<br> 
            <strong>Результат: <?= mathOperation(10, 4, 'subtraction'); ?>.</strong></p>   
        <p>Значения аргументов для операции умножения - mathOperation(2, 6, 'multiplication').<br> 
            <strong>Результат: <?= mathOperation(2, 6, 'multiplication'); ?>.</strong></p>
        <p>Значения аргументов для операции деления - mathOperation(20, 5, 'division').<br> 
            <strong>Результат: <?= mathOperation(20, 5, 'division'); ?>.</strong></p>
        <p>Значения аргументов для иной операции - mathOperation(5, 3, 'уровнять и поделить').<br> 
            <strong>Результат: <?= mathOperation(5, 3, 'уровнять и поделить'); ?>.</strong></p>
        <h2>Задача 5</h2>
        <h3>
        Посмотреть на встроенные функции PHP.<br>
        Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.   
        </h3>
        <h4>Решение :</h4>
        <p>
        При помощи встроенных функций PHP в <strong>header</strong> - выведена текущая информация о дне неделе, времени, месяце и годе. 
        Дополнительно с переводом на русский язык.<br>
        При помощи встроенной функции PHP в <strong>footer</strong> - выведена текущая информация о годе.
        </p>
        <h2>Задача 6</h2>
        <h3>
        *С помощью рекурсии организовать функцию возведения числа в степень.<br>
        Формат: function power($val, $pow), где $val – заданное число, $pow – степень.  
        </h3>
        <p><strong>Код на PHP :</strong><br>
        function power($val, $pow) {<br>
            &nbsp;&nbsp;if ($pow == 0) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;return 1;<br>
            &nbsp;&nbsp;}<br> 
            &nbsp;&nbsp;elseif ($pow == 1) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;return $val;<br>
            &nbsp;&nbsp;}<br>         
            &nbsp;&nbsp;elseif ($pow < 0) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;return power(1 / $val, -$pow);<br>
            &nbsp;&nbsp;}<br> 
            &nbsp;&nbsp;elseif ($pow % 2 == 0) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;$tmp = power($val, $pow / 2);<br>
            &nbsp;&nbsp;&nbsp;&nbsp;return $tmp * $tmp;<br>
            &nbsp;&nbsp;}<br> 
            &nbsp;&nbsp;else {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;return $val * power($val, $pow - 1);<br>
            &nbsp;&nbsp;}<br>
        }
        </p>
        <p>
        Функция принимает два аргумента: $val - число, которое нужно возвести в степень, и $pow - степень, 
        в которую нужно возвести число.<br>Если степень равна 0, функция возвращает 1.<br>
        Если степень равна 1, функция возвращает число $val.<br>
        Если степень отрицательна, функция вызывает саму себя с обратным значением числа $val и положительной степенью.<br>
        Если степень четная, функция вызывает саму себя с числом $val и половиной степени, а затем возвращает произведение 
        двух таких вызовов.<br>
        Если степень нечетная, функция вызывает саму себя с числом $val и степенью, уменьшенной на 1, а затем возвращает 
        произведение числа $val и результата этого вызова.
        </p>
        <h4>Решение с использованием рандомных аргументов :</h4>
        <?php
        function power($val, $pow) {
            if ($pow == 0) {
                return 1;
            } 
            elseif ($pow == 1) {
                return $val;
            } 
            elseif ($pow < 0) {
                return power(1 / $val, -$pow);
            } 
            elseif ($pow % 2 == 0) {
                $tmp = power($val, $pow / 2);
                return $tmp * $tmp;
            } 
            else {
                return $val * power($val, $pow - 1);
            }
        }  
        ?>
        <p>Значение числа $val, которое нужно возвести в степень : <?= $val = rand(-5, 5); ?><br>
           Значение степени $pow : <?= $pow = rand(-4, 4); ?><br> 
           <strong>Результат : <?= power($val, $pow); ?></strong>
        </p>
        <h2>Задача 7</h2>
        <h3>
        *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, 
        например: 22 часа 15 минут, 21 час 43 минуты.<br><br>
        Текущее время : <?= date("H:i:s") ?>  
        </h3>
        <h4>Решение :</h4>
        <h2>
        <?php
        function getCurrentTime() {
            $hour = date('H');
            $minute = date('i');
            $hourText = getNoun($hour, array('час', 'часа', 'часов'));
            $minuteText = getNoun($minute, array('минута', 'минуты', 'минут'));
            return $hourText . ' ' . $minuteText;
        }
        function getNoun($number, $titles) {
            $cases = array(2, 0, 1, 1, 1, 2);
            return $number . ' ' . $titles[($number % 100 > 4 && $number % 100 < 20) ? 2 : $cases[min($number % 10, 5)]];
        }
        echo getCurrentTime();
        ?>
        </h2>
    </main>
    <footer>
        <p>
            Copyright &copy;<?= ' ' . date('Y'); ?>
        </p>
    </footer>
    <script>   
        const quotes = [
        "Все, что не делается – к лучшему.",
        "Счастье не в деньгах, а в их количестве.",
        "Кто не рискует, тот не пьет шампанское.",
        "Жизнь – это не ожидание, а использование каждой минуты.",
        "Лучше быть головой у мышеловки, чем хвостом у кота.",
        "Не говори, что ты устал, говори, что ты работал.",
        "Самое трудное – это начать действовать. Все остальное зависит только от упорства.",
        "Успех – это не конечная точка, это постоянное движение вперед.",
        "Не ждите, что успех придет к вам – идите за ним!",
        "Лучший способ предсказать будущее – создать его самому.",
        ];
        function getRandomQuote() {
            var index = Math.floor(Math.random() * quotes.length);
            return quotes[index];
        }
        function showQuote() {
            var quoteDiv = document.getElementById("quote"),
                quote = getRandomQuote();
            quoteDiv.innerHTML = quote;
            var progressDiv = document.getElementById("progress")
            ;(progressDiv.style.width = "0%"),
            (progressDiv.style.backgroundImage = "url('green.png?" + Math.random() + "')")
            var width = 0,
            interval = setInterval(function () {
            ;(width += 10), (progressDiv.style.width = width + "%"), 90 <= width && clearInterval(interval)
            }, 1e3)
        }
        showQuote(), setInterval(showQuote, 1e4)
    </script>
</body>

</html>