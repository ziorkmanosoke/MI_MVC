<?php

    $oHeader = new Header();
    $oHeader->afficheHeader();
    


    $oControleur = new Controler();	
    $oControleur->gerer();
    

    
    $oFooter = new Footer();
    $oFooter->affichePiedPage();

?>

