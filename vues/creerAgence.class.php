<?php

/**
 * Description: affichage pour creation agence
 * @author Alexandre Lacerte
 */
class creerAgence {
 
    public function afficheCreerAgence(){
        
    ?>

    <article class="container well">
        <h1 class="brand">Inscription d'agence</h1>
        <form class="form-horizontal" method="post" action="index.php?page=validationFormulaireAgence">     
            <!-- article qui contiendra le nom de l'agence--> 
            <article class="form-group ">
                <label for="inputNom" class="col-sm-2 control-label">Nom de l'agence: </label>
                <section class="col-sm-4">
                    <input type="text" class="form-control" id="inputNom" name="nom" placeholder="Votre Nom" required>
                </section>
            </article>


            <!-- article qui contiendra le courriel-->    
            <article class="form-group">
                <label for="inputCourriel" class="col-sm-2 control-label">Courriel: </label>
                <section class="col-sm-4">
                    <input type="email" class="form-control" id="inputCourriel" name="courriel" placeholder="Votre courriel">
                </section>
            </article>

            <!-- article qui contiendra le site web-->    
            <article class="form-group">
                <label for="inputSiteWeb" class="col-sm-2 control-label">Site Web: </label>
                <section class="col-sm-4">
                    <input type="text" class="form-control" id="inputSiteWeb" name="siteweb" placeholder="Votre site web" required>
                </section>
            </article>

            <!-- article qui contiendra votre telephone-->    
            <article class="form-group">
                <label for="inputTel" class="col-sm-2 control-label">Telephone: </label>
                <section class="col-sm-4">
                    <input type="tel" class="form-control" id="inputTel" name="telephone" placeholder="Votre numero telephone">
                </section>
            </article>

            <!-- article qui contiendra votre numero de rue-->    
            <article class="form-group">
                <label for="inputNbRue" class="col-sm-2 control-label">Numero de rue: </label>
                <section class="col-sm-4">
                    <input type="number" class="form-control" id="inputNbRue" name="nbrue" placeholder="Votre numero de rue" min="0">
                </section>
            </article>

            <!-- article qui contiendra votre nom de rue-->    
            <article class="form-group">
                <label for="inputNomRue" class="col-sm-2 control-label">Nom de rue: </label>
                <section class="col-sm-4">
                    <input type="text" class="form-control" id="inputNomRue" name="nomrue" placeholder="Votre nom de rue">
                </section>
            </article>


            <!-- article qui contiendra votre nom de Ville-->    
            <article class="form-group">
                <label for="inputNomVille" class="col-sm-2 control-label">Nom de Ville: </label>
                <section class="col-sm-4">
                    <input type="text" class="form-control" id="inputNomVille" name="ville" placeholder="Votre nom de ville">
                </section>
            </article>

            <!-- article qui contiendra votre nom de Province-->    
            <article class="form-group">
                <label for="inputNomProvince" class="col-sm-2 control-label">Nom de Province: </label>
                <section class="col-sm-4">
                    <select class="form-control" name="province">
                        <option>Ontario</option>
                        <option>Québec</option>
                        <option>Nouvelle-Écosse</option>
                        <option>Manitoba</option>
                        <option>Colombie-Britannique</option>
                        <option>Île-du-Prince-Édouard</option>
                        <option>Saskatchewan</option>
                        <option>Alberta</option>
                        <option>Terre-Neuve-et-Labrador</option>
                        <option>Nouveau-Brunswick</option>
                    </select>
                </section>
            </article>

            <!-- article qui contiendra votre code postal-->    
            <article class="form-group">
                <label for="inputCodePostal" class="col-sm-2 control-label">Code Postal </label>
                <section class="col-sm-4">
                    <input type="text" class="form-control" id="inputCodePostal" name="codePostal" placeholder="a1a 1a1">
                </section>
            </article>

            <article class="form-group">
                <section class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-success" value="Continuer"/>
                </section>
            </article>  
        </form>
    </article>


        <?php
    }
}

?>




