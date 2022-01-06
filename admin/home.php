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
<html>

<head>
    <title>Backoffice admin - fan site vikings</title>
    <link rel="stylesheet" href="../css/styles.css" />
</head>

<body>
    <div class="sucess">
        <h1>Bienvenue <?php echo $_SESSION['username']; ?></h1>
        <p>C'est votre espace admin.</p>
        <a href='add_user.php'>Ajouter un utilisateur</a> |
        <a href='allUsers.php'>Tous les utilisateurs</a> |
        <a href='../deconnexion.php'>Déconnexion</a>
        </ul>
    </div>
</body>

</html>