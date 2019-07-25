<?php
require('controller/frontend.php');

try
{
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listTickets') {
            listTickets();
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