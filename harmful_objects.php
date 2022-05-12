<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вредные объекты</title>
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
        include('includes/filter_hurmful.php')
       ?>

            <div id="harmful_main">
                <h1>Вредные объекты</h1>
           
                <div id="block_card">

                <?php
                    $categories_hurmful = get_hurmful();
                    ?>
                    <?php
                    $i = 0;
                    $list = array();

                    foreach ($catygories_hurmful as $hurmful) : {
                            $list[$i]["id"] = $hurmful["id"];
                            $list[$i]["title"] = $hurmful["title"];
                            $list[$i]["sub_title"] = $hurmful["sub_title"];
                            $list[$i]["type"] = $hurmful["type"];
                            $list[$i]["image"] = $hurmful["image"];


                            $i++;
                        }
                    ?>
                    
                     
            </div>
            </div>
        <?php
                    endforeach;
        ?>

    </main>

      <?php 
    include('includes/footer.php')
    ?>

<!-- <script src="sourse.js"></script> -->
<script src="js/harmful_filter.js"></script>
</body>
</html>