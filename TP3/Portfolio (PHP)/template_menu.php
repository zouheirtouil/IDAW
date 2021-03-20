<div id="banner1">

</div>


<?php
        function renderMenuToHTML($currentPageId,$currentlang){
            $mymenu = array(
                // idPage titre
                'accueilfr' => array( 'Accueil' ),
                'cvfr' => array( 'Cv' ),
                'projetsfr' => array('Mes Projets'),
                'contactfr' => array('Contacts'),
                'en' => array('English')
            );

            if($currentPageId=='en'){
                $lang ='en';
                $mymenu = array(
                    // idPage titre
                    'accueilen' => array( 'Home' ),
                    'cven' => array( 'Cv' ),
                    'projetsen' => array('MY Projects'),
                    'contacten' => array('Contacts'),
                    'fr' => array('French')
                );

                echo "<nav class=\"menu\"><ul>";
                foreach($mymenu as $pageId => $pageParameters) {
                    echo "<li><a ";
                    if($currentPageId == $pageId)
                        echo "id=\"currantpage\"";  
                        echo "href=index.php?page=$pageId&lang=$lang>$pageParameters[0]</a></li>";
                    }
                echo  "</ul></nav>";

            }else{
                $lang='fr';
                echo "<nav class=\"menu\"><ul>";
                foreach($mymenu as $pageId => $pageParameters) {
                    echo "<li><a ";
                    if($currentPageId == $pageId)
                        echo "id=\"currantpage\"";  
                        echo "href=index.php?page=$pageId&lang=$lang>$pageParameters[0]</a></li>";
                    }
                    echo  "</ul></nav>";
            }

            
            

     }
?>

<div id="banner2">

</div>