window.addEventListener("load", function(){
    // Attend que la fenêtre soit entièrement chargée
    var i;
    // Déclare une variable i
    var tabInputs = window.document.querySelectorAll("input");
    // Sélectionne tous les éléments input dans le document
    for (var i = 0; i < tabInputs.length; i++){
        // Boucle à travers tous les éléments input
        tabInputs[i].addEventListener("keyup", function(){
            // Ajoute un écouteur d'événements pour l'événement keyup (lorsqu'une touche est relâchée)
            CalculerPrime();
            // Appelle la fonction CalculerPrime() à chaque fois qu'une touche est relâchée
        }, false);
        
        tabInputs[i].addEventListener("change", function(){
            // Ajoute un écouteur d'événements pour l'événement change (lorsqu'une valeur de champ de saisie est modifiée)
            CalculerPrime();
            // Appelle la fonction CalculerPrime() à chaque fois qu'une valeur de champ de saisie est modifiée
        }, false);
    }
}, false);

function CalculerPrime(){
    // Fonction pour calculer la prime
    var nbAncien = parseInt(window.document.querySelector("#num_ancien").value);
    // Récupère la valeur du champ de saisie avec l'ID "num_ancien" et la convertit en entier
    var km = parseInt(window.document.querySelector("#num_km").value); 
    // Récupère la valeur du champ de saisie avec l'ID "num_km" et la convertit en entier
    var acci = parseInt(window.document.querySelector("#num_accident").value);
    // Récupère la valeur du champ de saisie avec l'ID "num_accident" et la convertit en entier
    var prime = accidents(acci, nbAncien, km);
    // Appelle la fonction accidents() pour calculer la prime en fonction des valeurs saisies

  
    window.document.querySelector("#remuneration").innerHTML = "La prime totale est de " + prime + "€";
    // Met à jour le contenu de l'élément avec l'ID "remuneration" avec le résultat du calcul de la prime totale
}

// Fonction accidents modifiée pour prendre en compte les valeurs du formulaire
function accidents(nbAccidents, anne_ancien, distance_km) {
    const primeAncienResult = primeAncien(anne_ancien);
    // Appelle la fonction primeAncien() pour calculer la prime d'ancienneté
    const distanceResult = distance(distance_km);
    // Appelle la fonction distance() pour calculer la prime en fonction de la distance parcourue

    let prime_base = primeAncienResult + distanceResult;
    // Calcule la prime de base en ajoutant la prime d'ancienneté et la prime en fonction de la distance

    if (nbAccidents === 1) {
        prime_base /= 2;
    } else if (nbAccidents === 2) {
        prime_base /= 3;
    } else if (nbAccidents === 3) {
        prime_base /= 4;
    }
    // Divise la prime de base en fonction du nombre d'accidents

    const prime_totale = prime_base;
    // Définit la prime totale comme la prime de base

    return prime_totale;
    // Retourne la prime totale
}

// Fonction pour calculer la prime d'ancienneté
function primeAncien(anne_ancien){
    const ancien = 4; 
    const prime_fixe = 300;
    var prime = 0;

    if(anne_ancien === ancien){
        prime = prime_fixe;
    }   else if(anne_ancien >= ancien){
        prime = prime_fixe + ((anne_ancien - ancien) * 30);
    }   else{
        prime = 0;
    }

    return prime;
}

// Fonction pour calculer la prime en fonction de la distance parcourue
function distance(km){
    const primeparkm = 0.1;
    const plafond = 900;
    const prime_kilo = km * primeparkm;
    
    if (km <= plafond){
        return prime_kilo;
    }else if (km >= plafond){
        return plafond;
    }
}
