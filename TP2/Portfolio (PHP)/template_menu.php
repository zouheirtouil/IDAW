<div id="banner1">

</div>


<?php
        function renderMenuToHTML($currentPageId){
            $lang = "fr";
            $mymenu = array(
                // idPage titre
                'accueil' => array( 'Accueil' ),
                'cv' => array( 'Cv' ),
                'projets' => array('Mes Projets'),
                'contact' => array('Contacts'),
                'lang' => array('English')
            );
            echo "<nav class=\"menu\"><ul>";
            foreach($mymenu as $pageId => $pageParameters) {
                echo "<li><a ";
                if($lang == "fr"){
                if($currentPageId == $pageId)
                    if($currentPageId == 'lang'){
                        $lang = "en";
                        $currentPageId = 'accueil';
                    }
                echo "id=\"currantpage\"";  
                echo "href=index.php?page=$pageId$lang>$pageParameters[0]</a></li>";
                }
            }
            echo  "</ul></nav>";

     }
?>

<div id="banner2">

</div>