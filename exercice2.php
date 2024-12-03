<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice</title>
</head>
<body>
    <h1><u>Exercice</u></h1>

        <!-- Exercice 1 -->
    <?php
    $employees = [
        ["nom" => "wissal", "poste" => "employe 1", "salaire" => 10000],
        ["nom" => "marwa", "poste" => "employe 2", "salaire" => 9500],
        ["nom" => "hamid", "poste" => "employe 3", "salaire" => 15000],
        ["nom" => "Fatima", "poste" => "employe 4", "salaire" => 4000],
        ["nom" => "saad", "poste" => "employe 5", "salaire" => 8000],
    ];

    function calculerSalaireMoyen($employes) {
        $total = array_sum(array_column($employes, "salaire"));
        return $total / count($employes);
    }

    echo "<h2>1. Salaire moyen des employés</h2>";
    echo "Salaire moyen : " . calculerSalaireMoyen($employees) . " MAD<br><br>";

    //<!-- Exercice 2 -->
    if (isset($_POST['rechercher'])) {
        $nomRecherche = $_POST['nom'];
    
        $resultat = array_filter($employees, function($e) use ($nomRecherche) {
            return stripos($e["nom"], $nomRecherche) !== false; 
        });
    
        echo "<h2>2. Résultat de recherche</h2>";
    
        
        if (!empty($resultat)) {
            foreach ($resultat as $employee) {
                echo "Nom: " . htmlspecialchars($employee["nom"]) . "<br>";
                echo "Poste: " . htmlspecialchars($employee["poste"]) . "<br>";
                echo "Salaire: " . htmlspecialchars($employee["salaire"]) . "<br><br>";
            }
        } else {
            echo "Aucun employé trouvé pour le nom : " . htmlspecialchars($nomRecherche) . "<br>";
        }
    }
    

    
    ?>

    <form method="post">
    <h2>2. Résultat de recherche</h2>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required>
        <button type="submit" name="rechercher">Rechercher</button>
    </form>

    <!-- Exercice 3 -->
    <?php
    
    $utilisateurs = [
        ["email" => "test1@gmail.com", "mot_de_passe" => "abc123"],
        ["email" => "test2@gmail.com", "mot_de_passe" => "bbb@000"],
        ["email" => "test3@gmail.com", "mot_de_passe" => "111111111"],
    ];

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['mot_de_passe'];
        $found = false;

        foreach ($utilisateurs as $utilisateur) {
            if ($utilisateur['email'] === $email && $utilisateur['mot_de_passe'] === $password) {
                $found = true;
                break;
            }
        }

        echo "<h2>3. Résultat du formulaire de connexion</h2>";
        echo $found ? "Connexion réussie !" : "Échec de la connexion.";
    }
    ?>

    <form method="post">
        <h2>3. Formulaire de connexion</h2>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" name="mot_de_passe" id="mot_de_passe" required>
        <br>
        <button type="submit" name="login">Se connecter</button>
    </form>

    <!-- Exercice 4 -->
    <?php
    $panier = [
        ["nom" => "prod 1", "quantite" => 2, "prix" => 8000],
        ["nom" => "prod 2", "quantite" => 1, "prix" => 200],
        ["nom" => "prod 3", "quantite" => 3, "prix" => 9000],
    ];

    $totalPanier = array_reduce($panier, function ($total, $produit) {
        return $total + ($produit["quantite"] * $produit["prix"]);
    }, 0);

    echo "<h2>4. Total du panier</h2>";
    echo "Total : $totalPanier MAD<br><br>";

    //<!-- Exercice 5 -->
    $commentaires = [];
    if (isset($_POST['commenter'])) {
        $commentaires[] = ["texte" => $_POST['commentaire'], "timestamp" => date('Y-m-d H:i:s')];
        echo "<h2>5. Commentaires soumis</h2>";
        foreach ($commentaires as $commentaire) {
            echo "<p>{$commentaire['texte']} - {$commentaire['timestamp']}</p>";
        }
    }
    ?>

    <form method="post">
        <h2>5. Formulaire de commentaires</h2>
        <label for="commentaire">Commentaire :</label>
        <textarea name="commentaire" id="commentaire" required></textarea>
        <br>
        <button type="submit" name="commenter">Soumettre</button>
    </form>

    <!-- Exercice 6 -->
    <?php
    
    $villes = [
        ["ville" => "marbella", "temperature" => 25],
        ["ville" => "seville", "temperature" => 38],
        ["ville" => "malaga", "temperature" => 22],
    ];

    $villeMaxTemp = array_reduce($villes, function ($max, $ville) {
        return ($max["temperature"] ?? 0) > $ville["temperature"] ? $max : $ville;
    }, []);

    echo "<h2>6. Ville la plus chaude</h2>";
    echo "Ville : {$villeMaxTemp['ville']}, Température : {$villeMaxTemp['temperature']}°C<br><br>";
    ?>

<!-- Exercice 7 -->
    <?php
    echo "<h2>7. Lecture des produits depuis CSV</h2>";
    $csvProduits = [
        ["nom" => "prod 1", "prix" => 200, "quantite" => 2],
        ["nom" => "prod 2", "prix" => 9000, "quantite" => 3],
        ["nom" => "prod 3", "prix" => 8000, "quantite" => 1],
    ];
    echo "<table border='1'><tr><th>Nom</th><th>Prix</th><th>Quantité</th></tr>";
    foreach ($csvProduits as $produit) {
        echo "<tr><td>{$produit['nom']}</td><td>{$produit['prix']}</td><td>{$produit['quantite']}</td></tr>";
    }
    echo "</table>";
    ?>

    <!-- Exercice 8 -->
    <?php

$produits = [
    ["nom" => "prod 1", "prix" => 8000],
    ["nom" => "prod 2", "prix" => 200],
    ["nom" => "prod 3", "prix" => 9000],
];

if (isset($_POST['produits_selectionnes'])) {
    $produitsSelectionnes = $_POST['produits_selectionnes'];
    $prixTotal = 0;

    echo "<h2>8. Produits sélectionnés</h2>";
    echo "<ul>";
    foreach ($produitsSelectionnes as $id) {
        $produit = $produits[$id];
        $prixTotal += $produit['prix'];
        echo "<li>{$produit['nom']} - {$produit['prix']} MAD</li>";
    }
    echo "</ul>";
    echo "Prix total : $prixTotal MAD<br>";
}
?>

<form method="post">
<h2>8. Produits sélectionnés</h2>
    <?php foreach ($produits as $index => $produit) : ?>
        <label>
            <input type="checkbox" name="produits_selectionnes[]" value="<?= $index ?>">
            <?= $produit['nom'] ?> - <?= $produit['prix'] ?> MAD
        </label><br>
    <?php endforeach; ?>
    <button type="submit">Afficher le total</button>
</form>

<!-- Exercice 9 -->
    <?php
    echo "<h2>9. Moyennes des étudiants</h2>";
    $etudiants = [
        ["nom" => "hmed", "notes" => [15, 17, 16]],
        ["nom" => "fatma", "notes" => [18, 19, 20]],
    ];
    foreach ($etudiants as $etudiant) {
        $moyenne = array_sum($etudiant['notes']) / count($etudiant['notes']);
        echo "Étudiant : {$etudiant['nom']},  Sa moyenne est: $moyenne<br>";
    }
?>