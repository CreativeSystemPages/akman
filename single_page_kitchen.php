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
    $kitchen_id = $_GET['kitchen_id'];
    $kitchen = get_kitchen_by_id($kitchen_id);
    if (!is_numeric($kitchen_id)) exit();
    ?>

    <main>
        <div class="simple_page">
            <div class="simple-container">
            <a class="minFilter-title">Фильтры 
        <img src="/img/minFilter.png" alt="">
    </a>
            <?php
            include('includes/kitchen_filter.php');
            ?>


                <div class="simple_page_main">

                    <div class="first_screen">
                        <div>
                            <h1><?= $kitchen['title'] ?></h1>
                            <p><?= $category['single_subtitle'] ?></p>
                            <a href="" class="kitchen_button">Оставить заявку</a>
                        </div>
                        <div>
                            <img src="<?= $kitchen['image'] ?>" alt="">
                        </div>
                    </div>

                    <div class="line_table">
                        <div class="line_table_item green">
                            <h6>Количество:</h6>
                            <p><?= $kitchen['weigth'] ?></p>
                        </div>
                        <div class="line_table_item red">
                            <h6>Состав:</h6>
                            <p><?= $kitchen['composition'] ?></p>
                        </div>
                        <div class="line_table_item green">
                            <h6>pH: </h6>
                            <p><?= $kitchen['pH'] ?></p>
                        </div>
                        <div class="line_table_item red">
                            <h6>Препаративная форма:</h6>
                            <p><?= $kitchen['form'] ?></p>
                        </div>
                        <div class="line_table_item green">
                            <h6>Код: </h6>
                            <p><?= $kitchen['code'] ?></p>
                        </div>
                        <div class="line_table_item red">
                            <h6>Артикул:</h6>
                            <p><?= $kitchen['article'] ?></p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="second_screen">
                <div class="benefits">


                    <div class="action">
                        <p>Условия хранения:</p>
                        <img src="img/arrow_white.png" alt="">
                    </div>
                    <div class="action_description hide">
                        <p><?= $kitchen['storage'] ?></p>
                    </div>
                </div>
            </div>



    </main>
    <?php
    include('includes/footer.php');
    ?>

    <script src="/js/kitchenFilter.js"></script>
</body>

</html>