<?php
/**
 * Description of Resultats
 *
 * @author Mehdi
 */
class Resultats {
    /**
     * Affiche le contenu de la page Resultats
     * @access public
     * 
     */
    public function afficheContenuResultats() {
        ?>
  
    <!-- recherche principale Début -->
    <?php
        $oRecherche = new Recherche();
        $oRecherche->afficheMenuRecherche();
    ?>
    <!-- recherche principale fin -->
   
    <!-- resultat début-->
     <?php
        $oResultats = new ModeleResultats;
        $aResultats = $oResultats->getResultats($_POST['chercheTexte'],$_POST['categorie'],$_POST['typeDeBien'],$_POST['prix'],$_POST['chambres'],$_POST['sallesDeBain'],$_POST['FiltrerResultats'],$_POST['TrierResultats']);
        //print_r($aResultats[0]['nb_chambre']);
        //print_r($aResultats);
    ?>
    <script src="js/resultats.js"></script>
    <input type="hidden" id="chercheTexteRes" value="<?php echo $_POST['chercheTexte']  ?>">
    <input type="hidden" id="categorieRes" value="<?php echo $_POST['categorie']  ?>">
    <input type="hidden" id="typeDeBienRes" value="<?php echo $_POST['typeDeBien']  ?>">
    <input type="hidden" id="prixRes" value="<?php echo $_POST['prix']  ?>">
    <input type="hidden" id="chambresRes" value="<?php echo $_POST['chambres']  ?>">
    <input type="hidden" id="sallesDeBainRes" value="<?php echo $_POST['sallesDeBain']  ?>">
    <input type="hidden" id="FiltrerResultatsRes" value="<?php echo $_POST['FiltrerResultats']  ?>">
    <input type="hidden" id="TrierResultatsRes" value="<?php echo $_POST['TrierResultats']  ?>">

    
    <div class="container" id="resultat"></div>
    <!-- resultat fin-->
    
    
    <?php
    }
}
?>
