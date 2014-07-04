<?php

    $oHeader = new Header();
    $oHeader->afficheHeader();
    


    $oControleur = new Controler();	
    $oControleur->gererAgenceImmobiliere();
    

    
    $oFooter = new Footer();
    $oFooter->affichePiedPage();

?>

