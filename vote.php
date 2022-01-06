<?php
include "./includes/config.php"; // Fichier de configuration global

$id = $_GET['id']; // On recuperer l'id de l'acteur

$qry = mysqli_query($conn, "UPDATE actors SET rating_actor = rating_actor + 1 where id_actor='$id'"); // On mets à jour la note de l'acteur
if ($qry) {
    mysqli_close($db); // On ferme la connexion a la base de données si tout va bien
    header("location:./index.php#persos"); // redirige vers la page des personnages
    exit;
} else {
    echo mysqli_error($conn);
}