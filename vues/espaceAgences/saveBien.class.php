<?php


/**
 * Description of saveBien
 *
 * @author belhmidi
 */
class saveBien {
    
    public function confirmationAjoutBien(){
    ?>
	<div class="rows block3">
	<!-- sidebar -->
            <div class="col-xs-4 col-lg-4">			
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
        <div class="col-xs-8 col-lg-8">
            <div class="row">
                <div class="col-xs-12 col-lg-12  well well-sm wellBlanc titreAnnonce">
                    <div class="media">	
                        <p class="media-heading"><strong>Confirmation de l'ajout</strong></p>	
                    </div>
                </div>
            </div>
            <div class="row well wellBlanc">
                Votre a été bien ajoutée.
                <a href="index.php?page=agenceAccueil&ref=<?php echo $_SESSION['ID_utilisateur']?>" class="">retour</a>
                    <br/>
                    <?php
                    
//                        echo "ajout ".$ajout;
//                    var_dump($ajout);
                    
                    
                ?>		
            </div>
        </div>
    </div><!-- / block3-->
</div>
<hr/>
    <?php
    }
}
