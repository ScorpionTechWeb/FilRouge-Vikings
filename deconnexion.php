<?php
    /*-----------------------------------------------------
                        Session :
    -----------------------------------------------------*/
    //demarrage de la session
    session_start();
    //deconnexion suppression des supers globales
    session_destroy();
    /*-----------------------------------------------------
                        Redirection :
    -----------------------------------------------------*/
    //redirection vers la page login en mode deconnecte
    header("Location: login.php?deconnected");
?>