/* 
 * @author Mehdi
 * 2014/07/11
 */
window.addEventListener('load', init, false);

// Appeler sur le chargement du DOM
function init(){
    affichageProprietesSimilaires();
}


function affichageProprietesSimilaires(){
    var annonce = document.getElementById('annonce').value;
    var prixAnnonce = document.getElementById('prixAnnonce').value;
    var villeAnnonce = document.getElementById('villeAnnonce').value;
    var typeBienAnnonce = document.getElementById('typeBienAnnonce').value;
    var statut = document.getElementById('statut').value;
    //console.log(annonce);
    var index = 0;
    var request = new XMLHttpRequest(); // Création de l'objet
    url = 'ajaxControler.php?controler=details&annonce='+annonce+'&prixAnnonce='+prixAnnonce+'&villeAnnonce='+villeAnnonce+'&typeBienAnnonce='+typeBienAnnonce+'&statut='+statut+'&index='+index;
    //console.log(url);
    request.open("GET", url, true);// Création de la requête
    request.send(); // Envoie de la requête

    request.onreadystatechange = function (){
        //console.log ("readyState : " + request.readyState);
        //console.log ("status : " + request.status);
        if(request.readyState ==4 && request.status == 200){
            //console.log("Reponse : " + request.responseText);
            document.getElementById('proprietesSimilaires').innerHTML=request.responseText;
            if (document.getElementById('precedente')){document.getElementById('precedente').addEventListener('click', affichageProprietePrecedente, false);}
            if (document.getElementById('suivante')){document.getElementById('suivante').addEventListener('click', affichageProprieteSuivante, false);}
        }
    }
}

function affichageProprieteSuivante(){
    var annonce = document.getElementById('annonce').value;
    var prixAnnonce = document.getElementById('prixAnnonce').value;
    var villeAnnonce = document.getElementById('villeAnnonce').value;
    var typeBienAnnonce = document.getElementById('typeBienAnnonce').value;
    var statut = document.getElementById('statut').value;
    var index = document.getElementById('index').value;
    console.log(index);
    index++;
    
    var request = new XMLHttpRequest(); // Création de l'objet
    url = 'ajaxControler.php?controler=details&annonce='+annonce+'&prixAnnonce='+prixAnnonce+'&villeAnnonce='+villeAnnonce+'&typeBienAnnonce='+typeBienAnnonce+'&statut='+statut+'&index='+index;
    //console.log(url);
    request.open("GET", url, true);// Création de la requête
    request.send(); // Envoie de la requête

    request.onreadystatechange = function (){
        //console.log ("readyState : " + request.readyState);
        //console.log ("status : " + request.status);
        if(request.readyState ==4 && request.status == 200){
            //console.log("Reponse : " + request.responseText);
            document.getElementById('proprietesSimilaires').innerHTML=request.responseText;
            if (document.getElementById('precedente')){document.getElementById('precedente').addEventListener('click', affichageProprietePrecedente, false);}
            if (document.getElementById('suivante')){document.getElementById('suivante').addEventListener('click', affichageProprieteSuivante, false);}
            
        }
    }
}


function affichageProprietePrecedente(){
    var annonce = document.getElementById('annonce').value;
    var prixAnnonce = document.getElementById('prixAnnonce').value;
    var villeAnnonce = document.getElementById('villeAnnonce').value;
    var typeBienAnnonce = document.getElementById('typeBienAnnonce').value;
    var statut = document.getElementById('statut').value;
    var index = document.getElementById('index').value;
    console.log(index);
    index--;
    
    var request = new XMLHttpRequest(); // Création de l'objet
    url = 'ajaxControler.php?controler=details&annonce='+annonce+'&prixAnnonce='+prixAnnonce+'&villeAnnonce='+villeAnnonce+'&typeBienAnnonce='+typeBienAnnonce+'&statut='+statut+'&index='+index;
    //console.log(url);
    request.open("GET", url, true);// Création de la requête
    request.send(); // Envoie de la requête

    request.onreadystatechange = function (){
        //console.log ("readyState : " + request.readyState);
        //console.log ("status : " + request.status);
        if(request.readyState ==4 && request.status == 200){
            //console.log("Reponse : " + request.responseText);
            document.getElementById('proprietesSimilaires').innerHTML=request.responseText;
            if (document.getElementById('precedente')){document.getElementById('precedente').addEventListener('click', affichageProprietePrecedente, false);}
            if (document.getElementById('suivante')){document.getElementById('suivante').addEventListener('click', affichageProprieteSuivante, false);}
        }
    }
}


