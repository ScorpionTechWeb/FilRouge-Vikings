<?php
// Initialiser la session
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if (!isset($_SESSION["connected"])) {
    header("Location: ../login.php");
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
        <h1>Bienvenue <?php echo $_SESSION['firstNameUser']; ?></h1>
        <p>C'est votre espace admin.</p>
        <h3>Utilisateurs</h3>
        <a href='add_user.php'>Ajouter un utilisateur</a> |
        <a href='allUsers.php'>Modifier/Supprimer un utilisateur</a> |
        <h3>Blog</h3>
        <a href='add_post.php'>Ajouter un article au blog</a> |
        <a href='allPosts.php'>Modifier/Supprimer un article</a> |
        <a href='../deconnexion.php'>Déconnexion</a>
        </ul>
    </div>
</body>
</html>