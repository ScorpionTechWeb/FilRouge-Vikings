<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="../css/styles.css" />
    <title>Ajouter un utilisateur - BackOffice</title>
</head>

<body>
    <?php
    // Fichier de configuration
    require('../includes/config.php');
    if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['type'], $_REQUEST['password'])) {
        // récupérer le nom d'utilisateur
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn, $username);
        // récupérer l'email
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($conn, $email);
        // récupérer le mot de passe
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        // récupérer le type (user | admin)
        $type = stripslashes($_REQUEST['type']);
        $type = mysqli_real_escape_string($conn, $type);

        $query = "INSERT into `users` (username, email, type, password)
        VALUES ('$username', '$email', '$type', '" . hash('sha256', $password) . "')";
        $res = mysqli_query($conn, $query);

        if ($res) {
            echo "<div class='sucess'>
            <h3>L'utilisateur a été créée avec succés.</h3>
            <p>Cliquez <a href='home.php'>ici</a> pour retourner à la page d'accueil</p>
    </div>";
        }
    } else {
    ?>
        <form class="box" action="" method="post">
            <h1 class="box-logo box-title">
                The vikings fansite
            </h1>
            <h3 class="box-title">Ajouter un utilisateur</h3>
            <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />

            <input type="text" class="box-input" name="email" placeholder="Email" required />

            <div>
                <select class="box-input" name="type" id="type">
                    <option value="" disabled selected>Type</option>
                    <option value="admin">Admin</option>
                    <option value="user">Utilisateur</option>
                </select>
            </div>

            <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />

            <input type="submit" name="submit" value="+ Ajouter" class="box-button" />
        </form>
    <?php } ?>
</body>

</html>