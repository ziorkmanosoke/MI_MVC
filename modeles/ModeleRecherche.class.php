<?php
/**
 * Class Modele
 * Template de classe modèle. Dupliquer et modifier pour votre usage.
 * 
 * @author Jonathan Martel
 * @version 1.0
 * @update 2013-12-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 * @author Mehdi
 */
class ModeleRecherche {
    private $DB;
            
	function __construct ()
	{
            $this->DB = BD::getInstance("e1395342", "dbconnect");
	}
		
	/**
	 * Retourne un tableau qui contient tous les categorie
	 * @access public
	 * @return Array
	 */
	public function getCategories() 
	{
		$aCategories = Array();
		$res = $this->DB->getBD()->query("SELECT DISTINCT categorie, ID_categorie FROM mi_categorie");
		if($this->DB->getBD()->affected_rows >0){
                    while($row = $res->fetch_array(MYSQLI_NUM)){
                        $aCategories[] = $row;
                    }
		}
                $res->free_result();
                
		return $aCategories;
	}
        /**
	 * Retourne un tableau qui contient un categorie spécifique
	 * @param int id
	 * @access public
	 * @return Array
	 */
	public function getCategorie($id=null) {
		$aCategorie = Array();
		if(!is_numeric($id)){
			throw new Exception("La valeur doit être numérique", 1);
		}
		$res = $this->DB->getBD()->query("Select * from mi_categorie where (ID_categorie = '". $id ."')");
		if($this->DB->getBD()->affected_rows >0){
                    $aCategorie = $res->fetch_all(MYSQLI_ASSOC);
                    $aCategorie = $aCategorie[0];	
		}
                
		return $aCategorie;
	}
        
        /**
	 * Retourne un tableau qui contient tous les Type De Bien
	 * @access public
	 * @return Array
	 */
        public function getTypeDeBien() 
	{
		$aTypeDeBiens = Array();
                
		$res = $this->DB->getBD()->query("SELECT DISTINCT typedebien, ID_categorie FROM mi_type_debien");
		if($this->DB->getBD()->affected_rows >0){
                    while($row = $res->fetch_array(MYSQLI_NUM)){
                        $aTypeDeBiens[] = $row;    
                    }
		}     
		return $aTypeDeBiens;
	}
        
        /**
	 * Retourne un tableau qui contient tous les Type De Bien par categorie
	 * @access public
	 * @return Array
	 */
        public function getTypeDeBienParCat($cat) 
	{
		$aTypeDeBiens = Array();
                $res = $this->DB->getBD()->query("SELECT DISTINCT typedebien, ID_categorie FROM mi_type_debien WHERE ID_categorie=$cat");
		if($this->DB->getBD()->affected_rows >0){
                    while($row = $res->fetch_array(MYSQLI_NUM)){
                        $aTypeDeBiens[] = $row;    
                    }
		}     
		return $aTypeDeBiens;
	}
}
?>