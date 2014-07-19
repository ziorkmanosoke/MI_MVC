<?php
/**
 * Class Vue
 * Template de classe Vue. Dupliquer et modifier pour votre usage.
 * 
 * @author Jonathan Martel
 * @version 1.0
 * @update 2013-12-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 * @author Mehdi
 */

class Recherche {

    /**
     * Affiche le contenu de la section recherche
     * @access public
     * 
     */
    public function afficheMenuRecherche() {
		?>
  
    <!-- recherche principale Début -->
    <?php
        $oMenuRecherche = new ModeleRecherche();
    ?>
    <!-- Activation de Event Listener pour recherche -->
    <script src="js/recherche.js"></script>

    <form id="recherche" role="form" method="post" action="index.php?page=resultats">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="chercheTexte">Chercher par ville, rue ou code postal</label>
                        <input type="text" class="form-control" name="chercheTexte" placeholder="<?php if ($_POST['chercheTexte']==''){ echo 'Où?'; } ?>" value="<?php if ($_POST['chercheTexte']==''){ echo ''; }else{echo $_POST['chercheTexte'];} ?>">
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <label for="categorie">Catégorie</label>
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
                        </div>
                        <div class="form-group">
                            <label for="typeDeBien">Type de bien</label>
                            
                            <select class="form-control" name="typeDeBien" id="typeBien">
                                <option value="tous"
                                   <?php
                                        if ($_POST['typeDeBien']=="tous"){
                                            echo " selected=\"selected\"";     
                                        } else {
                                            echo "";
                                        }
                                   ?>
                                >Toutes</option>
                                <?php
                                    foreach($oMenuRecherche->getTypeDeBienParCat($_POST['categorie']) as $aTypeDeBien) {
       
                                        echo '
                                               <option value="'.htmlentities($aTypeDeBien[0]).'"
                                             ';

                                        if ($_POST['typeDeBien']==htmlentities($aTypeDeBien[0])){
                                            echo " selected=\"selected\"";
                                        } else {
                                            echo "";
                                        }
                                        echo '>'.htmlentities(ucfirst($aTypeDeBien[0])).'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="prix">Prix <span id="prixScriptVal"></span></label>
                            <input type="range" name="prix" id="prix" min="0" max="5" step="1" value="<?php echo $_POST['prix']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="chambres">Chambres</label>
                            <select class="form-control" name ="chambres">
                                <option value="0"<?php if ($_POST['chambres']==0){ echo " selected=\"selected\""; } ?>>0 et +</option>
                                <option value="1"<?php if ($_POST['chambres']==1){ echo " selected=\"selected\""; } ?>>1 et +</option>
                                <option value="2"<?php if ($_POST['chambres']==2){ echo " selected=\"selected\""; } ?>>2 et +</option>
                                <option value="3"<?php if ($_POST['chambres']==3){ echo " selected=\"selected\""; } ?>>3 et +</option>
                                <option value="4"<?php if ($_POST['chambres']==4){ echo " selected=\"selected\""; } ?>>4 et +</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sallesDeBain">Salles de bain</label>
                            <select class="form-control" name="sallesDeBain">
                                <option value="0"<?php if ($_POST['sallesDeBain']==0){ echo " selected=\"selected\""; } ?>>0 et +</option>
                                <option value="1"<?php if ($_POST['sallesDeBain']==1){ echo " selected=\"selected\""; } ?>>1 et +</option>
                                <option value="2"<?php if ($_POST['sallesDeBain']==2){ echo " selected=\"selected\""; } ?>>2 et +</option>
                                <option value="3"<?php if ($_POST['sallesDeBain']==3){ echo " selected=\"selected\""; } ?>>3 et +</option>
                                <option value="4"<?php if ($_POST['sallesDeBain']==4){ echo " selected=\"selected\""; } ?>>4 et +</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" id="filtrer">
                    <div class="form-group">
                        <label for="FiltrerResultats">Filtrer les résultats</label>
                        <select class="form-control" name="FiltrerResultats">
                            <option value="tous"<?php if ($_POST['FiltrerResultats']=="tous"){ echo " selected=\"selected\""; } ?>>Tous</option>
                            <option value="vendre"<?php if ($_POST['FiltrerResultats']=="vendre"){ echo " selected=\"selected\""; } ?>>À vendre</option>
                            <option value="louer"<?php if ($_POST['FiltrerResultats']=="louer"){ echo " selected=\"selected\""; } ?>>À louer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="TrierResultats">Trier les résultats</label>
                        <select class="form-control" name="TrierResultats">
                            <option value="moinsCher" <?php if ($_POST['TrierResultats']=="moinsCher"){ echo " selected=\"selected\""; } ?>>Moins cher en premier</option>
                            <option value="plusCher"<?php if ($_POST['TrierResultats']=="plusCher"){ echo " selected=\"selected\""; } ?>>Plus cher en premier</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" id="lancerRecherche" class="btn btn-success col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <span class="glyphicon glyphicon-search"></span>&nbsp;Lancer la recherche</button>
            </div>
        </div>
    </form>
    <!-- recherche principale fin -->
		<?php
		
	}
}
?>