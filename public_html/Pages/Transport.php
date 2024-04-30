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
        <link rel="stylesheet" href="../css/Transport.css"/>
        <script src="../Javascript/Transport.js"> </script>
        
        <link rel="icon" href="data:,">
    </head>
    
   <body>
        
        <?php 
       
            include"../includes/lienspages.inc.php";
       
       
       
       ?>
        

       <br><br><br><br><br><h1> Simulateur de calcul pour la force de vente</h1>
        
        <form id="simulateur_form">
             
            
            <fieldset id="simulateur">
                <legend> Vos résultats</legend>
                
                <p> 
                    <label > Nombres d'années d'ancienneté</label>
                    <input type="number" id="num_ancien" min="0" max="50" value="0">
                </p>
                <p> 
                    <label > Nombres d'accident</label>
                    <input type="number" id="num_accident" min="0" max="3" value="0">
                </p>
                
                <p> 
                    <label> Distance parcourue</label>
                    <input type="number" id="num_km">
                </p>
                
                <h2 id="remuneration"></h2>
                <h2 id="ancien_prime"></h2>
                <h2 id="distance"></h2>
                <h2 id="accidents"></h2>
                
            </fieldset>        
            
            
            
        </form>
        <?php 
        
       include_once '../includes/footer.html.inc.php';
        ?>
</body>
</html>

