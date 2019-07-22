<?php
namespace Allan\Blog\Projet_4\Model;

require_once('models/frontend/manager.php');

class TicketsManager extends Manager 
{
    public function getTickets()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM tickets ORDER BY creation_date DESC LIMIT 0, 5');

        return $req;
    }
}