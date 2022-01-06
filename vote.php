<?php
include "includes/db.php"; // Fichier de configuration global

$id = $_GET['id']; // On recuperer l'id de l'acteur
$voteOk = false;

$vote = $bdd->query("UPDATE actors SET rating_actor = rating_actor + 1 where id_actor='$id'");

if ($vote) {
    // On ferme la connexion a la base de données si tout va bien
    $vote=null;
    header("location:./index.php#persos"); // redirige vers la page des personnages
    exit;
} else {
    echo mysqli_error($conn);
}