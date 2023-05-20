<?php
$days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
$months = ['', 'января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'];
$today = date('j');
$month = date('n');
$year = date('Y');
$dayOfWeek = date('w');
$title = 'Базовый курс PHP';
$h1 = 'Урок 4. Работа с файлами';
// массив с путями к картинкам
$images = [
    "https://mobimg.b-cdn.net/v3/fetch/db/db6e862725f8e449427d1de5b2be0835.jpeg",
    "https://mobimg.b-cdn.net/v3/fetch/42/429f04f158ff611068a6eba8af8fe776.jpeg?w=1470&r=0.5625",
    "https://s1.1zoom.ru/b5050/653/Stones_Moss_Stream_600156_3840x2400.jpg",
    "https://mobimg.b-cdn.net/v3/fetch/52/5209a3872dced549c0e9a6f8360c5471.jpeg",
    "https://mobimg.b-cdn.net/v3/fetch/ab/ab2f377bcd50c7b74f4b81142577ec9d.jpeg",
    "https://mobimg.b-cdn.net/v3/fetch/da/daf8eb568fea522f6701fb9c66378cdc.jpeg?w=1470&r=0.5625",
    "https://mobimg.b-cdn.net/v3/fetch/e6/e6044cb0b978ce39ff76b57402ebd1de.jpeg",
    "https://mobimg.b-cdn.net/v3/fetch/50/506e8ce999d5c5cdc8117326e04a8c6e.jpeg?w=1470&r=0.5625",
    "https://mobimg.b-cdn.net/v3/fetch/fd/fdac3643f05173a0ac9097b173e66dc9.jpeg",
    "https://mobimg.b-cdn.net/v3/fetch/a9/a9499ff8ee46d89fa35da405586b8034.jpeg?w=1470&r=0.5625",
    "https://mobimg.b-cdn.net/v3/fetch/3f/3f6272cb9708b884077043a397359a52.jpeg",
    "https://w-dog.ru/wallpapers/9/17/429126666661339/gavaji-okean-zakat-kamni-poberezhe.jpg",
    "https://klike.net/uploads/posts/2023-02/1675842943_3-309.jpg",
    "https://mobimg.b-cdn.net/v3/fetch/54/54a973dbd3f4183deadf08f8b135d196.jpeg",
    "https://mobimg.b-cdn.net/v3/fetch/dd/dd43a56f639d3ca0e9b9d60f6da52054.jpeg",
    "https://mobimg.b-cdn.net/v3/fetch/f0/f0c175d42726c757bad68eac27a3c425.jpeg",
    "https://w-dog.ru/wallpapers/3/1/432763282978206/pejzazh-gor-s-nebom-i-oblakami.jpg",
    "https://proprikol.ru/wp-content/uploads/2020/04/krasivye-kartinki-vysokogo-razresheniya-48.jpg",
    "https://mobimg.b-cdn.net/v3/fetch/f3/f321ddc1f47b23aaa4830f1f76e893b5.jpeg",
    "https://w-dog.ru/wallpapers/11/2/528819469500993/kanada-joxo-ozero-les-gory-skaly-sneg.jpg",
    "https://mobimg.b-cdn.net/v3/fetch/ec/ec0bd4610aa1a04d3fc7a476fcc5f00e.jpeg",
    "https://mobimg.b-cdn.net/v3/fetch/d4/d409498e03af418b323011f4545fe116.jpeg",
    "https://mobimg.b-cdn.net/v3/fetch/4b/4bce4ed2abb0a7fa7d3fc52f32268a30.jpeg",
    "https://proprikol.ru/wp-content/uploads/2019/12/rassvet-krasivye-kartinki-na-rabochij-stol-24.jpg",
    "https://mobimg.b-cdn.net/v3/fetch/e0/e0188dbd4e84fb35c3e73980fb47f55d.jpeg",
    "https://w-dog.ru/wallpapers/11/5/350554070576743/priroda-more-okean-volna-bryzgi.jpg",
    "https://mobimg.b-cdn.net/v3/fetch/f7/f762c0cbcb03d7e31688d54867640259.jpeg?w=1470&r=0.5625"
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
            background-image: url(../img/oldpaper.jpeg);
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
            border-radius: 15px;
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

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .gallery img {
            width: 200px;
            margin: 10px;
            cursor: pointer;
        }

        .line_ti {
            width: 800px;
            height: 12px;
            margin: 0 auto;
            border: 1px solid #4a4b02;
            border-radius: 3px;
            color: #fff;
            background-color: #a7aa70;

        }

        .movementLi {
            width: 0;
            height: 12px;
            transition: 0.25s;
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

        <h1 style="text-align: center; color: #013b33;" id="wordWi"></h1>
        <div class="line_ti">
            <div class="movementLi" id="movementLineWi"></div>
        </div>

        <h1><?= $h1; ?><br><span style="color: #013b33;">Практическое задание</span></h1>
        <h2>Задача 1</h2>
        <h3>
            Создать галерею фотографий. Она должна состоять из одной страницы, на которой пользователь видит все картинки в
            уменьшенном виде. При клике на фотографию она должна открыться в браузере в новой вкладке. Размер картинок можно
            ограничивать с помощью свойства width.<br>
            Строить фотогалерею, не указывая статичные ссылки к файлам, а просто передавая в функцию построения адрес папки с
            изображениями. Функция сама должна считать список файлов и построить фотогалерею со ссылками в ней.<br> При клике
            по миниатюре нужно показывать полноразмерное изображение в модальном окне.
        </h3>
        <h3>Решение :</h3>
        <h2>Вариант 1 отображения файлов в формате изображения - с открытием файла в отдельном окне</h2>
        <p>
            Описание кода :<br>
            !-- < ?php --<br>
                // Путь к папке с изображениями<br>
                <strong>$dir = "../images/";</strong><br>
                // Получаем список файлов в папке<br>
                <strong>$files = scandir($dir)</strong>;<br>
                // Проверка наличия файлов в папке<br>
                <strong>if (empty($files)) {<br>
                    echo "В заданном ресурсе нет изображений для отображения";<br>
                    }</strong><br>
                // Цикл для вывода уменьшенных изображений<br>
                <strong>foreach ($files as $file) {</strong><br>
                // Проверяем, является ли файл изображением<br>
                <strong>if (in_array(pathinfo($file, PATHINFO_EXTENSION), array("jpg", "jpeg", "png", "gif"))) {</strong><br>
                // Выводим уменьшенное изображение с ссылкой на полноразмерную версию<br>
                <strong>echo '< a href="' . $dir . $file . '" data-lightbox="gallery"><br>
                        < img src="' . $dir . $file . '" width="200"></>';<br>
                        }<br>
                        }</strong><br>
                ? ><br>
                Используем функцию <strong>scandir()</strong> для получения списка файлов в указанной папке. Затем цикл
                <strong>foreach</strong>, чтобы вывести каждое изображение в уменьшенном размере с помощью тега
                <strong>img</strong>.<br>При клике на картинку используем атрибут <strong>data-lightbox="gallery"</strong>,
                чтобы добавить ее в группу изображений, которые будут открываться в модальном окне при клике на любую из них.<br>
                Дополнительно проверяем, является ли файл изображением, чтобы исключить возможность вывода других файлов из папки.<br>
                Используем относительный путь к каждому изображению, чтобы обеспечить корректную загрузку изображений независимо от
                места расположения скрипта.<br>Для реализации открытия полноразмерного изображения в модальном окне можно использовать
                библиотеку <strong>Lightbox</strong>. Для этого нужно подключить ее файлы и добавить атрибут
                <strong>data-lightbox="gallery"</strong> к ссылкам на изображения.
        </p>
        <div class="gallery">
            <?php
            $dir = "../images/";
            $files = scandir($dir);
            if (empty($files)) { ?>
                        <h1>В заданном ресурсе нет изображений для отображения</h1>
                        <?php
            }
            foreach ($files as $file) {
                if (in_array(pathinfo($file, PATHINFO_EXTENSION), ["jpg", "jpeg", "png", "gif", ])) {
                    echo '<a href="' . $dir . $file . '" target="_blank"><img src="' . $dir . $file . '" width="200"></a>';
                }
            } ?>
        </div>
        <h2>Вариант 2 отображения файлов в формате изображения - с модальным окном</h2>
        <div class="gallery">
            <?php foreach ($images as $image) { ?>
                <img src="<?php echo $image; ?>" onclick="showImage(this.src)">
            <?php
            } ?>
        </div>
        <p>
            Для данной организации представления галереи фотографий написан вариант кода, который использует массив
            <strong>$images</strong>. Массив содержит пути к картинкам. Затем в цикле <strong>foreach</strong> выводятся
            изображения с помощью тега <strong>img</strong>.<br>При клике на изображение вызывается функция
            <strong>showImage()</strong>, которая создает модальное окно с увеличенным изображением и устанавливает обработчик
            клика на него для закрытия окна.<br>Стили для галереи и изображений заданы в CSS.
        </p>
        
        <h2 style="color: #013b33;">
            &nbsp;&nbsp;&nbsp;<a class="page" href="homework_1.php" target="_blank"><strong>Урок 1 PHP</strong></a>
            &nbsp;&nbsp;&nbsp;<a class="page" href="homework_2.php" target="_blank"><strong>Урок 2 PHP</strong></a>
            &nbsp;&nbsp;&nbsp;<a class="page" href="homework_3.php" target="_blank"><strong>Урок 3 PHP</strong></a>
        </h2>
        
    </main>
    <footer>
        <p>
            Copyright &copy;<?= ' ' . date('Y'); ?>
        </p>
    </footer>
    <script>
        function showImage(src) {
            var modal = document.createElement("div");
            modal.style.position = "fixed";
            modal.style.top = "0";
            modal.style.left = "0";
            modal.style.width = "100%";
            modal.style.height = "100%";
            modal.style.backgroundColor = "rgba(0,0,0,0.7)";
            modal.style.display = "flex";
            modal.style.justifyContent = "center";
            modal.style.alignItems = "center";

            var img = document.createElement("img");
            img.src = src;
            img.style.maxWidth = "90%";
            img.style.maxHeight = "90%";
            img.style.borderRadius = "5px";

            modal.appendChild(img);
            document.body.appendChild(modal);

            modal.onclick = function() {
                modal.parentNode.removeChild(modal);
            }
        }

        let phrases = [
            "Life is a journey",
            "The best is yet to come",
            "Life is what you make it",
            "Live and let live",
            "It's never too late",
            "The sky is the limit",
            "Live life to the fullest",
            "Life is a rollercoaster",
            "You only live once",
            "No pain, no gain",
            "The future is bright",
            "Every day is a new beginning",
            "Life is a beautiful ride",
            "Life is a balance",
            "Life is a learning experience",
            "Life is a gift",
            "Life is an adventure",
            "Life is a journey of discovery",
            "Life is a blessing",
            "Life is a challenge"
        ];

        let currentPhrase,
            currentIndex,
            timer,
            movementLineWidth,
            movementLineInterval,
            movementLineIncrement
        const getRandomPhrase = () => {
                var e = Math.floor(Math.random() * phrases.length),
                    t = phrases[e]
                return (currentPhrase = t), (currentIndex = e), t
            },
            displayPhrase = () => {
                var e = getRandomPhrase()
                let t = document.getElementById("wordWi")
                t.innerHTML = e
            },
            displayMovementLine = () => {
                let e = document.getElementById("movementLineWi");
                (e.style.width = movementLineWidth + "%"),
                (e.style.transition = "1s"),
                movementLineWidth < 85 ?
                    (e.style.background = "rgb(250, 250, 175)") :
                    (e.style.background =
                        "linear-gradient(150deg, rgb(250, 250, 175), rgb(125, 125, 250))"),
                    (movementLineWidth += movementLineIncrement),
                    100 < movementLineWidth && (movementLineWidth = 0)
            },
            startTimer = () => {
                timer = setInterval(() => {
                    displayPhrase(), displayMovementLine()
                }, movementLineInterval)
            },
            stopTimer = () => {
                clearInterval(timer)
            },
            initTimer = () => {
                ;
                (movementLineWidth = 10),
                (movementLineInterval = 7e3),
                (movementLineIncrement = 100 / (phrases.length - 1)),
                startTimer()
            }
        displayPhrase(), initTimer()
    </script>
</body>

</html>