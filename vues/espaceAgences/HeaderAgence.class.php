<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HeaderAgence
 *
 * @author belhmidi
 */
class HeaderAgence {
    //put your code here
    
    public function AfficheHeaderAgence($aAgence=Array()){
        ?>
            
     <!--  Espace agence -->

    <div class="container containerAgence">
        <div class="row block1">
            <?php 
                foreach ($aAgence as $cle => $agence){
            ?>
            <!-- logo de l'agence -->
            <div class="col-lg-3 col-md-3 col-sm-12  col-xs-12  cols">
                <img src="img/photos/agence/<?php echo $agence['ID_agence']?>.jpeg" class="img-responsive" />
            </div>

            <!-- ligne de la personne connecté avec la photo du profil -->
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 cols1">
                <div class="row block2">
                    <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 text-center">
                        <ul class="list-group">
                            <li class="list-group-item text-agence"><strong>Agence</strong> : <?php echo $agence['nom_agence']?></li>
                        </ul>
                    </div>
                </div>
                <!-- block2-->
                <?php } ?>
            </div>
            <!-- / cols1-->
        </div>
        <!-- / block1-->
        <?php
        
    }
}
