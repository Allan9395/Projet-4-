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
            }
        } else {
            throw new Exeption('Erreur : aucun identifiant de billet envoyé');
        }
    } else {
        listTickets();
    }

} catch(Exeption $e) {
    $errorMessage = $e->getMessage();
    echo 'Erreur : '. $errorMessage;
}
