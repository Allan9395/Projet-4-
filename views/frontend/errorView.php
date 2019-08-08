<?php $title = 'Blog Ecrivain - Jean Forteroche - Erreurs'; ?>

<?php ob_start(); ?>
<div class="container errors">
<h1>Ooups c'est pas normal ! </h1>
<p><?= $errorMessage ?></p>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('views/frontend/template.php');?>