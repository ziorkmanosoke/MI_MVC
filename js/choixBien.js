/* 
 * 
 * 
 * 2014/07/07
 */
window.addEventListener('load', init, false);

// Appeler sur le chargement du DOM
function init(){      
    document.getElementById('sauvegarder').addEventListener('click', valideFormulaire, false);    
}



function valideFormulaire(){

    var valid=true;
    var nbrChambre = document.getElementById('nbrChambre').selectedIndex;
    var nbrSalleBain = document.getElementById('nbrSalleBain').selectedIndex;
    var nbrPiece = document.getElementById('nbrPiece').selectedIndex;
    var ville = document.getElementById('ville').value;
    var codePostal = document.getElementById('codePostal').value;
    var rue = document.getElementById('rue').value;
    var numero = document.getElementById('numero').value;
    var superficie = document.getElementById('superficie').value;
    var anneeConstruction = document.getElementById('anneeConstruction').value;
    var prix = document.getElementById('prix').value;
    var anneeEvaluation = document.getElementById('anneeEvaluation').value;
    var evaluationBatisse = document.getElementById('evaluationBatisse').value;
    var evaluationTerrain = document.getElementById('evaluationTerrain').value;
    var description = document.getElementById('description').value;
    var session = document.getElementById('session').value;  
    
    
        // Nombre de chambre        
        if (nbrChambre==0){
                document.getElementById('erreurNbrChambre').innerHTML = "Nombre de chambre est obligatoire ";
                valid = false;
        }
        else{
                console.log('ok nbrChambre');
                document.getElementById('erreurNbrChambre').innerHTML = "";
        }
        
        // Nombre de salle de bain
        if (nbrSalleBain==0){
                document.getElementById('erreurNbrSalleBain').innerHTML = " Choisir le nombre de salle de bain ";
                valid = false;
        }
        else{
                console.log('ok nbrSalleBain');
                document.getElementById('erreurNbrSalleBain').innerHTML = "";
        }
        
        // Nombre de pièce
        if(nbrPiece==0){
                document.getElementById('erreurNbrePiece').innerHTML = " Nombre de pièce est obligatoire ";
                valid = false;
        }
        else{
                console.log("nbre de piece");
                document.getElementById('erreurNbrePiece').innerHTML = "";
        }
        
        // ville
        if (ville=='tous'){
                document.getElementById('erreurVille').innerHTML = " La ville est obligatoire ";
                valid = false;
        }
        else{
            console.log("ville");
            document.getElementById('erreurVille').innerHTML = "";
        }
        
        if(codePostal==''){
            document.getElementById('erreurBP').innerHTML = " Le code postal est obligatoire ";
            valid= false;
        }
        else{
            console.log('bp');
            document.getElementById('erreurBP').innerHTML = "";
        }
        
        if(rue==''){
            document.getElementById('erreurRue').innerHTML = " La rue est obligatoire ";
            valid= false;
        }
        else{
            console.log('erreurRue');
            document.getElementById('erreurRue').innerHTML = "";
        }
        
        if(numero==''){
            document.getElementById('erreurNumero').innerHTML = " Le numéro de la rue est obligatoire ";
            valid= false;
        }
        else{
            console.log('erreurNumero');
            document.getElementById('erreurNumero').innerHTML = "";
        }
        
        if(superficie==''){
            document.getElementById('erreurSuperficie').innerHTML = " Superficie est obligatoire ";
            valid= false;
        }
        else{
            console.log('erreurSuperficie');
            document.getElementById('erreurSuperficie').innerHTML = "";
        }
        
        if(anneeConstruction==''){
            document.getElementById('erreurAnnee').innerHTML = " Année de la construction est obligatoire ";
            valid= false;
        }
        else{
            console.log('erreurAnnee');
            document.getElementById('erreurAnnee').innerHTML = "";
        }
        
        if(description==''){
            document.getElementById('erreurDesc').innerHTML = " Description est obligatoire ";
            valid= false;
        }
        else{
            console.log('erreurDesc');
            document.getElementById('erreurDesc').innerHTML = "";
        }
        
        if(prix==''){
            document.getElementById('erreurPrix').innerHTML = " Le prix est obligatoire ";
            valid= false;
        }
        else{
            console.log('erreurPrix');
            document.getElementById('erreurPrix').innerHTML = "";
        }
        
        if(anneeEvaluation==''){
            document.getElementById('anneeEvaluation').value = "N/A";
        }
        if(evaluationBatisse==''){
            document.getElementById('evaluationBatisse').value = "N/A";
        }
        if(evaluationTerrain==''){
            document.getElementById('evaluationTerrain').value = "N/A";
        }
        
        
        
        
        
        
        if (valid==true){ 
            document.getElementById('sauvegarder').removeEventListener('click', valideFormulaire, false);  
            document.formulaire.action="index.php?page=agenceAccueil&section=saveBien&ref="+session;
            document.formulaire.method="POST";
            document.formulaire.submit();
        }
}

