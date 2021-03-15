<div id="banner1">

</div>


<?php
        function renderMenuToHTML($currentPageId){
            $lang = "fr";
            $mymenu = array(
                // idPage titre
                'accueilfr' => array( 'Accueil' ),
                'cvfr' => array( 'Cv' ),
                'projetsfr' => array('Mes Projets'),
                'contactfr' => array('Contacts'),
                'langfr' => array('English')
            );
            echo "<nav class=\"menu\"><ul>";
            foreach($mymenu as $pageId => $pageParameters) {
                echo "<li><a ";
                if($currentPageId == $pageId)
                    echo "id=\"currantpage\"";  
                    echo "href=index.php?page=$pageId>$pageParameters[0]</a></li>";
                }
                echo  "</ul></nav>";

     }
?>

<div id="banner2">

</div>