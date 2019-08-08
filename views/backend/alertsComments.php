<?php $title = 'Blog Ecrivain - Jean Forteroche - alertsCommentaires'; ?>

<?php ob_start() ?>

<div class="container">
<div class="card-footer">
    <h1>Les commentaires signalés </h1>

    <?php while ($dataComments = $commentsPosted->fetch()) { ?>

    <div class="card border-success mb-3 commentsreport">
        <div class="card-header">
        <strong><?= htmlspecialchars($dataComments['author']); ?></strong>
        <?= $dataComments['date_jma']. ' à '. $dataComments['date_hm']; ?>
        </div>
        <div class="card-body text-success">
            <p id="commentMessage"><em><?= nl2br(htmlspecialchars($dataComments['comment'])); ?></em></p>
            <p><a href="index.php?action=delateComment&amp;id=<?= $dataComments['id']?>">Suprimmer</a></p>
            <p><a href="index.php?action=keepComment&amp;id=<?= $dataComments['id']?>">Conserver</a></p>
        </div>
    </div>
    <?php } $commentsPosted->closeCursor();?>
</div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('views/backend/templateConnect.php');?>