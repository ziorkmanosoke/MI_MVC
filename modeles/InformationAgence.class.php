<?php
/**

 */
class InformationAgence {
 
    private $infos;

    public function __construct(){
        //$this->setVariable($resultat, $cVoulu);
        $this->infos = requeteServeur::requeteMysql("e1395342","dbconnect");
        //echo "<pre>".print_r($this->infos->getInfos(),true)."</pre>";
    }

    public function getAllInfo()
    {
        $requete ="SELECT * FROM question";
        return $this->infos->getAllInfos($requete);
    }

    /*va chercher les infos d'une question dependant son id*/
    public function getQuestion($id)
    {
        var_dump($id);
        foreach($this->getAllInfo() as $val)
        {
            //var_dump($val);
            if((int)$val["id_question"] == $id)
            {
                $question = array(
                   "id"             => (int)$val["id_question"],
                   "titre"          => htmlentities($val["titre_question"]),
                   "categorie"      => $val["categorie_question"],
                   "totalCorrect"   => (int)$val["totalCorrectReponse"],
                   "totalIncorrect" => (int)$val["totalIncorrectReponse"],
                   "totalRepondu"   => (int)$val["totalCorrectReponse"]+ (int)$val["totalIncorrectReponse"],
                   );
                return $question;
            }
            //echo "<pre>".print_r($val,true)."</pre>";
        }
    }
    /*permet aller chercher tous les info requis pour une section (css, internet et web , xhtml)*/
    public function getCategorieInfo($categorie)
    {
        $i = 1;
        foreach($this->getAllInfo() as $val)
        {
            //var_dump($val);
            if(strtoupper($val["categorie_question"]) == strtoupper($categorie))
            {

                $questions[$i] = array(
                   "id"             => (int)$val["id_question"],
                   "titre"          => htmlentities($val["titre_question"]),
                   "categorie"      => $val["categorie_question"],
                   "totalCorrect"   => (int)$val["totalCorrectReponse"],
                   "totalIncorrect" => (int)$val["totalIncorrectReponse"],
                   "totalRepondu"   => (int)$val["totalCorrectReponse"]+ (int)$val["totalIncorrectReponse"],
                   );
                //var_dump($questions[$i]);
                //echo $questions[$i]["totalRepondu"];
                $i++;     
            }
        }
        //echo count($questions);
        return $questions;
    }

    public function getInfoChoisis($tableau)
    {
        $i = 0;
        foreach($tableau as $val)
        {
            $informations[$i] = $this->getCategorieInfo($val);
            $i++;
        }
        return $informations;
    }
}




?>