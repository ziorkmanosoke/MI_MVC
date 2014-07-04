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
    
    public function AfficheHeaderAgence(){
        ?>
            
     <!--  Espace agence -->

    <div class="container containerAgence">
        <div class="row block1">

            <!-- logo de l'agence -->
            <div class="col-lg-3 col-md-3 col-sm-12  col-xs-12  cols">
                <img src="./img/logo/ceinture21.jpg" class="img-responsive" />
            </div>

            <!-- ligne de la personne connecté avec la photo du profil -->
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 cols1">
                <div class="row block2">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"></div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="media">
                            <img class="img-responsive media-object pull-left align-img" src="./img/account_and_control.png" alt="Prénom NOM">
                            <div class="media-body">
                                <h5 class="media-heading">Bienvenue Charle BENOIS</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 text-center">
                        <ul class="list-group">
                            <li class="list-group-item text-agence"><strong>Agence</strong> : Ceinture 21</li>
                        </ul>
                    </div>
                </div>
                <!-- block2-->
            </div>
            <!-- / cols1-->
        </div>
        <!-- / block1-->
        <?php
        
    }
}
