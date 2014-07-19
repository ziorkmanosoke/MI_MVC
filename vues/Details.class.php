<?php
/**
 * Description of Details
 *
 * @author Mehdi
 */
class Details {
    
    /**
     * Affiche le contenu de la page Details
     * @access public
     * 
     */
    public function afficheContenuDetails() {
        ?>
    
    <!-- details début -->
    <?php
        $oDetails = new ModeleDetails();
        $aDetails = $oDetails->getDetails($_GET['annonce']);
        //var_dump($_GET['annonce']);
        //var_dump($aDetails);
    ?>
    <script src="js/details.js"></script>
    <input type="hidden" id="annonce" value="<?php echo $aDetails[0]['ID_annonce']  ?>">
    <input type="hidden" id="prixAnnonce" value="<?php echo $aDetails[0]['prix']  ?>">
    <input type="hidden" id="villeAnnonce" value="<?php echo $aDetails[0]['ville']  ?>">
    <input type="hidden" id="typeBienAnnonce" value="<?php echo $aDetails[0]['typedebien']  ?>">
    <input type="hidden" id="statut" value="<?php echo $aDetails[0]['ID_statut']  ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="row detailsHeader">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <span class="p16"><?php echo $aDetails[0]['prix']  ?>
                            <b>$</b>
                        </span>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <p>
                            <span class="p12"><?php echo $aDetails[0]['no_rue'].' '.$aDetails[0]['rue']  ?></span>
                        </p>
                        <p>
                            <span class="p12"><?php echo $aDetails[0]['ville'].', '.$aDetails[0]['province'].' '.$aDetails[0]['codepostal']  ?></span>
                        </p>
                    </div>
                    <div class="inv col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <span class="p12"><?php echo $aDetails[0]['typedebien']  ?></span>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
                        <p>
                            <img src="img/icons/bedG.png" />
                            <span class="p14"><?php echo $aDetails[0]['nb_chambre']  ?></span>
                        </p>
                        <p>
                            <img src="img/icons/wcG.png" />
                            <span class="p14"><?php echo $aDetails[0]['nb_salledebains']  ?></span>
                        </p>
                    </div>
                </div>
                <div class="row detailsBody">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div id="carrouselDetails" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="img/photos/vignettes/tn_<?php echo $aDetails[0]['ID_annonce']  ?>.jpeg" alt="Extérieur" />
                                    <div class="carousel-caption">
                                        <p>Extérieur</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/photos/annonce/<?php echo $aDetails[0]['ID_annonce']  ?>_1.jpeg" alt="Vue d'ensemble" />
                                    <div class="carousel-caption">
                                        <p>Vue d'ensemble</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/photos/annonce/<?php echo $aDetails[0]['ID_annonce']  ?>_2.jpeg" alt="Salon" />
                                    <div class="carousel-caption">
                                        <p>Salon</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/photos/annonce/<?php echo $aDetails[0]['ID_annonce']  ?>_4.jpeg" alt="Chambre à coucher principale" />
                                    <div class="carousel-caption">
                                        <p>Chambre à coucher principale</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/photos/annonce/<?php echo $aDetails[0]['ID_annonce']  ?>_3.jpeg" alt="Cuisine" />
                                    <div class="carousel-caption">
                                        <p>Cuisine</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/photos/annonce/<?php echo $aDetails[0]['ID_annonce']  ?>_5.jpeg" alt="Salle de bain" />
                                    <div class="carousel-caption">
                                        <p>Salle de bain</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control left" href="#carrouselDetails" data-slide="prev">&lsaquo;</a>
                            <a class="carousel-control right" href="#carrouselDetails" data-slide="next">&rsaquo;</a>
                        </div>
                    </div>
                    <!-- Nav-Tab  -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="p16">À PROPOS DE CETTE PROPRIÉTÉ</h1>
                        <!-- Nav  -->
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#information" data-toggle="tab">Information</a>
                            </li>
                            <li>
                                <a href="#caracteristiques" data-toggle="tab">Caractéristiques</a>
                            </li>
                            <li>
                                <a href="#evaluations" data-toggle="tab">Couts et évaluations</a>
                            </li>
                        </ul>
                        <!-- Tabs -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="information">
                                <article>
                                    <p><?php echo $aDetails[0]['info_general']  ?></p>
                                </article>
                            </div>
                            <div class="tab-pane" id="caracteristiques">
                                <article>
                                    <p>Caracteristiques: </p>
                                    <ul>
                                        <li>Nbre. pièces:
                                            <b>
                                                <span><?php echo $aDetails[0]['nb_pieces']  ?></span>
                                            </b>
                                        </li>
                                        <li>Superficie habitable:
                                            <b>
                                                <span><?php echo $aDetails[0]['superficie_habitable']  ?></span>
                                            </b>
                                        </li>
                                        <li>Nbre. chambres:
                                            <b>
                                                <span><?php echo $aDetails[0]['nb_chambre']  ?></span>
                                            </b>
                                        </li>
                                        <li>Nbre salles de bains:
                                            <b>
                                                <span><?php echo $aDetails[0]['nb_salledebains']  ?></span>
                                            </b>
                                        </li>
                                        <li>Genre de propriété:
                                            <b>
                                                <span><?php echo $aDetails[0]['typedebien']  ?></span>
                                            </b>
                                        </li>
                                        <li>Année de construction:
                                            <b>
                                                <span><?php echo $aDetails[0]['annee_construction']  ?></span>
                                            </b>
                                        </li>
                                    </ul>
                                </article>
                            </div>
                            <div class="tab-pane" id="evaluations">
                                <article>
                                    <p>Évaluation municipale:</p>
                                    <ul>
                                        <li>Année :
                                            <b>
                                                <span><?php echo $aDetails[0]['annee_evaluation']  ?></span>
                                            </b>
                                        </li>
                                        <li>Évaluation de la bâtisse:
                                            <b>
                                                <span><?php echo $aDetails[0]['evaluation_dubatiment']  ?></span>
                                            </b>
                                        </li>
                                        <li>Évaluation du terrain:
                                            <b>
                                                <span><?php echo $aDetails[0]['evaluation_duterrain']  ?></span>
                                            </b>
                                        </li>
                                        <li>Total:
                                            <b>
                                                <span><?php echo intval($aDetails[0]['evaluation_duterrain']) + intval($aDetails[0]['evaluation_dubatiment'])  ?></span>
                                            </b>
                                        </li>
                                    </ul>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="row panneaux sidebar">
                    <article>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="panel panel-courtier">
                                <div class="panel-heading">
                                    <h1 class="panel-title">COURTIER IMMOBILIER</h1>
                                </div>
                                <div class="panel-body">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <img src="img/photos/user/<?php echo $aDetails[0]['ID_utilisateurs']  ?>.jpeg" alt="<?php echo $aDetails[0]['nom_utilisateur']  ?>">
                                    </div>
                                    <ul class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <li>
                                            <span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $aDetails[0]['prenom'].' '.$aDetails[0]['nom']  ?></li>
                                        <li>
                                            <span class="glyphicon glyphicon-briefcase"></span>&nbsp;<?php echo $aDetails[0]['nom_agence']  ?></li>
                                        <li>
                                            <span class="glyphicon glyphicon-phone"></span>&nbsp;<?php echo $aDetails[0]['telephone_utilisateur']  ?></li>
                                        <li>
                                            <span class="glyphicon glyphicon-phone-alt"></span>&nbsp;<?php echo $aDetails[0]['telephone_agence']  ?></li>
                                    </ul>
                                    <form role="form" action="MAILTO:<?php echo $aDetails[0]['nom_utilisateur']  ?>" method="post" enctype="text/plain">
                                        <button type="submit" id="contactCourtier" class="btn btn-success col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <span class="glyphicon glyphicon-envelope"></span> Contactez-moi</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div id="proprietesSimilaires"></div>
            </div>
        </div>
    </div>
    <!-- details fin -->
    
    
    <?php
    }
}
?>
