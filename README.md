# Урок 1
## Практическое задание

* Обязательная часть.

Объясните, как работает данный код:

* < ?php $a = 5; $b = '05'; var_dump($a == $b); ?><br>
Почему true? 

* < ?php var_dump((int)'012345'); ?><br>
Почему 12345?

* < ?php var_dump((float)123.0 === (int)123.0); ?><br>
Почему false? 

* < ?php var_dump((int)0 === (int)'hello, world'); ?><br>
Почему true? 

* Дополнительное задание. <br>
Используя только две переменные, поменяйте их значение местами. <br>Например, если a = 1, b = 2, надо, чтобы получилось: b = 1, a = 2. <br>Дополнительные переменные использовать нельзя.

# Урок 2
## Практическое задание

1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. <br>Затем написать скрипт, который работает по следующему принципу:
* a. Если $a и $b положительные, вывести их разность.
* b. Если $а и $b отрицательные, вывести их произведение.
* c. Если $а и $b разных знаков, вывести их сумму.
<br>Ноль можно считать положительным числом.

2. Присвоить переменной $а значение в промежутке [0..15]. <br>С помощью оператора switch организовать вывод чисел от $a до 15.

3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. <br>Обязательно использовать оператор return.

4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. <br>В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

5. Посмотреть на встроенные функции PHP. <br>Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.

6. *С помощью рекурсии организовать функцию возведения числа в степень. <br>Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например: 22 часа 15 минут, 21 час 43 минуты.

# Урок 3
## Практическое задание

1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.

2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:<br>
0 – это ноль.<br>
1 – нечётное число.<br>
2 – чётное число.<br>
3 – нечётное число.<br>
…<br>
10 – чётное число.

3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области.
Вывести в цикле значения массива, чтобы результат был таким:<br>
Московская область: Москва, Зеленоград, Клин.<br>
Ленинградская область: Санкт-Петербург, Всеволожск, Павловск, Кронштадт.<br>
Рязанская область…<br>
(названия городов можно найти на maps.yandex.ru)

4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).<br>
Написать функцию транслитерации строк.

5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.

6. В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP.<br>Необходимо представить пункты меню как элементы массива и вывести их циклом.<br> Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.

7. *Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. <br>Выглядеть это должно так: <br>for(…){// здесь пусто}

8. *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».

9. *Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача
решается при конструировании url-адресов на основе названия статьи в блогах).

# Урок 4
## Практическое задание

1. Создать галерею фотографий. Она должна состоять из одной страницы, на которой
пользователь видит все картинки в уменьшенном виде. При клике на фотографию она должна
открыться в браузере в новой вкладке. Размер картинок можно ограничивать с помощью
свойства width.

2. *Строить фотогалерею, не указывая статичные ссылки к файлам, а просто передавая в
функцию построения адрес папки с изображениями. Функция сама должна считать список
файлов и построить фотогалерею со ссылками в ней.

3. *[ для тех, кто изучал JS-1 ] При клике по миниатюре нужно показывать полноразмерное
изображение в модальном окне

