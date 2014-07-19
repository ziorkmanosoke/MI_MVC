<?php

/**
 * Description of choisirBien
 *
 * @author travail d'équipe
 */
class choisirBien {
    
    public function formulairechoisirBien(){
    ?>
    <script src="js/choixBien.js"></script>
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
                        <p class="media-heading"><strong>Ajouter une annonce</strong></p>	
                    </div>
                </div>
            </div>
            <div class="row well wellBlanc">
                <div class="col-xs-12 col-lg-12 ">
                    <form class="form-horizontal" name="formulaire"> 
                        <div class="col-xs-12 col-lg-6">
                            <div class="form-group form-inline">
                                <input type="hidden" name="transaction" value="<?php echo $_POST["transaction"];?>">
                                <input type="hidden" name="typeDeBien" value="<?php echo $_POST["typeDeBien"];?>">
                                <input type="hidden" id="session" value="<?php echo $_SESSION['ID_utilisateur'] ?>">
                                <label for="nbrChambre">Nombre de chambre</label>
                                 <select class="form-control modifInput" name="nbrChambre" id="nbrChambre">
                                    <option value="">Choix</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <span class="erreur" id="erreurNbrChambre"></span>
                            </div>
                            <div class="form-group form-inline">
                                <label for="nbrSalleBain">Nombre de salle de bain </label>
                                <select class="form-control modifInput" name="nbrSalleBain" id="nbrSalleBain">
                                    <option value="">Choix</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option> 
                                    <option value="5">5</option>  
                                </select>
                                <span class="erreur" id="erreurNbrSalleBain"></span>
                            </div>                        
                            <div class="form-group form-inline">
                                <label for="nbrPiece">Nombre de pièce </label>                            
                                <select class="form-control modifInput" name="nbrPiece" id="nbrPiece">  
                                    <option value="">Choix</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                                <span class="erreur" id="erreurNbrePiece"></span>
                            </div>
                            <div class="form-group form-inline">
                                <label for="superficie">Superficie  </label>
                                <input type="text" name="superficie" id="superficie" placeholder="Superficie" class="form-control modifInput" maxlength="6" pattern="^[0-9]{1,20}$">
                                 <span class="erreur" id="erreurSuperficie"></span>
                            </div>
                            <div class="form-group form-inline">
                                <label for="anneeConstruction">Année Construction</label>
                                <input type="text" name="anneeConstruction" id="anneeConstruction" maxlength="6" placeholder="Année de construction" class="form-control modifInput"  pattern="^[0-9]{4}$">                            
                                <span class="erreur" id="erreurAnnee"></span>
                            </div>
                            <div class="form-group form-inline">
                                <label for="prix">Prix </label>
                                <input type="text" name="prix" id="prix" maxlength="20" placeholder="Prix" class="form-control modifInput" pattern="^[a-zA-Z0-9]{1,20}$">                       
                                <span class="erreur" id="erreurPrix"></span>
                            </div>                            
                        </div>
                        <div class="col-xs-11 col-lg-5 col-lg-offset-1">                        

                            <div class="form-group form-inline">
                                <label for="rue">Rue  </label>
                                <input type="text" name="rue" id="rue" class="form-control modifInput" placeholder="Rue" maxlength="50" pattern="^[a-zA-Z0-9]{1,20}$">
                                <span class="erreur" id="erreurRue"></span>
                            </div>
                            <div class="form-group form-inline">
                                <label for="numero">Numéro  </label>
                                <input type="text" name="numero" id="numero" class="form-control modifInput" placeholder="Numéro" maxlength="6" pattern="^[0-9]{1,20}$">
                                <span class="erreur" id="erreurNumero"></span>
                            </div>
                            <div class="form-group form-inline">
                                <label for="codePostal">Code Postal </label>
                                <input type="text" name="codePostal" id="codePostal" class="form-control modifInput" placeholder="Code postal" maxlength="8"  pattern="[a-zA-Z][0-9][a-zA-Z] [0-9][a-zA-Z][0-9]" required>
                                <span class="erreur" id="erreurBP"></span>
                            </div>
                            <div class="form-group form-inline">
                                <label for="ville">Ville </label>                                                      
                                <select class="form-control" name="ville" id="ville">
                                    <option value="tous">Choix</option>
                                    <?php  
                                        $oVilles = new Villes();
                                        foreach($oVilles->getVilles() as $sVille) {
                                            echo "<option value=\"".htmlentities($sVille[0])."\"";
                                            if (isset($_POST['ville'])==$sVille){ echo "selected=\"selected\"";} else {
                                                echo "";
                                            }
                                            echo ">".htmlentities(ucfirst($sVille[1]))."</option>";
                                        }
                                    ?>
                              </select>
                               <span class="erreur" id="erreurVille"></span>
                            </div>

                        </div>
                      <?php 
                            if (isset($_POST['transaction'])==1){
                      ?>   
                        <div class="col-xs-12 col-lg-12">
                            <div class="col-xs-12 col-lg-4">
                             <label class="control-label evaluation" for="anneeEvaluation">Année d'évaluation</label>
                              <input type="text" class="form-control" name="anneeEvaluation" id="anneeEvaluation" placeholder="Année d'évaluation">
                            </div>
                            <div class="col-xs-12 col-lg-4">
                              <label class="control-label evaluation" for="evaluationBatisse">Evaluation de la bâtisse</label>
                              <input type="text" class="form-control" name="evaluationBatisse" id="evaluationBatisse"  placeholder="Evaluation de la batisse">
                            </div>
                            <div class="col-xs-12 col-lg-4">
                              <label class="control-label evaluation" for="evaluationTerrain">Evaluation du terrain</label>
                              <input type="text" class="form-control" name="evaluationTerrain" id="evaluationTerrain" placeholder="Evaluation du terrain">
                            </div>
                        </div>
                    <?php } ?>

                            <div class="col-xs-12 col-lg-12 well wellForm">
                                <div class="form-group form-inline modifInput">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="form-control" maxlength="1500" placeholder="Description" rows="5" cols="75"></textarea>
                                    <span class="erreur" id="erreurDesc"></span>
                                </div>
                            </div>

                        <div class="col-xs-12 col-lg-12">
                            <input type="button" id="sauvegarder" class="btn btn-default" value="Sauvegarder"> 
                        </div>
                </form>
                    
                </div>		
            </div>
        </div>
    </div><!-- / block3-->
</div>
<hr/>

    <?php
    }
}
