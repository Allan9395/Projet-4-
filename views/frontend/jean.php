<?php $title = 'Blog Ecrivain - Jean Forteroche'; ?>

<?php ob_start(); ?>
<header class="container">
    <div class="row">
        <div class="col-sm-4">
            <img src="public/images/jean.jpg" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-sm-8">
            <h2 class="chapters">JEAN FORTEROCHE </h2>

            <div class="card mb-12" style="max-width: auto;">
                <div class="row no-gutters">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-11">
                        <div class="card-body">
                            <h5 class="card-title">Bonjour à vous, je m'appelle Jean FORTEROCHE</h5>
                            <p class="card-text">Nunc sed mi in nisl ultrices lobortis. Aliquam placerat pharetra
                                ultricies. Proin malesuada erat et ligula dignissim lacinia. Fusce accumsan leo nec
                                lectus molestie, a maximus leo dignissim. Praesent sagittis vehicula sapien, vitae
                                consectetur ante vulputate nec. Fusce in dignissim magna, ac porta orci. Aliquam
                                eleifend massa a leo consectetur, at eleifend urna consequat. Morbi nunc lectus,
                                venenatis quis massa at, sollicitudin facilisis nisi. Phasellus urna ex, viverra nec
                                venenatis a, eleifend eget odio. Vestibulum mollis sem sed dolor porttitor, et faucibus
                                nunc dapibus. Suspendisse vitae sapien cursus, euismod quam vel, pretium eros. Maecenas
                                finibus neque a finibus venenatis. Nullam sollicitudin, turpis vel feugiat imperdiet,
                                ligula urna imperdiet tortor, ac ornare justo purus in sem. Pellentesque vel convallis
                                lectus, at vulputate nisl. Morbi tincidunt non nibh vel varius. Nulla nisi nulla,
                                finibus ac augue vitae, bibendum porttitor mi. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<?php $content = ob_get_clean(); ?>
<?php require('views/frontend/template.php');?>