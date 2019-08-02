<?php
namespace Allan\Blog\Projet_4\Model;

require_once('models/frontend/manager.php');

class ChaptersManager extends Manager
{
    public function newChapters($titleNewChapter, $descriptionNewChapter, $contentNewChapter)
    {
        $db = $this->dbConnect();

        $addChapter = $db->prepare('INSERT INTO tickets (title, contents, ticketDescription, creation_date) VALUE(?, ?, ?, NOW())');
        $addLinesChapter = $addChapter->execute(array($titleNewChapter, $contentNewChapter, $descriptionNewChapter));

        return $addLinesChapter;

    }

    public function deleteChapter($idChapter)
    {
        $db = $this->dbConnect();

        $deleteChapter = $db->prepare('DELETE FROM tickets WHERE id= ? ');
        $deleteLinesChapter = $deleteChapter->execute(array($idChapter));

        return $deleteLinesChapter;
    }

    public function delateComment($idChapter)
    {
        $db = $this->dbConnect();

        $deleteComment = $db->prepare('DELETE FROM comments WHERE id_tickets= ? ');
        $deleteLinesComment = $deleteComment->execute(array($idChapter));

        return $deleteLinesComment;
    }

    public function chapterToEdit($idChapter)
    {
        $db = $this->dbConnect();

        $getChapter = $db->prepare('SELECT id, title, ticketDescription, contents FROM tickets WHERE id = ?');
        $getChapter->execute(array($idChapter));

        return $getChapter;
    }

    public function updateChapter($idChapter, $newTitle, $newDescription, $newContent)
    {
        $db = $this->dbConnect();

        $update = $db->prepare('UPDATE tickets SET title = :newTitle, contents = :newContent, ticketDescription = :newDescription WHERE id = :idChapter');
        $update->execute(array(
            'newTitle' => $newTitle,
            'newContent' => $newContent,
            'newDescription' => $newDescription,
            'idChapter' => $idChapter
        ));

        return $update;
    }
}   
