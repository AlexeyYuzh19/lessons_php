<?php
$days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
$months = ['', 'января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'];
$today = date('j');
$month = date('n');
$year = date('Y');
$dayOfWeek = date('w');
$title = 'Базовый курс PHP';
$h1 = 'Урок 3. Циклы и массивы';
$cities = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин', 'Южное Бутово'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Касимов', 'Скопин'],
    'Свердловская область' => ['Екатеринбург', 'Нижний Тагил', 'Каменск-Уральский', 'Серов', 'Богданович']
];
$translit = [
    'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z',
    'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r',
    'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'ts', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
    'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya', 'А' => 'A', 'Б' => 'B', 'В' => 'V',
    'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh', 'З' => 'Z', 'И' => 'I', 'Й' => 'Y', 'К' => 'K',
    'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U',
    'Ф' => 'F', 'Х' => 'H', 'Ц' => 'Ts', 'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '',
    'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya', '.' => '.', ',' => ',', ':' => ':', ';' => ';', '-' => '-'
];    // объявляем массив с транслитерацией
$menuItems = [
    ['title' => 'Главная', 'link' => '/', 'subitems' => []],
    ['title' => 'О нас', 'link' => '/about', 'subitems' => [
        ['title' => 'История', 'link' => '/about/history'],
        ['title' => 'Команда', 'link' => '/about/team'],
        ['title' => 'Контакты', 'link' => '/about/contacts']
    ]],
    ['title' => 'Услуги', 'link' => '/services', 'subitems' => [
        ['title' => 'Веб-разработка', 'link' => '/services/web'],
        ['title' => 'Мобильная разработка', 'link' => '/services/mobile']
    ]]
];
?>

<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, maximum-scale=1'>
    <meta name='Author' content='Южанин Алексей'>
    <meta name='Copyright' content='(c) Iuzhanin Alexey, никакая часть данного документа не может быть воспроизведена
                в какой-то бы ни было форме без разрешения владельца авторских прав.'>
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

        header,
        footer {
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

        h2 {
            color: #011d01;
            font-size: 22px;
        }

        h3 {
            color: #171757;
            font-size: 18px;
        }

        p {
            font-size: 20px;
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
            <?= date('l jS F Y') ?> ( Сегодня - <?= $days[$dayOfWeek] . ', ' . $today . ' ' . $months[$month] . ' ' . $year; ?> )
        </p>
    </header>
    <main>
        <div id='quote'></div>
        <div id='progress'></div>
        <h1><?= $h1; ?><br><span style="color: #013b33;">Практическое задание</span></h1>
        <h2>Задача 1</h2>
        <h3>
            С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.
        </h3>
        <h3>Решение :</h3>
        <p>
            <?php
            $number = 0; // инициализируем переменную числа, которую будем проверять
            while ($number <= 100) { // цикл будет выполняться пока число не превысит 100
                if ($number % 3 == 0) { // проверяем, делится ли число на 3 без остатка
                    echo $number . ', '; // выводим число в строку через запятую
                }
                $number++; // увеличиваем переменную на 1
            }
            ?>
        </p>
        <h2>Задача 2</h2>
        <h3>
            С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:<br>
            0 – это ноль.<br>1 – нечетное число.<br>2 – четное число.<br>3 – нечетное число.<br>…<br>10 – четное число.
        </h3>
        <h3>Решение :</h3>
        <?php
        function printNumbers()
        {
            $i = 0;
            do {
                if ($i == 0) {
                    echo $i . ' - это ноль.<br>';
                } elseif ($i % 2 == 0) {
                    echo $i . ' - четное число.<br>';
                } else {
                    echo $i . ' - нечетное число.<br>';
                }
                $i++;
            } while ($i <= 10);
        }
        ?>
        <p>Четные и нечетные числа от 0 до 10 :<br><?= printNumbers(); ?></p>
        <h2>Задача 3</h2>
        <h3>
            Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений –
            массивы с названиями городов из соответствующей области.<br>
            Вывести в цикле значения массива, чтобы результат был таким:<br>
            Московская область: Москва, Зеленоград, Клин<br>
            Ленинградская область: Санкт-Петербург, Всеволожск, Павловск, Кронштадт<br>
            Рязанская область: …<br>
            (названия городов можно найти на maps.yandex.ru)
        </h3>
        <h3>Решение :</h3>
        <?php
        function printCities($cities)
        {
            foreach ($cities as $region => $cityList) {
                echo $region . ' : ';
                foreach ($cityList as $city) {
                    echo $city . ', ';
                }
                echo '<br>';
            }
        }
        ?>
        <p><strong>Вывод городов из массива в соответствии региону :</strong><br><? printCities($cities); ?></p>
        <h2>Задача 4</h2>
        <h3>
            Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские
            буквосочетания ("а"=> "a", "б" => "b", "в" => "v", "г" => "g", …, "э" => "e", "ю" => "yu", "я" => "ya").<br>
            Написать функцию транслитерации строк.
        </h3>
        <h3>Решение :</h3>
        <?php
        function translitStr($str)
        {
            global $translit;
            $result = '';
            for ($i = 0; $i < mb_strlen($str); $i++) {
                $char = mb_substr($str, $i, 1);
                if (isset($translit[$char])) {
                    $result .= $translit[$char];
                } else {
                    $result .= $char;
                }
            }
            return $result;
        }
        ?>
        <p>Зададим фразу <strong>'Привет, МИР программного кода!'</strong><br>
            Результат транслитерации : <strong><?= translitStr('Привет, МИР программного кода!'); ?></strong></p>
        <h2>Задача 5</h2>
        <h3>
            Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
        </h3>
        <h3>Решение :</h3>
        <p>
            Используем цикл <strong>for</strong> для перебора всех символов в строке и проверки, является ли текущий символ
            пробелом. Если да, то он заменяется на подчеркивание в результирующей строке, иначе символ добавляется в
            результирующую строку без изменений.
        </p>
        <?php
        function replaceSpacesStr($str)
        {
            $result = '';
            for ($i = 0; $i < strlen($str); $i++) {
                if ($str[$i] == ' ') {
                    $result .= '_';
                } else {
                    $result .= $str[$i];
                }
            }
            return $result;
        }
        ?>
        <p>Зададим фразу <strong>'Да здравствует тот самый МИР программного кода РНР!'</strong><br>
            Результат замены пробелов на подчеркивание :
            <strong><?= replaceSpacesStr('Да здравствует тот самый МИР программного кода РНР!'); ?></strong>
        </p>
        <h2>Задача 6</h2>
        <h3>
            В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP.<br>
            Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать
            меню с вложенными подменю? Попробовать его реализовать.
        </h3>
        <h3>Решение :</h3>
        <p>
            Используем массив <strong>$menuItems</strong>, который содержит пункты меню и их свойства, а также функцию
            <strong>generateMenu()</strong>, которая генерирует HTML-код для меню на основе этого массива.<br>
            В шаблоне сайта вызываем эту функцию и выводим результат внутри тега <strong>
                < nav>
            </strong>.<br>
            Таким образом, меню на сайте будет динамическим и будет автоматически обновляться при изменении
            массива <strong>$menuItems.</strong>
        </p>
        <?php
        function generateMenu($menuItems)
        {
            $result = '<ul>';
            foreach ($menuItems as $item) {
                $result .= '<li><a href="' . $item['link'] . '">' . $item['title'] . '</a>';
                if (!empty($item['subitems'])) {
                    $result .= generateMenu($item['subitems']);
                }
                $result .= '</li>';
            }
            $result .= '</ul>';
            return $result;
        }
        ?>
        <nav style='font-size: 22px;'>
            <?= generateMenu($menuItems); ?>
        </nav>
        <h2>Задача 7</h2>
        <h3>
            *Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла.<br>То есть выглядеть должно так:
            for (…){ // здесь пусто}
        </h3>
        <h3>Решение :</h3>
        <p>
            Используем цикл <strong>for</strong> для вывода чисел от 0 до 9.<br>В теле цикла указываем пустое место
            <strong>{ }</strong> и выводим нужное число <strong>$i</strong> с помощью функции <strong>print</strong>.<br>
            Затем увеличиваем значение <strong>$i</strong> с помощью инкремента <strong>++</strong>.<br>Таким образом,
            при каждой итерации выводится текущее значение <strong>$i</strong> без использования тела цикла.
        </p>
        <?php
        function printCycle()
        {
            for ($i = 0; $i < 10; print $i++) {
            };
        }
        ?>
        <p><strong>Результат - вывод числа от 0 до 9 :</strong><br><?= printCycle(); ?></p>
        <h2>Задача 8</h2>
        <h3>
            *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».
        </h3>
        <h3>Решение :</h3>
        <p>
            <?php
            foreach ($cities as $region => $cityList) {
                echo $region . ' : ';
                foreach ($cityList as $city) {
                    if (mb_substr($city, 0, 1) == 'К') {
                        echo $city . '<br>';
                    }
                }
            }
            ?>
        </p>
        <h2>Задача 9</h2>
        <h3>
            *Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию
            и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).
        </h3>
        <h3>Решение :</h3>
        <?php
        function generateQuote()  // функция генерации цитаты
        {
            $quotes = [
                'Единственный способ делать великую работу - это любить то, что ты делаешь. - Стив Джобс',
                'Если вы хотите прожить счастливую жизнь, свяжите ее с целью, а не с людьми или вещами. - Альберт Эйнштейн',
                'Мы не можем решить наши проблемы с помощью того же мышления, которое мы использовали, когда создавали их. - Альберт Эйнштейн',
                'Воображение важнее знаний. - Альберт Эйнштейн',
                'Поверь, что ты можешь, и ты на полпути к цели. - Теодор Рузвельт',
                'Быть самим собой в мире, который постоянно пытается сделать из тебя что-то другое, - величайшее достижение. - Ральф Уолдо Эмерсон',
                'На воротах заводов Генри Форда висела надпись: «Помни, что Бог создал человека без запасных частей»',
                'Если весь мир настроен против тебя, помни, что самолет взлетает против ветра. - Генри Форд',
                'Самая хорошая работа — это высокооплачиваемое хобби. - Генри Форд',
                'Если ты будешь колоть дрова сам, то согреешься ими дважды. - Генри Форд'
            ];
            $index = rand(0, count($quotes) - 1);    // выбираем случайную цитату из массива
            return $quotes[$index];
        }
        ?>
        <p>Цитата для преобразования в формат условия задачи :<br><strong><?= $quote = generateQuote(); ?>.</strong></p>
        <p>Преобразованная в заданный формат цитата :<br><strong><?= replaceSpacesStr(translitStr($quote)); ?>.</strong></p>

    </main>
    <footer>
        <p>
            Copyright &copy;<?= ' ' . date('Y'); ?>
        </p>
    </footer>
    <script>
        const quotes = [
            'Величайшая слава в жизни заключается не в том, чтобы никогда не падать, а в том, чтобы подниматься каждый раз, когда мы падаем. - Нельсон Мандела',
            'Успех не окончателен, неудача не фатальна: главное - мужество продолжать. - Уинстон Черчилль',
            'Единственный способ делать великую работу - любить то, что ты делаешь. - Стив Джобс',
            'Счастье - это не что-то готовое. Оно приходит от ваших собственных действий. - Далай-лама XIV',
            'Поверь, что ты можешь, и ты уже на полпути. - Теодор Рузвельт',
            'Лучший способ предсказать будущее - это изобрести его. - Алан Кей',
            'Единственная истинная мудрость заключается в том, чтобы знать, что ты ничего не знаешь. - Сократ',
            'Будьте тем изменением, которое вы хотите видеть в мире - Махатма Ганди',
            'В трех словах я могу подытожить все, что я узнал о жизни: она продолжается. - Роберт Фрост',
            'Жизнь - это 10% того, что с нами происходит, и 90% того, как мы на это реагируем. - Чарльз Р. Свиндолл',
        ];

        function getRandomQuote() {
            var index = Math.floor(Math.random() * quotes.length);
            return quotes[index];
        }

        function showQuote() {
            var quoteDiv = document.getElementById('quote'),
                quote = getRandomQuote();
            quoteDiv.innerHTML = quote;
            var progressDiv = document.getElementById('progress');
            (progressDiv.style.width = '0%'),
            (progressDiv.style.backgroundImage = 'url("green.png?" + Math.random() + "")')
            var width = 0,
                interval = setInterval(function() {
                    ;
                    (width += 10), (progressDiv.style.width = width + '%'), 90 <= width && clearInterval(interval)
                }, 1e3)
        }
        showQuote(), setInterval(showQuote, 1e4)
    </script>
</body>

</html>