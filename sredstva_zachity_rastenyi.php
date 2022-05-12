<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Средства защиты растений</title>
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
            include('includes/filter_szr.php');
            ?>

            <div class="cards">
                <?php
                // include('includes/minFilter.php')
                ?>
                <h1>Средства защиты растений</h1>
                <div id="filter_card">
                    <?php
                    $categories = get_categories();
                    ?>
                    <?php
                    $i = 0;
                    $list = array();

                    foreach ($categories as $category) : {
                            $list[$i]["id"] = $category["id"];
                            $list[$i]["type"] = $category["type"];
                            $list[$i]["title"] = $category["title"];
                            $list[$i]["sub_title"] = $category["sub_title"];
                            $list[$i]["culture"] = $category["culture"];
                            $list[$i]["hurmful"] = $category["hurmful"];
                            $list[$i]["active_substance"] = $category["active_substance"];
                            $list[$i]["image"] = $category["image"];
                            $list[$i]["single_subtitle"] = $category["single_subtitle"];



                            $i++;
                        }
                    ?>
                        <!-- <div class="card">
                            <img src= <?= $category["image"]?>>
                            <div class="card_subtitle">
                                <h5><?= $category["sub_title"]?></h5>
                                <h6><?= $category["active_substance"]?></h6>
                                <p><?= $category["type"]?></p>
                                <a href="/simple_page_products.php?category_id=<?=$category['id']?>" class="add-to-cart" data-art="${n.name}">Подробнее</a>
                            </div> -->
                           
                        </div>
                    <?php
                    endforeach;
                    ?>

                </div>
            </div>
    </main>
    <?php
    include('includes/footer.php')
    ?>

 
    <script src="js/sourse.js"></script>
</body>

</html>