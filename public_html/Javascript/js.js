/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */


window.addEventListener("load", function(){
    
    window.document.querySelector("#btn_envoyer").addEventListener("click", function(){
        if (window.document.querySelector("#i_nom").value === "" 
            && window.document.querySelector("#i_prenom").value ===""){
            alert("le nom ou le prenom doivent êtres remplies");
        }
        
        else if  (window.document.querySelector("#i_email").value ===""){
            alert("L'email doit être rempli");
        }
       else{
           var question = "Souhaitez vous vraiement utiliser l'adresse email suivante : " + window.document.querySelector("#i_email").value;
           if(confirm(question)){
                window.document.querySelector("#form_contact").submit();
            }
        }
    }, false);
}   ,false);
    
    var uneVar = "bonjour";
    var uneAutreVar = new String("bonjour");
    var unTableau = new Array(10);