<?php

namespace App\Controller;

require_once '../../vendor/autoload.php';

use App\Model as Model;

$user = new Model\User();
$userDAO = new Model\UserDAO();

$user->setName($_POST['name']);
$user->setLogin($_POST['login']);
$user->setPass($_POST['password']);

$userDAO->createUser($user);
header('location: ../../index.php');
