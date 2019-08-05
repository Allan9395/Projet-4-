<?php $title = 'Blog Ecrivain; Jean Forteroche; Enregistrement'; ?>
<?php ob_start(); ?>

<div class="conteiner confirmationBody">
<h2 id="confirmation">Merci de vous etes inscrit vous pouvez des a présent écrire votre livre</h2>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('views/frontend/template.php');?>