<?php
// Connexion à la base de données
try {
    $cnx = new PDO('mysql:host=127.0.0.1;dbname=nolark', 'nolarkuser', 'nolarkpwd');
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    exit();
}

// Requête SQL sécurisée avec une requête préparée
$req = $cnx->prepare('SELECT casque.id, marque.nom, modele, type.libelle, prix, classement, image, stock 
                      FROM casque 
                      INNER JOIN type ON casque.type = type.id 
                      INNER JOIN marque ON casque.marque = marque.id 
                      WHERE libelle = :libelle');
$req->bindParam(':libelle', $pagesActuelle);
$req->execute();

// Affichage des données
while ($ligne = $req->fetch(PDO::FETCH_OBJ)) {
    echo "\t", '<article>', "\n";
    echo "\t\t", '<img src="../Images/casques/', $ligne->libelle, '/', $ligne->image, '" alt="', $ligne->modele, '"/>', "\n";

    if ($ligne->stock === -1) {
        echo "\t\t", '<p class="stockko"><abbr data-tip="Sur commande uniquement">stock</abbr></p>';
    } elseif ($ligne->stock >= 10) {
        echo "\t\t", '<p class="stockok"><abbr data-tip="', $ligne->stock, ' casques en stock">stock</abbr></p>';
    } else {
        echo "\t\t", '<p class="stockok"><abbr data-tip="Plus que ', $ligne->stock, ' casques en stock...">stock</abbr></p>';
    }

    echo "\t\t", '<p class="prix">', $ligne->prix, '€</p>', "\n";
    echo "\t\t", '<p class="marque">', $ligne->nom, '</p>', "\n";
    echo "\t\t", '<p class="modele">', $ligne->modele, '</p>', "\n";

    if ($ligne->classement === 5) {
        echo "\t\t", '<div class="classement classement05"></div>', "\n";
    } else {
        echo "\t\t", '<div class="classement classement', $ligne->classement, '"></div>', "\n";
    }

    echo "\t", '</article>', "\n";
}

// Libération des ressources
unset($req);
unset($cnx);
?>
