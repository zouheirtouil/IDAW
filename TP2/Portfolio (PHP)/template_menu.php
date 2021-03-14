<div id="banner1">

</div>


<?php
        function renderMenuToHTML($currentPageId){
            $mymenu = array(
                // idPage titre
                'index' => array( 'Accueil' ),
                'cv' => array( 'Cv' ),
                'projets' => array('Mes Projets')
            );
            echo "<nav class=\"menu\"><ul>";
            foreach($mymenu as $pageId => $pageParameters) {
                echo "<li><a ";

                if($currentPageId == $pageId)
                    echo "id=\"currantpage\"";  
                echo "href='$pageId.php'><span>$pageParameters[0]</span></a></li>";
                
            }
            echo  "</ul></nav>";

     }
?>

<div id="banner2">

</div>