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
   
         public function afficheInformationAgence($aAgence=Array()) {
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
   <?php  
       //var_dump($aAgence);
        foreach($aAgence as $cle => $agence)
         {                                     
   ?>
    <article class="form-group row">
       
        <div class="col-sm-4">
         <img src="img/photos/agence/<?php echo $agence['ID_agence']?>.jpeg" class="img-responsive" alt="Responsive image"></div>
        
         <div class="col-sm-8">
         <p>
          <a class="btn btn-default" href="#" role="button">Changer image</a>
        </p>
        
      </div>
    </article>

    <article class="form-group ">
        <label for="inputNom" class="col-sm-3">Compagnie : </label>
        <label for="inputNom" class="col-sm-8"><?php echo $agence['nom_agence']?> </label>
    </article>

    <article class="form-group ">
        <label for="inputCourriel" class="col-sm-3">Courriel : </label>
        <label for="inputCourriel" class="col-sm-8"><?php echo $agence['courriel_agence']?></label>
    </article>

    <article class="form-group ">
        <label for="inputTelephone" class="col-sm-3">Téléphone Agence : </label>
        <label for="inputTelephone" class="col-sm-8"><?php echo $agence['telephone_agence']?></label>
    </article>

    <article class="form-group ">
        <label for="inputAdresse" class="col-sm-3">URL : </label>
        <label for="inputAdresse" class="col-sm-8"><?php echo $agence['siteweb']?> </label>
    </article>    
    
    <article class="form-group ">
        <label for="inputAdresse" class="col-sm-3">Adresse : </label>
        <label for="inputAdresse" class="col-sm-8"><?php  echo $agence['no_rue'].' '.$agence['rue'].', '.$agence['codepostal']?> </label>
    </article>

    <article class="form-group ">
        <label for="inputNomVille" class="col-sm-3">Ville: </label>
        <label for="inputNomVille" class="col-sm-8"><?php  echo $agence['ville']?></label>
    </article>


    <article class="form-group">
        <section class="col-sm-10">
            <button type="button" class="btn btn-success">Modification information</button>
        </section>
    </article>   
</article>
 
<?php }?>


        <!-- fin d'info profile-->

        <!-- </div> -->
    </div><!-- / block3-->



    <?php
    }
}
?>
