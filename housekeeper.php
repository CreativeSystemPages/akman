<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Хозтовары</title>
</head>
<body>
    <?php 
    include('includes/header.php');
    ?>
   <main>
    <div class="chemistry_container">
    <?php
            include('includes/kitchen_filter.php');
            ?>
            
            <div class="cards">
                <h1>Хозтовары</h1>
                <div class="card-row">
              
                   <a href="paper_towels_and_toilet_paper.php" class="chemistry_card">
                       <img src="../img/wallpaper.png" alt="">
                       <p>Бумажные полотенца и <br> туалетная бумага</p>
                   </a>

                   <div class="chemistry_card">
                       <img src="../img/mop.png" alt="">
                       <p>Уборочный инвентарь <br> и оборудование</p>
                   </div>

                   <div class="chemistry_card">
                       <img src="../img/waste.png" alt="">
                       <p>Мусорные мешки</p>
                   </div>
              

            <div class="chemistry_card">
                       <img src="../img/gloves.png" alt="">
                       <p>Средства <br> индивидуальной <br> защиты</p>
                   </div>

                   <div class="chemistry_card">
                       <img src="../img/napkins.png" alt="">
                       <p>Салфетки</p>
                   </div>

                  
                 </div>
                
            </div>
        </div>
        </div>
    </main>

    <?php 
    include('includes/footer.php');
    ?>
       <script src="sourse.js"></script>
</body>
</html>