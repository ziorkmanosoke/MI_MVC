<?php

/**
 * Description des compte utilisateur standard
 *
 * @author alexandre lacerte
 */
class infosCompte {
   
        
    public function afficheInformationCompte() {
    ?>
        
        <div class="container">
        <div class="row">
        <h1 class="brand">Information de votre compte</h1>
        
        <article class="form-group ">
            <img src="../img/placeholder.jpg" class="img-responsive" alt="Responsive image"><br/>
            <a class="btn btn-default" href="#" role="button">Changer image&raquo;</a>
        </article>

        <article class="form-group ">
            <label for="inputNom">Nom: </label>
            <label for="inputNom">votre nom ici </label>
        </article>

        <article class="form-group ">
            <label for="inputPrenom">Prenom: </label>
            <label for="inputPrenom">votre Prenom ici </label>
        </article>

        <article class="form-group ">
            <label for="inputSexe">Sexe: </label>
            <label for="inputSexe">votre Sexe ici </label>
        </article>

        <article class="form-group ">
            <label for="inputDoB">Date de naissance: </label>
            <label for="inputDoB">votre date de naissance ici </label>
        </article>

        <article class="form-group ">
            <label for="inputCourriel">Courriel: </label>
            <label for="inputCourriel">votre Courriel ici </label>
        </article>

        <article class="form-group ">
            <label for="inputNomVille">Nom de ville: </label>
            <label for="inputNomVille">Votre nom de ville ici </label>
        </article>

        <article class="form-group ">
            <label for="inputNomProvince">Nom de province: </label>
            <label for="inputNomProvince">Votre nom de province ici </label>
        </article>

        <article class="form-group">

                <button type="button" onClick="location.href='../fr/modificationCompte.html'" class="btn btn-success">Modification information</button>

        </article>
        
            </div>
    </div>
    <br/>



    <?php
    }
}
?>
