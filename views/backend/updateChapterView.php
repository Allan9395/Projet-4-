<?php $title = 'Blog Ecrivain; Jean Forteroche; Création de Chapitre'; ?>
<?php ob_start(); ?>

<div class="conteiner adminCreateChapter">

    <?php $data = $chapterToEdit->fetch(); ?>
    
    <form action="index.php?action=updateChapter&amp;id=<?= $data['id'] ?>" method="post" class="form-group">

    <h2>Un chapitre à modifier !<button class="btn btn-outline-success submitAdminCreateChapter" type="submit">Modifier</button></h2>

        <input type="text" name="titleNewChapter" class="form-control titleCreateChapter" id="formGroupExampleInput" value="<?= htmlspecialchars($data['title']) ?>">
        <input type="text" name="descriptionNewChapter" class="form-control descriptionChapter" id="descriptionChapter" value="<?= htmlspecialchars($data['ticketDescription']) ?>">
        <textarea class="tinymce" name="contentNewChapter" id="" cols="30" rows="10"><?= htmlspecialchars($data['contents']) ?></textarea>
        <button class="btn btn-outline-success submitAdminCreateChapter2" type="submit">Modifier</button>
    </form>
</div>


<!-- Js-->
<script type="text/javascript" src="public/js/tinymce/js/jquery-min.js"></script>
<script type="text/javascript" src="public/js/tinymce/plugin/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="public/js/tinymce/plugin/tinymce/init-tinymce.js"></script>

<?php $content = ob_get_clean(); ?>

<?php require('views/backend/templateConnect.php');?>