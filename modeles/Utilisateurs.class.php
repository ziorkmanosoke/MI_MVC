<?php


/**
 * Description of Utilisateurs
 *
 * @author equipe
 */
class Utilisateurs {
        private $DB;

        function __construct ()
        {
            $this->DB = BD::getInstance("e1395342", "dbconnect");

        }
        
        
        public function getUtilisateur($id=NULL){            
            
            $aUsers = Array();
            $req="  SELECT distinct(a.ID_user), u.*, v.*
                    FROM  `mi_annonce` a, mi_utilisateurs u, mi_adresse ad, mi_ville v
                    WHERE a.ID_user = u.ID_utilisateurs
                    AND u.ID_adresse=ad.ID_adresse
                    AND ad.ID_ville  =v.ID_ville
                    AND u.ID_utilisateurs = ".$id.";";  
            
            $req = $this->DB->getBD()->query($req);
            
            if($this->DB->getBD()->affected_rows >0)
            {
                while($rs = $req->fetch_array(MYSQLI_ASSOC)){                        
                      $aUsers[] = $rs;
                }                   
            }
            
            return $aUsers;            
        }
}
