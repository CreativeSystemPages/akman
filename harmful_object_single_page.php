<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include('includes/header.php');
    $single_hurmful_id = $_GET['single_hurmful_id'];
    $single_hurmful = get_hurmful_by_id($single_hurmful_id);
    if (!is_numeric($single_hurmful_id)) exit();
    ?>

    <main>
        <div class="simple_page">
            <div class="simple-container">
            <a class="minFilter-title">Фильтры 
        <img src="/img/minFilter.png" alt="">
    </a>
                <div>
                    <?php
                    include('includes/filter_hurmful.php');
                    ?>
                </div>


                <div class="simple_page_main">

                    <div class="first_screen dis-block">
                        <div>
                            <h1><?= $single_hurmful['single_title'] ?></h1>
                            <p class="fz-20px"><?= $single_hurmful['single_subtitle'] ?></p>
                           
                        </div>
                        <div>
                            <img src="<?=$single_hurmful['single_image']?>" alt="">
                        </div>
                    </div>

                    <div class="line_table">
                        <div class="line_table_item green">
                            <h6>Синонимы:</h6>
                            <p><?= $single_hurmful['synonims']?></p>
                        </div>
                        <div class="line_table_item red">
                            <h6>Возбудители болезни:</h6>
                            <p><?= $single_hurmful['pathogens']?></p>
                        </div>
                        <div class="line_table_item green">
                            <h6>Повреждаемые культуры: </h6>
                            <p><?= $single_hurmful['damaged_crops']?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="second_screen">
                <div class="benefits br-2">
                    <h2>
                        Источники инфекции
                    </h2>
                    <div class="benefits_item">
                        <div class="benefits_item-txt">

                            <p><?= $single_hurmful['source_of_infection']?></p>
                        </div>

                    </div>
                    <div class="action">
                        <p>Симптомы заболевания</p>
                        <img src="img/arrow_white.png" alt="">
                    </div>
                    <div class="action_description hide">
                        <p><?= $single_hurmful['symptoms']?></p>
                    </div>
                    <div class="action">
                        <p>Биология</p>
                        <img src="img/arrow_white.png" alt="">
                    </div>
                    <div class="action_description hide">
                        <p>
                        <?= $single_hurmful['biology']?></p>

                    </div>
                    <h2>
                        Меры борьбы:
                    </h2>
                 <div class="single_hurmful_open_list">
                     <h3>Агротехнические</h3>
                 </div>
                
                     <ul class="single_hurmful_list hide">
                         <li>соблюдение 2-3 летнего севооборота</li>
                         <li>посадка здоровым семенным материаломы</li>
                         <li>использование устойчивых к патогену сортов</li>
                         <li>соблюдение агротехнических рекомендаций</li>
                        

                     </ul>
                
                 <div class="single_hurmful_open_list">
                     <h3>Химические</h3>
                 </div>
                
                     <ul class="single_hurmful_list hide">
                         <li>опрыскивание почвы при посадке клубней фунгицидами групп: стробилурины, неоникотиноиды, триазолы, фенилпирролы;</li>
                         <li>обработка клубней перед посадкой фунгицидами групп неоникотиноиды, триазолы, фенилпирролы;</li>
                         <li>опрыскивание в период вегетации фунгицидами на основе соединений меди, дитиокарбаматов и прочих веществ;</li>
                         <li>опрыскивание клубней перед закладкой на хранение фунгицидами групп: стробилурины, неоникотиноиды, триазолы, фенилпирролы.</li>
                         

                     </ul>
                 
                 <div class="single_hurmful_open_list">
                     <h3>Биологические</h3>
                 </div>
                     <ul class="single_hurmful_list hide">
                         <li>опрыскивание почвы и растительных остатков после уборки предшествующей культуры биологическими пестицидами;</li>
                         <li>опрыскивание почвы перед посадкой биологическими пестицидами;</li>
                         <li>предпосадочная обработка клубней биологическими пестицидами;</li>
                         <li>опрыскивание в период вегетации биологическими пестицидами.</li>
                        
                     </ul>
                </div>
               
            </div>



    </main>

    <?php
    include('includes/footer.php');
    ?>
    <script src="/js/harmful_object.js"></script>
</body>

</html>