<?php
        function renderMenuToHTML($currentPageId){
           /* echo "<nav class=\"menu\">
            <ul>
            <li><a href=\"index.php\">Accueil</a></li>
            <li><a href=\"cv.php\">Cv</a></li>
            <li><a href=\"projets.php\">Mes Projets</a></li>
            </ul>
            </nav>";

            */


            // un tableau qui d\'efinit la structure du site
            $mymenu = array(
                // idPage titre
                'index' => array( 'Accueil' ),
                'cv' => array( 'Cv' ),
                'projets' => array('Mes Projets')
            );
            echo "<nav class=\"menu\"><ul>";
            foreach($mymenu as $pageId => $pageParameters) {
                echo "<li><a href='$pageId.php'><span>$pageParameters[0]</span></a></li>";
                }
            echo  "</ul></nav>";

     }
?>