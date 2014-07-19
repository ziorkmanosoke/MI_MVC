<?php

    $oHeader = new Header();
    $oHeader->afficheHeader();
    


    $oControleur = new Controler();
    if (isset($_GET['page']) and $_GET['page']=='agenceAccueil'){
            $oControleur->gererAgenceImmobiliere();
        } else {
            $oControleur->gerer();
    }

    $oFooter = new Footer();
    $oFooter->affichePiedPage();

?>

