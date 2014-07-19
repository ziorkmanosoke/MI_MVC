<?php

/**
 * Description of Villes
 *
 * @author belhmidi
 */
class Villes {
        private $DB;
            
        function __construct ()
        {
            $this->DB = BD::getInstance("e1395529", "dbconnect");

        }

        /**
	 * Retourne un tableau qui contient tous les categorie
	 * @access public
	 * @return Array
	 */
	public function getVilles() 
	{
		$aVilles = Array();
		$res = $this->DB->getBD()->query("SELECT ID_ville, ville FROM mi_ville");
		if($this->DB->getBD()->affected_rows >0){
                    while($row = $res->fetch_array(MYSQLI_NUM)){
                        $aVilles[] = $row;
                    }
		}
                $res->free_result(); 
                return $aVilles;
	}
}
