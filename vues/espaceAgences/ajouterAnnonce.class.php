<?php

/**
 * Description of ajouterAnnonce
 *
 * @author bouchra
 */

class ajouterAnnonce {
   
    public function formulaireAjoutAnnonce(){
        $oMenuRecherche = new ModeleRecherche();
?>
<script src="js/agence.js"></script>
  <!-- Formulaire -->
<!--<script src="js/formulaire.js"></script>  -->
    <div class="rows block3">
    <!-- sidebar -->
        <div class="col-xs-12 col-lg-4">			
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Recherche rapide</h3>
                </div>
                <div class="panel-body"> Pour un recherche rapide</div>
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
                        <p class="media-heading"><strong>Ajouter une annonce</strong></p>	
                    </div>
                </div>
            </div>
            <div class="row well wellBlanc ">
                <div class="col-xs-12 col-lg-12 ">                    
                    <div class="col-xs-12 col-lg-12 well wellForm">
                    
                        
                        <form class="form-horizontal" name="formulaire">
                            <input type="hidden" id="session" value="<?php echo $_SESSION['ID_utilisateur'] ?>">
                        <!--index.php?page=agenceAccueil&section=choixBien-->
                        <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="radio">                            
                              <input type="radio" name="transaction" value="1" id="vente" class="css-checkbox"> 
                              <label for="vente" class="css-label">Vente</label>
                                                    
                              <input type="radio" name="transaction" value="2"  id="location" class="css-checkbox"/>
                              <label for="location" class="css-label">Location</label>
                              <span class="erreur" id="erreurTransaction"></span>
                          </div> 
                            
                        </div>                     
                    </div>

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Catégorie</label>
                      <div class="col-sm-8">
                        <select class="form-control" name="categorie" id="categorie">
                            <option value="tous" 
                                    <?php
                                       
                                        if ($_POST['categorie']=="tous"){
                                            echo " selected=\"selected\"";     
                                        } else {
                                            echo "";
                                        }
                                    ?>
                                >Toutes</option>
                                <?php
                                    foreach($oMenuRecherche->getCategories() as $sCategorie) {
                                        echo "
                                               <option value=\"".htmlentities($sCategorie[1])."\"
                                             ";
                                        if ($_POST['categorie']==$sCategorie[1]){
                                            echo "selected=\"selected\"";
                                        } else {
                                            echo "";
                                        }
                                        echo ">".htmlentities(ucfirst($sCategorie[0]))."</option>";
                                    }
                                ?>
                          </select>  
                          <span class="erreur" id="erreurCategorie"></span>
                      </div>
                      
                    </div>
                    <div class="form-group">                      
                      <label for="inputPassword3" class="col-sm-3 control-label">Type de bien</label>                      
                      <div class="col-sm-8">
                        <select class="form-control" name="typeDeBien" id="selectCat">
                            <option value="tous">Toutes</option>
                        </select>
                          <span class="erreur" id="erreurChoixBien"></span>
                      </div>
                    </div>  
                             
                            
                    <div class="form-group">
                      <div class="col-sm-offset-3 col-sm-9">                        
                        <input type="button" id="suivant" class="btn btn-default" value="Suivant">                       
                      </div>
                    </div>
                           
                            
                  </form>
                   </div> 
                    
                </div>		
           </div>
    </div>
    </div><!-- / block3-->
</div>
<hr/>
        <?php
    }
}

?>