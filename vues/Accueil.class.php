<?php
/**
 * Class Vue
 * Template de classe Vue. Dupliquer et modifier pour votre usage.
 * 
 * @author Jonathan Martel
 * @version 1.0
 * @update 2013-12-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */

class Accueil {

    /**
     * Affiche le contenu de la page Accueil 
     * @access public
     * 
     */
    public function afficheContenuAccueil() {
		?>
  
    <!-- recherche principale Début -->
    <?php
        $oRecherche = new Recherche();
        $oRecherche->afficheMenuRecherche();
    ?>
    <!-- recherche principale fin -->
    <div class="container" id="accueil">
        <!-- carousel principale début -->
        <!-- source: http://webdesign.tutsplus.com/articles/twitter-bootstrap-101-the-carousel--webdesign-7442-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div id="carrouselPhotos" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/slide/slide1.jpg" alt="Montréal, QC H3E 0B3" />
                            <div class="carousel-caption">
                                <p>111 Ch. de la Pointe-Nord 501, Montréal, QC H3E 0B3</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/slide/slide2.jpg" alt="Montréal, QC H3E 0B3" />
                            <div class="carousel-caption">
                                <p>111 Ch. de la Pointe-Nord 501, Montréal, QC H3E 0B3</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/slide/slide3.jpg" alt="Montréal, QC H3E 0B3" />
                            <div class="carousel-caption">
                                <p>111 Ch. de la Pointe-Nord 501, Montréal, QC H3E 0B3</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/slide/slide4.jpg" alt="Montréal, QC H3E 0B3" />
                            <div class="carousel-caption">
                                <p>111 Ch. de la Pointe-Nord 501, Montréal, QC H3E 0B3</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/slide/slide5.jpg" alt="Montréal, QC H3E 0B3" />
                            <div class="carousel-caption">
                                <p>111 Ch. de la Pointe-Nord 501, Montréal, QC H3E 0B3</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control left" href="#carrouselPhotos" data-slide="prev">&lsaquo;</a>
                    <a class="carousel-control right" href="#carrouselPhotos" data-slide="next">&rsaquo;</a>
                </div>
            </div>
        </div>
    </div>
    <!-- carousel principale fin -->


    <!-- Les panneaux début -->
    <div class="container">
        <div class="row panneaux">
            <!-- acticle principal début -->
            <article>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-acheter">
                        <div class="panel-heading">
                            <h1 class="panel-title">ACHETER UNE PROPRIÉTÉ</h1>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <a href="#">Résidentielle</a>
                                </li>
                                <li>
                                    <a href="#">Commerciale</a>
                                </li>
                                <li>
                                    <a href="#">Multi logement</a>
                                </li>
                                <li>
                                    <a href="#">Terrain</a>
                                </li>
                                <li>
                                    <a href="#">Ferme</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-vendre">
                        <div class="panel-heading">
                            <h1 class="panel-title">VENDRE MA PROPRIÉTÉ</h1>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <a href="#">Notre offre</a>
                                </li>
                                <li>
                                    <a href="#">Nos programmes exclusifs</a>
                                </li>
                                <li>
                                    <a href="#">Inscrivez votre propriété</a>
                                </li>
                                <li>
                                    <a href="#">Devenir un courtier</a>
                                </li>
                                <li>
                                    <a href="#">Guide de vente</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-apropos">
                        <div class="panel-heading">
                            <h1 class="panel-title">À PROPOS DE MONIMMOBILIER.CA</h1>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <a href="#">Profil</a>
                                </li>
                                <li>
                                    <a href="#">Nous joindre</a>
                                </li>
                                <li>
                                    <a href="#">Nos Courtiers</a>
                                </li>
                                <li>
                                    <a href="#">Liens immobiliers</a>
                                </li>
                                <li>
                                    <a href="#">Avis Légaux</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
            <!-- acticle principal fin -->
        </div>
    </div>
    <!-- Les panneaux fin -->

    <!-- article 2 début -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <article>
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                            <img src="img/logo/monimmobilier_logo.png" id="monimmobilierLogo" alt="monimmobilier">
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                            <h1>NOTRE VISION</h1>
                            <p>Développement d’une clientèle dans le secteur de l’immobilier en leur offrant un portail de l’immobilier qui leur permet de publier leurs produits et services.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2>POURQUOI monimmobilier.ca ?</h2>
                            <ul>
                                <li>Faciliter la location, vente et achat des biens immobiliers entre clients et agences.</li>
                                <li>Créer un espace vendeur pour les agences immobilières et les particuliers ou ils pourront ajouter et faire des mises à jour de leurs biens.</li>
                                <li>Créer un espace pour les demandeurs (à travers un formulaire d'inscription) d'un bien en particulier.</li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>

            <!-- article 2 fin -->

            <!-- aside principal début -->
<?php

                $oAside = new Aside();
                $oAside->afficheAside();
?>

        </div>
    </div>
    <!-- aside principal fin -->
		<?php
		
	}
	

}
?>