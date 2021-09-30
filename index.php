<?php
require_once 'vendor/autoload.php';

// $user = new \App\Model\User();
// $userDAO = new \App\Model\UserDAO();

// $user->setName('Steve');
// $user->setLogin('steve');
// $user->setPass('123');

// $userDAO->createUser($user);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">

    <title>Login</title>
</head>

<body>
    <?php include_once 'App/structure/header.php' ?>

    <section class="hero is-link is-fullheight-with-navbar">
        <div class="hero-body">
            <p class="title">
                Sistema de login
            </p>
        </div>
    </section>

    <?php include_once 'App/structure/footer.php' ?>
</body>

</html>