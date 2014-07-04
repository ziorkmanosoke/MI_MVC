<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProfilResponsableAgence
 *
 * @author belhmidi
 */
class ProfilResponsableAgence {
     
    public function afficheProfilResponsable() {
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
                    Pour un recherche rapide
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
                         Permet à l'agence de chercher une ou des annonce(s) bien précise
                     </p>
                  </div>
            </div>
        </div>
        <!-- fin sidebar -->


        <!-- contenu du centre (article)--> 
        <!-- <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">  -->
        <!-- contenu de la page-->
        <article class="col-lg-8 col-md-8 col-sm-12 col-xs-12 well">
            <h1 class="brand">Mon profil</h1>

            <article class="form-group ">
                <p> <img src="img/placeholder.jpg" class="img-responsive img-thumbnail" alt="Responsive image">
                    <a class="btn btn-default" href="#" role="button">Changer image</a>
                </p>
            </article>

            <article class="form-group ">
                <label for="inputNom" class="col-sm-4">Nom: </label>
                <label for="inputNom" class="col-sm-8">votre nom ici </label>
            </article>

            <article class="form-group ">
                <label for="inputPrenom" class="col-sm-4">Prenom: </label>
                <label for="inputPrenom" class="col-sm-8">votre Prenom ici </label>
            </article>

            <article class="form-group ">
                <label for="inputSexe" class="col-sm-4">Sexe: </label>
                <label for="inputSexe" class="col-sm-8">votre Sexe ici </label>
            </article>

            <article class="form-group ">
                <label for="inputDoB" class="col-sm-4">Date de naissance: </label>
                <label for="inputDoB" class="col-sm-8">votre date de naissance ici </label>
            </article>

            <article class="form-group">
                <label for="inputCourriel" class="col-sm-4">Courriel: </label>
                <label for="inputCourriel" class="col-sm-8">votre Courriel ici </label>
            </article>

            <article class="form-group ">
                <label for="inputNomVille" class="col-sm-4">Nom de ville: </label>
                <label for="inputNomVille" class="col-sm-8">votre nom de ville ici </label>
            </article>

            <article class="form-group ">
                <label for="inputNomProvince" class="col-sm-4">Nom de province: </label>
                <label for="inputNomProvince" class="col-sm-8">votre nom de province ici </label>
            </article>

            <article class="form-group">
                <section class="col-sm-8">
                    <button type="button" onClick="location.href='choixForfais.html'" class="btn btn-success">Modification information</button>
                </section>
            </article>   
        </article>

        <!-- fin d'info profile-->

        <!-- </div> -->
    </div><!-- / block3-->













   <div class="container">

    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <hr/>


    <?php
     }
}
