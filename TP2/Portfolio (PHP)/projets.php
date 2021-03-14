
<?php
    require_once('template_header.php');
?>


<header>
    <h1 id="titre">Mes Projets</h1>
</header>
<?php
        require_once('template_menu.php');
        renderMenuToHTML('projets');
?>


  
<article> 
    <h2>Projets Profesionnelles</h2>
    <p> Stage AGRIDATA Consulting</p>
    <p> Stage D'initiation</p>

    <h2>Projets Academiques</h2>
    <p>Crèation d'une application web en utilisant le framework laravel </p>
</article>

<?php
        require_once('template_footer.php');
?>