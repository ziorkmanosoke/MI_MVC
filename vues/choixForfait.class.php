<?php

/**
 * Description: selection de forfais apres la creation du compte utilisateur
 * @author Alexandre Lacerte
 */
class choixForfait {
 
    public function afficheChoixForfait(){
        
    ?>
        
    <div class="choixForfais">
    <article class="container well">
        <h1 class="brand">Service souhaité?</h1>
        <section class="row">
            <!-- trois article suivant montre les forfais disponible-->
            <article class="col-md-4">
                <h2>Invité <br/>& Demandeur</h2>
                <img src="./img/placeholder.jpg" class="img-responsive" alt="Responsive image">
                <div>
                <p>
                    Vous pouvez enregistrer votre demande de recherche et etre contacté par ceux qui répond a votre demande. MonImmobilier met à votre disposition son service gratuit de mise en relation avec des professionnels de l'immobilier de votre région. 
                </p>
                </div>
                <p><a class="btn btn-default" href="index.php?page=infosCompte" role="button">Choisir</a></p>
            </article>
            <article class="col-md-4">
                <h2><br/>Particuliers</h2>
                <img src="./img/placeholder.jpg" class="img-responsive" alt="Responsive image">
                <div>
                <p>
                Vous permet d'enregistrer votre bien immobilier et etre contacté directement par les demandeurs sans passé par les intermidiaires.
                </p>
                </div>
                <p><a class="btn btn-default" href="index.php?page=ForfaitParticulier" role="button">Choisir</a></p>
           </article>
            <article class="col-md-4">
                <h2>Agence <br/>& intermidiaire</h2>
                <img src="./img/placeholder.jpg" class="img-responsive" alt="Responsive image">
                <div>
                <p>
                Espace permettra aux agences immobilières d'avoir plus d'opportunité de réaliser vos transaction immobilière. En proposant votre bien sur MonImmobilier, vous bénéficiez de la visibilité de votre annonce sur le réseau internet.      
            
                </p>
                </div>
                <p><a class="btn btn-default" href="index.php?page=creerAgence" role="button">Choisir</a></p>
            </article>
        </section>
    </article>
    </div>


        <?php
    }
}

?>


