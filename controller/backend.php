<?php

require_once('models/backend/userManager.php');
require_once('models/backend/chaptersManager.php');

require_once('models/frontend/ticketsManager.php');
require_once('models/frontend/commentsManager.php');

// Create and verify the user with regular expressions

function dataVerification($username, $email, $password, $password_confirm)
{
    
    $username = trim(htmlspecialchars($username));
    $email = trim(htmlspecialchars($email));
    $password = trim(htmlspecialchars($password));
    $password_confirm = trim(htmlspecialchars($password_confirm));

    if (preg_match('#^([a-zA-Z0-9]{2,36})$#', $username)) {
        $username = $username;
        $verification1 = true ;
    } else {
        throw new Exception('Erreur: Le pseudo n\'est pas valide');
    }

    if(preg_match('#^[\w.-]+@[\w.-]{2,}\.[a-z]{2,4}$#', $email)) {
        $email = $email;
        $verification2 = true ;
    } else {
        throw new Exception('Erreur: Le mail n\'est pas valide');
    }

    if (preg_match('#^([a-zA-Z0-9]{2,36})$#', $password)) {
        $password = $password;
        $verification3 = true ;
    }else {
        throw new Exception('Erreur: Le mot de passe n\'est pas valide');
    }

    if ($password == $password_confirm) {

        $password = password_hash($password, PASSWORD_DEFAULT);
        $verification4 = true ;
    }

    $userManager = new \Allan\Blog\Projet_4\Model\userManager();
    $addUsers = $userManager->addUsers($username, $email, $password);

    if ($verification1 == true && $verification2 == true && $verification3 ==true && $verification4 == true ) {
        header('location: index.php?action=registrationConfirmation');
    } else {
        throw new Exception('Erreur: Le formulaire d\'inscription n\'a pas été remplis corectement');
    }
}

// Verify the password of the user
function identityCheck($usernameConnect, $passwordConnect) 
{

    $usernameConnect = trim(htmlspecialchars($usernameConnect));
    $passwordConnect = trim(htmlspecialchars($passwordConnect));


    $userManager = new \Allan\Blog\Projet_4\Model\userManager();
    $identityUser = $userManager->userConnection($usernameConnect,  $passwordConnect);


    $identicalEncryptedPassword = password_verify($passwordConnect, $identityUser['password']);


    if (!$identityUser) {
        throw new Exception(' Mauvais identifiant ou mot de passe !');
    } else {
 
        if ($identicalEncryptedPassword) {
            setcookie('username', $usernameConnect, time() + 365*24*3600, null, null, false, true);
            header('Location: index.php?action=admin');
        } else {
            throw new Exception(' Mauvais identifiant ou mot de passe !');
        }
    } 

}

function listTicketsAdmin ()
{
    $ticketsManager = new \Allan\Blog\Projet_4\Model\TicketsManager();
    $tickets = $ticketsManager->getTickets();

    require('views/backend/admin.php');
}

function adminTicket() 
{
    $ticketManager = new \Allan\Blog\Projet_4\Model\TicketsManager();
    $ticket = $ticketManager->getTicket($_GET['id']);

    $commentManager = new \Allan\Blog\Projet_4\Model\CommentsManager();
    $comments = $commentManager->getComments($_GET['id']);
    
    require('views/backend/adminTicketView.php');
}

function addNewChapter($titleNewChapter, $descriptionNewChapter, $contentNewChapter)
{
    $chapterManager = new \Allan\Blog\Projet_4\Model\ChaptersManager();
    $addLinesChapter = $chapterManager->newChapters($titleNewChapter, $descriptionNewChapter, $contentNewChapter);

    if ($addLinesChapter == false) {
        throw new Exception('Impossible d\'ajouté le nouveau chapitre ! ');
    } else {
        header('location: index.php?action=admin');
    }
}

function deleteChapter($idChapter)
{
    $chapterManager = new \Allan\Blog\Projet_4\Model\ChaptersManager();
    $deleteLinesChapter = $chapterManager->deleteChapter($idChapter);

    if ($deleteLinesChapter == false) {
        throw new Exception('Impossible de supprimer le chapitre ! ');
    } else {
        $deleteLinesComments = $chapterManager->delateComment($idChapter);
        header('location: index.php?action=admin');
    }
}

function chapterToEdit($idChapter)
{
    $chapterManager = new \Allan\Blog\Projet_4\Model\ChaptersManager();
    $chapterToEdit = $chapterManager->chapterToEdit($idChapter);

    if ($chapterToEdit == false) {
        throw new Exception('Impossible de recuperer le chapitre ! ');
    } else {
       require('views/backend/updateChapterView.php');
    }

}

function updateChapter ($idChapter, $newTitle, $newDescription, $newContent)
{
    $chapterManager = new \Allan\Blog\Projet_4\Model\ChaptersManager();
    $updateLinesChapter = $chapterManager->updateChapter($idChapter, $newTitle, $newDescription, $newContent);

    if ($updateLinesChapter == false) {
        throw new Exception('Impossible de modifier le chapitre ! ');
    } else {
       header('Location: index.php?action=admin');
    }


}

    // Remove comments from chapter

function reportComment ($idComment, $idChapter)
{
    $commentManager = new \Allan\Blog\Projet_4\Model\CommentsManager();
    $updateLinesComment = $commentManager->updateComment($idComment);

    if ($updateLinesComment == false) {
        throw new Exception('Impossible de modifier le commentaire ! ');
    } else {
       header('Location: index.php?action=ticket&id='.$idChapter);
    }

}

    // Commented comments management
function commentsPosted()
{
    $commentManager = new \Allan\Blog\Projet_4\Model\CommentsManager();
    $commentsPosted = $commentManager->commentsPosted();

    require('views/backend/alertsComments.php');
}

function delateComment ($idComment)
{
    $commentManager = new \Allan\Blog\Projet_4\Model\CommentsManager();
    $delateLinesComment = $commentManager->delateComment($idComment);

    if ($delateLinesComment == false) {
        throw new Exception('Impossible de supprimer le commentaire ! ');
    } else {
        header('Location: index.php?action=alertsComments');
    }
}
 // Signaler un commentaire
 
function keepComment ($idComment)
{
    $commentManager = new \Allan\Blog\Projet_4\Model\CommentsManager();
    $keepLinesComment = $commentManager->keepComment($idComment);

    if ($keepLinesComment == false) {
        throw new Exception('Impossible de garder le commentaire ! ');
    } else {
        header('Location: index.php?action=alertsComments');
    }
}