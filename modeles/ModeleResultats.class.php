<?php
/**
 * Description of ModeleResultats
 *
 * @author Mehdi
 */
class ModeleResultats {
    private $DB;
    private $range;
    private $trierParPrix;
    private $filtrerResultats;
            
	function __construct ()
	{
            $this->DB = BD::getInstance("e1395529", "dbconnect");
	}
	
        /**
	 * Retourne un tableau qui contient tous les resultats
	 * @access public
	 * @return Array
	 */
        public function getResultats($chercheTexte, $categorie, $typeDeBien, $prix, $chambres, $sallesDeBain, $FiltrerResultats, $TrierResultats) 
	{
		$aResultats = Array();
                $res = $this->DB->getBD()->query($this->queryResultats($chercheTexte, $categorie, $typeDeBien, $prix, $chambres, $sallesDeBain, $FiltrerResultats, $TrierResultats));
		if($this->DB->getBD()->affected_rows >0){
                    while($row = $res->fetch_array(MYSQLI_ASSOC)){
                        $aResultats[] = $row;    
                    }
		}     
		return $aResultats;
	}
        /**
	 * Retourne query
	 * @access private
	 * @return String
	 */
        public function queryResultats($chercheTexte, $categorie, $typeDeBien, $prix, $chambres, $sallesDeBain, $FiltrerResultats, $TrierResultats) {

            switch ($prix) {
                case '0':
                    $this->range =50000;
                    break;
                case '1':
                    $this->range =100000;
                    break;
                case '2':
                    $this->range =250000;
                    break;
                case '3':
                    $this->range =500000;
                    break;
                case '4':
                    $this->range =1000000;
                    break;
                case '5':
                    $this->range =1000000000000;
                    break;
            }
            
            switch ($TrierResultats) {
                case 'moinsCher':
                    $this->trierParPrix ='prix ASC';
                    break;
                case 'plusCher':
                    $this->trierParPrix ='prix DESC';
                    break;
            }
            
            switch ($FiltrerResultats) {
                case 'tous':
                    $this->filtrerResultats ='(mi_annonce.ID_statut = 1 OR mi_annonce.ID_statut = 2)';
                    break;
                case 'vendre':
                    $this->filtrerResultats ='mi_annonce.ID_statut = 1';
                    break;
                case 'louer':
                    $this->filtrerResultats ='mi_annonce.ID_statut = 2';
                    break;
            }
            
            if ($chercheTexte=="" && $categorie=="tous"){
                    $query = "
                            SELECT  * 
                            FROM mi_annonce, mi_adresse, mi_ville, mi_province, mi_type_debien
                            WHERE mi_annonce.ID_adresse=mi_adresse.ID_adresse
                            AND mi_adresse.ID_ville=mi_ville.ID_ville
                            AND mi_ville.ID_province=mi_province.ID_province
                            AND mi_annonce.ID_typedebien=mi_type_debien.ID_typedebien
                            AND mi_annonce.etat= 'on'
                            AND nb_chambre >= '$chambres'
                            AND nb_salledebains >= '$sallesDeBain'
                            AND prix <= '$this->range'
                            AND $this->filtrerResultats
                            ORDER BY $this->trierParPrix
                    ";
            }
            
            if ($chercheTexte!="" && $categorie=="tous"){
                    $query = "
                            SELECT  * 
                            FROM mi_annonce, mi_adresse, mi_ville, mi_province, mi_type_debien
                            WHERE mi_annonce.ID_adresse=mi_adresse.ID_adresse
                            AND mi_adresse.ID_ville=mi_ville.ID_ville
                            AND mi_ville.ID_province=mi_province.ID_province
                            AND mi_annonce.ID_typedebien=mi_type_debien.ID_typedebien
                            AND mi_annonce.etat= 'on'
                            AND nb_chambre >= '$chambres'
                            AND nb_salledebains >= '$sallesDeBain'
                            AND prix <= '$this->range'
                            AND $this->filtrerResultats
                            AND (mi_adresse.rue LIKE '%$chercheTexte%' OR mi_adresse.codepostal LIKE '%$chercheTexte%' OR mi_ville.ville LIKE '%$chercheTexte%')
                            ORDER BY $this->trierParPrix
                    ";
            }
            
            if ($chercheTexte=="" && $categorie!="tous" && $typeDeBien=="tous"){
                    $query = "
                            SELECT  * 
                            FROM mi_annonce, mi_adresse, mi_ville, mi_province, mi_type_debien
                            WHERE mi_annonce.ID_adresse=mi_adresse.ID_adresse
                            AND mi_adresse.ID_ville=mi_ville.ID_ville
                            AND mi_ville.ID_province=mi_province.ID_province
                            AND mi_annonce.ID_typedebien=mi_type_debien.ID_typedebien
                            AND mi_annonce.etat= 'on'
                            AND nb_chambre >= '$chambres'
                            AND nb_salledebains >= '$sallesDeBain'
                            AND prix <= '$this->range'
                            AND $this->filtrerResultats
                            AND mi_type_debien.ID_categorie = '$categorie'
                            ORDER BY $this->trierParPrix
                    ";
            }
            
            if ($chercheTexte!="" && $categorie!="tous" && $typeDeBien=="tous"){
                    $query = "
                            SELECT  * 
                            FROM mi_annonce, mi_adresse, mi_ville, mi_province, mi_type_debien
                            WHERE mi_annonce.ID_adresse=mi_adresse.ID_adresse
                            AND mi_adresse.ID_ville=mi_ville.ID_ville
                            AND mi_ville.ID_province=mi_province.ID_province
                            AND mi_annonce.ID_typedebien=mi_type_debien.ID_typedebien
                            AND mi_annonce.etat= 'on'
                            AND nb_chambre >= '$chambres'
                            AND nb_salledebains >= '$sallesDeBain'
                            AND prix <= '$this->range'
                            AND $this->filtrerResultats
                            AND (mi_adresse.rue LIKE '%$chercheTexte%' OR mi_adresse.codepostal LIKE '%$chercheTexte%' OR mi_ville.ville LIKE '%$chercheTexte%')
                            AND mi_type_debien.ID_categorie = '$categorie'
                            ORDER BY $this->trierParPrix
                    ";
            }
            
            if ($chercheTexte=="" && $categorie!="tous" && $typeDeBien!="tous"){
                    $query = "
                            SELECT  * 
                            FROM mi_annonce, mi_adresse, mi_ville, mi_province, mi_type_debien
                            WHERE mi_annonce.ID_adresse=mi_adresse.ID_adresse
                            AND mi_adresse.ID_ville=mi_ville.ID_ville
                            AND mi_ville.ID_province=mi_province.ID_province
                            AND mi_annonce.ID_typedebien=mi_type_debien.ID_typedebien
                            AND mi_annonce.etat= 'on'
                            AND nb_chambre >= '$chambres'
                            AND nb_salledebains >= '$sallesDeBain'
                            AND prix <= '$this->range'
                            AND $this->filtrerResultats
                            AND mi_type_debien.ID_categorie = '$categorie'
                            AND mi_type_debien.typedebien = '$typeDeBien'
                            ORDER BY $this->trierParPrix
                    ";
            }
            
            if ($chercheTexte!="" && $categorie!="tous" && $typeDeBien!="tous"){
                    $query = "
                            SELECT  * 
                            FROM mi_annonce, mi_adresse, mi_ville, mi_province, mi_type_debien
                            WHERE mi_annonce.ID_adresse=mi_adresse.ID_adresse
                            AND mi_adresse.ID_ville=mi_ville.ID_ville
                            AND mi_ville.ID_province=mi_province.ID_province
                            AND mi_annonce.ID_typedebien=mi_type_debien.ID_typedebien
                            AND mi_annonce.etat= 'on'
                            AND nb_chambre >= '$chambres'
                            AND nb_salledebains >= '$sallesDeBain'
                            AND prix <= '$this->range'
                            AND $this->filtrerResultats
                            AND (mi_adresse.rue LIKE '%$chercheTexte%' OR mi_adresse.codepostal LIKE '%$chercheTexte%' OR mi_ville.ville LIKE '%$chercheTexte%')
                            AND mi_type_debien.ID_categorie = '$categorie'
                            AND mi_type_debien.typedebien = '$typeDeBien'
                            ORDER BY $this->trierParPrix
                    ";
            }

            return $query;
        }
        
        /**
	 * Retourne un tableau qui contient tous les resultats par page
	 * @access public
	 * @return Array
	 */
        public function getResultatsParPage($chercheTexte, $categorie, $typeDeBien, $prix, $chambres, $sallesDeBain, $FiltrerResultats, $TrierResultats, $limite=0, $parPage=4 ) 
	{
		$aResultats = Array();
                $res = $this->DB->getBD()->query($this->queryResultatsParPage($chercheTexte, $categorie, $typeDeBien, $prix, $chambres, $sallesDeBain, $FiltrerResultats, $TrierResultats, $limite, $parPage));
		if($this->DB->getBD()->affected_rows >0){
                    while($row = $res->fetch_array(MYSQLI_ASSOC)){
                        $aResultats[] = $row;    
                    }
		}     
		return $aResultats;
	}
        /**
	 * Retourne query
	 * @access private
	 * @return String
	 */
        public function queryResultatsParPage($chercheTexte, $categorie, $typeDeBien, $prix, $chambres, $sallesDeBain, $FiltrerResultats, $TrierResultats, $limite, $parPage) {

            switch ($prix) {
                case '0':
                    $this->range =50000;
                    break;
                case '1':
                    $this->range =100000;
                    break;
                case '2':
                    $this->range =250000;
                    break;
                case '3':
                    $this->range =500000;
                    break;
                case '4':
                    $this->range =1000000;
                    break;
                case '5':
                    $this->range =1000000000000;
                    break;
            }
            
            switch ($TrierResultats) {
                case 'moinsCher':
                    $this->trierParPrix ='prix ASC';
                    break;
                case 'plusCher':
                    $this->trierParPrix ='prix DESC';
                    break;
            }
            
            switch ($FiltrerResultats) {
                case 'tous':
                    $this->filtrerResultats ='(mi_annonce.ID_statut = 1 OR mi_annonce.ID_statut = 2)';
                    break;
                case 'vendre':
                    $this->filtrerResultats ='mi_annonce.ID_statut = 1';
                    break;
                case 'louer':
                    $this->filtrerResultats ='mi_annonce.ID_statut = 2';
                    break;
            }
            
            if ($chercheTexte=="" && $categorie=="tous"){
                    $query = "
                            SELECT  * 
                            FROM mi_annonce, mi_adresse, mi_ville, mi_province, mi_type_debien
                            WHERE mi_annonce.ID_adresse=mi_adresse.ID_adresse
                            AND mi_adresse.ID_ville=mi_ville.ID_ville
                            AND mi_ville.ID_province=mi_province.ID_province
                            AND mi_annonce.ID_typedebien=mi_type_debien.ID_typedebien
                            AND mi_annonce.etat= 'on'
                            AND nb_chambre >= '$chambres'
                            AND nb_salledebains >= '$sallesDeBain'
                            AND prix <= '$this->range'
                            AND $this->filtrerResultats
                            ORDER BY $this->trierParPrix
                            LIMIT $limite , $parPage

                    ";
            }
            
            if ($chercheTexte!="" && $categorie=="tous"){
                    $query = "
                            SELECT  * 
                            FROM mi_annonce, mi_adresse, mi_ville, mi_province, mi_type_debien
                            WHERE mi_annonce.ID_adresse=mi_adresse.ID_adresse
                            AND mi_adresse.ID_ville=mi_ville.ID_ville
                            AND mi_ville.ID_province=mi_province.ID_province
                            AND mi_annonce.ID_typedebien=mi_type_debien.ID_typedebien
                            AND mi_annonce.etat= 'on'
                            AND nb_chambre >= '$chambres'
                            AND nb_salledebains >= '$sallesDeBain'
                            AND prix <= '$this->range'
                            AND $this->filtrerResultats
                            AND (mi_adresse.rue LIKE '%$chercheTexte%' OR mi_adresse.codepostal LIKE '%$chercheTexte%' OR mi_ville.ville LIKE '%$chercheTexte%')
                            ORDER BY $this->trierParPrix
                            LIMIT $limite , $parPage
                    ";
            }
            
            if ($chercheTexte=="" && $categorie!="tous" && $typeDeBien=="tous"){
                    $query = "
                            SELECT  * 
                            FROM mi_annonce, mi_adresse, mi_ville, mi_province, mi_type_debien
                            WHERE mi_annonce.ID_adresse=mi_adresse.ID_adresse
                            AND mi_adresse.ID_ville=mi_ville.ID_ville
                            AND mi_ville.ID_province=mi_province.ID_province
                            AND mi_annonce.ID_typedebien=mi_type_debien.ID_typedebien
                            AND mi_annonce.etat= 'on'
                            AND nb_chambre >= '$chambres'
                            AND nb_salledebains >= '$sallesDeBain'
                            AND prix <= '$this->range'
                            AND $this->filtrerResultats
                            AND mi_type_debien.ID_categorie = '$categorie'
                            ORDER BY $this->trierParPrix
                            LIMIT $limite , $parPage
                    ";
            }
            
            if ($chercheTexte!="" && $categorie!="tous" && $typeDeBien=="tous"){
                    $query = "
                            SELECT  * 
                            FROM mi_annonce, mi_adresse, mi_ville, mi_province, mi_type_debien
                            WHERE mi_annonce.ID_adresse=mi_adresse.ID_adresse
                            AND mi_adresse.ID_ville=mi_ville.ID_ville
                            AND mi_ville.ID_province=mi_province.ID_province
                            AND mi_annonce.ID_typedebien=mi_type_debien.ID_typedebien
                            AND mi_annonce.etat= 'on'
                            AND nb_chambre >= '$chambres'
                            AND nb_salledebains >= '$sallesDeBain'
                            AND prix <= '$this->range'
                            AND $this->filtrerResultats
                            AND (mi_adresse.rue LIKE '%$chercheTexte%' OR mi_adresse.codepostal LIKE '%$chercheTexte%' OR mi_ville.ville LIKE '%$chercheTexte%')
                            AND mi_type_debien.ID_categorie = '$categorie'
                            ORDER BY $this->trierParPrix
                            LIMIT $limite , $parPage
                    ";
            }
            
            if ($chercheTexte=="" && $categorie!="tous" && $typeDeBien!="tous"){
                    $query = "
                            SELECT  * 
                            FROM mi_annonce, mi_adresse, mi_ville, mi_province, mi_type_debien
                            WHERE mi_annonce.ID_adresse=mi_adresse.ID_adresse
                            AND mi_adresse.ID_ville=mi_ville.ID_ville
                            AND mi_ville.ID_province=mi_province.ID_province
                            AND mi_annonce.ID_typedebien=mi_type_debien.ID_typedebien
                            AND mi_annonce.etat= 'on'
                            AND nb_chambre >= '$chambres'
                            AND nb_salledebains >= '$sallesDeBain'
                            AND prix <= '$this->range'
                            AND $this->filtrerResultats
                            AND mi_type_debien.ID_categorie = '$categorie'
                            AND mi_type_debien.typedebien = '$typeDeBien'
                            ORDER BY $this->trierParPrix
                            LIMIT $limite , $parPage
                    ";
            }
            
            if ($chercheTexte!="" && $categorie!="tous" && $typeDeBien!="tous"){
                    $query = "
                            SELECT  * 
                            FROM mi_annonce, mi_adresse, mi_ville, mi_province, mi_type_debien
                            WHERE mi_annonce.ID_adresse=mi_adresse.ID_adresse
                            AND mi_adresse.ID_ville=mi_ville.ID_ville
                            AND mi_ville.ID_province=mi_province.ID_province
                            AND mi_annonce.ID_typedebien=mi_type_debien.ID_typedebien
                            AND mi_annonce.etat= 'on'
                            AND nb_chambre >= '$chambres'
                            AND nb_salledebains >= '$sallesDeBain'
                            AND prix <= '$this->range'
                            AND $this->filtrerResultats
                            AND (mi_adresse.rue LIKE '%$chercheTexte%' OR mi_adresse.codepostal LIKE '%$chercheTexte%' OR mi_ville.ville LIKE '%$chercheTexte%')
                            AND mi_type_debien.ID_categorie = '$categorie'
                            AND mi_type_debien.typedebien = '$typeDeBien'
                            ORDER BY $this->trierParPrix
                            LIMIT $limite , $parPage
                    ";
            }

            return $query;
        }
}
?>