/**
 * Created by coda on 17/07/17.
 */
// la rappeler le mot secret(mot aleatoire généré par la fonction php) dans le js comme ceci:

var motSecret = document.getElementById("$lines[$index]").value;

var tableauMot=new Array();	// Le tableau qui contient les lettres du mot a trouver
var tailleMot;				// Le nombre de lettres du mot � trouver
var coupsManques=0;			// Le nombre de lettres fausses essay�es
var lettresTrouvees=0;		// Le nombre de lettres trouv�es
var fini=false;				// true si le jeu est termin�
var penduvues= 75;      // valeure de depart de la propriete margin left
tailleMot=motSecret.length;

// Permet de changer la couleur des touches du clavier
function changeCouleur(element,couleur){
    element.style.backgroundColor=couleur;
}

// Gere tous les traitements a faire lorsqu'on appuie sur une touche
function proposer(element){

    // Si la couleur de fond est lightgreen, c'est qu'on a déjà essayé - on quitte la fonction
    if(element.style.backgroundColor=="lightGreen" ||fini) return;

    // On récupere la lettre du clavier et on met la touche en lightgreen (pour signaler qu'elle est cliquée)
    var lettre=element.innerHTML;
    changeCouleur(element,"lightGreen");

    // On met la variable trouve à false;
    var trouve=false;

    // On parcours chaque lettre du mot, on cherche si on trouve la lettre sélectionnée au clavier
    for(var i=0; i<tailleMot; i++) {

        // Si c'est le cas :
        if(tableauMot[i].innerHTML==lettre) {
            tableauMot[i].style.visibility='visible';	// On affiche la lettre
            trouve=true;
            lettresTrouvees++;
        }

    }
// Si la lettre n'est pas pr�sente, trouv� vaut toujours false :
    if(!trouve){
        coupsManques++; //compteur de coups manqués

        penduvues-=75; // on assigne une valeure à
        var pendu= document.getElementById("penduimg");
        pendu.style.marginLeft=""+penduvues+"px";
//
        // Si on a raté 7 fois :
        if(coupsManques==7){
            alert("Vous avez perdu !");
            for(var i=0; i<tailleMot; i++) tableauMot[i].style.visibility='visible';
            fini=true;
            // on affiche le mot, on fini le jeu
        }
    }
    if(lettresTrouvees==tailleMot){
        alert("Bravo ! Vous avez découvert le mot secret !");
        fini=true;
    }
}

 // var nbrdecases=document.getElementById("nbre de cases affichées/mot");
 // for(var i=0; i<tailleMot; i++) document.write("<td> <p id=\""+i+"\">"+motSecret.charAt(i)+"</p></td>");