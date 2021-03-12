<!doctype html>
 <html>
     <head>
         <title>L'heure</title>
         <link charset="utf-8" />
    </head>

    <body>

        <h1>Voici Le Jour: 
        <?php  echo date('Y-m-d'); ?>  </h1>
        <h1>Voici L'heure courante: 
        <?php  echo date(' H:i:s'); ?>   </h1>
        
    
       <?php
        function afficher( $texte, $saut = 1 ) {
            echo $texte;
            for( $i = 0 ; $i < $saut ; $i++)
            echo "\n";
            }
            afficher("Hello", 2);
       
        $personne = array(
            'prenom' => 'Zouheir',
            'nom' => 'TOUIL',
            'age' => 22
            );

            afficher("M. ".$personne['prenom'], 2);
            afficher( "M. {$personne['nom']}\n", 2);

        ?>
    
    
    </body>

</html>