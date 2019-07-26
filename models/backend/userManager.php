<?php
namespace Allan\Blog\Projet_4\Model;

require_once('models/frontend/manager.php');

class UserManager extends Manager
{
    public function addUsers($username, $email, $password) 
    {
        $db = $this->dbConnect();

        $req = $db->prepare('INSERT INTO users(username, password, email, resgistration_date) VALUE(?, ?, ?, NOW())');
        $req->execute(array($username, $password, $email));

        return $req;
    }

    public function userConnection($usernameConnect, $passwordConnect)
    {
        $db = $this->dbConnect();

        $req = $db->prepare('SELECT id, password FROM users WHERE username = ?');
        $req->execute(array($usernameConnect));
        
        $userConnect = $req->fetch();

        return $userConnect;
    }
}