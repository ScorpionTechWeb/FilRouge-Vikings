<?php
// Informations d'identification à la base MYSQL
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'tarbes65');
define('DB_NAME', 'filrouge');

// Connexion à la base de données MySQL
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// On vérifier la connexion sinon on envoie un message d'erreur
if ($conn === false) {
    die("ERREUR : Impossible de se connecter à la base de données. " . mysqli_connect_error());
}