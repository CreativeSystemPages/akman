<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проф. и бытовая химия</title>
</head>
<body>
    <?php 
    include('includes/header.php');
    ?>
    <main>
    <div class="chemistry_container">
    <a class="minFilter-title">Фильтры 
        <img src="/img/minFilter.png" alt="">
    </a>
    <?php
            include('includes/kitchen_filter.php');
            ?>
            
            <div class="cards">
                <h1>Профессиональная и бытовая химия</h1>
                <div class="card-row">
              
                   <a href="kitchen.php" class="chemistry_card">
                       <img src="../img/kitchen.png" alt="">
                       <p>Для кухни и мытья <br> посуды</p>
                   </a>

                   <div class="chemistry_card">
                       <img src="../img/soap.png" alt="">
                       <p>Для личной гигиены,<br> дезинфекция, мыло</p>
                   </div>

                   <div class="chemistry_card">
                       <img src="../img/floors.png" alt="">
                       <p>Для полов, напольных <br> покрытий</p>
                   </div>
              

            <div class="chemistry_card">
                       <img src="../img/window.png" alt="">
                       <p>Для стёкол, нерж. <br> стали</p>
                   </div>

                   <div class="chemistry_card">
                       <img src="../img/toilet.png" alt="">
                       <p>Для санузлов и <br> сантехники</p>
                   </div>

                   <div class="chemistry_card">
                       <img src="../img/detergent.png" alt="">
                       <p>Универсальные и <br> дезинфицирующие <br> средства</p>
                   </div>
                 </div>
                
            </div>
        </div>
        </div>
    </main>

     <?php 
    include('includes/footer.php');
    ?>
       <script src="/js/sourse.js"></script>
</body>
</html>