<?php

/**
 * Description of Forfait
 * 
 */
class Contact {
    //put your code here
    
    public function afficherContact(){
        
   ?>
    
<!--#######################################-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&amp;sensor=false"></script>
<script type="text/javascript" src="js/googlemap.js"></script>

	<div class="container">
		<div class="row callaction1">
			<section class="col-xs-12 col-lg-12">
				<p>Vous pouvez joindre aux coordonnées suivants et nous ferons un plaisir de vous aider</p>
			</section>
		</div>
	</div>
    
        <div class="container bordure coordonnees">
            <div class="row col-sm-4 nousjoindre well well-sm">
                    <p><span>NOUS JOINDRE</span></p>
                            <p><i><span class="glyphicon glyphicon-earphone"></span> (514) 649-1630</i></p>
                            <p><i><span class="glyphicon glyphicon-envelope"></span> admin@monimmobilier.ca</i></p>

                    <p><span>HEURES D'OUVERTURE</span></p>
                            <li><span>Lundi au vendredi<span>  : 8h à 18h</li>
                            <li><span>Samedi et dimanche<span> : 9h à 17h</li>
            </div>
	</div>
	
	<div class="container bordure" id="contactMI">
		<div class="row col-sm-6">
			  <div class="col-md-12">
				<div class="well well-sm">
				  <form class="form-horizontal" action="index.php?page=emailTo" method="post">
					  <fieldset>
						<legend class="text-center">Nous contacter</legend>
				
						<!-- Name input-->
						<div class="form-group">
						  <label class="col-md-3 control-label" for="name">Nom</label>
						  <div class="col-md-9 input">
							<input id="name" name="name" type="text" placeholder="Votre nom" class="form-control" required>
							<span>Vous devez entrer un nom</span>
						  </div>
						</div>
				
						<!-- Email input-->
						<div class="form-group">
						  <label class="col-md-3 control-label" for="email" >Courriel</label>
						  <div class="col-md-9 input">
							<input id="email" name="email" type="email" placeholder="maison@gmail.com" class="form-control" required>
							<span>Veuillez saisir un courriel valid Exemple : maison@gmail.com</span>
						  </div>
						</div>
				
						<!-- Message body -->
						<div class="form-group">
						  <label class="col-md-3 control-label" for="message">Votre message</label>
						  <div class="col-md-9 input">
							<textarea class="form-control" id="message" name="commentaires" placeholder="Saisissez votre message ici" rows="5" required></textarea>
							<span>Veuillez ecrire un commentaire</span>
						  </div>
						</div>
				
						<!-- Form actions -->
						<div class="form-group">
						  <div class="col-md-12 text-right">
							<button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
						  </div>
						</div>
					  </fieldset>
				  </form>
				</div>
			  </div>
		</div>
	
		<div class="row col-sm-6">

                        <section class="col-lg-12">
                            <article class="big-cta">
                                <article class="cta-text">
                                    <div class="googlemap"> <!-- Debut de la division google map-->
                                       <div id="googleMap">
                                       <p>google</p>
                                       </div>
                                    </div><!-- Fin de la division google map-->
                                </article>
                            </article>
                        </section>		
			
		</div>	
	</div>
<?php     
        
    }
}
