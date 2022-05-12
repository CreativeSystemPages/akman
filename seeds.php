<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Семена полевых культур</title>
</head>
<body>
<?php 
      include('includes/header.php')
 ?>

    <main>
        <div class="option_container">

        <a class="minFilter-title">Фильтры 
        <img src="/img/minFilter.png" alt="">
    </a>
            <?php 
            include('includes/filter_seeds.php');
        ?>

            <div class="cards">
                <h1>Семена полевых культур</h1>
                <div id="filter_card">

                    <?php
                    $categories_seeds = get_seeds();
                    ?>
                    <?php
                    $i = 0;
                    $list = array();

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

                </div>
            </div>
        <?php
                    endforeach;
        ?>
        </div>
    </main>
    <?php 
     include('includes/footer.php')
 ?>
    <!-- <script src="js/sourse.js"></script> -->
    <script src="js/seedsFilter.js"></script>
    
</body>
</html>