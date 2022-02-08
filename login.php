<?php
    /*-----------------------------------------------------
                        Controler :
    -----------------------------------------------------*/
    /*-----------------------------------------------------
                        Session :
    -----------------------------------------------------*/
    //création de la session
    session_start();
    /*-----------------------------------------------------
                        Imports :
    -----------------------------------------------------*/        
    //import du model
    include('./models/user.php');
    //import de la connexion à la bdd
    include('./includes/db.php');
    //import de la vue connexion/loginUserView
    include('./views/loginUserView.php');
    /*-----------------------------------------------------
                            Tests :
    -----------------------------------------------------*/    
    //test si les champs sont vides
    if(!isset($_POST['login_user']) AND !isset($_POST['mdp_user']))
    {   
       //script js récupération du paragraphe #message dans une variable "message"
    echo '<script>let message = document.querySelector("#message");';
       //script js remplacement du message
    echo 'message.innerHTML = "Veuillez remplir les champs du formulaire";';
    echo '</script>';
    }
    //test si les champs sont complétés
    if(isset($_POST['login_user']) AND isset($_POST['login_user']))
    {
        //création des variables de connexion
        $login = $_POST['login_user'];
        $mdp = $_POST['mdp_user'];
        //Nouvelle instance de User
        $user = new User("", "", "$login", "$mdp","");
        //chiffrage du mot de passe en md
        $user->cryptMdp();
        //test si le compte existe (login)
        if($user->showUser($bdd))
        {   
            //test si le login et le mot de passe correspondent
            if($user->userConnnected($bdd))
            {
                //génération des super globales 
                $user->generateSuperGlobale($bdd);                
                //test login et mot de passe correct
                if($_SESSION['connected'])
                {
                    //redirection vers login.php?connected
                    // header("Location: login.php?connected");
                    // exit();
                    echo "<script>window.location.href='login.php?connected'</script>";
                }
            }
            //test mot de passe incorrect
            else
            {
                //redirection vers login.php?mdperror
                // header("Location: login.php?mdperror");
                echo "<script>window.location.href='login.php?mdperror'</script>";
                exit();
            }                  
        }
        //test le compte n'existe pas
        else
        {
            //redirection vers login.php?cptnoexist
            // header("Location: login.php?cptnoexist");
            echo "<script>window.location.href='login.php?cptnoexist'</script>";
            exit();
        }
    }
    /*-----------------------------------------------------
                Gestion des messages d'erreurs :
    -----------------------------------------------------*/
    //test si le compte (login) n'existe pas
    if(isset($_GET['cptnoexist']))
    {   
        //script js
        echo '<script>';
         //script js remplacement du message
        echo 'message.innerHTML = "Le compte n\'existe pas !!!";';
        echo '</script>';
    }
    //test si le mot de passe est incorrect
    if(isset($_GET['mdperror']))
    {   
        //script js
        echo '<script>';
         //script js remplacement du message
        echo 'message.innerHTML = "Le mot de passe est incorrect !!!";';
        echo '</script>';
    }
     //test connexion ok
    if(isset($_GET['connected']))
    {   
        //script js
        echo '<script>';
        //script js remplacement du message
        echo 'message.innerHTML = "Vous êtes bien connecté !!!";';
        echo '</script>';   
    }
    //test deconnexion
    if(isset($_GET['deconnected']))
    {   
        //script js
        echo '<script>';
        //script js remplacement du message
        echo 'message.innerHTML = "Vous êtes bien déconnecté !!!";';
        echo '</script>';
    }
?> 