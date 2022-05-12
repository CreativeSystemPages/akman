
<?php
require_once 'includes/database.php';
require_once 'includes/functions.php';
?>
<link href="https://fonts.googleapis.com/css?family=Prata:300,400,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/min.css">
<header id="header" class="header">
<a href="index.php">
        <div class="header_logo">
            <img src="/img/header_logo.svg" alt="">
        </div>
        </a>
        <ul class="header_menu">
            <li class="header_menu-item catalog">
                <a href="http://akman/sredstva_zachity_rastenyi.php">Каталог</a>
                <div class="sub_menu">


                    <ul class="sub_title-menu">

                        <li class="plants_defend"><a href="sredstva_zachity_rastenyi.php" target="blank">
                            <object
                            type="image/svg+xml"
                            data="picture.svg">
                            <img
                              src="/img/arrow_menu.png">
                          </object> Срества защиты
                                растений</a>
                            <ul class="second_level">
                                <li><a href="http://akman/sredstva_zachity_rastenyi.php?protravitel=1">Протравители</a></li>
                                <li><a href="">Гербициды</a></li>
                                <li><a href="">Фунгициды</a></li>
                                <li><a href="">Инсектициды и фумиганты</a></li>
                                <li><a href="">Микроудобрения и стимуляторы роста</a></li>
                                <li><a href="">ПАВы и Специальные препараты</a></li>
                                <li><a href="">Десиканты</a></li>
                            </ul>
                        </li>
                        <li class="seeds"> <a href="seeds.php" target='blank'> <img src="/img/arrow_menu.png" alt=""> Семена</a>
                            <ul class="second_level seed">
                                <li><a href="">Кукуруза</a></li>
                                <li><a href="">Подсолнечник</a></li>
                            </ul>
                        </li>
                        <li class="chemistrys"><a href="professional_chemistry.php"> <img src="/img/arrow_menu.png" alt=""> Проф.и бытовая
                                химия</a>
                            <ul class="second_level chemistry">
                                <li><a href="kitchen.php">Для кухни и мытья посуды</a></li>
                                <li><a href="">Для личной гигиены, дезинфекция, мыло</a></li>
                                <li><a href="">Для стёкол, нерж. стали</a></li>
                                <li><a href="">Для полов, напольных покрытий</a></li>
                                <li><a href="">Для санузлов и сантехники</a></li>
                                <li><a href="">Универсальные моющие, <br>дезинфицирующие средства</a></li>

                            </ul>
                        </li>
                        <li class="housekeeps"><a href="housekeeper.php"> <img src="/img/arrow_menu.png" alt=""> Хозтовары</a>
                            <ul class="second_level-housekeep">
                                <li><a href="paper_towels_and_toilet_paper.php">Бумажные полотенца и туалетная бумага</a></li>
                                <li><a href="">Уборочный инвентарь и оборудование</a></li>
                                <li><a href="">Мусорные мешки</a></li>
                                <li><a href="">Средства индивидуальной защиты</a></li>
                                <li><a href="">Салфетки</a></li>
                            </ul>
                        </li>
                    </ul>









                </div>
            </li>
            <li class="header_menu-item harmful_objects">
                <a href="harmful_objects.php">Вредные объекты</a>
                <div class="sub_menu">
                    <ul class="sub_title-menu">

                        <li class="plants_defend"><a href=""><img src="/img/arrow_menu.png" alt=""> Сорные растения</a>
                            <ul class="second_level">
                                <li><a href="http://akman/sredstva_zachity_rastenyi.php?test=123">Протравители</a></li>
                                <li><a href="">Гербициды</a></li>
                                <li><a href="">Фунгициды</a></li>
                                <li><a href="">Инсектициды и фумиганты</a></li>
                                <li><a href="">Микроудобрения и стимуляторы роста</a></li>
                                <li><a href="">ПАВы и Специальные препараты</a></li>
                                <li><a href="">Десиканты</a></li>
                            </ul>
                        </li>
                        <li class="seeds"> <a href=""> <img src="/img/arrow_menu.png" alt=""> Болезни</a>
                            <ul class="second_level seed">
                                <li><a href="">Кукуруза</a></li>
                                <li><a href="">Подсолнечник</a></li>
                            </ul>
                        </li>
                        <li class="chemistrys"><a href=""> <img src="/img/arrow_menu.png" alt=""> Вредители</a>
                            <ul class="second_level chemistry">
                                <li><a href="">Для кухни и мытья посуды</a></li>
                                <li><a href="">Для личной гигиены, дезинфекция, мыло</a></li>
                                <li><a href="">Для стёкол, нерж. стали</a></li>
                                <li><a href="">Для полов, напольных покрытий</a></li>
                                <li><a href="">Для санузлов и сантехники</a></li>
                                <li><a href="">Универсальные моющие, <br>дезинфицирующие средства</a></li>

                            </ul>
                        </li>

                    </ul>









                </div>
            </li>
            <li class="header_menu-item culture">
                <a href="culture.php">Культуры</a>

                <div class="sub_menu">
                    <ul class="sub_title-menu">

                        <li><a href="">Зерновые</a></li>
                        <li> <a href=""> Подсолнечник</a></li>
                        <li><a href="">Кукуруза</a></li>
                        <li><a href="">Соя</a></li>
                        <li><a href="">Горох,нут</a></li>
                        <li><a href="">Рапс</a></li><br>
                        <li><a href="">Лён</a></li>
                        <li><a href="">Сахарная свекла</a></li>
                        <li><a href="">Картофель</a></li>
                        <li><a href="">Томаты</a></li>
                        <li><a href="">Огурцы</a></li>

                    </ul>









                </div>
            </li>
        </ul>
    <form action="http://akman/index.php">
        <input class="header_search-area" type="search;" placeholder="поиск">
        </form>
        <div class="header_call">
            <img src="/img/header_call.ico" alt="">
            <a href="#">Позвонить</a>
        </div>

      <?php
include('includes/burger.php');

      ?>
    </header>
    


