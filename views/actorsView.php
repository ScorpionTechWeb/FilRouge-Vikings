<?php
while ($data = $actors->fetch())
{
?>
<div class="col p-3">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/<?php echo $data['image_actor']; ?>" class="card-img-top" alt="...">
                        <div class="card-body-home">
                            <h5 class="card-title">Acteur: <?php echo $data['name_actor']; ?> </h5>
                            <p class="card-text"><?php echo $data['description_actor']; ?>
                            </p>
                            <p class="float-start"><?php echo $data['name_actor_perso']; ?> -
                                <?php echo $data['rating_actor']; ?> Votes</p>
                            <div class="float-end">
                                <a href="vote.php?id=<?php echo $data['id_actor']; ?>" class="btn btn-dark">
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
    $actors->closeCursor(); // Termine le traitement de la requête
?>