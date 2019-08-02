<?php $title = 'Blog Ecrivain; Jean Forteroche;" connection' ?>

<?php ob_start(); ?>

<header class="conteiner">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="chapters">Chapitres</h2>
            <?php while ($data = $tickets->fetch()) {?>

            <div class="card mb-12" style="max-width: auto;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="public/images/alaska1.jpeg" class="card-img" alt="alaska-photo">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><a href="index.php?action=adminticket&amp;id=<?= $data['id'];?>">
                                    <?= htmlspecialchars($data['title']) ?> </a> </h5>
                            <p class="card-text"><?= htmlspecialchars($data['ticketDescription']) ?></p>
                            <p class="card-text"><small
                                    class="text-muted"><?= 'Publié le '. $data['date_jma']. ' à '. $data['date_hm'] ?></small>
                            </p>
                            <a href="index.php?action=updateChapter&amp;id=<?= $data['id'] ?>">Modifier le chapitre</a> <br>
                            <a href="index.php?action=deleteChapter&amp;id=<?= $data['id'] ?>">Supprimer le chapitre</a>

                        </div>
                    </div>
                </div>
            </div>
            <?php } $tickets->closeCursor();?>
        </div>
    </div>
</header>

<?php $content = ob_get_clean(); ?>
<?php require('views/backend/templateConnect.php');?>