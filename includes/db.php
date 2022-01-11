<?php   

// Function dbConnect qui sera utilisé dans les models
function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=filrouge;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}
    //connexion à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=filrouge;charset=utf8', 'root','', 
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>

