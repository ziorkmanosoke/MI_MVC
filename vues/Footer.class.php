<?php
/**
 *
 */


class Footer {

    	/**
	 * Affiche le pied de page 
	 * @access public
	 * 
	 */
    public function affichePiedPage() {
    ?>
    <!--Debut du footer-->
    <footer>
        <div class="container">
            <!--Debut de la section class container-->
            <div class="row">
                <!--Debut du row pour le footer-->
                <article class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <!--Debut de la premiere colonne Mon Immobilier et les coordonnees-->
                    <h1>Mon Immobilier</h1>
                    <!--Adresse et lien vers google maps-->
                    <a href="https://www.google.ca/maps/preview?source=newuser-ws">
                        <p>1910, Rue du Centre</p>
                        <p>Montréal</p>
                        <p>Quebec H3k 1h9</p>
                    </a>
                    <p>
                        <i>
                            <span class="glyphicon glyphicon-earphone"></span> (514) 649-1630</i>
                    </p>
                    <p>
                        <i>
                            <span class="glyphicon glyphicon-envelope"></span> admin@monimmobilier.ca</i>
                    </p>

                </article>
                <!--Fin de la premiere colonne Mon Immobilier et les coordonnees-->

                <article class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <!--Debut de la deuxieme colonne pages-->
                    <h1>Pages</h1>
                    <ul>
                        <li>
                            <a href="#">À Propos</a>
                        </li>
                        <li>
                            <a href="index.php?page=blog">Blog</a>
                        </li>
                        <li>
                            <a href="#">Termes et conditions</a>
                        </li>
                        <li>
                            <a href="#">Politique de confidentialité</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </article>
                <!--Fin de la deuxieme colonne pages-->

                <article class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <!--Debut de la troisieme colonne des dernieres publications-->
                    <h1>Dernières publications</h1>
                    <ul>
                        <li>
                            <a href="#">Rénover sa Maison</a>
                        </li>
                        <li>
                            <a href="#"></a>Décorer son Chez Soi</li>
                        <li>
                            <a href="#">Utiliser Paypal</a>
                        </li>
                        <li>
                            <a href="#">Guide Pour Louer un Bien</a>
                        </li>
                        <li>
                            <a href="#">La satisfaction de nos clients</a>
                        </li>
                    </ul>
                </article>
                <!--Fin de la troisieme colonne des dernieres publications-->

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <!--Debut de la quatrieme colonne des flickrs-->
                    <h1>Suivez-Nous!</h1>
                    <ul>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--Fin de la quatrieme colonne des flickrs-->
            </div>
            <!--Fin du row pour le footer-->
        </div>
        <!--Fin de la section class container-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p id="copyright">monimmobilier.ca © 2014 Tous droits réservés</p>
                </div>
            </div>
        </div>

    </footer>

    <!--Fin du footer-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>

    <!-- Activation de carousel -->
    <script src="js/carousel.js"></script>

</body>

</html>
		<?php
		
	} 
}
?>