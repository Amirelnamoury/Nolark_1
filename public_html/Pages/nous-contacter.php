<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css"/>
        <link rel="stylesheet" href="../css/nous-contacter.css"/>
        <script src="../Javascript/js.js"> </script>

    </head>
    <body>
        
        <?php 
       
            include"../includes/lienspages.inc.php";
       
       
       
       ?>
        
        <div class="formulaire">
        
        <form id="form_contact" name="form_contact" action="http://btssio.bonaparte.free.fr/testforms.php">
            
            <div id="div-1">
            <fieldset id="coordo"><!-- comment -->
            <legend> Pour mieux vous connaitre </legend>
                
                <p>
                    <label for="i_nom"> Votre nom :</label>
                    <input type="text" name="i_nom" id="i_nom" size="35" requierd/>
                </p>
                
                <p>
                    <label for="i_prenom"> Votre prenom :</label>
                    <input type="text" name="i_prenom" id="i_prenom" size="35" requierd/>
                    
                </p>
                
                <p>
                    <label for="i_email"> Votre email :</label>
                    <input type="email" name="i_email" id="i_email" size="35" requierd src="../images/coche.png"/>
                    <img id ="valid" src="../images/coche.png" title="case à cocher icônes"/>
                </p>
                
                <p>
                    <label for="i_url"> Votre url :</label>
                    <input type="url" name="i_url" id="i_url" size="35" requierd/>
                </p>
                
                <p>
                    <label for="i_statut"> Vous êtes : </label>
                    <select name="lst_typeclt" id="lst_typeclt">
                        <option value="1"> Etudiant</option>
                        <option value="2"> Salarié du privée </option>
                        <option value="3"> Salariée du public</option>
                        <option value="4"> Chef d'entreprise </option>
                        <option value="5"> Journaliste </option>
                        <option value="6"> Professionel du casque </option>
                        <option value="99"> Autre statut </option>

                    </select>
                </p>
                
                <p>
                    <label for="i_dtn"> Date de naissance </label>
                    <input type="number" name="num_jour" id="num_jour" min="1" max="31"/>
                    <input type="number" name="num_mois" id="num_mois" min="1" max="12"/>
                    <input type="number" name="num_année" id="num_année" min="1" max="20000"/>
                </p>
                
                
                <fieldset id="mark"> 
                    <legend> Vos marques préféres </legend>
                    
                    <table>
                        <tr>
                            <td>
                        <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                        <label for="i_agv"> Agv </label>


                        </td>

                        <td>
                        <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                        <label for="i_agv"> Bell </label>
                        </td>

                        <td>
                        <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                        <label for="i_agv"> Caberg </label>
                        </td>
                        </tr>
                        

                        <tr>
                            <td>
                            <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                            <label for="i_agv"> Darts </label>

                            </td>

                        <td>
                        <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                        <label for="i_agv"> Falco </label>
                        </td>

                        <td>
                        <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                        <label for="i_agv"> Givi </label>
                        </td>
                        
                        </tr>

                        <tr>
                            
                        <td>
                            
                        <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                        <label for="i_agv"> Helstons </label>
                        
                        </td>
                        

                        <td>
                        <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                        <label for="i_agv"> Ica </label>
                        </td>

                        <td>
                        <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                        <label for="i_agv"> Kenny </label>
                        </td>
                        
                        </tr>

                        <tr>
                            <td>
                        <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                        <label for="i_agv"> Airoh </label>
                        </td>

                        <td>
                        <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                        <label for="i_agv"> Bering </label>
                        </td>

                        <td>
                        <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                        <label for="i_agv"> Cameron </label>
                        </td>
                        
                        </tr>

                        <tr>
                            <td>
                            <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                            <label for="i_agv"> Dg </label>
                            </td>

                            <td>
                            <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                            <label for="i_agv"> Fox </label>
                            </td>

                            <td>
                            <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                            <label for="i_agv"> Gpa </label>
                            </td>

                            
                        </tr>
                        
                        <tr>
                        <td>
                        <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                        <label for="i_agv"> Hjc </label>
                        </td>

                        <td>
                        <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                        <label for="i_agv"> Icon </label>
                        </td>

                        <td>
                        <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                        <label for="i_agv"> Knox </label>
                        </td>
                        </tr>
                        
                        <tr>
                        <td>
                        <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                        <label for="i_agv"> Arai </label>
                        </td>

                        <td>
                        <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                        <label for="i_agv"> Bultaco </label>
                        </td>

                        <td>
                        <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                        <label for="i_agv"> Chaft </label>
                        </td>
                        </tr>
                        
                        <tr>
                        <td>
                        <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                        <label for="i_agv"> Diesel </label>
                        </td>

                        <td>
                        <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                        <label for="i_agv"> Grex </label>
                        </td>

                        <td>
                        <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                        <label for="i_agv"> Ixon </label>
                        </td>
                        </tr>

                       
                  
                        
                        
                        
                        
                    </table>
                        
                </fieldset><!-- comment -->
                
                <p> Votre couleur préféré : 
                    
                    <input type="color" value="#FF0000"/>
                </p>
                </div>
            </fieldset>
            
            <div id="div-2">
            <fieldset id="motif">
                <legend> Motif du contact</legend>
                
                <p>
                    <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                    <label for="i_agv"> Demande d'information </label>
                </p>
                
                <p>
                    <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                    <label for="i_agv"> Réclamation </label>
                </p>
                
                <p>
                    <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                    <label for="i_agv"> Satisfaction </label>
                </p>
                
                 <p>
                    <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                    <label for="i_agv"> Suivi de commande </label>
                </p>
                
                <p>
                    <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                    <label for="i_agv"> Publicité </label>
                </p>
                
                <p>
                    <input type="checkbox" name="chk_marques[]" id="chk_avg" value="avg"/>
                    <label for="i_agv"> Autre </label>
                </p>
                
                <p>
                    Si "Autre" , veuillez préciser :
                </p>
                
                <fieldset id="Autre"></fieldset>
            </fieldset> 
            
                <input type="button" name="btn_envoyer" id="btn_envoyer" value="Envoyez votre demande de contact"/>
                <input type ="button" name="annuler" id="anuller" value="Effacer les réponse"/>
            
            </div>
            
            
            
            
        </form>
        
        
        <?php 
        
       include_once '../includes/footer.html.inc.php';
        ?>
    </body>
</html>

