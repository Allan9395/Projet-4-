<?php $title = 'Blog Ecrivain; Jean Forteroche; Chapitre'; ?>
<?php ob_start(); ?>
<img src="public/images/sliderAlaska.jpg" class="img-fluid" alt="Responsive image">

<div class="container " id="ticketView">

    <p class="bouton_retour">
    
            <button class="btn btn-default"><?= '<a href="index.php"> Retourner à la liste des chapitre </a>'; ?></button>
        </a>
    </p>
    <div class="card border-success mb-3 ticket">
        <div class="card-header"><?= $ticket['title']. ' ,Publié le '. $ticket['date_jma']. ' à '. $ticket['date_hms']  ?></div>
        <div class="card-body text-success">
            <h5 class="card-title"><?= $ticket['title']; ?></h5>
            <p class="card-text"><?= $ticket['contents'] ?></p>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('views/frontend/template.php');?>