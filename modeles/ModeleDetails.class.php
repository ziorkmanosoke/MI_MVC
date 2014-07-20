<?php
/**
 * Description of ModeleDetails
 *
 * @author Mehdi
 */
class ModeleDetails {
    private $DB;
            
	function __construct ()
	{
            $this->DB = BD::getInstance("e1395342", "dbconnect");
	}
	
        /**
	 * Retourne un tableau qui contient tous les details
	 * @access public
	 * @return Array
	 */
        public function getDetails($annonce){
		$aDetails = Array();
                $res = $this->DB->getBD()->query($this->queryDetails($annonce));
		if($this->DB->getBD()->affected_rows >0){
                    while($row = $res->fetch_array(MYSQLI_ASSOC)){
                        $aDetails[] = $row;    
                    }
		}     
		return $aDetails;
	}
        /**
	 * Retourne query
	 * @access private
	 * @return String
	 */
        public function queryDetails($annonce) {
  
            $query = "
                    SELECT * 
                    FROM mi_annonce, mi_adresse, mi_ville, mi_province, mi_type_debien, mi_utilisateurs, mi_agence
                    WHERE mi_annonce.ID_adresse=mi_adresse.ID_adresse
                    AND mi_adresse.ID_ville=mi_ville.ID_ville
                    AND mi_ville.ID_province=mi_province.ID_province
                    AND mi_annonce.ID_typedebien=mi_type_debien.ID_typedebien
                    AND mi_annonce.ID_user= mi_utilisateurs.ID_utilisateurs
                    AND mi_utilisateurs.ID_agence=mi_agence.ID_agence
                    AND mi_annonce.etat= 'on'
                    AND mi_annonce.ID_annonce = '$annonce'
            ";

            return $query;
        }
        /**
	 * Retourne un tableau qui contient tous les proprietes similaires
	 * @access public
	 * @return Array
	 */
        public function getProprietesSimilaires($annonce, $ville, $prix, $typeBien, $statut){
		$aSimilaires = Array();
                $res = $this->DB->getBD()->query($this->querySimilaires($annonce, $ville, $prix, $typeBien, $statut));
		if($this->DB->getBD()->affected_rows >0){
                    while($row = $res->fetch_array(MYSQLI_ASSOC)){
                        $aSimilaires[] = $row;    
                    }
		}     
		return $aSimilaires;
	}
        /**
	 * Retourne query
	 * @access private
	 * @return String
	 */
        public function querySimilaires($annonce, $ville, $prix, $typeBien, $statut) {
            $prixMin = $prix - 100000;
            $prixMax = $prix + 100000;
            $query = "
                    SELECT  * 
                    FROM mi_annonce, mi_adresse, mi_ville, mi_province, mi_type_debien
                    WHERE mi_annonce.ID_adresse=mi_adresse.ID_adresse
                    AND mi_annonce.etat= 'on'
                    AND mi_adresse.ID_ville=mi_ville.ID_ville
                    AND mi_ville.ID_province=mi_province.ID_province
                    AND mi_annonce.ID_typedebien=mi_type_debien.ID_typedebien
                    AND mi_annonce.ID_annonce != '$annonce'
                    AND mi_ville.ville = '$ville'
                    AND mi_type_debien.typedebien = '$typeBien'
                    AND mi_annonce.ID_statut = '$statut'
                    AND mi_annonce.prix <= '$prixMax'
                    AND mi_annonce.prix >= '$prixMin'
                    ORDER BY mi_annonce.prix ASC
            ";

            return $query;
        }
}
?>