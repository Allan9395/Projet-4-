<?php $title = 'Blog Ecrivain; Jean Forteroche; Chapitre'; ?>
<?php ob_start(); ?>
<div class="container " id="ticketView">

    <p class="bouton_retour">

        <button class="btn btn-default"><?= '<a href="index.php"> Retourner à la liste des chapitre </a>'; ?></button>
        </a>
    </p>
    <div class="card border-success mb-3 ticket">
        <div class="card-header">
            <?= htmlspecialchars($ticket['title']). ', publié le '. $ticket['date_jma']. ' à '. $ticket['date_hm']  ?></div>
        <div class="card-body text-success">
            <h5 class="card-title ticket-title-ticketView"><?= htmlspecialchars($ticket['title']); ?></h5>
            <p class="card-text"><?= $ticket['contents'] ?></p>
        </div>
        <div class="card-footer">
            <form action="index.php?action=addComment&amp;id=<?= $ticket['id'] ?>" method="post">
                <h2>Commentaires</h2>
                <div class="form-group">
                    <div class="form-group"><label for="author">Nom:</label></<label>
                        <input type="text" name="author" class="form-control input-sm" id="author" placeholder="Nom" required>
                    </div>
                    <div class="form-group"><label for="comment">Commentaire:</label></label>
                        <input type="text" name="comment" class="form-control input-sm" id="comment"
                            placeholder="Commentaire" riquired>
                    </div>
                    <div class="form-group"> <input type="submit" class="btn btn-success" value="Valider"></<input>
                    </div>
                </div>
            </form>
            <div>
                <?php while ($dataComments = $comments->fetch()) { ?>
                <div class="comment">
                    <p><strong><?= htmlspecialchars($dataComments['author']); ?></strong> le
                        <?= $dataComments['date_jma']. ' à '. $dataComments['date_hm']; ?></p>
                    <p id="commentMessage"><em><?= nl2br(htmlspecialchars($dataComments['comment'])); ?></em></p>
                    <p><a id="btnReport" href="index.php?action=report&amp;id=<?= $dataComments['id']?>&amp;id_chapter=<?= $ticket['id'] ?>;">Signaler</a></p>
                </div>
                <?php } $comments->closeCursor();?>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('views/frontend/template.php');?>