<?php $title = 'Blog Ecrivain - Jean Forteroche - Chapitre admin'; ?>
<?php ob_start(); ?>
<div class="container " id="adminTicketView">

    <p class="bouton_retour">

        <button
            class="btn btn-default"><?= '<a href="index.php?action=admin"> Retourner à la liste des chapitre </a>'; ?></button>
        </a>
    </p>
    <div class="card border-success mb-3 ticket">
        <div class="card-header">
            <div> <?= $ticket['title']. ', publié le '. $ticket['date_jma']. ' à '. $ticket['date_hm'] ?> </div>
            <div> <a href="index.php?action=updateChapter&amp;id=<?= $_GET['id'] ?>">Modifier le chapitre</a> </div>
            <div> <a href="index.php?action=deleteChapter&amp;id=<?= $_GET['id'] ?>">Supprimer le chapitre</a> </div>
        </div>

        <div class="card-body text-success">
            <h5 class="card-title ticket-title-ticketView"><?= $ticket['title']; ?></h5>
            <p class="card-text"><?= $ticket['contents'] ?></p>
        </div>
        <div class="card-footer">
            <div>
                <?php while ($dataComments = $comments->fetch()) { ?>
                <div class="comment">
                    <h3>Les commentaires: </h3> <br>
                    <p><strong><?= htmlspecialchars($dataComments['author']); ?></strong> le
                        <?= $dataComments['date_jma']. ' à '. $dataComments['date_hm']; ?></p>
                    <p><em><?= nl2br(htmlspecialchars($dataComments['comment'])); ?></em></p>
                </div>
                <?php } $comments->closeCursor();?>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('views/backend/templateConnect.php');?>