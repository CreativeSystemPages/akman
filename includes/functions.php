<?php
    function get_categories(){

        global $link;

        $sql = "SELECT * FROM cards";

        $result = mysqli_query($link, $sql);

        $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $categories;
    }

   $categories =  get_categories();
?>

<?php
    function get_seeds(){
        global $link;

        $sql_seeds = "SELECT * FROM seeds";

        $result_seeds = mysqli_query($link, $sql_seeds);

        $catygories_seeds = mysqli_fetch_all($result_seeds, MYSQLI_ASSOC);

        return $catygories_seeds;
    }

    $catygories_seeds = get_seeds()
?>

<?php
    function get_kitchen(){
        global $link;

        $sql_kitchen = "SELECT * FROM kitchen_and_tableware";

        $result_kitchen = mysqli_query($link, $sql_kitchen);

        $catygories_kitchen = mysqli_fetch_all($result_kitchen, MYSQLI_ASSOC);

        return $catygories_kitchen;
    }

    $catygories_kitchen = get_kitchen();
?>

<?php
    function get_papers(){
        global $link;

        $sql_papers = "SELECT * FROM papers";

        $result_papers = mysqli_query($link, $sql_papers);

        $catygories_papers = mysqli_fetch_all($result_papers, MYSQLI_ASSOC);
        
        return $catygories_papers;
    }

    $catygories_papers = get_papers();
?>

<?php
    function get_hurmful(){
        global $link;

        $sql_hurmful = "SELECT * FROM harmful_object";

        $result_hurmful = mysqli_query($link, $sql_hurmful);

        $catygories_hurmful = mysqli_fetch_all($result_hurmful, MYSQLI_ASSOC);
        
        return $catygories_hurmful;
    }

    $catygories_hurmful = get_hurmful();
?>

<?php
    function get_single(){
        global $link;

        $sql_single = "SELECT * FROM `szr_single-page`";

        $result_single = mysqli_query($link, $sql_single);

        $catygories_single = mysqli_fetch_all($result_single, MYSQLI_ASSOC);
        
        return $catygories_single;
    }

    $catygories_single = get_single();
?>


<?php
    function get_categories_by_id($catygory_id){
        global $link;

        $sql =  "SELECT * FROM cards WHERE id = ".$catygory_id;

        $result = mysqli_query($link, $sql);

        $category = mysqli_fetch_assoc($result);

        
        return $category;
    }
?>

<?php
    function get_kitchen_by_id($kitchen_id){
        global $link;
        $sql = "SELECT * FROM kitchen_and_tableware WHERE id = ".$kitchen_id;
        $result = mysqli_query($link, $sql);
        $kitchen = mysqli_fetch_assoc($result);

        return $kitchen;

    }
?>

<?php
function get_hurmful_by_id($single_hurmful_id){
    global $link;
    $sql = "SELECT * FROM harmful_object WHERE id = ".$single_hurmful_id;
    $result = mysqli_query($link, $sql);
    $single_hurmful = mysqli_fetch_assoc($result);

    return $single_hurmful;
}
?>

<?php
function get_seeds_by_id($seeds_id){
    global $link;
    
    $sql = "SELECT * FROM seeds WHERE id = ".$seeds_id;

    $result = mysqli_query($link, $sql);

    $seeds = mysqli_fetch_assoc($result);

    return $seeds;
}
?>
<?php
function get_culture(){

global $link;

$sql = "SELECT * FROM culture";

$result = mysqli_query($link, $sql);

$culture = mysqli_fetch_all($result, MYSQLI_ASSOC);

return $culture;
}

$culture =  get_culture();
?>

<?php
function get_culture_by_id($culture_id){
    global $link;
    
    $sql = "SELECT * FROM culture WHERE id = ".$culture_id;

    $result = mysqli_query($link, $sql);

    $culture = mysqli_fetch_assoc($result);

    return $culture;
}
?>
