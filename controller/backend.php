<?php

require_once('models/backend/userManager.php');
require_once('models/frontend/ticketsManager.php');
require_once('models/frontend/commentsManager.php');

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
        throw new Exeption('Erreur: Le pseudo n\'est pas valide');
    }

    if(preg_match('#^[\w.-]+@[\w.-]{2,}\.[a-z]{2,4}$#', $email)) {
        $email = $email;
        $verification2 = true ;
    }

    if (preg_match('#^([a-zA-Z0-9]{2,36})$#', $password)) {
        $password = $password;
        $verification3 = true ;
    }

    if ($password == $password_confirm) {

        $password = password_hash($password, PASSWORD_DEFAULT);
        $verification4 = true ;
    }

    $userManager = new \Allan\Blog\Projet_4\Model\userManager();
    $addUsers = $userManager->addUsers($username, $email, $password);

    if ($verification1 == true && $verification2 == true && $verification3 ==true && $verification4 == true ) {
        header('location: index.php?action=registrationConfirmation');
    }
}

function identityCheck($usernameConnect, $passwordConnect) 
{

    $usernameConnect = trim(htmlspecialchars($usernameConnect));
    $passwordConnect = trim(htmlspecialchars($passwordConnect));


    $userManager = new \Allan\Blog\Projet_4\Model\userManager();
    $identityUser = $userManager->userConnection($usernameConnect,  $passwordConnect);


    $identicalEncryptedPassword = password_verify($passwordConnect, $identityUser['password']);


    if (!$identityUser) {
        echo 'Mauvais identifiant ou mot de passe !';
    } else {
 
        //echo $identityUser['id']. ' <br> '. $usernameConnect. ' <br>'. $passwordConnect. '<br>'. $identityUser['password']. '<br>'. $identicalEncryptedPassword. '<br>';

        if ($identicalEncryptedPassword) {
            session_start();
            $_SESSION['isAdmin'] = true;
            $_SESSION['id'] = $identityUser['id'];
            $_SESSION['username'] = $usernameConnect;
            header('Location: index.php?action=admin');
        } else {
            echo 'Mauvais identifiant ou mot de passe !';
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

function adminAddChapter()
{
    
}