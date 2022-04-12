<?php
include('Livre.php');
include('Auteur.php');
    echo '<h1>Poo Livre</h1>';
    $a1 = new Auteur('LEVY', 'Marc','1961-09-16' );
    $l1 = new Livre($a1,'Et si c était vrai... ',270 , 2000,7 );
    $l2 = new Livre($a1,'Où es-tu ?', 311, 2001,8);


    $a1-> afficherLivre();
    //var_dump($a1);


?>