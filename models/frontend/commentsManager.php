<?php
namespace Allan\Blog\Projet_4\Model;

require_once('manager.php');

class CommentsManager extends Manager
{
    public function getComments($idTicket) 
    {
        $db = $this->dbConnect();

        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y\') AS date_jma, DATE_FORMAT(comment_date, \'%Hh%i\') AS date_hm FROM comments WHERE id_tickets = ? ORDER BY comment_date DESC');
        $comments->execute(array($idTicket));
        
        return $comments;
    }

    public function addCommentTicket($idTicket, $author, $comment)
    {
        $db = $this->dbConnect();

        $addComment = $db->prepare('INSERT INTO comments(id_tickets, author, comment, comment_date) VALUE(?, ?, ?, NOW())');
        $addLinesComment = $addComment->execute(array($idTicket, $author, $comment));

        return $addLinesComment;
    }
}