<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of infosAgence
 *
 * @author bouchra
 */
class infosAgence {
   
         public function afficheInformationAgence() {
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
    <h1 class="brand">Information Agence</h1>

    <article class="form-group row">
       
        <div class="col-sm-4">
         <img src="img/logo/ceinture21.jpg" class="img-responsive" alt="Responsive image"></div>
        
         <div class="col-sm-8">
         <p>
          <a class="btn btn-default" href="#" role="button">Changer image</a>
        </p>
        
      </div>
    </article>

    <article class="form-group ">
        <label for="inputNom" class="col-sm-4">Compagnie: </label>
        <label for="inputNom" class="col-sm-8">votre nom de compagnie ici </label>
    </article>

    <article class="form-group ">
        <label for="inputCourriel" class="col-sm-4">Courriel: </label>
        <label for="inputCourriel" class="col-sm-8">votre Courriel ici </label>
    </article>

    <article class="form-group ">
        <label for="inputTelephone" class="col-sm-4">Telephonel: </label>
        <label for="inputTelephone" class="col-sm-8">votre telephone ici </label>
    </article>

    <article class="form-group ">
        <label for="inputAdresse" class="col-sm-4">Adresse: </label>
        <label for="inputAdresse" class="col-sm-8">votre adresse ici </label>
    </article>

    <article class="form-group ">
        <label for="inputNomVille" class="col-sm-4">Ville: </label>
        <label for="inputNomVille" class="col-sm-8">votre adresse ici </label>
    </article>

    <article class="form-group ">
        <label for="inputNomProvince" class="col-sm-4">Province: </label>
        <label for="inputNomProvince" class="col-sm-8">votre nom de province ici </label>
    </article>

    <article class="form-group">
        <section class="col-sm-10">
            <button type="button" onClick="#" class="btn btn-success">Modification information</button>
        </section>
    </article>   
</article>
 



        <!-- fin d'info profile-->

        <!-- </div> -->
    </div><!-- / block3-->



    <?php
    }
}
?>
