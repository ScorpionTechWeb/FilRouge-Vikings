<?php
// Initialiser la session
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="assets/css/styles.css" />
    <title>Espace membre</title>
</head>

<body>
    <div class="sucess">
        <h1>Bienvenue <?php echo $_SESSION['username']; ?></h1>
        <p>C'est votre espace utilisateur, gérez vos informations, vos commentaires, vos articles favoris...</p>
        <ul>
            <a href='infos.php'>Mon profil</a>
        </ul>
        <ul>
            <a href='index.php'>Revenir sur le site principal</a>
        </ul>
        <ul>
            <a href="deconnexion.php">Déconnexion</a>
        </ul>
    </div>
</body>

</html>