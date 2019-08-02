<?php $title = 'Blog Ecrivain; Jean Forteroche, erreur'; ?>

<?php ob_start(); ?>

<?= $errorMessage ?>

<?php $content = ob_get_clean(); ?>

<?php require('views/frontend/template.php');?>