<?php
include "../includes/config.php"; // Fichier de configuration global

$id = $_GET['id']; // On recuperer l'id de l'utilisateur
$qry = mysqli_query($conn, "SELECT * from users where id='$id'"); // On selectionne tout les utilisateurs
$data = mysqli_fetch_array($qry); // Récupérer des données

if (isset($_POST['update'])) // lorsqu'on clique sur le bouton Mettre à jour
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $edit = mysqli_query($conn, "UPDATE users set username='$username', email='$email', type='$type' where id='$id'");
    if ($edit) {
        mysqli_close($db); // On ferme la connexion a la base de données
        header("location:allUsers.php"); // redirige vers la page de tous les utilisateurs
        exit;
    } else {
        echo mysqli_error($conn);
    }
}
?>

<h3>Mettre à jour un utilisateur</h3>
<a href='home.php'>Retour à l'accueil</a>
<form method="POST">
    <input type="text" name="username" value="<?php echo $data['username'] ?>" placeholder="Pseudo" Required>
    <input type="text" name="email" value="<?php echo $data['email'] ?>" placeholder="Email" Required>
    <select class="box-input" name="type" id="type">
        <option value="" disabled selected>Type</option>
        <option value="admin">Admin</option>
        <option value="user" selected>Utilisateur</option>
    </select>
    <input type="submit" name="update" value="Mettre à jour">
</form>