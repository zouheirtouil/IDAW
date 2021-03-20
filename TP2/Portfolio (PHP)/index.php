<?php
    require_once("template_header.php");
    require_once("template_menu.php");

    $currentPageId = 'accueil';

    if(isset($_GET['lang'])){
            $currentlang = $_GET['lang'];
    } else{
        $currentlang = 'fr';
    }


    
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }
        
    
        
?>



<?php
    renderMenuToHTML($currentPageId,$currentlang);
?>
    


<section class="corps">
    <?php
    $pageToInclude = $currentPageId . ".php";
    if(is_readable($pageToInclude))
        require_once($pageToInclude);
    else
        require_once("error.php");
    ?>
</section>

<?php
        require_once('template_footer.php');
 ?>

