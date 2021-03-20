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

    

        <form id="login_form" action="connected.php" method="POST">
            <table>
                <tr>
                <th>Login :</th>
                    <td><input type="text" name="login"></td>
                </tr>
                <tr>
                    <th>Mot de passe :</th>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="Se connecter..." /></td>
                </tr>
            </table>
        </form>

    
    
    
    
</section>

<?php
        require_once('template_footer.php');
 ?>

