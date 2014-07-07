<?php
/*
autheur: Alexandre Lacerte
Projet: Travaille Integration 2
*/

/*classe utilitaire pour aller cherchez des informations dans une base de donnee*/
class requeteServeur
{ 
    /*Requete vers une base de donne Mysql*/
    static function requeteMysql($req)
    {  
        $id= connexionObjet("e1395342","dbconnect");
        $id->query("SET NAMES UTF8");
        $resultat = $id->query($req);
        
        if(!$resultat)
        {
            //echo "PROBLEME!!!!";
            return "erreur";
        }
        else
        { 
            //echo "OK!!!";
            return $resultat;
        }	    
    } 
}

?>	