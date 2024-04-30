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
        <link rel="stylesheet" href="../css/Simulateur.css"/>
        <script src="../Javascript/remuneration.js"> </script>
        <link rel="icon" href="data:,">


    </head>
    <body>
        
        <?php 
       
            include"../includes/lienspages.inc.php";
       
       
       
       ?>
        
        
        <br><h1> Simulateur de calcul pour la force de vente</h1>
        
        <form id="simulateur_form">
             
            
            <fieldset id="simulateur">
                <legend> Vos résultats</legend>
                
                <p> 
                    <label > Nombres d'années d'ancienneté</label>
                    <input type="number" id="num_ancien" min="0" max="50" value="0">
                </p>
                <p> 
                    <label > Nombres de S-20 vendus</label>
                    <input type="number" id="num_s-20" min="0" max="50" value="0">
                </p>
                
                <p> 
                    <label > Nombres de X-Spirit vendus</label>
                    <input type="number" id="num_xspirit" min="0" max="50" value="0">
                </p>
                
                <p> 
                    <label > Nombres de Multitec vendus</label>
                    <input type="number" id="num_multi" min="0" max="50" value="0">
                </p>
                
                
                <p> 
                    <label> Distance parcourue</label>
                    <input type="number" id="num_km">
                </p>
                
                <h2 id="remuneration"></h2>
                
            </fieldset>        
            
            <input type="button" name="btn_calculer" id="btn_calculer" value="Calculer"/>
            
            
            
            
            
            
            
        </form>
        
        <?php 
        
       include_once '../includes/footer.html.inc.php';
        ?>
        
        
        
</body>
</html>
