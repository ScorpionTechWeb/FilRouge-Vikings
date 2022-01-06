<?php
// on se connecte à la base de données
$host = 'localhost';
$dbname = 'mxbhnrft_projetfil';
$username = 'mxbhnrft_projetfil';
$password = '/20naLs/a2T8n8na)T';

$dsn = "mysql:host=$host;dbname=$dbname";

// on récupérer tous les utilisateurs
$sql = 'SELECT * FROM users';

try {
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->query($sql);

    if ($stmt === false) {
        die('Erreur');
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang='fr'>

<head>
    <title>Afficher tous les utilisateurs</title>
</head>

<body>
    <h1>Liste des utilisateurs</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Type</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['id']);
                        ?></td>
                    <td><?php echo htmlspecialchars($row['username']);
                        ?></td>
                    <td><?php echo htmlspecialchars($row['email']);
                        ?></td>
                    <td><?php echo htmlspecialchars($row['type']);
                        ?></td>
                    <td><a href="editUser.php?id=<?php echo htmlspecialchars($row['id']);
                                                    ?>">Modifier</a></td>
                    <td><a href="deleteUser.php?id=<?php echo htmlspecialchars($row['id']);
                                                    ?>">Supprimer</a></td>
                </tr>
            <?php endwhile;
            ?>
        </tbody>
        <a href='home.php'>Retour à l'accueil</a>
    </table>
</body>

</html>