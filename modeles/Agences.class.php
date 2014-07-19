<?php


/**
 * Description of Utilisateurs
 *
 * @author equipe
 */
class Agences {
        private $DB;

        function __construct ()
        {
            $this->DB = BD::getInstance("e1395529", "dbconnect");

        }
        
        
        public function getAgence($id=NULL){            
            
            $aAgences = Array();
            $req="  SELECT  a.*, ad.*, v.*
                    FROM  `mi_agence` a, mi_utilisateurs u, mi_adresse ad, mi_ville v
                    WHERE a.ID_agence = u.ID_agence
                    AND a.ID_adresse = ad.ID_adresse
                    AND ad.ID_ville = v.ID_ville
                    AND u.ID_utilisateurs = ".$id.";";  
            
            $req = $this->DB->getBD()->query($req);
            
            if($this->DB->getBD()->affected_rows >0)
            {
                while($rs = $req->fetch_array(MYSQLI_ASSOC)){                        
                      $aAgences[] = $rs;
                }                   
            }
            
            return $aAgences;            
        }
}
