<?php
require('models/model.php'); // On recupere le model qui contient tout les appels a la bdd

// On test, qu'on a bien réçu l'id de l'article en parametre de get afin d'afficher les commentaires du bon article
// Si le test renvoye un erreur, on affiche un message d'erreur
if (isset($_GET['id']) && $_GET['id'] > 0) {
    $post = getPost($_GET['id']);
    $comments = getComments($_GET['id']);
    require('views/postView.php');
}
else {
    echo 'Erreur : aucun identifiant de billet envoyé';
}

