<?php
// on se connecte à la base de données
$host = 'localhost';
$dbname = 'mxbhnrft_projetfil';
$username = 'mxbhnrft_projetfil';
$password = 'w*SMh*;4Q*/S2;9h?s';

$dsn = "mysql:host=$host;dbname=$dbname";

$id = $_GET['id'];

// on récupérer tous les utilisateurs
$sql = "DELETE FROM users WHERE id='$id'";

try {
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->query($sql);

    if ($stmt === false) {
        die('Erreur');
    } else {
        echo "Utilisateur supprimé avec succès.";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
