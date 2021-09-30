<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../node_modules/bulma/css/bulma.min.css">

    <title>Document</title>
</head>

<body>
    <section class="hero is-medium is-primary has-text-centered">
        <div class="hero-body">
            <p class="title">
                Login
            </p>
            <p class="subtitle">
                Não tem uma conta? <a href="../View/cadastro.php">cadastre-se.</a>
            </p>
        </div>
    </section>
    <div class="container">
        <section class="section">
            <form action="../Controller/LogUser.php" method="post">
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
                <br>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Entrar</button>
                    </div>
                    <div class="control">
                        <button class="button is-link is-light" type="button">
                            <a href="../../index.php">Voltar para o início</a></button>
                    </div>
                </div>
            </form>
        </section>
    </div>
    <?php include_once '../structure/footer.php' ?>
</body>

</html>