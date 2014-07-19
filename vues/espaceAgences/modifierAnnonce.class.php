<?php //

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modifierAnnonce
 *
 * @author bouchra
 */
class modifierAnnonce {
    
    public function formulaireModifierAnnonce($aAnnonces=NULL){
        
        ?>
            
	<div class="rows block3">
	<!-- sidebar -->
            <div class="col-xs-12 col-lg-4">			
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Recherche rapide</h3>
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
                       <p>les critères de selection à insèrer.</p>
                       <p>Permet à l'agence de chercher une ou des annonce(s) bien précise </p>
                    </div>
                </div>
            </div>
	<!-- fin sidebar -->
        <!-- contenu du centre (article)-->
        <div class="col-xs-8 col-lg-8">
            <div class="row">
                <div class="col-xs-12 col-lg-12  well well-sm wellBlanc titreAnnonce">
                    <div class="media">	
                        <p class="media-heading"><strong>Modifier une annonce</strong></p>	
                    </div>
                </div>
            </div>
            <div class="row well wellBlanc">
                <div class="col-xs-12 col-lg-12 ">
                    <form class="form-horizontal" name="formulaire" action="index.php?page=agenceAccueil&section=modifierSave&ref=<?php echo $_SESSION['ID_utilisateur'] ?>" method="POST"> 
                        <div class="col-xs-12 col-lg-6">
                            <div class="form-group form-inline">
                                <input type="hidden" name="ID_annonce" value="<?php echo $aAnnonces["ID_annonce"]; ?>">
                                <input type="hidden" name="ID_statut" value="<?php echo $aAnnonces["ID_statut"]; ?>">
                                <input type="hidden" name="ID_typedebien" value="<?php echo $aAnnonces["ID_typedebien"]; ?>">
                                <input type="hidden" name="ID_adresse" value="<?php echo $aAnnonces["ID_adresse"]; ?>">
                                <label for="nbrChambre">Nombre de chambre</label>
                                 <select class="form-control modifInput" name="nbrChambre" id="nbrChambre">
                                    <?php if ($aAnnonces["nb_chambre"]!=""){ ?>
                                    <option value="<?php $aAnnonces["nb_chambre"]; ?>" selected><?php echo $aAnnonces["nb_chambre"]; ?></option>
                                    <?php } ?>
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
                                    <?php if ($aAnnonces["nb_salledebains"]!=""){ ?>
                                    <option value="<?php $aAnnonces["nb_salledebains"]; ?>" selected><?php echo $aAnnonces["nb_salledebains"]; ?></option>
                                    <?php } ?>
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
                                    <?php if ($aAnnonces["nb_pieces"]!=""){ ?>
                                    <option value="<?php $aAnnonces["nb_pieces"]; ?>" selected><?php echo $aAnnonces["nb_pieces"]; ?></option>
                                    <?php } ?>
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
                                <input type="text"  value="<?php echo $aAnnonces["superficie_habitable"]; ?>" name="superficie" id="superficie" placeholder="Superficie" class="form-control modifInput" maxlength="6" pattern="^[0-9]{1,20}$">
                            </div>
                            <div class="form-group form-inline">
                                <label for="anneeConstruction">Année</label>
                                <input type="text" name="anneeConstruction"  value="<?php echo $aAnnonces["annee_construction"]; ?>" id="anneeConstruction" maxlength="6" placeholder="Année de construction" class="form-control modifInput"  pattern="^[0-9]{4}$">                            
                            </div>
                            <div class="form-group form-inline">
                                <label for="prix">Prix </label>
                                <input type="text" name="prix" value="<?php echo $aAnnonces["prix"]; ?>" id="ville" maxlength="20" placeholder="Prix" class="form-control modifInput" pattern="^[a-zA-Z0-9]{1,20}$">                       
                            </div>                            
                        </div>
                        <div class="col-xs-11 col-lg-5 col-lg-offset-1">                        

                            <div class="form-group form-inline">
                                <label for="rue">Rue  </label>
                                <input type="text" name="rue" id="rue"  value="<?php echo $aAnnonces["rue"]; ?>" class="form-control modifInput" placeholder="Rue" maxlength="50" pattern="^[a-zA-Z0-9]{1,20}$">
                            </div>
                            <div class="form-group form-inline">
                                <label for="numero">Numéro  </label>
                                <input type="text" name="numero" id="numero" value="<?php echo $aAnnonces["no_rue"]; ?>" class="form-control modifInput" placeholder="Numéro" maxlength="6" pattern="^[0-9]{1,20}$">
                            </div>
                            <div class="form-group form-inline">
                                <label for="codePostal">Code Postal </label>
                                <input type="text" name="codePostal" id="codePostal"  value="<?php echo $aAnnonces["codepostal"]; ?>" class="form-control modifInput" placeholder="Code postal" maxlength="8"  pattern="[a-zA-Z][0-9][a-zA-Z] [0-9][a-zA-Z][0-9]" required>
                                <span class="erreur" id="erreurBP"></span>
                            </div>
                            <div class="form-group form-inline">
                               <span class="erreur" id="erreurVille"></span>
                            </div>

                        </div>
  
                        <div class="col-xs-12 col-lg-12">
                            <div class="col-xs-12 col-lg-4">
                             <label class="control-label evaluation" for="anneeEvaluation">Année d'évaluation</label>
                              <input type="text" class="form-control" name="anneeEvaluation"  value="<?php echo $aAnnonces["annee_evaluation"]; ?>" id="anneeEvaluation" placeholder="Année d'évaluation">
                            </div>
                            <div class="col-xs-12 col-lg-4">
                              <label class="control-label evaluation" for="evaluationBatisse">Evaluation de la bâtisse</label>
                              <input type="text" class="form-control" name="evaluationBatisse"  value="<?php echo $aAnnonces["evaluation_dubatiment"]; ?>" id="evaluationBatisse"  placeholder="Evaluation de la batisse">
                            </div>
                            <div class="col-xs-12 col-lg-4">
                              <label class="control-label evaluation" for="evaluationTerrain">Evaluation du terrain</label>
                              <input type="text" class="form-control" name="evaluationTerrain" value="<?php echo $aAnnonces["evaluation_duterrain"]; ?>" id="evaluationTerrain" placeholder="Evaluation du terrain">
                            </div>
                        </div>
                 

                            <div class="col-xs-12 col-lg-12 well wellForm">
                                <div class="form-group form-inline modifInput">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control" maxlength="1500" placeholder="Description" rows="5" cols="75"><?php echo $aAnnonces["info_general"]; ?></textarea>
                                </div>
                            </div>

                        <div class="col-xs-12 col-lg-12">
                            <input type="submit" id="sauvegarder" class="btn btn-default" value="Sauvegarder"> 
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
                             