<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="public/css/bootstrap-grid.css">

    <link rel="stylesheet" href="public/css/style.css">

  <title><?= $title ?></title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Billet simple pour l'Alaska</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto my-2 mt-2 mt-lg-0"> </ul>
      <ul class="navbar-nav my-2 mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Accueil</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="index.php?action=chapters"><i class="fas fa-camera"></i> Chapitres</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="index.php?action=jean"><i class="fas fa-user-edit"></i> Jean</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="index.php?action=registration"><i class="fas fa-user-plus"></i>Inscription</a>
        </li>
      </ul>
      <form action="index.php?action=homeViewConnect" method="post" class="formConnection">
        <input class="field" type="text" name="usernameConnect" id="name" placeholder="Pseudo" required>
        <input class="field" type="password" name="passwordConnect" id="password" placeholder="Mot de passe" required>
        <input class="inputBtn" type="submit" value="Connexion">
      </form>
    </div>
  </nav>

  <?= $content ?>

  <footer>
    <div class="row">
      <div class="col-sm-3">
        <img src="public/images/footerAlaska.jpg" class="img-fluid" alt="Responsive image">
      </div>
      <div class="col-sm-6">
        <p>Merci de me suivre vous pouver partager et me retrouver sur les réseaux sociaux <br> Suivez-Moi :
          <span><i class="fab fa-twitter-square"></i> <i class="fab fa-instagram"></i> <i
              class="fab fa-facebook-square fa-2x"></i></span>
        </p>
      </div>
      <div class="col-sm-3">
        <ul class="contact-me">
          <h5>Contactez-Moi :</h5>
          <h6>Jean Forteroche</h6>
          <li>jeanforteroche @ecrivain.com</li>
          <li>Boite Postal</li>
          <li>6 rue de la liberté</li>
          <li>75000 PARIS</li>
          <li>FRANCE</li>
        </ul>
      </div>
    </div>
  </footer>


  <!-- Optional JavaScript -->
  <!-- <script src="public/js/index.js"></script> -->
  
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>