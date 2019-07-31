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


}