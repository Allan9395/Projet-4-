<?php
namespace Allan\Blog\Projet_4\Model;

require_once('manager.php');

class TicketsManager extends Manager 
{
    public function getTickets()
    {
        $db = $this->dbConnect();

        $req = $db->query('SELECT id, title	, ticketDescription, contents, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS date_jma, DATE_FORMAT(creation_date, \'%Hh%i\') AS date_hm FROM tickets ORDER BY creation_date DESC LIMIT 0, 5');

        return $req;
    }

    public function getTicket($idTicket)
    {
        $db = $this->dbConnect();
        
        $reqTicket = $db->prepare('SELECT id, title	, ticketDescription, contents, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS date_jma, DATE_FORMAT(creation_date, \'%Hh%i\') AS date_hm FROM tickets WHERE id = ?');
        $reqTicket->execute(array($idTicket));
        $ticket = $reqTicket->fetch();

        return $ticket;
    }
    

}