<?php
// Initialiser la session
session_start();
// Meta tags header page connexion
$page_title = "The Vikings - Fanbase";
$page_description = "Description vikings";
include('includes/head.php');

?>

<body>
    <main>
        <!-- Navbar -->
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo.png" alt="Logo Image" class="img-fluid" width="36"
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
                                <a class="nav-link" aria-current="page" href="#accueil">Accueil</a>
                            </li>
                            <li class="nav-item" data-toggle="tooltip" data-placement="right">
                                <a class="nav-link" href="#about">Histoire</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scrollto" href="#persos">Personnages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#blog">Blog</a>
                            </li>
                        </ul>
                        <?php
                        if (isset($_SESSION['username'])) {
                        ?>
                        <div class="clearfix">
                            <a href="espace-membre.php" class="login">
                                <button class="btn btn-success mb-3" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>
                                    Bonjour, <?php echo $_SESSION['username']; ?>
                                </button>
                            </a>
                            <a href="deconnexion.php" class="login">
                                <button class="btn btn-danger mb-3" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                        <path fill - rule="evenodd"
                                            d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                                        <path fill - rule="evenodd"
                                            d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                    </svg>
                                    Deconnexion
                                </button>
                            </a>
                        </div>
                        <?php
                        } else {
                        ?>
                        <div class="clearfix">
                            <a href="login.php" class="login">
                                <button class="btn btn-success mb-3" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                        <path fill - rule="evenodd"
                                            d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                                        <path fill - rule="evenodd"
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
                        <?php
                        }
                        ?>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Caroussel -->
        <div id="myCarousel" class="carousel slide hidden-xs" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                    class="active" aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="assets/img/wallpaper01.jpg" alt="">
                </div>
                <div class="carousel-item active">
                    <img src="assets/img/wallpaper02.jpg" alt="" class="img-fluid">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/wallpaper03.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Histoire -->
        <div id="about"></div>
        <div class="page-header text-center">
            <h1 class="text-center p-3">
                L'histoire de la serie "The Vikings"
            </h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 p-3">
                    <p>
                        Vikings est une série créée par Michael Hirst en 2013 qui dépeint les aventures de Ragnar
                        Lothbrok,
                        un personnage historique, mêlant faits réels et légendes.En Scandinavie, à la fin du VIIIe
                        siècle.
                        Ragnar Lothbrok, un jeune guerrier viking, est avide d'aventures et de nouvelles conquêtes.
                        Lassé
                        des pillages sur les terres de l'Est, il se met en tête d'explorer l'Ouest par la mer. Malgré la
                        réprobation de son chef, le Jarl Haraldson, il se fie aux signes et à la volonté des dieux, en
                        construisant une nouvelle génération de vaisseaux, plus légers et plus rapides.
                    </p>
                    <p>Vikings est diffusée simultanément depuis le 3 mars 2013 sur les chaînes History au Canada et
                        History
                        aux États-Unis.
                    </p>
                    <p>En France, la série est diffusée depuis le 10 juin 2013 sur Canal+ puis dès le 23 novembre 2014
                        sur
                        W9, au Québec, depuis le 1er novembre 2013 sur Super Écran.
                    </p>
                    <img alt="Histoire 01" src="assets/img/histoire02.jpg" class="img-fluid" />
                </div>
                <div class="col-md-6 p-3">
                    <img alt="Histoire 02" src="assets/img/histoire01.jpg" class="img-fluid" />
                    <p>
                        Les exploits d'un groupe de Vikings mené par Ragnar Lothbrok, l'un des vikings les plus
                        populaires de tous les temps au destin semi-légendaire, sont narrés par la série. Ragnar serait
                        d'origine norvégienne et suédoise, selon les sources. Il est supposé avoir unifié les clans
                        vikings en un royaume aux frontières indéterminées à la fin du VIIIème siècle (le roi Ecbert
                        mentionne avoir vécu à la cour du roi Charlemagne, sacré empereur en l'an 800). Mais il est
                        surtout connu pour avoir été le promoteur des tout premiers raids vikings en terres chrétiennes,
                        saxonnes, franques ou celtiques.
                    </p>
                    <p>
                        Simple fermier, homme lige du jarl Haraldson, il se rebelle contre les choix stratégiques de son
                        suzerain. Au lieu d'attaquer les païens slaves et baltes de la Baltique, il décide de se lancer
                        dans l'attaque des riches terres de l'Ouest, là où les monastères regorgent de trésors qui
                        n'attendent que d'être pillés par des guerriers ambitieux. Clandestinement, Ragnar va monter sa
                        propre expédition et sa réussite changera le destin des Vikings comme celui des royaumes
                        chrétiens du sud, que le simple nom de « Vikings » terrorisera pendant plus de deux siècles.
                    </p>
                </div>
            </div>
        </div>
        <!-- Personnages -->
        <div id="persos"></div>
        <div class="container p-3">
            <div class="page-header text-center">
                <h1 class="text-center p-3">Personnages</h1>
                <h3>
                    << Votez pour votre viking préférée>>
                </h3>
            </div>
            <div class="row justify-content-start">
                <?php
                // Connexion a la base mysql
                $bdd = new PDO('mysql:host=localhost;dbname=filrouge;charset=utf8', 'root', '');
                // On selectionne les trois derniers articles
                $reponse = $bdd->query('SELECT * FROM actors LIMIT 4 ');
                while ($donnees = $reponse->fetch()) {
                ?>
                <div class="col p-3">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/<?php echo $donnees['image_actor']; ?>" class="card-img-top" alt="...">
                        <div class="card-body-home">
                            <h5 class="card-title">Acteur: <?php echo $donnees['name_actor']; ?> </h5>
                            <p class="card-text"><?php echo $donnees['description_actor']; ?>
                            </p>
                            <p class="float-start"><?php echo $donnees['name_actor_perso']; ?> -
                                <?php echo $donnees['rating_actor']; ?> Votes</p>
                            <div class="float-end">
                                <a href="vote.php?id=<?php echo $donnees['id_actor']; ?>" class="btn btn-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                $reponse->closeCursor(); // Termine le traitement de la requête
                ?>
            </div>
        </div>
        <div id="blog">
            <div class="page-header text-center">
                <h1 class="text-center p-3">Le Blog</h1>
                <h3>
                    Actualités
                </h3>
            </div>
            <?php include('posts.php') ?>
        </div>
    </main>
    <!-- Pied de page -->
    <footer class="footer mt-auto py-3 bg-dark">
        <div class="container footer">
            <span class="text-white"><?php echo date("Y"); ?> - Copyright "The Vikings Fans"</span>
        </div>
    </footer>
    <!-- Retour en haut de page -->
    <button onclick="topFunction()" id="myBtnTop" title="Go to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
        </svg>
    </button>
    <!-- JS Files Bootstrap-->
    <script src="assets/https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <script src="assets/https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
        async></script>
    <!-- Mon Custom JS -->
    <script type="text/javascript" src="assets/js/custom.js"></script>
</body>

</html>