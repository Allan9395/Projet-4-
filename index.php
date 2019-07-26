<?php
require_once('controller/frontend.php');
require_once('controller/backend.php');

try
{
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listTickets') {
            listTickets();
        } elseif($_GET['action'] == 'registration') {
            require('views/backend/registrationView.php');
        } elseif ($_GET['action'] == 'registrationOk') {
            if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_confirm'])) {
                if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_confirm'])) {
                    dataVerification($_POST['username'], $_POST['email'], $_POST['password'], $_POST['password_confirm']);
                }
            }
        } elseif($_GET['action'] == 'registrationConfirmation') {
            require('views/backend/registrationConfirmation.php');

        } elseif($_GET['action'] == 'homeViewConnect') {
            if (isset($_POST['usernameConnect']) && isset($_POST['passwordConnect'])) {
                if (!empty($_POST['usernameConnect']) && !empty($_POST['passwordConnect'])) {
                    identityCheck($_POST['usernameConnect'], $_POST['passwordConnect']);
                }
            } else {
                throw new Exeption('Erreur : tout les champs ne sont pas remplie');
            } 
        } elseif ($_GET['action'] == 'ticket') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                ticket();
            } else {
                throw new Exeption('Erreur : aucun identifiant de billet envoyé');
            } 
        } elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author'] && !empty($_POST['comment']))) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                } else {
                    throw new Exeption('Erreur : tout les champs ne sont pas remplie');
                }
            }
        }
    } else {
        listTickets();
    }

} catch(Exeption $e) {
    $errorMessage = $e->getMessage();
    echo 'Erreur : '. $errorMessage;
}