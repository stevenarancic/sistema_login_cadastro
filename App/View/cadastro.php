<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../node_modules/bulma/css/bulma.min.css">

    <title>Cadastro</title>
</head>

<body>
    <section class="hero is-medium is-link has-text-centered">
        <div class="hero-body">
            <p class="title">
                Criação de conta
            </p>
            <p class="subtitle">
                Já tem uma conta? <a href="../View/login.php">clique aqui.</a>
            </p>
        </div>
    </section>
    <div class="container">
        <section class="section">
            <form action="../Controller/Controller.php" method="post">
                <div class="field">
                    <label class="label" for="name">
                        Nome
                    </label>
                    <div class="control">
                        <input class="input" type="text" name="name" id="">
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="login">
                        Login
                    </label>
                    <div class="control">
                        <input class="input" type="text" name="login" id="">
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="password">
                        Senha
                        <div class="control">
                    </label>
                    <input class="input" type="password" name="password" id="">
                </div>
                <div class="field">
                    <div class="control">
                        <label class="checkbox">
                            <input type="checkbox">
                            Concordo com os <a href="#">termos e condições</a>
                        </label>
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Cadastrar</button>
                    </div>
                    <div class="control">
                        <button class="button is-link is-light" type="button">
                            <a href="../../index.php">Cancelar</a></button>
                    </div>
                </div>
            </form>
        </section>
    </div>
    <?php include_once '../structure/footer.php' ?>
</body>

</html>