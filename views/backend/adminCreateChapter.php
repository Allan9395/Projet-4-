<?php $title = 'Blog Ecrivain; Jean Forteroche; Création de Chapitre'; ?>
<?php ob_start(); ?>

<div class="conteiner">

    <h2>Publions un nouveau chapitre !</h2>

    <form action="index.php?admin" method="post" class="form-group">
        <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Example input">
        <textarea class="tinymce" name="newChapter" id="" cols="30" rows="10"></textarea>
        <button type="submit">Publier</button>
    </form>
</div>


<!-- Js-->
<script type="text/javascript" src="public/js/tinymce/js/jquery-min.js"></script>
<script type="text/javascript" src="public/js/tinymce/plugin/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="public/js/tinymce/plugin/tinymce/init-tinymce.js"></script>

<?php $content = ob_get_clean(); ?>

<?php require('views/backend/templateConnect.php');?>