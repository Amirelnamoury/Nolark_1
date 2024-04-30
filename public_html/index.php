<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>Nolark</title>
        <meta charset="UTF-8">
  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Emmanuel Macron"/>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWTc5w6gDSKUkPckUz2ckmosfWN3Bgdlc&callback=initMap"> </script>
        <link rel="stylesheet" href="CSS/style.css"/>
       
    </head>
    <body>
       <?php 
       
       include"includes/lienspages.inc.php";
       
       
       
       ?>
        <section id="principal">
        <article>
            <img src="images/post-it.png" alt="Post-It: Penser à rentrer en vie"/>
            <p>
                Au-delà de l'obligation légale, le port d'un casque est le garant de  votre sécurité. 
                Le choix de votre casque doit se faire en fonction de vos besoins (route, cross, piste ...)
            </p>
            <p>
                spécialiste reconnu dans l'univers de la sécurité du deux-roues, Nolark vous propose des milliers de modèles de casques disponibles
                au travers de plus de 50 marques. Vous trouvere ici tois les types de casques moto: jet, intégral, modulable, transformablr, piste, cross, ou encre un large
                choix de casques moto enfant (taille et poids spécialement adaptés).
            </p>
            <p>
                Nolark c'est également, la disponibilité de toutes  les couleurs et matières et ce, pour toutes les bourses.
            </p>
            <p>
                Une question ? Un conseil ? Nos conseillers sont là pour  vous aiguiler afin de trouver le modèle qui correspond à vos besoins
            </p><!-- comment -->
            
            <p> 
                :Nolark n'est pas seulement un magasin de casques, c'est avant tout une équipe de passionnées qui selectionnent pour vous les meilleurs
                casques moto afin de répondre au mieux à vos attentes. 
            </p>
        </article>
            
            
        <aside>
            <img src ="images/conseilcasque01.jpg" alt="Conseil du mois: Casque Cross"/>
            <p> Pour le style: Furious replica</p><!-- comment -->
            <img src="images/conseilcasque02.jpg" alt="Conseil du mois: Intégral Piste"/>
            <p>Pour le confort: Stars racing</p><!-- comment -->
        </aside>
        </section>
        <section id="sectionthema">
            <h1> Catégories les plus populaires </h1>
            <article id="gauche"> <a href="Pages/route.php">Route</a></article>
            <article id="milieu"> <a href="Pages/cross.php">Cross</a></article><!-- comment -->
            <article id="droite"> <a href="Pages/piste.php">Piste</a></article><!-- comment -->
            
        </section>
        
        <section id="video">
            <article>
                
                
               
                
                <p> <br>
                    On est tous d'accord pour dire que la sécurité est primordiale lorsqu'on roules à deux roues.
                    Personne n'envisagerait de rouler sans casques ! Et pourtant certains omettent l'essentiel : Attacher son casque !
                </p>
                
                <p> C'est pourquoi Nolark vous présente cette vidéo conçu par "<a href="http://scootxperience.com" target="_blank"> ScootXperience</a>"
                    qui vous démontre que le fait d'attacher son casque peut tout changer !
                </p>
                
                <p>
                    Rappelons l'essentiel à nos enfants et donnons leur de bonnes habitudes.
                </p>
                
                
                
            </article>
            
            <iframe frameborder="0" width="480" height = "270" src="https://www.dailymotion.com/embed/video/xdl390"></iframe>
            
        </section>
        
        
        
        
             
    
        <?php 
        
            include_once 'includes/footer.html.inc.php';
        ?>
        
        
    </body>
</html>
