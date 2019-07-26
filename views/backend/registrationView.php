<?php $title = 'Blog Ecrivain; Jean Forteroche; Enregistrement'; ?>
<?php ob_start(); ?>

<div class="conteiner conteinerForm">
    <h2>Rejoignez-nous</h2>
    <hr>
    <div class="registerForm">
        <form action="index.php?action=registrationOk" method="post" class="form-horizontal">
        <div class="form-group">
            <label class="labelRegister col-sm-5" for="username">Pseudo</label>
            
            <input type="text" name="username" id="username" class="inputRegister col-sm-4" placeholder="Entrez votre pseudo" required>
        </div>
        <div class="form-group">
        <label class="labelRegister col-sm-5" for="email">Adresse email</label>
            <input type="email" name="email" id="email" class="inputRegister col-sm-4" placeholder="Entrez votre adresse email" required>
        </div>
        <div class="form-group">
        <label class="labelRegister col-sm-5" for="password">Mot de passe</label>
            <input type="password" name="password" id="password" class="inputRegister col-sm-4" placeholder="Entrez votre mot de passe" required>
        </div>
        <div class="form-group">
        <label class="labelRegister col-sm-5" for="password_confirm">Vérification du mot de passe</label>
            <input type="password" name="password_confirm" id="password_confirm" class="inputRegister col-sm-4" placeholder="Confirmez votre mot de passe" required>
        </div>
        <div class="form-group submit">
            <button type="submit" class="btn btn-outline-success submitRegistration col-lg-offset-5 col-sm-1">Valider</button>
        </div>

        </form>
    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('views/frontend/template.php');?>