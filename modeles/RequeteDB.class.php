<?php
/*
autheur: Alexandre Lacerte
Projet: Travaille Integration 2
*/

/*classe utilitaire pour aller cherchez des informations dans une base de donnee*/
class RequeteDB
{ 
    /*Requete vers une base de donne Mysql*/
    static function requeteMysql($req)
    {  
        $mysqli = connexionObjet("e1395342","dbconnect");

        mysqli_set_charset($mysqli,"utf8");
        
        /* Vérification de la connexion */
        if (mysqli_connect_errno()) {
            printf("Échec de la connexion : %s\n", mysqli_connect_error());
            exit();
        }

        //$mysqli->query("CREATE TABLE myCity LIKE City");
        
        $query = $req;
        $mysqli->query($query);
        echo "<pre>".print_r($mysqli,true)."</pre>";
        printf ("Le nouvel enregistrement a l'id %d.\n", $mysqli->insert_id);
        return $mysqli;
        /* drop table */
        //$mysqli->query("DROP TABLE myCity");

        /* Fermeture de la connexion */
        $mysqli->close();
        
    } 
}

?>	

<?php

?>