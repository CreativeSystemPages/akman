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
    $culture_id = $_GET['culture_id'];
    $culture = get_culture_by_id($culture_id);
    if (!is_numeric($culture_id)) exit();
    $categories_seeds = get_seeds();
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
                            <h1><?= $culture['title'] ?></h1>
                        </div>
                        <div>

                        </div>
                    </div>

                    <div class="line_table">
                        <img src="<?= $culture['single_image'] ?>" alt="">
                        <div class="experience_link">
                            <a href="">Посмотреть отчеты опытов применения Лигногумата</a>
                            <img src="/img/arrow_sunflower.png" alt="">
                        </div>

                    </div>

                </div>
            </div>

            <div class="second_screen">

                <div class="benefits">
                    <div class="action mt-n">
                        <p>Гибриды подсолнечника</p>
                        <img src="img/arrow_white.png" alt="">
                    </div>
                    <div class="single_action_description hide">
                        <div class="single_action_description_card">
                            <?php
                            $categories_seeds = get_seeds();
                            ?>
                            <?php
                            foreach ($categories_seeds as $seed) : {
                                    $list[$i]["id"] = $seed["id"];
                                    $list[$i]["type"] = $seed["type"];
                                    $list[$i]["title"] = $seed["title"];
                                    $list[$i]["sub_title"] = $seed["sub_title"];
                                    $list[$i]["culture"] = $seed["culture"];
                                    $list[$i]["hurmful"] = $seed["hurmful"];
                                    $list[$i]["Term"] = $seed["Term"];
                                    $list[$i]["image"] = $seed["image"];


                                    $i++;
                                }
                            ?>
                             <div class="card">
                            <img src= <?= $seed["title"]?>>
                            <div class="card_subtitle">
                                <h5><?= $seed["sub_title"]?></h5>
                                <h6><?= $seed["Term"]?></h6>
                                <p><?= $seed["culture"]?></p>
                                <a href="/single_page_seeds.php?seeds_id=<?=$seed['id']?>" class="add-to-cart" data-art="${n.name}">Подробнее</a>
                            </div>

                            
                                  
               
                </div>
                <?php
                            endforeach;
                ?>
                        </div>
              
               
                </div>

                <div class="action">
                <p>Средства защиты подсолнечника</p>
                <img src="img/arrow_white.png" alt="">
            </div>
            <div class="single_action_description_card hide">
            <div class="table">
                       <div class="table_subtitle single_culture_subtitle">
                           <p class="pt-centr">Протравители</p>
                         
                           <div class="table_txt single_culture_txt">Бентасил</div>
                           <div class="table_txt single_culture_txt">Бентасил</div>
                           <div class="table_txt single_culture_txt">Бентасил</div>
                           <div class="table_txt single_culture_txt">Бентасил</div>
                       </div>
                       <div class="table_subtitle single_culture_subtitle">
                           <p>Гербициды</p>
                           <div class="table_txt single_culture_txt">Бентасил</div>
                           <div class="table_txt single_culture_txt">Бентасил</div>
                           <div class="table_txt single_culture_txt">Бентасил</div>
                           <div class="table_txt single_culture_txt">Бентасил</div>
                       </div>
                       <div class="table_subtitle single_culture_subtitle">
                           <p>Фунгициды</p>
                           <div class="table_txt single_culture_txt">Бентасил</div>
                           <div class="table_txt single_culture_txt">Бентасил</div>
                           <div class="table_txt single_culture_txt">Бентасил</div>
                           <div class="table_txt single_culture_txt">Бентасил</div>

                       </div>
                       <div class="table_subtitle single_culture_subtitle">
                           <p>Инсектициды</p>
                           <div class="table_txt single_culture_txt">Бентасил</div>
                           <div class="table_txt single_culture_txt">Бентасил</div>
                           <div class="table_txt single_culture_txt">Бентасил</div>
                           <div class="table_txt single_culture_txt">Бентасил</div>
                       </div>
                       <div class="table_subtitle single_culture_subtitle">
                           <p>Десиканты</p>
                           <div class="table_txt single_culture_txt">Бентасил</div>
                           <div class="table_txt single_culture_txt">Бентасил</div>
                           <div class="table_txt single_culture_txt">Бентасил</div>
                           <div class="table_txt single_culture_txt">Бентасил</div>
                       </div>
                   </div>

            </div>

                            </div>

           
         

        </div>
        </div>
    </main>
    <?php
    include('includes/footer.php');
    ?>

<script src="/js/single_products.js"></script>
</body>

</html>