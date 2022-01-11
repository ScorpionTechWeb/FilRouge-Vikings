<section class="wrapper">
                <div class="container-fostrap">
                    <div class="content">
                        <div class="container">
                            <div class="row">
                                <?php
                                    while ($data = $posts->fetch())
                                    {
                                ?>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="card">
                                        <a class="img-card" href="#">
                                            <img src="assets/<?= $data['picture_article'] ?>" />
                                        </a>
                                        <h3>Le <?= $data['creation_date_fr'] ?></h3>
                                        <h3><?= $data['title'] ?></h3>
                                        <p style="text-align: left; margin-left: 10px;">
                                            <?= substr(nl2br(htmlspecialchars($data['content'])),0,300), '....' ?> 
                                        </p>
                                        <a href="post.php?id=<?= $data['id'] ?>">Lire la suite</a>
                                    </div>
                                </div>
                                <?php
                                }
                                $posts->closeCursor(); // Termine le traitement de la requête
                                ?>
                            </div>
</div>
</div>
</section>