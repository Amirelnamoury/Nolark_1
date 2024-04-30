 <header>
            <nav> 
                <ul>
                    <li><a href="index.php"> Accueil</a></li>
                    <?php 
                       
                        
                        $tableau = array("Route" => "Pages/route.php", "Cross" => "Pages/cross.php", "Piste" => "Pages/piste.php", "Enfants" => "Pages/enfants.php", 
                            
                            "La Team" => "Pages/Team.php", "Nous Contacter" => "Pages/nous-contacter.php", "Simulateur" => "Pages/Simulateur.php", "Transport" => "Pages/Transport.php"
                            
                            );
                                
                       
                            foreach ($tableau as $cle => $valeur) {
                                echo "<li><a href=\"$valeur\">$cle</a></li>";
                            }




                    ?>

                </ul>
            </nav>
</header>

