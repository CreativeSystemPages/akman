<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$category['sub_title']?></title>
</head>
<body>
    <?php
    include('includes/header.php');
    $category_id = $_GET['category_id'];
    $category = get_categories_by_id($category_id);
    if(!is_numeric($category_id)) exit();
    ?>
    <main>
        <div class="simple_page">
            <div class="simple-container">
            <a class="minFilter-title">Фильтры 
        <img src="/img/minFilter.png" alt="">
    </a>
                <div>
                    <?php
                    include('includes/filter_szr.php');
                    ?>
                </div>

               
                <div class="simple_page_main">
                   
                    <div class="first_screen">
                        <div>
                        <h1><?=$category['sub_title']?></h1>
                        <p><?=$category['single_subtitle']?></p>
                        <a href="" class="kitchen_button">Оставить заявку</a>
                        </div>
                        <div>
                        <img src="<?=$category['image']?>" alt="">
                    </div>
                    </div>

                    <div class="line_table">
                <div class="line_table_item green">
                    <h6>Действующее вещество:</h6>
                    <p><?=$category['single_active_substance']?></p>
                </div>
                <div class="line_table_item red">
                    <h6>Химический клас:</h6>
                    <p><?=$category['chemistry_class']?></p>
                </div>
                <div class="line_table_item green">
                    <h6>Класс опасности: </h6>
                    <p>-</p>
                </div>
                <div class="line_table_item red">
                    <h6>Препаративная форма:</h6>
                    <p><?=$category['forma']?></p>
                </div>
                <div class="line_table_item green">
                    <h6>Срок хранения: </h6>
                    <p><?=$category['shelf_life']?></p>
                </div>
                <div class="line_table_item red">
                    <h6>Регистрант:</h6>
                    <p><?=$category['Registrant']?></p>
                </div>
                <div class="line_table_item green">
                    <h6>Свидетельство о регистрации:</h6>
                    <p><?=$category['registration']?></p>
                </div>
            </div>
                   
                </div>
            </div>

            <div class="second_screen">
                <div class="second_screen_type">
                    <div class="type_txt">
                        <a href="">Вредный объект:</a>
                        <p><?=$category['hurmful_object']?></p>
                    </div>
                    <div class="type_txt">
                        <a href="">Культуры:</a>
                        <p><?=$category['single_culture']?></p>
                    </div>
                </div>
                <div class="benefits">
                <h2>
                    Преимущества
                </h2>
               <div class="benefits_item">
                   <div class="benefits_item-txt">
                       <img src="img/Check_circle.png" alt="">
                   <p>широкий спектр действия против двудольных сорных растений</p>
                   </div>
                   <div class="benefits_item-txt">
                   <img src="img/Check_circle.png" alt="">
                   <p>применяется на зерновых с подсевом бобовых трав</p>
                   </div>
                   <div class="benefits_item-txt">
                   <img src="img/Check_circle.png" alt="">
                   <p>не фитотоксичен в отношении обрабатываемой культуры</p>
                   </div>
                   <div class="benefits_item-txt">
                   <img src="img/Check_circle.png" alt="">
                   <p>длительный диапазон применения</p>
                   </div>
               </div>
               <div class="openWindow">
               <div class="action ">
                   <div>
                   <p>Спектр действия</p>
                   </div>
                   <img src="img/arrow_white.png" alt="">
               </div>
               <div class="action_description hide">
                    <p><?=$category['action_spectrum']?></p>
               </div>
               <div class="action">
                   <p>Механизм действия</p>
                   <img src="img/arrow_white.png" alt="">
               </div>
               <div class="action_description hide">
                   <p>
                   <?=$category['mechanism_of_action']?></p>
                  
               </div>
               <div class="action">
                   <p>Рекомендации</p>
                   <img src="img/arrow_white.png" alt="">
               </div>
               <div class="action_description hide">
                   <p>
                  
                   <?=$category['recommendations']?>
                   </p>
               </div>
               </div>
                <h2>
                    Регламент применения:
                </h2>

                <div class="benefits_item">
                    <div class="table_title">
                   <p><strong>Пшеница яровая</strong></p>
                   <img src="img/arrow_menu.png" alt="">
                   </div>
                   <div class="table hide">
                       <div class="table_subtitle">
                           <p>Норма расхода препарата</p>
                         
                           <div class="table_txt"><?=$category['simple_table_norm']?></div>
                       </div>
                       <div class="table_subtitle">
                           <p>Расход рабочей жидкости</p>
                           <div class="table_txt"><?=$category['simple_table_fluid_flow']?></div>
                       </div>
                       <div class="table_subtitle">
                           <p>Кратность обработки</p>
                           <div class="table_txt"><?=$category['simple_table_multiplicity']?></div>
                       </div>
                       <div class="table_subtitle">
                           <p>Вредный объект</p>
                           <div class="table_txt"><?=$category['hurmful_object']?></div>
                       </div>
                       <div class="table_subtitle">
                           <p>Способ обработки</p>
                           <div class="table_txt"><?=$category['simple_table_method']?></div>
                       </div>
                   </div>
                   <div class="table_title">
                   <p><strong>Пшеница яровая</strong></p>
                   <img src="img/arrow_menu.png" alt="">
                   </div>
                   <div class="table hide">
                       <div class="table_subtitle">
                           <p>Норма расхода препарата</p>
                         
                           <div class="table_txt">2.0-2.4</div>
                       </div>
                       <div class="table_subtitle">
                           <p>Расход рабочей жидкости</p>
                           <div class="table_txt">200 - 300 л/га</div>
                       </div>
                       <div class="table_subtitle">
                           <p>Кратность обработки</p>
                           <div class="table_txt">1</div>
                       </div>
                       <div class="table_subtitle">
                           <p>Вредный объект</p>
                           <div class="table_txt">Однолетние двудольные сорняки, в т.ч. устойчивые к 2,4Д и МЦПА</div>
                       </div>
                       <div class="table_subtitle">
                           <p>Способ обработки</p>
                           <div class="table_txt">Опрыскивание посевов весной с начала кущения зерновых культур в ранние фазы роста сорняков (2-4 листа).</div>
                       </div>
                   </div>
                   <div class="table_title">
                   <p><strong>Пшеница яровая</strong></p>
                   <img src="img/arrow_menu.png" alt="">
                   </div>
                   <div class="table hide">
                       <div class="table_subtitle">
                           <p>Норма расхода препарата</p>
                         
                           <div class="table_txt">2.0-2.4</div>
                       </div>
                       <div class="table_subtitle">
                           <p>Расход рабочей жидкости</p>
                           <div class="table_txt">200 - 300 л/га</div>
                       </div>
                       <div class="table_subtitle">
                           <p>Кратность обработки</p>
                           <div class="table_txt">1</div>
                       </div>
                       <div class="table_subtitle">
                           <p>Вредный объект</p>
                           <div class="table_txt">Однолетние двудольные сорняки, в т.ч. устойчивые к 2,4Д и МЦПА</div>
                       </div>
                       <div class="table_subtitle">
                           <p>Способ обработки</p>
                           <div class="table_txt">Опрыскивание посевов весной с начала кущения зерновых культур в ранние фазы роста сорняков (2-4 листа).</div>
                       </div>
                   </div>
                   <div class="table_title">
                   <p><strong>Пшеница яровая</strong></p>
                   <img src="img/arrow_menu.png" alt="">
                   </div>
                   <div class="table hide">
                       <div class="table_subtitle">
                           <p>Норма расхода препарата</p>
                         
                           <div class="table_txt">2.0-2.4</div>
                       </div>
                       <div class="table_subtitle">
                           <p>Расход рабочей жидкости</p>
                           <div class="table_txt">200 - 300 л/га</div>
                       </div>
                       <div class="table_subtitle">
                           <p>Кратность обработки</p>
                           <div class="table_txt">1</div>
                       </div>
                       <div class="table_subtitle">
                           <p>Вредный объект</p>
                           <div class="table_txt">Однолетние двудольные сорняки, в т.ч. устойчивые к 2,4Д и МЦПА</div>
                       </div>
                       <div class="table_subtitle">
                           <p>Способ обработки</p>
                           <div class="table_txt">Опрыскивание посевов весной с начала кущения зерновых культур в ранние фазы роста сорняков (2-4 листа).</div>
                       </div>
                   </div>
                </div>
           
            
        </div>
    </main>
    <?php
   include('includes/footer.php');
    ?>

</body>

</html>
    </main>
    <script src="/js/single_products.js"></script>
</body>
</html>
