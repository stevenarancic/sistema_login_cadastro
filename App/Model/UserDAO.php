<?php

namespace App\Model;

use App\Model\Conn;

class UserDAO
{
    function createUser(User $user)
    {
        $sql = 'INSERT INTO user(name, login, password) VALUES(:name, :login, :password)';

        $statement = Conn::getInstance()->prepare($sql);

        $statement->bindValue(':name', $user->getName());
        $statement->bindValue(':login', $user->getLogin());
        $statement->bindValue(':password', md5($user->getPass()));

        $statement->execute();
    }
    function logUser($login, $password)
    {
        $sql = "SELECT * FROM user WHERE login=:login AND password=:password";

        $statement = Conn::getInstance()->prepare($sql);

        $statement->bindValue(':login', $login);
        $statement->bindValue(':password', md5($password));

        $statement->execute();

        if ($statement->rowCount() > 0) {
            header('location: ../View/home.php');
        } else {
            echo 'erro';
        }
    }
}
