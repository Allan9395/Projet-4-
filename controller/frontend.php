<?php

require_once('models/frontend/ticketsManager.php');

function listTickets ()
{
    $ticketsManager = new \Allan\Blog\Projet_4\Model\TicketsManager();
    $tickets = $ticketsManager->getTickets();

    require('views/frontend/homeview.php');
}

function ticket() 
{
    $ticketManager = new \Allan\Blog\Projet_4\Model\TicketsManager();
    $ticket = $ticketManager->getTicket($_GET['id']);

    require('views/frontend/ticketView.php');
}
