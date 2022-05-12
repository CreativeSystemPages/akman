<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Семена</title>
</head>
<body>
    <?php 
        include('includes/header.php');
        $seeds_id = $_GET['seeds_id'];
        $seeds = get_seeds_by_id( $seeds_id);
        if(!is_numeric($seeds_id)) exit();
    ?>
    <main>
        <div class="simple_page">
            <div class="simple-container">
            <a class="minFilter-title">Фильтры 
        <img src="/img/minFilter.png" alt="">
    </a>
                <div>
                    <?php
                    include('includes/filter_seeds.php');
                    ?>
                </div>

               
                <div class="simple_page_main">
                   
                    <div class="first_screen">
                        <div>
                        <h1><?=$seeds['single_title']?></h1>
                        <p><?=$seeds['single_subtitle']?></p>
                        <a href="" class="kitchen_button">Оставить заявку</a>
                        </div>
                        <div>
                        <!-- <img src="<?=$category['image']?>" alt=""> -->
                    </div>
                    </div>

                    <div class="line_table">
                <div class="line_table_item green">
                    <h6>ФАО:</h6>
                    <p><?=$seeds['FAO']?></p>
                </div>
                <div class="line_table_item red">
                    <h6>Группа спелости:</h6>
                    <p><?=$seeds['ripeness_group']?></p>
                </div>
                <div class="line_table_item green">
                    <h6>Урожайность: </h6>
                    <p><?=$seeds['productivity']?></p>
                </div>
                <div class="line_table_item red">
                    <h6>Форма початка:</h6>
                    <p><?=$seeds['cob_shape']?></p>
                </div>
                <div class="line_table_item green">
                    <h6>Длина початка: </h6>
                    <p><?=$seeds['cob_length']?></p>
                </div>
                <div class="line_table_item red">
                    <h6>Ряды зерен:</h6>
                    <p><?=$seeds['rows_of_grains']?></p>
                </div>
                <div class="line_table_item green">
                    <h6>Селекция:</h6>
                    <p><?=$seeds['selection']?></p>
                </div>
                <div class="line_table_item red">
                    <h6>Масса 1000 семян:</h6>
                    <p><?=$seeds['weigth_of_1000_grains']?></p>
                </div>
            </div>
                   
                </div>
            </div>

            <div class="second_screen">
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
               <div class="action">
                   <p>Рекомендации</p>
                   <img src="img/arrow_white.png" alt="">
               </div>
               <div class="action_description hide">
                    <p><?=$seeds['reccomend']?></p>
               </div>
               
           
            </div>
        </div>
    </main>
      <?php 
        include('includes/footer.php');
    ?>
    <script src="/js/single_seeds.js"></script>
</body>
</html>