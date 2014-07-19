<?php

/**
 * Controlleur AJAX. Ce fichier est la porte d'entrée des requêtes AJAX (XHR)
 * @author Jonathan Martel
 * @version 1.0
 * @update 2013-03-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */

	require_once("./config.php");

	// Mettre ici le code de gestion de la requête AJAX
        require_once("./var.init.php");
        
        if ($_GET['controler']=='recherche'){
            $oMenuRecherche = new ModeleRecherche();

            echo '<option value="tous"';
            echo '>Toutes</option>';

            foreach($oMenuRecherche->getTypeDeBienParCat($_GET['categorie']) as $aTypeDeBien) {

                echo '
                       <option value="'.htmlentities($aTypeDeBien[0]).'"
                     ';
                echo '>'.htmlentities(ucfirst($aTypeDeBien[0])).'</option>';
            }
        }
        
        if ($_GET['controler']=='admin'){
            $oMenuRecherche = new ModeleRecherche();

            echo '<option value="tous"';
            echo '>Toutes</option>';

            foreach($oMenuRecherche->getTypeDeBienParCat($_GET['categorie']) as $aTypeDeBien) {

                echo '
                       <option value="'.htmlentities($aTypeDeBien[1]).'"
                     ';
                echo '>'.htmlentities(ucfirst($aTypeDeBien[0])).'</option>';
            }
        }
        
        if ($_GET['controler']=='resultats'){
            $parPage=$_GET['parPage'];
            $pageActuelle=$_GET['pageActuelle'];
            $limite=($pageActuelle-1)*$parPage;
            $oResultats = new ModeleResultats;
            $aResultats = $oResultats->getResultats($_GET['ct'],$_GET['cat'],$_GET['tdb'],$_GET['px'],$_GET['camb'],$_GET['sdb'],$_GET['fr'],$_GET['tr']);
            $aResultatsParPage = $oResultats->getResultatsParPage($_GET['ct'],$_GET['cat'],$_GET['tdb'],$_GET['px'],$_GET['camb'],$_GET['sdb'],$_GET['fr'],$_GET['tr'],$limite,$parPage);
            $pagesTotales=  ceil(count($aResultats)/$parPage);
            //var_dump($pageActuelle);
            echo '<article class="row">';
                echo '<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">';
                if ($aResultats){
                        echo '<p><span>'.count($aResultats).'</span> PROPRIÉTÉS TROUVÉES</p>';
                    echo '</div>';
                    echo '<section class="col-lg-3 col-md-6 col-sm-12 col-xs-12">';
                            echo '<label for="parPage">Résultats par page </label>';
                            echo '<input type="range" name="parPage" id="parPage" min="2" max="8" step="2" value="'.$parPage.'">';
                    echo '</section>';
                    echo '</article>';
                    echo '<div class="row panneaux">';
                            foreach ($aResultatsParPage as $key => $resultat) {
                                echo '<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">';
                                    echo '<div class="panel panel-resultat">';
                                        echo '<div class="panel-heading">';
                                            echo '<h1 class="panel-adresseL1">'.$aResultatsParPage[$key]['no_rue'].' '.$aResultatsParPage[$key]['rue'].'</h1>';
                                            echo '<h1 class="panel-adresseL2">'.$aResultatsParPage[$key]['ville'].', '.$aResultatsParPage[$key]['province'].' '.$aResultatsParPage[$key]['codepostal'].'</h1>';
                                        echo '</div>';
                                        echo '<div class="panel-body">';
                                            echo '<a href="index.php?page=details&annonce='.$aResultatsParPage[$key]['ID_annonce'].'" title="'.$aResultatsParPage[$key]['no_rue'].' '.$aResultatsParPage[$key]['rue'].'">';
                                                echo '<img src="img/photos/vignettes/tn_'.$aResultatsParPage[$key]['ID_annonce'].'.jpeg" alt="'.$aResultatsParPage[$key]['rue'].'" />';
                                            echo '</a>';
                                            echo '<p>'.$aResultatsParPage[$key]['typedebien'].'</p>';
                                        echo '</div>';
                                        echo '<div class="panel-footer">';
                                            echo '<p>'.$aResultatsParPage[$key]['prix'];
                                                echo '<b>$</b>';
                                                echo '<img src="img/icons/wc.png" id="wc" />'.$aResultatsParPage[$key]['nb_salledebains'];
                                                echo '<img src="img/icons/bed.png" id="lit" />'.$aResultatsParPage[$key]['nb_chambre'].'</p>';
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            }
                  echo '</div>';
                            
                                echo '<div class="row" id="page">';
                                echo '<ul class="pagination pagination-lg">';
                                    echo '<li';
                                        if ($pageActuelle==1){
                                            echo ' class=" disabled"';
                                        }
                                    echo '>';
                                        echo '<a href="#" ';
                                        if ($pageActuelle!=1){
                                            echo ' id="pagePer"';
                                        }
                                        echo '>&laquo;</a>';
                                    echo '</li>';
                                    for($i=1;$i<=$pagesTotales;$i++){
                                        echo '<li class="pageLi ';
                                        if ($pageActuelle==$i){
                                            echo 'active';
                                        }
                                        echo'">';
                                            echo '<a href="#" class="pageNum">'.$i;
                                            echo '</a>';
                                        echo '</li>';
                                    }
                                    echo '<li';
                                        if ($pageActuelle==$pagesTotales){
                                            echo ' class="disabled"';
                                        }
                                    echo '>';
                                        echo '<a href="#"';
                                        if ($pageActuelle!=$pagesTotales){
                                            echo ' id="pageSuv"';
                                        }
                                        echo '>&raquo;</a>';
                                    echo '</li>';
                                    echo '</ul>';
                                echo '</div>';
                        
                }else{
                        echo '<p><span>AUCUNE</span> PROPRIÉTÉ TROUVÉE</p>';
                        echo '<style>#resultat > article >div{border-bottom: solid 4px #CCCCCC;border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;margin-bottom:20px;}</style>';
                    }
        }
        
        if ($_GET['controler']=='details'){
             $oSimilaires = new ModeleDetails();
             $aSimilaires = $oSimilaires->getProprietesSimilaires($_GET['annonce'],$_GET['villeAnnonce'],$_GET['prixAnnonce'],$_GET['typeBienAnnonce'],$_GET['statut']);
             //var_dump($aSimilaires);
             //var_dump($_GET['prixAnnonce']);
            switch ($_GET['statut']) {
                case '1':
                    $statut = " à vendre";
                    break;
                case '2':
                    $statut = " à louer";
                    break;
            }
             if($aSimilaires){
                echo '<div class="row panneaux sidebar">';
                    echo '<article>';
                        echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">';
                            echo '<div class="panel panel-similaires"> ';  
                                echo '<div class="panel-heading">';
                                        echo '<h1 class="panel-title"><span>'.count($aSimilaires).'</span>'; 
                                        if (count($aSimilaires)==1){
                                            echo ' PROPRIÉTÉ SIMILAIRE TROUVÉ</h1>';
                                            
                                        }else{
                                            echo ' PROPRIÉTÉS SIMILAIRES TROUVÉES</h1>';
                                        }
                                echo '</div>';
                                    echo '<div class="panel-body">';
                                        echo '<div class="row">';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">';
                                                echo '<a href="index.php?page=details&annonce='.$aSimilaires[$_GET['index']]['ID_annonce'].'"><img src="img/photos/vignettes/tn_'.$aSimilaires[$_GET['index']]['ID_annonce'].'.jpeg" alt="propriété similaires" title="'.$aSimilaires[$_GET['index']]['no_rue'].', '.$aSimilaires[$_GET['index']]['rue'].'"></a>';
                                            echo '</div>';
                                                echo '<ul class="col-lg-6 col-md-6 col-sm-6 col-xs-6">';
                                                    echo '<li><span class="glyphicon glyphicon-globe"></span>'.' '.$aSimilaires[$_GET['index']]['ville'].', '.$aSimilaires[$_GET['index']]['province'].'</li>';
                                                    echo '<li><span class="glyphicon glyphicon-map-marker"></span>'.' '.$aSimilaires[$_GET['index']]['no_rue'].', '.$aSimilaires[$_GET['index']]['rue'].'</li>';
                                                    echo '<li><span class="glyphicon glyphicon-home"></span>'.' '.$aSimilaires[$_GET['index']]['typedebien'].' '.$statut.'</li>';
                                                    echo '<li><span class="glyphicon glyphicon-usd"></span>'.' '.$aSimilaires[$_GET['index']]['prix'].'</li>';
                                                echo '</ul>';
                                            echo '</div>';
                                            echo '<div class="row">';
                                                echo '<form role="form" action="" method="post" enctype="text/plain">';
                                                    echo '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>';
                                                    echo '<input type="hidden" id="index" value="'.$_GET['index'].'"/>';
                                                    if ($_GET['index']>0){
                                                        echo '<button type="button" id="precedente" class="btn btn-default col-lg-4 col-md-4 col-sm-4 col-xs-4">Précédente</button><div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>';
                                                    }else{
                                                         echo '<button type="button" class="btn col-lg-4 col-md-4 col-sm-4 col-xs-4">Précédente</button><div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>';
                                                    }
                                                    if ($_GET['index']<  (count($aSimilaires)-1)){
                                                        echo '<button type="button" id="suivante" class="btn btn-default col-lg-4 col-md-4 col-sm-4 col-xs-4">Suivante</button><div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>';  
                                                    }else{
                                                         echo '<button type="button" class="btn col-lg-4 col-md-4 col-sm-4 col-xs-4">Suivante</button><div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>';
                                                    }
                                                echo '</form>';
                                            echo '</div>';
                                        echo '</div>';
                            echo '</div>';
                        echo '</div>';
                   echo '</article>';
                echo '</div>';
             }
        }
?>