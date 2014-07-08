<?php

/**
 * Description of Forfait
 * 
 */
class ForfaitEntrePrise {
    //put your code here
    
    public function afficheContenuForfait(){
        
   ?>
    
<!--#######################################-->

	<section class="callaction">
        <section class="container">
            <section class="row">
                <section class="col-xs-12 col-lg-12">
                    <article class="big-cta">
                        <article class="cta-text">
                            <h1>Découvrez tous nos FORFAITS qui vous permettront d'avoir un espace particulier ou d'entreprise afin de bien gérer vos bien immobiliers</h1>
							<p>Les forfaits ci-dessous s'appliquent pour l'achat d'un espace pour présenter vos biens immobiliers les plus precieux.</p>
                        </article>
                    </article>
                </section>
            </section>
        </section>
	</section><!--Debut des liens pour diriger les utilisateurs vers la page des forfaits-->
    
    <section class="container">
            <section class="row">
                <section class="col-lg-12">
                    <article class="big-cta">
                        <article class="cta-text">
							<article class="box"><!--Debut avoir des informations sur paypal-->
									<!--Application des tooltip sur le bouton creer un compte--> 
									<p title="Renseignez-vous sur c'est quoi Paypal!!" class="required-icon"><strong>Faites votre paiement avec le service securitaire <a href="https://www.paypal.com">PAYPAL</a></strong></p>
							</article><!--Fin avoir des informations sur paypal-->
							<article class="box telephone"><!--Debut contacter l'entreprise--> 
									<p>Des questions sur nos forfaits ? Appelez-nous au</p>
									<p><span>514 monimmo</span></p>
							</article><!--Fin contacter l'entreprise--> 
                        </article>
                    </article>
                </section>
            </section>
    </section>
    
	
        <section class="container">
            <section class="row"><!--Debut du row pour le contenu-->
                <section class="col-lg-12">
                    <section class="row"><!--Debut d'un autre row pour le contenu-->
                        <article class=" col-xs-12 col-sm-6">
                            <article class="box">
                                <article class="box-blanc alignleft">
                                    <div class="icon"><!--Debut icon pour entreprises-->
                                        <h4><i class="fa fa-briefcase fa-3x"></i><strong> Forfaits d'Entreprises</strong></h4>
                                        
                                        <article class="emphase aligncenter"><!--Section pour le 1ere forfait entreprise-->
                                            <article class="base"><!--Section pour le prix et conditions entreprise-->
                                                <h4><strong>LA BASE  100$</strong></h4>
                                                <h5>Annonce de 8 photos</h5>
												<p>Publication de l'annonce visible pour 30 jours</p>
                                                <p>Soutien technique en ligne disponible</p>
                                                
                                            </article>
                                            
                                        </article>
                                        
                                         <article class="emphase aligncenter"><!--Section pour le 2eme forfait entreprise-->
                                            <article class="regulier"><!--Section pour le prix et conditions entreprise-->
                                                <h4><strong>LE REGULIER 200$</strong></h4>
                                                <h5>Annonce de 10 photos</h5>
                                                <p>Publication de l'annonce visible pour 60 jours</p>
												<p>Soutien technique en ligne disponible</p>
                                                <p>Suivi mensuelle avec notre coach en immobilier</p>
                                            </article>
                                            
                                        </article>
                                        
                                        <article class="emphase aligncenter"><!--Section pour le 3eme forfait entreprise-->
                                            <article class="premium"><!--Section pour le prix et conditions entreprise-->
                                                <h4><strong>LE PREMIUM 400$</strong></h4>
                                                <h5>Annonce de 12 photos</h5>
                                                <p>Publication de l'annonce visible jusqu'à la transaction</p>
												<p>Soutien technique en ligne disponible</p>
                                                <p>Suivi mensuelle avec notre coach en immobilier</p>
                                                <p>Vos annonces apparaitront sur la page la page d'accueil</p>
                                            </article>
                                          
                                        </article>
										
										<article class="box"><!--Debut des choix pour les forfaits pour les emtreprises-->
											<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
												<input type="hidden" name="cmd" value="_s-xclick">
												<table>
												<tr  class="forfait"><td><input type="hidden" name="on0" value="Les Forfaits">Les Forfaits d'Entreprises</td></tr><tr><td><select name="os0">
													<option value="La Base">La Base $100.00 CAD</option>
													<option value="Le Regulier">Le Regulier $200.00 CAD</option>
													<option value="Le Premium">Le Premium $400.00 CAD</option>
												</td></tr>
												</table>
												<input type="hidden" name="currency_code" value="CAD">
												<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
												">
												<input type="image" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
												<img alt="" border="0" src="https://www.paypalobjects.com/fr_CA/i/scr/pixel.gif" width="1" height="1">
											</form>
										</article><!--Fin des choix pour les forfaits pour les entreprises-->
										 
										 
										 
                                </article>
                                
                            </article>
                        </article>
                        </article>
                       

                    </section><!--Debut d'un autre row pour le contenu-->
                </section>
            </section><!--Fin du row pour le contenu-->	
        </section>


<!--##################################-->                    
   
    
    <?php     
        
    }
}
