<?php

/**
 * Description of ajouterAnnonce
 *
 * @author bouchra
 */
class ajouterAnnonce {
   
    public function formulaireAjoutAnnonce(){
        ?>
                        
	<div class="rows block3">
	<!-- sidebar -->
		<div class="col-xs-12 col-lg-4">			
			<div class="panel panel-default">
				  <div class="panel-heading">
					  <h3 class="panel-title">
					  	Recherche rapide
					  </h3>
				  </div>
				  <div class="panel-body">
				    Pour un recherche rapide
				  </div>
				</div>

				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">Moteur de recherche</h3>
				  </div>
				  <div class="panel-body">
                                    
                                      <p>les critères de selection à insèrer.</p>
				     <p>
				     	Permet à l'agence de chercher une ou des annonce(s) bien précise 
				     </p>
				  </div>
			</div>
		</div>
		<!-- fin sidebar -->
		<!-- contenu du centre (article)-->
		<div class="col-xs-12 col-lg-8">
         <!--  <h2 class="sub-header">Section title</h2> -->

         	<div class="row">
			  <div class="col-xs-12 col-lg-12  well well-sm wellBlanc titreAnnonce">
			  		<div class="media">	
				    	<p class="media-heading"><strong>Modifier annonce Réf : Ceinture21.312.14</strong></p>	
					</div>
			  </div>
			</div>
			<div class="row well wellBlanc ">
				<div class="col-xs-12 col-lg-12 ">
					<form class="form-horizontal" role="form">
						
                    	

                    	<div class="col-xs-12 col-lg-12 well wellForm">
		        			<div class="form-group form-inline text-center">	
		        			<form role="form">						  
								<fieldset class="radio">
									<h4>Type de transaction</h4>
										<label for="vente" class="radio">
											<input type="radio" value="vente" id="vente"> Vente
										</label>
										<label for="location" class="radio">
										<input type="radio" name="origine" value="location" id="location"> Location
										</label>
									<h4>Type de bien</h4>	


								   <div class="form-group">
								      <label for="name">Select list</label>
								      <select class="form-control">
								         <option>Condo</option>
								         <option>Maison</option>
								         <option>Plateau bureau</option>
								         <option>Terrain</option>
								         <option>Ferme</option>
								      </select>
								    </div>
								</fieldset>
								</form>

		                    </div>



		                </div>	                    
	                    <div class="col-xs-12 col-lg-12">
	                    	<a href="ajouterAnnonce1.html" class="btn btn-default btn-default active modifInput">Suivant</a>
	                    </div>

					</form>
				</div>		
			</div>
			

          
		</div>
	</div><!-- / block3-->

</div>
	<hr/>
        <?php
    }
}

?>
