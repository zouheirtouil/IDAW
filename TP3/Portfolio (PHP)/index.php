<?php
    require_once("template_header.php");
    require_once("template_menu.php");

    $currentPageId = 'accueil';
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }
        
    if(isset($_GET['lang']) && !empty($_GET['lang']))
            $lang = $_GET['lang'];
        
?>



<form id="style_form" action="index.php" method="GET">
<select name="css">
<option value="style1">style1</option>
<option value="style2">style2</option>
</select>
<input type="submit" value="Appliquer" />
</form>


<?php
    renderMenuToHTML($currentPageId);
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

