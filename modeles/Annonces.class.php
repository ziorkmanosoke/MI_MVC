<?php

/**
 * Description of Annonces
 *
 * @author travail d'équipe
 */
class Annonces {
    private $DB;
            
	function __construct ()
	{
            $this->DB = BD::getInstance("e1395529", "dbconnect");
            
	}
        
        public function getAnnonces(){
            
            $aAnnonces = Array();
            $res = $this->DB->getBD()->query("SELECT *
                                             FROM  `mi_annonce` a, mi_statut s, mi_type_debien b
                                             WHERE a.ID_statut = s.ID_statut
                                             AND a.ID_user = ".$_SESSION['ID_utilisateur']."
                                             AND a.ID_typedebien = b.ID_typedebien
                                             ORDER BY ID_annonce DESC");
            
            if($this->DB->getBD()->affected_rows >0)
            {
                while($rs = $res->fetch_array(MYSQLI_ASSOC)){                        
                      $aAnnonces[] = $rs;
                }                   
            }
//            $rs->free_result();
            return $aAnnonces;            
        } 
        
        public function getAnnonce($id=null) {
            
            $aAnnonce = Array();
            if(!is_numeric($id)){
               
                    throw new Exception("La valeur doit être numérique", 1);
            }
            $req = "Select * from mi_annonce an, mi_adresse ad
                    where an.ID_adresse = ad.ID_adresse
                    AND ID_annonce = '". $id ."'";
            
            $rs = $this->DB->getBD()->query($req);
            
            if($this->DB->getBD()->affected_rows >0){
                
                $aAnnonce = $rs->fetch_array(MYSQLI_ASSOC); 
                $aAnnonce[] = $aAnnonce;
                
            }
            
            $rs->free_result();
            return $aAnnonce;
	}         
       
        public function etatAnnonce($id=null, $etat) {
            
            if(!is_numeric($id)){
               
                    throw new Exception("La valeur doit être numérique", 1);
            }
            $req = "UPDATE `mi_annonce` SET  `etat` =  '".$etat."' WHERE `ID_annonce` ='". $id ."';";
            $rs = $this->DB->getBD()->query($req);
            

            return $rs;
	}  
  
        public function suppAnnonce($data) {
            
            if(!is_numeric($data['ID_annonce'])){
               
                    throw new Exception("La valeur doit être numérique", 1);
            }
           
            $reqAnnonce = "DELETE FROM `mi_annonce` WHERE `ID_annonce` ='". $data['ID_annonce'] ."';";
            $this->DB->getBD()->query($reqAnnonce);
            
            $reqAdresse = "DELETE FROM `mi_adresse` WHERE `ID_adresse` ='". $data['ID_adresse'] ."';";
            $this->DB->getBD()->query($reqAdresse);

	}        
        
  
        public function setAnnonce($data) {

            $reqPrix="UPDATE  `mi_annonce` SET  `prix` =  ".$data["prix"]." WHERE  `ID_annonce` =".$data["ID_annonce"].";";
            $this->DB->getBD()->query($reqPrix);
            
            $reqNbrChambre="UPDATE  `mi_annonce` SET  `nb_chambre` =  ".$data["nbrChambre"]." WHERE  `ID_annonce` =".$data["ID_annonce"].";";
            $this->DB->getBD()->query($reqNbrChambre);
            
            $reqNbrSalleBain="UPDATE  `mi_annonce` SET  `nb_salledebains` =  ".$data["nbrSalleBain"]." WHERE  `ID_annonce` =".$data["ID_annonce"].";";
            $this->DB->getBD()->query($reqNbrSalleBain);
            
            $reqNbrPiece="UPDATE  `mi_annonce` SET  `nb_pieces` =  ".$data["nbrPiece"]." WHERE  `ID_annonce` =".$data["ID_annonce"].";";
            $this->DB->getBD()->query($reqNbrPiece);
            
            $reqDescription="UPDATE  `mi_annonce` SET  `info_general` =  '".$data["description"]."' WHERE  `ID_annonce` =".$data["ID_annonce"].";";
            $this->DB->getBD()->query($reqDescription);
            
            $reqSuperficie="UPDATE  `mi_annonce` SET  `superficie_habitable` =  ".$data["superficie"]." WHERE  `ID_annonce` =".$data["ID_annonce"].";";
            $this->DB->getBD()->query($reqSuperficie);
            
            $reqAnneeConstruction="UPDATE  `mi_annonce` SET  `annee_construction` =  '".$data["anneeConstruction"]."' WHERE  `ID_annonce` =".$data["ID_annonce"].";";
            $this->DB->getBD()->query($reqAnneeConstruction);
            
            $reqAnneeEvaluation="UPDATE  `mi_annonce` SET  `annee_evaluation` =  '".$data["anneeEvaluation"]."' WHERE  `ID_annonce` =".$data["ID_annonce"].";";
            $this->DB->getBD()->query($reqAnneeEvaluation);
            
            $reqEvaluationBatisse="UPDATE  `mi_annonce` SET  `evaluation_dubatiment` =  ".$data["evaluationBatisse"]." WHERE  `ID_annonce` =".$data["ID_annonce"].";";
            $this->DB->getBD()->query($reqEvaluationBatisse);
            
            $reqEvaluationTerrain="UPDATE  `mi_annonce` SET  `evaluation_duterrain` =  ".$data["evaluationTerrain"]." WHERE  `ID_annonce` =".$data["ID_annonce"].";";
            $this->DB->getBD()->query($reqEvaluationTerrain);
            
            
            
            
            /* Update dans la table adresse*/
            $reqNumRue="UPDATE  `mi_adresse` SET  `no_rue` =  ".$data["numero"]." WHERE  `ID_adresse` =".$data["ID_adresse"].";";
            $this->DB->getBD()->query($reqNumRue);
            
            $reqRue="UPDATE  `mi_adresse` SET  `rue` =  '".$data["rue"]."' WHERE  `ID_adresse` =".$data["ID_adresse"].";";
            $this->DB->getBD()->query($reqRue);
            
            $reqCodePostal="UPDATE  `mi_adresse` SET  `codepostal` =  '".$data["codePostal"]."' WHERE  `ID_adresse` =".$data["ID_adresse"].";";
            $this->DB->getBD()->query($reqCodePostal);
            
            
	} 
        
	
        function addAnnonce($data) {
            /**
             *  Protèger les chaines contres les attaques : "Sécurité, Les failles XSS"              
             */
//            $rue = $this->DB->real_escape_string($data['rue']);
            $description = $this->DB->getBD()->escape_string($data['description']);
          
//            $this->DB->getBD()->autocommit(FALSE);
            /**
             * ajouter l'adresse dans la table adresse
             */            
            $req_adr = "INSERT INTO `mi_adresse` (
                    `ID_adresse` ,
                    `no_rue` ,
                    `rue` ,
                    `codepostal` ,
                    `ID_ville`
                    )
                    VALUES (NULL , "
                            .$data['numero'].", '"
                            .$data['rue']."', '" 
                            .$data['codePostal']."', '"
                            .$data['ville']."'); ";
                    $this->DB->getBD()->query($req_adr);
                    $last_ID_adresse = $this->DB->getBD()->insert_id;  
                
             /**
             * ajouter une annonce d'un bien immobilier
             */
            $today = date("Y-m-d");             
            $ID_user = $_SESSION['ID_utilisateur'];            
            $statut='off';
            if (empty($data['anneeEvaluation'])){ $data['anneeEvaluation']=0;};
            if (empty($data['evaluationBatisse'])){ $data['evaluationBatisse']=0;};
            if (empty($data['evaluationTerrain'])){ $data['evaluationTerrain']=0;};
            
            $req_annonce = "INSERT INTO `mi_annonce` (
                    `ID_annonce` ,
                    `Date_annonce` ,
                    `prix` ,
                    `ID_statut` ,
                    `ID_user` ,
                    `ID_adresse` ,
                    `ID_typedebien`,
                    `nb_chambre` ,
                    `nb_salledebains` ,
                    `nb_pieces` ,
                    `info_general` ,
                    `superficie_habitable` ,
                    `annee_construction`,
                    `annee_evaluation`,
                    `evaluation_dubatiment`,
                    `evaluation_duterrain`,
                    `etat`
                    )
                    VALUES (NULL , '"
                             .$today."', "
                             .$data['prix'].", "
                             .$data['transaction'].", '" 
                             .$_SESSION['ID_utilisateur']."', '"
                             .$last_ID_adresse."', '"
                             .$data['typeDeBien']."', '"
                             .$data['nbrChambre']."', '"
                             .$data['nbrSalleBain']."',"
                             .$data['nbrPiece'].",'"
                             .$description."',"
                             .$data['superficie'].",'"
                             .$data['anneeConstruction']."','"
                             .$data['anneeEvaluation']."','"
                             .$data['evaluationBatisse']."', '"
                             .$data['evaluationTerrain']."', '"
                             .$statut."'); ";

                $this->DB->getBD()->query($req_annonce);
                
                if($this->DB->getBD()->affected_rows >0)
		{
                    //return $ajout=TRUE;
                } else {
                    //return $ajout=FALSE;
                }
		
                //echo "req1:".$req_adr." req2 :".$req_annonce;
//                $nb=$nb+$this->BD->getBD()->affected_rows;
//                echo 'nb : '.$nb;
                
//                if($nb==2){
//                    $this->DB->getBD()->commit();
//                    return TRUE;
//                } else {
//                    $this->DB->getBD()->rollback();
//                    return FALSE;
//                }
        }
        
 
}

?>