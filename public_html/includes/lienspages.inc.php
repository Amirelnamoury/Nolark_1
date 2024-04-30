<header>
 <nav> 
    <ul>
        
        <?php 
            $script = filter_input(INPUT_SERVER,"SCRIPT_NAME");
           var_dump($script);
            echo'<p>' , $script, '</p>';
            $pageActuelle = substr($script,strrpos($script,"/")+1);
            /*var_dump($pageActuelle);
            echo($pageActuelle);*/
            if ($pageActuelle === "index.php"){
                $dirIndex= "./";
                $dirPages="./pages/";
            } else {
                $dirIndex= "../";
                $dirPages="./";
            }
            $pages = array(
                "Accueil" => $dirIndex ."index.php", 
                "Route" => $dirPages."route.php", 
                "Cross"=>$dirPages."cross.php", 
                "Piste"=>$dirPages."piste.php", 
                "Enfants"=>$dirPages."enfants.php", 
                "La team"=>$dirPages."team.php",
                "Nous contacter"=>$dirPages."nous-contacter.php",
                "Transport" =>$dirPages."Transport.php");
            //$noms= array("Accueil","Route", "Cross", "Piste", "Enfants", "La team", "Nous contacter");
            //$nbLiens = count($pages);
            
            // Affichage des liens de la barre de navigation
            /*for ($i=0; $i < $nbLiens; $i++){
                echo '<li><a href=" pages/', $pages[$i], '">', $noms[$i], '</a></li>';
            }*/
            
            foreach($pages as $nom => $url){
                echo "\n", '<li><a href="', $url, '">', $nom, '</a></li>';
            }
           
            
        ?>
     </ul>
</nav>   
</header>