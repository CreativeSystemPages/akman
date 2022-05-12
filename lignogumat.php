<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лигногумат</title>
</head>

<body>
    <?php
    include('includes/header.php')
    ?>
    <main>
        <div class="simple_page">
            <div class="simple-container">
                <div>
                    <?php
                    include('includes/filter_szr.php');
                    ?>
                </div>


                <div class="simple_page_main">

                    <div class="first_screen">
                        <div>
                            <h1>ЛИГНОГУМАТ —</h1>
                            <p>минеральные удобрения, содержащие микро и макроэлементы,
                                используемые для некорневых подкормок и различных обработок
                                семенного материала.</p>
                            <a href="" class="kitchen_button">Оставить заявку</a>
                        </div>
                        <div>
                            <img src="/img/lignogumat.png" alt="">
                        </div>
                    </div>

                    <div class="line_table">
                        <div class="line_table_item green">
                            <h6>Макроэлементы %:</h6>
                            <p>Mg 0.25 (0.25), S 5 (5), Fe 0.2 (0.2)</p>
                        </div>
                        <div class="line_table_item red">
                            <h6>Микроэлементы %:</h6>
                            <p>B 0 (0.15), Mo 0.001 (0.01), Mn 0,01(0,2), Cu 0,01</p>
                        </div>
                        <div class="line_table_item green">
                            <h6>Срок хранения: </h6>
                            <p>н/д</p>
                        </div>
                        <div class="line_table_item red">
                            <h6>Регистрант:</h6>
                            <p>ООО “НПО “РЭТ”</p>
                        </div>
                        <div class="line_table_item green">
                            <h6>Свидетельство о регистрации: </h6>
                            <p>264-13-905-1</p>
                        </div>

                    </div>

                </div>
            </div>

            <div class="second_screen">
                <div class="second_screen_type">
                    <div class="type_txt">
                        <a href="">Вредный объект:</a>
                        <p><?= $category['hurmful_object'] ?></p>
                    </div>
                    <div class="type_txt">
                        <a href="">Культуры:</a>
                        <p><?= $category['single_culture'] ?></p>
                    </div>
                </div>
                <div class="benefits">
                    <h2>
                        Преимущества
                    </h2>
                    <div class="benefits_item">
                        <div class="benefits_item-txt">
                            <img src="img/Check_circle.png" alt="">
                            <p class="fz-17px">полностью растворяется даже в прохладной воде</p>
                        </div>
                        <div class="benefits_item-txt">
                            <img src="img/Check_circle.png" alt="">
                            <p class="fz-17px">повышает урожайность и товарную ценность сельскохозяйственной продукции</p>
                        </div>
                        <div class="benefits_item-txt">
                            <img src="img/Check_circle.png" alt="">
                            <p class="fz-17px">улучшает экологические качества продукции</p>
                        </div>
                        <div class="benefits_item-txt">
                            <img src="img/Check_circle.png" alt="">
                            <p class="fz-17px">сокращает расход минеральных и органических удобрений</p>
                        </div>
                        <div class="benefits_item-txt">
                            <img src="img/Check_circle.png" alt="">
                            <p class="fz-17px">снижает стрессы растений при пересадке, обработке пестицидами и заморозках</p>
                        </div>
                        <div class="benefits_item-txt">
                            <img src="img/Check_circle.png" alt="">
                            <p class="fz-17px">cохраняет плодородие почв</p>
                        </div>
                    </div>
                    <div class="openWindow">
                        <div class="action ">
                            <div>
                                <p>Особенности</p>
                            </div>
                            <div>
                                <img src="img/arrow_white.png" alt="">
                            </div>

                        </div>
                        <div class="action_description hide">
                            <p>Рабочие растворы не содержат взвешенных частиц,
                                что позволяет применять его в системах капельного полива и орошения,
                                совмещая с жидкими минеральными подкормками и обработкой пестицидами.</p>
                        </div>
                        <div class="action">
                            <p>Регламет применения</p>
                            <img src="img/arrow_white.png" alt="">
                        </div>
                        <div class="single_action_description hide">
                            <div class="table_border">
                                <div class="table">
                                    <div class="table_subtitle single_culture_subtitle w-fc">
                                        <p class="pt-centr">Культура</p>

                                        <div class="table_txt ">Вико-овсяная смесь
                                        </div>
                                        <div class="table_txt ">Вико-овсяная смесь
                                        </div>
                                        <div class="table_txt">Табак</div>
                                        <div class="table_txt">Лен-долгунец</div>
                                        <div class="table_txt">Рожь озимая, пшеница озимая, пшеница яровая, ячмень яровой, рожь яровая, овес</div>
                                        <div class="table_txt">Рожь озимая, пшеница озимая, пшеница яровая, ячмень яровой, рожь яровая, овес</div>
                                    </div>
                                    <div class="table_subtitle single_culture_subtitle">
                                        <p>Доза применения</p>
                                        <div class="table_txt ">1 %.<br>Расход рабочего раствора -<br> 10 л/т семян</div>
                                        <div class="table_txt ">0,05 %.<br>Расход рабочего раствора - 300 л/га</div>
                                        <div class="table_txt ">1,5 %.<br>Расход рабочего раствора - <br>10 л/т семян</div>
                                        <div class="table_txt "> 0,02 %.<br>Расход рабочего раствора - 300 л/га</div>
                                        <div class="table_txt ">1,5 %.<br>Расход рабочего раствора - <br>10 л/т семян</div>
                                        <div class="table_txt ">1,5 %.<br>Расход рабочего раствора - <br>10 л/т семян</div>
                                    </div>
                                    <div class="table_subtitle single_culture_subtitle">
                                        <p>Время, особенности применения</p>
                                        <div class="table_txt">Обработка семян перед посевом</div>
                                        <div class="table_txt">3-кратная некорневая подкормка растений</div>
                                        <div class="table_txt">3-кратная некорневая подкормка растений: 1-я подкормка рассады - за 5-8 дней до выборки; 2-я - через 5-10 дней после высадки рассады; 3-я - через 10-15 дней после второй</div>
                                        <div class="table_txt">Обработка семян перед посевом</div>
                                        <div class="table_txt">2-кратная некорневая подкормка растений в фазе бутонизации и в фазе зеленой спелости</div>
                                        <div class="table_txt">Обработка семян перед посевом</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="lignogumat_experience">
                        <h2>Опыты применения Лигногумата</h2>
                    </div>
                    <div class="lignogumat_example">
                        <div class="lignogumat_example-container">
                            <div class="experience" id="strawberry">
                                <img src="/img/strawberry.png" alt="">
                                <div class="experience_txt">
                                    <p>Результаты применения Лигногумата при выращивании садовой земляники фермерским хозяйством</p>
                                    <a href="" class="kitchen_button">Посмотреть</a>
                                </div>
                            </div>
                            <div class="experience">
                                <img src="/img/strawberry.png" alt="">
                                <div class="experience_txt">
                                    <p>Отчет по изучению влияния Лигногумата БМ на рост и развитие растений земляники садовой</p>
                                    <a href="" class="kitchen_button">Посмотреть</a>
                                </div>
                            </div>
                            <div class="experience" id="onion">
                                <img src="/img/onion.png" alt="">
                                <div class="experience_txt">
                                    <p>Проведение испытаний препарата «Лигногумат + Аминокислоты» на луке репке</p>
                                    <a href="" class="kitchen_button">Посмотреть</a>
                                </div>
                            </div>
                            <div class="experience">
                                <img src="/img/onion.png" alt="">
                                <div class="experience_txt">
                                    <p>Оценка эффективности применения Лингогумата на посевах яровой пшеницы</p>
                                    <a href="" class="kitchen_button">Посмотреть</a>
                                </div>

                            </div>
                            <div class="experience">
                                <img src="/img/rye.png" alt="">
                                <div class="experience_txt">
                                    <p>Оценка эффективности применения “ЛИГНОГУМАТ БМ” на посевах яровой пшеницы</p>
                                    <a href="" class="kitchen_button">Посмотреть</a>
                                </div>

                            </div>
                            <div class="experience">
                                <img src="/img/rye.png" alt="">
                                <div class="experience_txt">
                                    <p>Оценка эффективности применения “ЛИГНОГУМАТ БМ” на посевах яровой пшеницы в хозяйстве ООО СП Фрунзе</p>
                                    <a href="" class="kitchen_button">Посмотреть</a>
                                </div>

                            </div>
                            <div class="experience">
                                <img src="/img/rye.png" alt="">
                                <div class="experience_txt">
                                    <p>Оценка эффективности применения Лингогумата на посевах яровой пшеницы в хощяйстве ООО “Агропромбизнес”</p>
                                    <a href="" class="kitchen_button">Посмотреть</a>
                                </div>
                            </div>
                            <div class="experience">
                                <img src="/img/rye.png" alt="">
                                <div class="experience_txt">
                                    <p>Оценка эффективности применения “АРГОЛАН АКВА” компании ООО “ЛИГНОГУМАТ” на посевах яровой пшеницы</p>
                                    <a href="" class="kitchen_button">Посмотреть</a>
                                </div>
                            </div>
                            <div class="experience" id="rye">
                                <img src="/img/rye.png" alt="">
                                <div class="experience_txt">
                                    <p>Оценка эффективности применения “ЛИГНОГУМАТ АМ” на посевах ярового ячменя</p>
                                    <a href="" class="kitchen_button">Посмотреть</a>
                                </div>
                            </div>
                            <div class="experience">
                                <img src="/img/rye.png" alt="">
                                <div class="experience_txt">
                                    <p>Оценка эффективности применения “ЛИГНОГУМАТ БМ” на посевах ярового ячменя</p>
                                    <a href="" class="kitchen_button">Посмотреть</a>
                                </div>

                            </div>
                        </div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>

                </div>
    </main>
    <?php
    include('includes/footer.php')
    ?>
</body>
<script src="/js/lignogumat.js"></script>

</html>