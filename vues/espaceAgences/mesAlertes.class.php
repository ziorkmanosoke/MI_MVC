<?php

/**
 * Description of mesAlertes
 *
 * @author bouchra
 */
class mesAlertes {
    
    public function afficheMesAlertes(){
        ?>

        <div class="container-fluid block3">
            <!-- sidebar -->
            <div class="col-lg-4 col-md-4 col-sm-12  col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                          Recherche rapide
                      </h3>
                    </div>
                    <div class="panel-body">
                        Pour une recherche rapide
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Moteur de recherche</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            les critères de selection à insèrer.
                        </p>
                        <p>
                            Permet à l'agence de chercher une ou des annonce(s)
                            d'un bien précise
                        </p>
                    </div>
                </div>
            </div>
            <!-- fin sidebar -->
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
               <p>Affiche la liste des alertes reçus par les demandeurs d'un biens immobilier </p>
               <p>Eventuel contact par des clients potentiels</p><br/>
           </div>
        </div>
        <?php
    }
}

?>
