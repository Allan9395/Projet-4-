<?php $title = 'Blog Ecrivain; Jean Forteroche; Création de Chapitre'; ?>
<?php ob_start(); ?>

<div class="conteiner adminCreateChapter">

    <h2>Publions un nouveau chapitre !<button class="btn btn-outline-success submitAdminCreateChapter" type="submit">Publier</button></h2>

    <form action="index.php?action=adminAddNewChapter" method="post" class="form-group">
        <input type="text" name="titleNewChapter" class="form-control titleCreateChapter" id="formGroupExampleInput" placeholder="Un titre à votre chapitre">
        <input type="text" name="descriptionNewChapter" class="form-control descriptionChapter" id="descriptionChapter" placeholder="Une description à votre chapitre">
        <textarea class="tinymce" name="contentNewChapter" id="" cols="30" rows="10"></textarea>
        <button class="btn btn-outline-success submitAdminCreateChapter2" type="submit">Publier</button>
    </form>
</div>


<!-- Js-->
<script type="text/javascript" src="public/js/tinymce/js/jquery-min.js"></script>
<script type="text/javascript" src="public/js/tinymce/plugin/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="public/js/tinymce/plugin/tinymce/init-tinymce.js"></script>

<?php $content = ob_get_clean(); ?>

<?php require('views/backend/templateConnect.php');?>