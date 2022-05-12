<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Культуры</title>
</head>

<body>
    <?php
    include('includes/header.php')
    ?>
    <main>
        <div class="chemistry_container">
        <a class="minFilter-title">Фильтры 
        <img src="/img/minFilter.png" alt="">
    </a>
            <div id="filters" class="filters">
                <p>Фильтры</p>
                <button class="filters_title" style="border-bottom:2px solid #412A2A;">Культура</button>
                <button class="filters_agree">Применить</button>
                <button class="filters_disagree">Сбросить фильтры</button>
            </div>

            <div class="cards">
                <h1>Культуры</h1>

                <div class="card-row">
                    <?php
                    $culture = get_culture();
                    ?>
                    <?php
                    $i = 0;
                    $list = array();

                    foreach ($culture as $culture) : {
                            $list[$i]["id"] = $culture["id"];
                            $list[$i]["title"] = $culture["title"];
                            $list[$i]["image"] = $culture["image"];
                            $i++;
                        }
                    ?>
                        <a href="single_culture.php?culture_id=<?= $culture['id'] ?>" class="chemistry_card">
                            <img src="<?= $culture['image'] ?>" alt="">
                            <p><?= $culture['title'] ?></p>
                        </a>

                    <?php
                    endforeach
                    ?>
                </div>
            </div>
        </div>
        </div>
    </main>
    
    <?php
    include('includes/footer.php')
    ?>

    <script src="/js/sourse.js"></script>
</body>

</html>