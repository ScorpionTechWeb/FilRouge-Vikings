<?php
//import de la connexion à la bdd
include('./db.php');   
$id = $_GET['id'];

// on récupérer tous les utilisateurs
$sql = "DELETE FROM users WHERE id_user='$id'";

try {
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->query($sql);

    if ($stmt === false) {
        die('Erreur');
    } else {
        echo "Utilisateur supprimé avec succès.";
        header("./allUsers.php")
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
