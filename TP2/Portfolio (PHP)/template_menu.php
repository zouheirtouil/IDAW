<div id="banner1">

</div>


<?php
        function renderMenuToHTML($currentPageId){
            $mymenu = array(
                // idPage titre
                'accueil' => array( 'Accueil' ),
                'cv' => array( 'Cv' ),
                'projets' => array('Mes Projets'),
                'contact' => array('Contacts')
            );
            echo "<nav class=\"menu\"><ul>";
            foreach($mymenu as $pageId => $pageParameters) {
                echo "<li><a ";

                if($currentPageId == $pageId)
                    echo "id=\"currantpage\"";  
                echo "href= index.php?page=$pageId>$pageParameters[0]</a></li>";
                
            }
            echo  "</ul></nav>";

     }
?>

<div id="banner2">

</div>