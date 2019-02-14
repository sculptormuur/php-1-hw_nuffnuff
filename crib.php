<?php /* НЕ форматировать через CTRL + ALT + L  !!! */ // ↑↑↑ 1 → 8
/* условные обозначения
 * ===== - раздел, соответствующий уроку курса
 * ◙ - тема, • - функции, операторы и т. д. списком, ○ - примеры, ► - подтемы
*/

===================================
========== ♦ PHP-1 № 7 ♦ =========
===================================

◙ БУФЕРИЗАЦИЯ
• ob_start()    // Включение буферизации вывода
                // @link http://php.net/manual/ru/control-structures.while.php
• ob_end_flush() // Сбросить (отправить) буфер вывод и отключить буферизацию вывода
                // @link http://php.net/manual/ru/function.ob-end-flush.php


===================================
========== ♣ PHP-1 № 4 ♣ =========
===================================
◙ WHILE                 //  * @link http://php.net/manual/ru/control-structures.while.php
$i = 1;
while ($i <= 10) {
    echo $i;
    $i++;
}

◙ DO-WHILE               // @link http://php.net/manual/ru/control-structures.do.while.php
$i = 0;
do {
    echo $i;
    $i++;
} while ($i <= 10)

◙ ФАЙЛЫ: ЧТЕНИЕ и ЗАПИСЬ    // @link http://php.net/manual/ru/ref.filesystem.php

• __DIR__
• fopen($path, 'r')
    • r     // чтение
    • r+    // чтение и запись
    • w     // запись . файл будет создан, если не существовал или «обнулен»
    • w+    // запись и чтение . файл будет создан, если не существовал или «обнулен»
    • a     // запись . файл будет создан, если не существовал . запись в конец файла
• fclose($res); // Закрывает открытый дескриптор файла
• fread($handle)   // Бинарно-безопасное чтение файла
• fgets($path [, int $length ]) : string  // Читает строку из файла до
                                        // начала новой строки, указанной длины в байтах или
                                        // до конца файла
                                    // * @link http://php.net/manual/ru/function.fgets.php
• file($path) // Чтение целиком файла в массив. Каждый элемент массива – строка.
• file_get_contents($path) // Чтение целиком файла в строку. Самый
                                        // оптимальный по производительности вариант
• fwrite($res, $data) // Бинарно-безопасная запись в файл
                        // * @link http://php.net/manual/ru/function.fwrite.php
• file_put_contents($path, $data, FLAGS, $context) // Пишет данные в файл
                        // @link http://php.net/manual/ru/function.file-put-contents.php
• readfile($path)        // Выводит файл * @link http://php.net/manual/ru/function.readfile.php
• file_exists($path)     // Проверяет существование указанного файла или каталога
• is_readable($path) // Определяет существование файла и доступен ли он для чтения
• scandir($path) // Возвращает массив имён всех файлов, содержащихся в папке $path
• dirname($path) // Имя родительской папки для указанного файла (или папки)
• pathinfo($path) // Возвращает массив с частями пути (путь, имя файла, расширение)
• filesize($path) // Размер файла $path в байтах
• realpath($path) // Возвращает канонический абсолютный путь для указанного. Раскрывает
                    // все «.», «..», ссылки и так далее
• is_uploaded_file($path)  // Определяет, был ли файл загружен при помощи HTTP POST

◙ ПРИМЕРЫ

○ открытие файла
                $res = fopen($path, 'r');
○ чтение целиком файла в массив, каждый элемент массива – строка
                $lines = file($path);
○ чтение целиком файла в строку, самый оптимальный по производительности вариант
                $str = file_get_contents($path);
○ запись в файл
                $res = fopen($path, 'w');
                fwrite($res, $data); // string!
                fclose($res);

===================================
========== ♥ PHP-1 № 3 ♥ =========
===================================
◙ МАССИВЫ                // @link http://php.net/manual/ru/language.types.array.php
• • Функции для массивов:   // @link http://php.net/manual/ru/ref.array.php

НА ПРИМЕРАХ:
○ $array = [42, 45, 33, 18];
○ $array = [1, 13, 'bar', 'baz', 42];
○ $array[] = 5; // В массив можно в любой момент добавить ещё один элемент
○ var_dump($array); // 1, 42, 3 // быстрый просмотр массива
○ $arr = [1, 2, 3]; echo $arr[0]; // 1
○ $arr = [1 => 'январь', 2 => 'февраль'];
○       $arr = [  // строковые индексы (ключи)
                'jan' => 'январь',
                'feb' => 'февраль'
                ];
         echo $arr['jan']; // январь

○       $arr = [  // многомерный массив
                1 => [10, 20, 30],
                2 => [100, 200, 300]
                ];
○ $arr[1][0]; // Для обращения к элементам многомерного массива используются несколько
                // квадратных скобок
○ echo $arr['jan'][1]; // Индексы многомерных массивов также могут быть и числовым и строковым

◙ FOREACH   // @link http://php.net/manual/ru/control-structures.foreach.php

○       foreach ($array as $value) {
            echo $value;
        }
○       foreach ($array as $index => $value) {
            echo $index, $value;
        }

◙ ФУНКЦИИ ДЛЯ МАССИВОВ   // @link http://php.net/manual/ru/ref.array.php

• is_array($var) // проверяет массив ли это, @link http://php.net/manual/ru/function.is-array.php
• in_array($value, $array); // Проверяет, есть ли в массиве $array элемент
                            // со значением $value, возвращает true либо false
• isset($array[$x]);   // @link http://php.net/manual/ru/function.isset.php
            // Проверяет, содержится ли в массиве $array элемент с индексом $x,
            // возвращает true либо false
• unset($array[$x]);   // @link http://php.net/manual/ru/function.unset.php
• empty($array[$x]);   // @link http://php.net/manual/ru/function.empty.php
            // если пустая, то TRUE, если непустая, то FALSE
• array_merge($arr1, $arr2)   // @link http://php.net/manual/ru/function.array-merge.php
            // Возвращает объединение массивов, то есть массив, состоящий из
            // всех элементов и первого, и второго
• array_intersect($arr1, $arr2)   // @link http://php.net/manual/ru/function.array-intersect.php
            // Возвращает пересечение массивов, то есть массив, состоящий из тех
            // элементов, что есть и в первом, и во втором
• $array = explode(',', $string);   // @link http://php.net/manual/ru/function.explode.php
            // Разбивает строку на «кусочки», используя указанный разделитель, возвращает массив
• $string = implode(',', $array);   // @link http://php.net/manual/ru/function.implode.php
            // «Склеивает» массив в строку, собирая эту строку из элементов
            // массива, используя указанный разделитель
• array_push($array, $newLastElementS) // @link http://php.net/manual/ru/function.array-push.php
• array_unshift($array, $newFirstElementS)  // @link http://php.net/manual/ru/function.array-unshift.php
• array_pop($array) // Извлекает последний элемент массива
• array_values($array) // @link http://php.net/manual/ru/function.array-values.php
            // возвращает массив со всеми элементами массива array.
            // также заново индексирует возвращаемый массив числовыми индексами.
• array_walk(&$array, $callback [, $userdata]) // @link http://php.net/manual/ru/function.array-walk.php
            // Применяет заданную пользователем функцию к каждому элементу массива
• preg_split(string $regExp , $string [, int $limit = -1, FLAGS])
            // @link http://php.net/manual/ru/function.preg-split.php
            // Разбиение строки на массив по регулярному выражению
• array_key_exists($key, $array) // Проверяет, присутствует ли в массиве указанный ключ или индекс

◙ GET и POST
► Метод GET протокола HTTP

•  $_GET // массив // @link http://php.net/manual/ru/reserved.variables.get.php

○ http://php1.ru/index.php?foo=bar
○ http://php1.ru/index.php?p1=foo&p2=42
○ $_GET['p2'] // 42

► Метод POST протокола HTTP

•  $_POST // массив // @link http://php.net/manual/ru/reserved.variables.post.php
○   <form action="/send.php" method="post">
        <input type="text" name="login">
        <input type="password" name="pass">
    </form>
○ $_POST['login'] // userLogin

► РАБОТА С ФОРМАМИ      // @link http://php.net/manual/ru/tutorial.forms.php
► Теги для форм          // @link http://htmlbook.ru/html/type/form
• <form>                 // @link http://htmlbook.ru/html/form
• <input>                // @link http://htmlbook.ru/html/input
• <textarea>            // @link http://htmlbook.ru/html/textarea
• <button>              // @link http://htmlbook.ru/html/button
• action="action.php"    // @link http://htmlbook.ru/html/form/action
• required              // @link http://htmlbook.ru/html/textarea/required

► Переменные извне PHP // @link http://php.net/manual/ru/language.variables.external.php

• header ( string $header [, bool $replace = TRUE [, int $http_response_code ]] ) : void
                    // @link http://php.net/manual/ru/function.header.php
• » Content-Disposition // @link http://www.faqs.org/rfcs/rfc2183
○ header("HTTP/1.0 404 Not Found");
○ header("Location: http://www.example.com/"); /* Перенаправление браузера */
○ header('WWW-Authenticate: Negotiate');
○ header('WWW-Authenticate: NTLM', false);
○ header('Content-Type: application/pdf'); // Будем передавать PDF
○ header('Content-Disposition: attachment; filename="downloaded.pdf"');
   readfile('original.pdf'); // Исходный PDF-файл original.pdf
○ header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
○ header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Дата в прошлом

► Список кодов состояния HTTP // @link https://ru.wikipedia.org/wiki/Список_кодов_состояния_HTTP
• HTTP 301  // @link https://ru.wikipedia.org/wiki/HTTP_301

• $_REQUEST // массив (array), который по умолчанию содержит данные переменных $_GET, $_POST и $_COOKIE
             // @link http://php.net/manual/ru/reserved.variables.request.php
• $_SERVER // Информация о сервере и среде исполнения, это массив, содержащий
            // информацию, такую как заголовки, пути и местоположения скриптов
             // @link http://php.net/manual/ru/reserved.variables.server.php


===================================
============= СИРОТЫ ==============
===================================

◙ РАБОТА СО СТРОКАМИ
• urldecode($string) // %21 → !// @link http://php.net/manual/ru/function.urldecode.php
• urlencode($string) // ! → %21 // @link http://php.net/manual/ru/function.urlencode.php
• rawurlencode() // URL-кодирование строки согласно RFC 3986
                // @link http://php.net/manual/ru/function.rawurlencode.php
                // @link http://www.faqs.org/rfcs/rfc3986.html
• rawurldecode() // Декодирование URL-кодированной строки
                // @link http://php.net/manual/ru/function.rawurldecode.php
• htmlentities() // Преобразует все возможные символы в соответствующие HTML-сущности
                // @link http://php.net/manual/ru/function.htmlentities.php



◙ ЗАГРУЗКА ФАЙЛОВ НА СЕРВЕР // @link http://php.net/manual/ru/features.file-upload.php
► Загрузка файлов методом POST // @link http://php.net/manual/ru/features.file-upload.post-method.php
• $_FILES // массив переменных файлов, загруженных в текущий скрипт через метод HTTP POST
        // @link http://php.net/manual/ru/reserved.variables.files.php
• move_uploaded_file() // Перемещает загруженный файл в новое место
        // @link http://php.net/manual/ru/function.move-uploaded-file.php