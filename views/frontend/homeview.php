<?php $title = 'Blog Ecrivain; Jean Forteroche'; ?>

<?php ob_start(); ?>

<img src="public/images/sliderAlaska.jpg" class="img-fluid" alt="Responsive image">

<header class="conteiner">
    <div class="row">
        <div class="col-sm-4">
            <img src="public/images/jean.jpg" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-sm-8">
            <h2 class="chapters">Chapitres</h2>
            <div class="card mb-12" style="max-width: auto;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="public/images/alaska1.jpeg" class="card-img" alt="alaska-photo">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Titre du Billet</h5>
                            <p class="card-text">Description du chapitre</p>
                            <p class="card-text"><small class="text-muted">Date de publication</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-12" style="max-width: auto;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="public/images/alaska1.jpeg" class="card-img" alt="alaska-photo">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Titre du Billet</h5>
                            <p class="card-text">Description du chapitre</p>
                            <p class="card-text"><small class="text-muted">Date de publication</small></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
<?php $content = ob_get_clean(); ?>
<?php require('views/frontend/template.php');?>