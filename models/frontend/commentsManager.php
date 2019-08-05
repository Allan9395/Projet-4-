<?php       // Comments

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

    public function updateComment ($idComment)
    {
        $db = $this->dbConnect();
        $updateComment = $db->prepare('UPDATE comments SET report = 1 WHERE id = :idComment');
        $updateComment->execute(array('idComment' => $idComment ));

        return $updateComment;
    }

    public function commentsPosted()
    {
        $db = $this->dbConnect();
        $getComments = $db->query('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y\') AS date_jma, DATE_FORMAT(comment_date, \'%Hh%i\') AS date_hm FROM comments WHERE report= 1 ');
        
        return $getComments;
    }

    public function delateComment ($idComment)
    {
        $db = $this->dbConnect();
        $deleteComment = $db->prepare('DELETE FROM comments WHERE id= ? ');
        $deleteLinesComment = $deleteComment->execute(array($idComment));

        return $deleteLinesComment;
    }
    public function keepComment ($idComment)
    {
        $db = $this->dbConnect();
        $keepComment = $db->prepare('UPDATE comments SET report = 0 WHERE id = :idComment');
        $keepLinesComment = $keepComment->execute(array('idComment' => $idComment ));

        return $keepLinesComment;
    }
    
}