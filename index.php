<?php
if(substr($_SERVER['HTTP_HOST'],0,4)==='www.') {
    header("HTTP/1.1 301 Moved Permanently");
    header('Location: http://'.substr($_SERVER['HTTP_HOST'],4).$_SERVER['REQUEST_URI']);
    exit;
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>JVocab</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/jvocab.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand menu brand-icon" href="#home">JVocab</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav">
        <li class="menu">
        <a class="menu" href="#home">
        <span class="glyphicon glyphicon-home"></span> О проекте
        </a>
        </li>
        <li class="menu"><a class="menu" href="#news">Новости</a></li>
        <li class="menu"><a class="menu" href="#my">Мои тесты</a></li>
        <li class="menu"><a class="menu" href="#pdf">Скачать PDF</a></li>
        <li class="menu"><a class="menu" href="#faq">FAQ</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li class="menu"><a class="menu" href="#donate">Поддержать</a></li>
        <li class="menu"><a class="menu" href="#contact">Контакты</a></li>
        </ul>
        </div>
      </div>
    </div>

    <!-- home -->
    <div id="home" class="container menu" style="display:none;">
        <h2>О проекте</h2>
        <div class="lead">
            JVocab это бесплатное приложение без рекламы для изучения японского языка и японских слов. Процесс изучения (повторения) происходит в форме тестирования с выбором правильных ответов. Приложение имеет простой и оптимизированный для быстрого тестирования интерфейс.
        </div>
        <div class="lead">
            На текущий момент включены следующие тесты:
            <ul class="lead">
                <li>тест на хирагана и катакану</li>
                <li>тест на дополнительную катакану</li>
                <li>тест на слова JLPT N5</li>
                <li>тест на слова JLPT N4</li>
                <li>тест на слова JLPT N3</li>
                <li>тест на иероглифы JLPT N5</li>
                <li>тест на иероглифы JLPT N4</li>
                <li>тест на иероглифы JLPT N3</li>
                <li>тест на слова TORLF A1 (Элементарный уровень)</li>
                <li>тест на грамматику из книги Minna Nihongo (Первая часть)</li>
            </ul>
        </div>
        <h2>Загрузить</h2>
        <div class="lead">
            Приложение доступно для iOS, Android и для Windows Phone по ссылкам ниже:
        </div>
        <div class="lead text-center">
            <a href="https://itunes.apple.com/ru/app/jvocab/id832359992?mt=8&uo=4"
                style="text-decoration: none;">
                <img alt="Загрузить в App Store" src="public/img/ru_app_store.png"/>
            </a>
            <a href="https://play.google.com/store/apps/details?id=com.mannaka.jvocab"
                style="text-decoration: none;">
                <img alt="Загрузить в Google Play" src="public/img/ru_google_play.png"/>
            </a>
            <a href="https://www.microsoft.com/store/apps/9nblggh4v9tn?ocid=badge"
                style="text-decoration: none;">
                <img alt="Загрузить в Windows Store" src="public/img/ru_win_store.png"/>
            </a>
        </div>
        <div class="lead">
            Для тех у кого не установлен Google Play могут напрямую загрузить <a href="public/JVocab.apk">APK файл</a> с сайта.
        </div>
        <h2>Скриншоты версии для Android</h2>
        <div class="lead text-center screenshot">
            <p>
            <img alt="Скриншот 1" src="public/img/android_1.png"/>
            <img alt="Скриншот 2" src="public/img/android_2.png"/>
            <img alt="Скриншот 3" src="public/img/android_3.png"/>
            </p>
        </div>
        <h2>Скриншоты версии для iPhone и iPad</h2>
        <div class="lead text-center screenshot">
            <p>
            <img alt="Скриншот 1" src="public/img/iphone_1.png"/>
            <img alt="Скриншот 2" src="public/img/iphone_2.png"/>
            <img alt="Скриншот 3" src="public/img/iphone_3.png"/>
            </p>
        </div>
        <h2>Скриншоты версии для Windows Phone</h2>
        <div class="lead text-center screenshot">
            <p>
            <img alt="Скриншот 1" src="public/img/winphone_1.png"/>
            <img alt="Скриншот 2" src="public/img/winphone_2.png"/>
            <img alt="Скриншот 3" src="public/img/winphone_3.png"/>
            </p>
        </div>        
        <br/>
    </div>

    <!-- news -->
    <div id="news" class="container menu" style="display:none;">
        <h2>Новости</h2>
        <dl class="lead news">
            <dt>02.12.2018 - Вышла обновленная версия 1.5.0 для Android</dt>
            <dd>
                <p>Список изменений:</p>
                <ul>
                <li>Окно тестирования стало лучше адаптировано к новым большим экранам.</li>
                <li>Исправление описок и ошибок.</li>
                </ul>
                <p>Спасибо Марине за помощь в корректировке тестов и исправлении ошибок.</p>
            </dd>

            <dt>26.09.2016 - Вышел релиз для Windows Phone</dt>
            <dd>
            <p>Функционал для Windows Phone аналогичен остальным версиям. Приложение бесплатно и не содержит рекламы.
            </p>
            <p>Загрузить JVocab для Windows Phone можно перейдя по ссылке:</p>
            <p class="text-center">
            <a href="https://www.microsoft.com/store/apps/9nblggh4v9tn?ocid=badge">
                <img src="public/img/ru_win_store.png" alt="Получить"/></a>
            </p>
            <p>
            Также на самом устройстве можно зайти в магазин и в поиске ввести JVocab.
            </p>

            <dt>03.04.2016 - Сообщение для владельцев iOS устройств</dt>
            <dd>
                <p>К сожалению с конца августа 2015 из-за финансовых проблем не было возможности продлить лицензию iOS разработчика.
                Из-за этого приложение для iOS до текущего момента было не доступно в App Store.
                Сейчас приложение восстановлено в AppStore и доступно для установки.</p>
                <p>Для желающих помочь на будущее появилась возможность <a href="#donate">поддержать проект финансово</a>.</p>
            </dd>

            <dt>22.02.2015 - Вышла версия 1.2.1 для iOS</dt>
            <dd>
                <p>Список изменений:</p>
                <ul>
                <li>Исправлены переводы слов для JLPT N2.</li>
                <li>Исправлены грамматические и орфографические ошибки в Minna no Nihongo 1.</li>
                <li>Исправление описок и ошибок.</li>
                </ul>
                <p>Ещё раз всем спасибо за помощь в исправлении ошибок.</p>
            </dd>

            <dt>08.02.2015 - Вышла версия 1.4.6 для Android</dt>
            <dd>
                <p>Список изменений:</p>
                <ul>
                <li>Исправлены переводы слов для JLPT N2 (большое спасибо Павлу).</li>
                <li>Исправлены грамматические и орфографические ошибки в Minna no Nihongo 1 (большое спасибо неизвестному пользователю за проделанный труд).</li>
                <li>Исправление описок и ошибок.</li>
                </ul>
            </dd>

            <dt>04.11.2014 - Вышла версия 1.2 для iOS</dt>
            <dd>
                <p>Список изменений:</p>
                <ul>
                <li>Обновлены переводы слов для JLPT N2 (редакция Maria Richter).</li>
                <li>Исправление описок и ошибок.</li>
                </ul>
            </dd>

            <dt>28.10.2014 - Вышла версия 1.4.5 для Android</dt>
            <dd>
                <p>Список изменений:</p>
                <ul>
                <li>Обновлены переводы слов для JLPT N2 (редакция Maria Richter).</li>
                <li>Исправлена ошибка падения при наличии папки JVocab для собственных тестов на устройствах
                    под управлением Android 4.4 KitKat и выше. JVocab для правильной работы теперь требуется разрешение на чтение из этого каталога.<br/>
                    Спасибо Полине Клечковской за сообщение о проблеме!
                </li>
                <li>Исправление описок и ошибок.</li>
                </ul>
            </dd>

            <dt>29.09.2014 - Вышла версия 1.1.3 для iOS</dt>
            <dd>
                <p>Список изменений:</p>
                <ul>
                <li>Добавлен список слов для JLPT N2.</li>
                <li>Добавлен список иероглифов для JLPT N2.</li>
                <li>Исправления в дизайне.</li>
                <li>Исправление описок и ошибок.</li>
                </ul>
            </dd>


            <dt>14.09.2014 - Вышла версия 1.4 для Android</dt>
            <dd>
                <p>Список изменений:</p>
                <ul>
                <li>Добавлен список слов для JLPT N2.</li>
                <li>Добавлен список иероглифов для JLPT N2.</li>
                <li>Исправление описок и ошибок.</li>
                </ul>
                <p>В разделе "Скачать PDF" добавлены PDF со списком слов, иероглифов и прописей для JLPT N2.</p>
            </dd>


            <dt>27.06.2014 - Обновление сайта и PDF</dt>
            <dd>
                <p>Для удобства отслеживания изменений добавлен раздел новостей, который будет обновляться при значимых изменениях на сайте или в приложении.
                </p>
                <p>В обновленных PDF исправлены ошибки начертания некоторых иероглифов, также увеличен размер самих иероглифов.</p>
            </dd>

            <dt>07.04.2014 - Вышла версия 1.3.2 для Android</dt>
            <dd>
                <p>Список изменений:</p>
                <ul>
                <li>Добавлен пункт "Скачать PDF" в меню со ссылкой на <a href="http://jvocab.com">jvocab.com</a>, где можно загрузить списки слов, прописи и другие готовые для распечатки материалы.</li>
                <li>Правки теста по Minna no Nihongo. Большое спасибо за помощь alexgg.</li>
                <li>Исправление описок и ошибок.</li>
                </ul>
                <p>Спасибо всем за отзывы и замечания!</p>
            </dd>

            <dt>16.12.2013 - Релиз JVocab для iOS</dt>
            <dd>
            <p>Функционал для iOS аналогичен Android-версии. Приложение по прежнему бесплатно и не содержит рекламы.
            </p>
            <p>В список поддерживаемых устройств входят iPhone, iPad и iPod touch с iOS 5.1 и выше (рекомендуется 6.0 и выше).
            </p>
            <p>Загрузить JVocab для iOS можно перейдя по ссылке:</p>
            <p class="text-center">
            <a href="https://itunes.apple.com/ru/app/jvocab/id832359992?mt=8&uo=4"
            style="text-decoration: none;">
            <img alt="Загрузить в App Store" src="public/img/ru_app_store.png"/></a>
            </p>
            <p>
            Кроме того можно на самом устройстве зайти в App Store и в поиске ввести JVocab.
            </p>

            </dd>
            <dt>16.12.2013 - Обновление сайта</dt>
            <dd>
            <p>Теперь на сайте доступны для скачивания PDF со списками всех слов и иероглифов, представленных в приложении JVocab.
            </p>
            <p>Также доступна инструкция по формированию собственных тестов (в качестве примеров выложены списки слов из самого приложения).
            Для примера приложен список слов в PDF формате для JLPT N5:
            <a href="public/pdf/Vocab_N5.pdf">Список слов для JLPT N5</a>.
            </p>
            <p>Полный список слов можно найти на странице <a href="#pdf">Скачать PDF</a>.</p>
            </dd>

            <dt>11.09.2013 - Вышла версия 1.3 для Android</dt>
            <dd>
                <p>Список изменений:</p>
                <ul>
                <li>Добавлен список слов для JLPT N3.</li>
                <li>В тесте Каны добавлен пропущенный ряд РЯ, РЮ, РЁ.</li>
                <li>В тесте Каны "спорные" по звучанию звуки дополнены транскрипцией по Поливанову.
                <li>При просмотре списка карточек (долгое нажатие на тесте - Карточки) добавлен фильтр для поиска слов по точному написанию либо по транслитерации.
                Например, набранное КАГИ или KAGI для списка слов N5 найдет слово かぎ.</li>
                <li>Ускорена скорость открытия тестов.
                <li>Исправления описок и ошибок.</li>
                </ul>
                <p>Всем спасибо за отзывы и замечания!</p>
            </dd>

            <dt>04.05.2013 - Вышла версия 1.2 для Android</dt>
            <dd>
                <p>Список изменений:</p>
                <ul>
                <li>Добавлены иероглифы для уровня N3.</li>
                <li>Исправлен и откорректирован список слов для N5 (упрощение, ошибки несоответствия направлений).</li>
                <li>Список слов для N5 дополнен в соответствии с <a href="http://www.tanos.co.uk/">www.tanos.co.uk</a>.</li>
                <li>Исправлен и откорректирован список слов для N4 (ошибки несоответствия направлений).</li>
                <li>Исправлена ошибка замера времени на ответ при свертывании приложения.</li>
                <li>Исправлена ошибка уменьшения количества вариантов ответов при приближении конца теста.</li>
                <li>Исправлена ошибка отсутствия показа статистики при полном прохождении теста.</li>
                <li>Исправления по юзабилити и других описок и ошибок.</li>
                </ul>
            </dd>

            <dt>18.03.2013 - Вышла версия 1.1 для Android</dt>
            <dd>
                <p>Список изменений:</p>
                <ul>
                <li>Добавлена опция случайного выбора карточек для текущего окна обучения.</li>
                <li>Добавлен тест на иероглифы для JLPT N5 (кандзи - оны + куны - перевод).</li>
                <li>Добавлен тест на иероглифы для JLPT N4 (кандзи - оны + куны - перевод).</li>
                <li>Адаптация для планшетов (используются более крупные шрифты).</li>
                <li>Исправление описок и ошибок.</li>
                </ul>
            </dd>

            <dt>11.02.2013 - Вышел первый релиз JVocab для Android</dt>
            <dd>
                <p>В первую версию включены следующие тесты:</p>
                <ul>
                <li>два теста на кану (хирагана + катакана и дополнительная катакана);</li>
                <li>два теста на японские слова для "Нихонго норёку сикэн" (уровни JLPT N5 и JLPT N4);</li>
                <li>краткий тест на грамматику из книги Minna no Nihongo 1;</li>
                <li>тест с японскими словами, входящих в "Test of Russian as a Foreign Language" (Элементарный уровень - TORFL A1);</li>
                </ul>
                <p>В ближайшее время планируется добавление теста на слова из JLPT N3 и выше.
                </p>
                <p>
                Для японских слов из N5 и N4 используется шесть направлений: кандзи - хирагана, кандзи - перевод, хирагана - кандзи, хирагана - перевод, перевод - кандзи, перевод - хирагана.
                </p>
                <p>Интерфейс имеет простой дизайн и оптимизирован для удобства выбора ответов.Процесс обучения можно прервать в любой момент и продолжить с места остановки. Нет никаких требований по квантам времени.
                </p>
                <p>Для работы приложения не требуется никаких разрешений.</p>
            </dd>
        </dl>
        <br/>
    </div>

    <!-- my -->
    <div id="my" class="container menu" style="display:none;">
        <h2>Мои тесты</h2>
        <div class="lead">
            На данный момент для создания собственных тестов можно воспользоваться механизмом доступным переводчикам и тестерам. Для этого необходимо выполнить несколько несложных шагов:
            <ol class="manual">
                <li>Оформить на основе шаблона ниже файл теста с расширением <strong>.csv</strong> (например в блокноте):
                <div class="example">
                <strong>#name</strong>=Имя теста<br>
                <strong>#description</strong>=Описание теста<br>
                <strong>Имя колонки 1</strong>;<strong>Имя колонки 2</strong><br>
                Слово1_Значение1<strong>;</strong>Слово1_Значение2<br>
                Слово2_Значение1<strong>;</strong>Слово2_Значение2<br>
                ...<br>
                </div>
                <div class="warning">
                    <h4>Важно:</h4>
                    Первые три строки с описанием теста и названиями колонок обязательны в тесте. Количество значений слов не может быть более 4-х. А количество слов не более 1024.<br>
                    В качестве примера можно взять <a href="public/example/Hangul.csv">тест на Хангыль</a>.
                </div>
                </li>
                <li>Сохранить файл обязательно в <strong>UTF-8</strong> кодировке.</li>
                <li>Подключить Android телефон к компьютеру в режиме сменного носителя (как USB накопитель).</li>
                <li>Создать в корне телефона каталог <strong>JVocab</strong> и загрузить в него созданный <strong>.csv</strong> файл.</li>
                <li>Запустить приложение JVocab на смартфоне.</li>
            </ol>
        </div>

        <h2>Примеры из JVocab</h2>
        <div class="lead">
            В качестве примеров тестов ниже можно загрузить готовые тесты на слова из JVocab, которые можно использовать для составления собственных списков:
            <table class="table">
                <thead><tr><th>Название</th><th class="text-right">Кол-во слов</th></tr></thead>
                <tbody>
                <tr><td><a href="public/example/Vocab_N5.csv">Слова JLPT N5</a></td><td class="text-right">704</tr>
                <tr><td><a href="public/example/Vocab_N4.csv">Слова JLPT N4</a></td><td class="text-right">656</tr>
                <tr><td><a href="public/example/Vocab_N3_1.csv">Слова JLPT N3 (Часть 1)</a></td><td class="text-right">850</tr>
                <tr><td><a href="public/example/Vocab_N3_2.csv">Слова JLPT N3 (Часть 2)</a></td><td class="text-right">821</tr>
                <tr><td><a href="public/example/Vocab_N2_1.csv">Слова JLPT N2 (Часть 1)</a></td><td class="text-right">887</tr>
                <tr><td><a href="public/example/Vocab_N2_2.csv">Слова JLPT N2 (Часть 2)</a></td><td class="text-right">869</tr>
                </tbody>
            </table>
        </div>
        <br/>
    </div>

    <!-- pdf -->
    <div id="pdf" class="container menu" style="display:none;">
        <h2>Скачать PDF</h2>
        <div class="lead">
            Кроме использования приложения JVocab можно воспользоваться готовыми для распечатки списками слов и иероглифов в виде PDF файлов. Также можно загрузить рабочие прописи
            для иероглифов и каны.

        <table class="table">
            <thead><tr><th>Название</th><th class="text-right">Страниц</th></tr></thead>
            <tbody>
            <tr>
            <td><a href="public/pdf/Kana.Hiragana.Sheet.pdf">Кана: Хирагана (прописи)</a></td>
            <td class="text-right">8</td>
            </tr>
            <tr>
            <td><a href="public/pdf/Kana.Katakana.Sheet.pdf">Кана: Катакана (прописи)</a></td>
            <td class="text-right">8</td>
            </tr>
            <tr>
            <td><a href="public/pdf/Vocab_N5.pdf">JLPT N5: Список слов</a></td>
            <td class="text-right">33</td>
            </tr>
            <tr>
            <td><a href="public/pdf/Kanji_N5.pdf">JLPT N5: Список иероглифов</a></td>
            <td class="text-right">6</td>
            </tr>
            <tr>
            <td><a href="public/pdf/Kanji_N5.Sheet.pdf">JLPT N5: Прописи для иероглифов</a></td>
            <td class="text-right">8</td>
            </tr>
            <tr>
            <td><a href="public/pdf/Vocab_N4.pdf">JLPT N4: Список слов</a></td>
            <td class="text-right">30</td>
            </tr>
            <tr>
            <td><a href="public/pdf/Kanji_N4.pdf">JLPT N4: Список иероглифов</a></td>
            <td class="text-right">10</td>
            </tr>
            <tr>
            <td><a href="public/pdf/Kanji_N4.Sheet.pdf">JLPT N4: Прописи для иероглифов</a></td>
            <td class="text-right">14</td>
            </tr>
            <tr>
            <td><a href="public/pdf/Vocab_N3.pdf">JLPT N3: Список слов (Полный)</a></td>
            <td class="text-right">76</td>
            </tr>
            <tr>
            <td><a href="public/pdf/Vocab_N3_1.pdf">JLPT N3: Список слов (Первая часть)</a></td>
            <td class="text-right">39</td>
            </tr>
            <tr>
            <td><a href="public/pdf/Vocab_N3_2.pdf">JLPT N3: Список слов (Вторая часть)</a></td>
            <td class="text-right">38</td>
            </tr>
            <tr>
            <td><a href="public/pdf/Kanji_N3.pdf">JLPT N3: Список иероглифов</a></td>
            <td class="text-right">18</td>
            </tr>
            <tr>
            <td><a href="public/pdf/Kanji_N3.Sheet.pdf">JLPT N3: Прописи для иероглифов</a></td>
            <td class="text-right">26</td>
            </tr>
            <tr>
            <td><a href="public/pdf/Vocab_N2.pdf">JLPT N2: Список слов (Полный)</a></td>
            <td class="text-right">80</td>
            </tr>
            <tr>
            <td><a href="public/pdf/Vocab_N2_1.pdf">JLPT N2: Список слов (Первая часть)</a></td>
            <td class="text-right">41</td>
            </tr>
            <tr>
            <td><a href="public/pdf/Vocab_N2_2.pdf">JLPT N2: Список слов (Вторая часть)</a></td>
            <td class="text-right">40</td>
            </tr>
            <tr>
            <tr>
            <td><a href="public/pdf/Kanji_N2.pdf">JLPT N2: Список иероглифов</a></td>
            <td class="text-right">14</td>
            </tr>
            <tr>
            <td><a href="public/pdf/Kanji_N2.Sheet.pdf">JLPT N2: Прописи для иероглифов</a></td>
            <td class="text-right">20</td>
            </tr>
            <tr>
            <td><a href="public/pdf/TORFL_A1.pdf">TORFL A1: Список слов</a></td>
            <td class="text-right">26</td>
            </tr>
            <tr>
            <td><a href="public/pdf/MNN1.pdf">Грамматика из Minna no Nihongo (Первая часть)</a></td>
            <td class="text-right">12</td>
            </tr>
            </tbody>
        </table>
        </div>
        <br/>
    </div>

    <!-- faq -->
    <div id="faq" class="container menu" style="display:none;">
        <h2>FAQ</h2>
        <dl class="lead faq">
            <dt>Я нашел ошибку или описку. Что делать?</dt>
            <dd>Написать об этом на <a href="mailto:gwend@jvocab.com">gwend@jvocab.com</a>.</dd>
            <dt>Откуда взялись списки слов и иероглифов?</dt>
            <dd>Из публичных неофициальных источников таких как <a target="_blank" href="http://krakozyabr.ru">krakozyabr.ru</a>, <a target="_blank" href="http://www.tanos.co.uk/jlpt">www.tanos.co.uk</a> и от господина <a target="_blank" href="http://rakudajin.livejournal.com">rakudajin</a>.
            </dd>
            <dt>Чем я могу помочь проекту?</dt>
            <dd>Можно помочь переводами. Для работы нужен Windows-приложение "Блокнот" и желание сделать что-то полезное для других.</dd>
            <dt>Можно помочь проекту финансово?</dt>
            <dd>Да, можно. Для этого заполните пожалуйста <a href="#donate">форму</a>.</dd>
        </dl>
        <br/>
    </div>

    <!-- donate -->
    <div id="donate" class="container menu" style="display:none;">
        <h2>Поддержать</h2>
        <div class="lead">
        <p>Проекту JVocab также можно помочь деньгами. Все полученные денежные средства пойдут на следующие статьи расходов (платятся раз в год):
        <ul>
        <li>$10 - поддержка доменного имени.</li>
        <li>$99 - плата Apple за продление лицензии разработчика (<a target="_blank" href="https://developer.apple.com/programs/how-it-works/">Apple Developer Program</a>),
           необходимой для того чтобы приложение JVocab оставалось в <a target="_blank" href="https://itunes.apple.com/ru/app/jvocab/id832359992?mt=8&uo=4">App Store</a>.</li>
        </ul>
        </p>
        </div>
        <div class="lead">
        <p>
        Для перевода средств пожалуйста воспользуетесь формой ниже:
        </p>
        <center>
        <br/>
        <iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/donate.xml?account=410012581244065&quickpay=donate&payment-type-choice=on&mobile-payment-type-choice=on&default-sum=100&targets=%D0%94%D0%BB%D1%8F+%D0%BF%D0%BE%D0%B4%D0%B4%D0%B5%D1%80%D0%B6%D0%BA%D0%B8+%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82%D0%B0+JVocab&target-visibility=on&project-name=JVocab&project-site=http%3A%2F%2Fjvocab.com&button-text=05&successURL=http%3A%2F%2Fjvocab.com" width="508" height="120"></iframe>
        </center>
        </div>
    </div>

    <!-- contact -->
    <div id="contact" class="container menu" style="display:none;">
        <h2>Контакты</h2>
        <address class="lead">
        <strong>Для вопросов и предложений</strong><br>
        <a href="mailto:gwend@jvocab.com">gwend@jvocab.com</a><br>
        </address>
        <address class="lead">
        <strong>Kenty Gwend</strong> - разработчик<br>
        <a target="_blank" href="http://www.twitter.com/kentygwend">twitter.com/kentygwend</a><br>
        </address>
        <address class="lead">
        <strong>Maria Richter</strong> - главный редактор<br>
        <a target="_blank" href="http://www.facebook.com/maria.richter.148">www.facebook.com/maria.richter.148</a><br>
        <a target="_blank" href="mailto:yamaha-colt@yandex.ru">yamaha-colt@yandex.ru</a><br>
        <a target="_blank" href="skype:ms.maria.richter?chat">ms.maria.richter</a> (Skype)<br>
        <a target="_blank" href="http://conkings.com">Короли созвездий</a> (разработчик игры)<br>
        </address>
        <address class="lead">
        <strong>Новости в контакте</strong><br>
        <a target="_blank" href="http://vk.com/jvocab">vk.com/jvocab</a><br>
        </address>
        <address class="lead">
        <strong>Twitter бот</strong><br>
        <a target="_blank" href="http://www.twitter.com/jvocab_bot">twitter.com/jvocab_bot</a><br>
        </address>
        <address class="lead">
        <strong>GitHub</strong><br>
        <a target="_blank" href="https://github.com/gwend/jvocab.data">github.com/gwend/jvocab.data</a><br>
        </address>
        <br/>
    </div>

    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/jvocab.js"></script>
    <script type="text/javascript">
        onLoad();
    </script>
    <script type="text/javascript" >
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-44622611-2', 'jvocab.com');
    ga('send', 'pageview');
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter23373193 = new Ya.Metrika({
                    id:23373193,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });
        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/23373193" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->    
</body>
</html>
