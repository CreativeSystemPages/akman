<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Для кухни и мытья посуды</title>
</head>
<body>
    <?php
    include('includes/header.php');
    ?>

   <main>
   <div class="option_container">
   <a class="minFilter-title">Фильтры 
        <img src="/img/minFilter.png" alt="">
    </a>
   <?php
            include('includes/kitchen_filter.php');
            ?>

            <div id="harmful_main">
                <h1>Для кухни и мытья посуды</h1>
            <!-- <div style="display: flex; flex-direction: column;"> -->
                <div id="block_card">

                <?php
                    $categories_kitchen = get_papers();
                    ?>
                    <?php
                    $i = 0;
                    $list = array();

                    foreach ($catygories_papers as $paper) : {
                            $list[$i]["id"] = $paper["id"];
                            $list[$i]["title"] = $paper["title"];
                            $list[$i]["sub_title"] = $paper["sub_title"];
                            $list[$i]["type"] = $paper["type"];
                            $list[$i]["image"] = $paper["image"];


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
    include('includes/footer.php');
    ?>
       <!-- <script src="sourse.js"></script> -->
       <script src="js/paperFilter.js"></script>
</body>
</html>