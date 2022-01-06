<?php
require('models/model.php'); // On recupere le model qui contient tout les appels a la bdd
$posts = getPosts(); // On stocke le modele getposts dans la variable posts afin de l'utiliser dans la view
require('views/postsView.php'); // On appelle postsView.php afin d'afficher tout les articles du blog
