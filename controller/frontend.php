<?php 

require_once('models/frontend/ticketsManager.php');
require_once('models/frontend/commentsManager.php');

function listTickets ()
{
    $ticketsManager = new \Allan\Blog\Projet_4\Model\TicketsManager();
    $tickets = $ticketsManager->getTickets();

    if ($tickets == false) {
        throw new Exception('Impossible de lire les chapitres ! ');
    } else {
        require('views/frontend/homeview.php');
    }
}

function ticket() 
{
    $ticketManager = new \Allan\Blog\Projet_4\Model\TicketsManager();
    $ticket = $ticketManager->getTicket($_GET['id']);

    $commentManager = new \Allan\Blog\Projet_4\Model\CommentsManager();
    $comments = $commentManager->getComments($_GET['id']);
    
    if ($comments == false) {
        throw new Exception('Impossible de lire le chapitre ! ');
    } else {
        require('views/frontend/ticketView.php');
    }
}

function chaptersPage()
{
    $ticketsManager = new \Allan\Blog\Projet_4\Model\TicketsManager();
    $tickets = $ticketsManager->getTickets();

    if ($tickets == false) {
        throw new Exception('Impossible de lire les chapitres ! ');
    } else {
        require('views/frontend/chaptersPage.php');
    }
}

function addComment($idTicket, $author, $comment)
{
    $commentManager = new \Allan\Blog\Projet_4\Model\CommentsManager();
    $addLinesComment = $commentManager->addCommentTicket($idTicket, $author, $comment);

    if ($addLinesComment == false) {
        throw new Exception('Impossible d\'ajouté le commentaire ! ');
    } else {
        header('location: index.php?action=ticket&id='.$idTicket);
    }
}