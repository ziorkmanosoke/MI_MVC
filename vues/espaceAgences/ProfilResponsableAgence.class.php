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
     
    public function afficheProfilResponsable($aUsers=Array()) {
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
            <?php  
            //print_r($aUsers);
                foreach($aUsers as $cle => $user)
                   {                                     
            ?>
            <article class="form-group ">
                <p> <img src="img/photos/user/<?php echo $user['ID_user']?>.jpeg" class="img-responsive img-thumbnail" alt="Responsive image">
                    <a class="btn btn-default" href="#" role="button">Changer image</a>
                </p>
            </article>

            <article class="form-group ">
                <label for="inputNom" class="col-sm-3">Nom : </label>
                <label for="inputNom" class="col-sm-8"><?php echo $user['nom']?></label>
            </article>

            <article class="form-group ">
                <label for="inputPrenom" class="col-sm-3">Prenom : </label>
                <label for="inputPrenom" class="col-sm-8"><?php echo $user['prenom']?> </label>
            </article>

           <article class="form-group ">
                <label for="inputSexe" class="col-sm-3">Sexe: </label>
                <label for="inputSexe" class="col-sm-8"><?php echo $user['sexe']?></label>
            </article>

            <article class="form-group ">
                <label for="inputDoB" class="col-sm-3">Date de naissance: </label>
                <label for="inputDoB" class="col-sm-8"><?php echo $user['DOB']?></label>
            </article>

            <article class="form-group">
                <label for="inputCourriel" class="col-sm-3">Courriel: </label>
                <label for="inputCourriel" class="col-sm-8"><?php echo $user['courriel']?></label>
            </article>

            <article class="form-group">
                <label for="inputCourriel" class="col-sm-3">Téléphone: </label>
                <label for="inputCourriel" class="col-sm-8"><?php echo $user['telephone_utilisateur']?></label>
            </article>

            <article class="form-group ">
                <label for="inputNomVille" class="col-sm-3">Ville: </label>
                <label for="inputNomVille" class="col-sm-8"><?php  echo $user['ville']?></label>
            </article>


            <article class="form-group">
                <section class="col-sm-8">
                    <button type="button"  class="btn btn-success">Modification information</button>
                    <!--onClick="location.href='choixForfais.html'"-->
                </section>
            </article>   
        </article>
        <?php }?>
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
