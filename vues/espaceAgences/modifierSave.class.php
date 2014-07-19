<?php


/**
 * Description of saveBien
 *
 * @author belhmidi
 */
class saveBien {
    
    public function modifierSaveAnnonce(){
    ?>

        

	<div class="rows block3">
	<!-- sidebar -->
            <div class="col-xs-12 col-lg-4">			
                <div class="panel panel-default">
                    <div class="panel-heading">
                          <h3 class="panel-title">Recherche rapide</h3>
                    </div>
                    <div class="panel-body">Pour un recherche rapide</div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Moteur de recherche</h3>
                    </div>
                    <div class="panel-body">
                        <p>les critères de selection à insèrer.</p>
                        <p>Permet à l'agence de chercher une ou des annonce(s) bien précise</p>
                    </div>
                </div>
            </div>
        <!-- fin sidebar -->
        
        <!-- contenu du centre (article)-->
        <div class="col-xs-12 col-lg-8">
            <div class="row">
                <div class="col-xs-12 col-lg-12  well well-sm wellBlanc titreAnnonce">
                    <div class="media">	
                        <p class="media-heading"><strong>Confirmation de la modification</strong></p>	
                    </div>
                </div>
            </div>
            <div class="row well wellBlanc">
                <a href="index.php?page=agenceAccueil" class="">retour</a>
                    <br/>
                    La modification a ete bien effectué
                    <?php
                    
//                    var_dump($modif);
                    
                    
                ?>		
            </div>
        </div>
    </div><!-- / block3-->
</div>
<hr/>
    <?php
    }
}
