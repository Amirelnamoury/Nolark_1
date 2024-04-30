/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */



window.addEventListener("load", function(){
    var i; 
    var tabInputs = window.document.querySelectorAll("input");
        for (var i = 0; i < tabInputs.length; i++){
            tabInputs[i].addEventListener("keyup", function(){
                calculerRemuneration();
            }, false);
            
            tabInputs[i].addEventListener("change", function(){
                calculerRemuneration();
            }, false);
        }
});

function calculerRemuneration(){
        const fixe = 1100.0;

        // Déclaration des variables
        
        var nbAncien = parseInt(window.document.querySelector("#num_ancien").value);
        var nbS20 = parseInt(window.document.querySelector("#num_s-20").value);
        var nbXS = parseInt(window.document.querySelector("#num_xspirit").value);
        var nbMulti = parseInt(window.document.querySelector("#num_multi").value);
        var km = parseInt(window.document.querySelector("#num_km").value); 
        var remuneration = fixe + recupPrimeAnciennete(nbAncien, fixe) + recupComS20(nbS20) + recupComXS(nbXS) + recupComMulti(nbMulti) + recupIndem(km);
        
        // Affichage du résultat
        window.document.querySelector("#remuneration").innerHTML = "La rémunération sera de :" + remuneration + "€";
    
        
        // Ajout d'événements keyup pour chaque champ d'entrée
       // window.document.querySelector("#num_ancien").addEventListener("keyup", function(){}, false);
        //window.document.querySelector("#num_s-20").addEventListener("keyup", function(){}, false);
       // window.document.querySelector("#num_xspirit").addEventListener("keyup", function(){}, false);
       // window.document.querySelector("#num_multi").addEventListener("keyup", function(){}, false);
        
        // Ajout d'événements keyup pour tous les champs d'entrée
           
// Les fonctions recupPrimeAnciennete, recupComS20, recupComXS, et recupComMulti restent inchangées
}



function recupPrimeAnciennete(nb, fixe){
        
        const nbAncienMin = 5, txAncienMin = 0.03, nbAncienSup = 10, txAncienSup = 0.06;
        
        if (nb >= nbAncienSup){return (fixe* txAncienSup);}
        else if (nb >= nbAncienMin){return (fixe* txAncienMin);}
            else{return 0.0;}
    
}

function recupComS20(nb){
    const prixS20 = 140.0, txComS20 = 0.02;
    return (nb * prixS20 * txComS20);
}

function recupComXS(nb) {
    const prixXS = 350.0, nbXSMinCom = 50.0, txComXS = 0.06;

    if (nb >= nbXSMinCom) {
        return (nb - nbXSMinCom) * prixXS * txComXS;
    } else {
        return 0.0;
    }
}



function recupComMulti(nb){
    const prixMU = 180.0, nbMultiTranche1 = 20.0, nbMultiTranche2 = 50.0; 
    const txMultiTranche1 = 0.04,  txMultiTranche2 = 0.06,  txMultiTranche3 = 0.1;
    
    if ( nb <= nbMultiTranche1){
        return (nb * prixMU * txMultiTranche1);
    }
    else if (nb <= nbMultiTranche2){
        return ((nbMultiTranche1 * prixMU * txMultiTranche1) + ((nb - nbMultiTranche1) * prixMU * txMultiTranche2));
    }
    
    else{
        return ((nbMultiTranche1 * prixMU * txMultiTranche1) + ((nbMultiTranche2 - nbMultiTranche1)* prixMU * txMultiTranche2) + ((nb - nbMultiTranche2) *  prixMU * txMultiTranche3));
    }
}

function recupIndem(nb){
    const prix = 0.15;
    const plafond = 350;
    var indemkm = prix * nb;
    if (nb <= plafond){
        return indemkm;
    }else{
        return plafond;
    }
}

function distance(km){
    const plafond = 900;
    const primekm = 0.1;
    var primekm_final = primekm * km;
    
    if(km <= plafond){
        return primekm_final;
    } else {  
        return plafond;
    }
}


