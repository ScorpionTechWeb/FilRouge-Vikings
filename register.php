<!doctype html>
<html lang="fr" id="accueil">

<!-- HEADER -->

<head>
    <!-- Required meta tags -->
    <title>Inscription - The Vikings - Fanbase</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- My Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
</head>

<!-- BODY -->

<body>
    <main>
        <!-- Start Navbar -->
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">

                    <a class="navbar-brand" href="#">
                        <img src="img/logo.png" alt="Logo Image" class="img-fluid" width="36"
                            style="max-width: 100%; height: auto">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0" id="ul">
                            <li class="nav-item" data-toggle="tooltip" data-placement="right">
                                <a class="nav-link" aria-current="page" href="/index.php">Accueil</a>
                            </li>
                            <li class="nav-item" data-toggle="tooltip" data-placement="right">
                                <a class="nav-link" href="/index.php#about">Histoire</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scrollto" href="/index.php#persos">Personnages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/index.php#blog">Blog</a>
                            </li>
                        </ul>
                        <div class="clearfix">
                            <a href="login.php" class="login">
                                <button class="btn btn-success mb-3" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                                        <path fill-rule="evenodd"
                                            d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                    </svg>
                                    Connexion
                                </button>
                            </a>
                            <a href="register.php" class="register">
                                <button class="btn btn-primary mb-3" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                        <path
                                            d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                                        <path
                                            d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    </svg>
                                    Inscription
                                </button>
                            </a>
                        </div>
                    </div>
            </div>
            </nav>
        </header>
        <div class="container">
            <div class="card card-login mx-auto text-center bg-dark">
                <div class="card-header mx-auto bg-dark">
                    <span> <img src="/img/logo.png" class="mw-100" alt="Logo"> </span><br />
                    <span class="logo_title mt-5"> Inscrivez-nous </span>
                </div>
                <div class="card-body">
                    <?php
                    require('includes/config.php');
                    // On ajoute le nouveau utilisateur à la base de données
                    if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])) {
                        // on récupére le nom d'utilisateur
                        $username = stripslashes($_REQUEST['username']);
                        $username = mysqli_real_escape_string($conn, $username);
                        // on récupére l'email
                        $email = stripslashes($_REQUEST['email']);
                        $email = mysqli_real_escape_string($conn, $email);
                        // on récupére le mot de passe
                        $password = stripslashes($_REQUEST['password']);
                        $password = mysqli_real_escape_string($conn, $password);

                        $query = "INSERT into `users` (username, email, type, password) VALUES ('$username', '$email', 'user', '" . hash('sha256', $password) . "')";
                        $res = mysqli_query($conn, $query);
                        if ($res) {
                            echo "<div class='sucess'>
                                    <h3>Vous êtes inscrit avec succès.</h3>
                                    <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
                                    </div>";
                        }
                    } else {
                    ?>
                    <form action="" method="post" name="login">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nom d'utilisateur" name="username"
                                required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email" name="email" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Mot de passe" name="password"
                                required>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="S'inscrire" name="submit"
                                class="btn btn-outline-danger float-right login_btn">
                        </div>
                        <a href="login.php" class="link">Déjà inscrit?</a>
                    </form>
                    <!--  -->
                    <?php } ?>
                    <!-- Fermeture connexion mysql -->
                </div>
            </div>
        </div>

    </main>
    <!-- Retour en haut de page -->
    <button onclick="topFunction()" id="myBtnTop" title="Go to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
        </svg>
    </button>
    <!-- JS Files Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
        async>
    </script>
    <!-- Mon Custom JS -->
    <script type="text/javascript" src="js/custom.js">
    </script>
</body>

</html>