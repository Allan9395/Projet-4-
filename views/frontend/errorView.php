<?php $title = 'Blog Ecrivain; Jean Forteroche, erreur'; ?>

<?php ob_start(); ?>
<div class="conteiner errors">
<h1>Ooups c'est pas normal ! </h1>
<p><?= $errorMessage ?></p>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('views/frontend/template.php');?>