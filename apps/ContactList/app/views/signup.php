<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastro</title>
        <link rel="stylesheet" href="<?php echo DIRPAGE.'/public/css/signup.css' ?>">
    </head>
    <body>

        <header>
            <p>Cadastro</p>
        </header>

        <section>
            <div>
                <form action="signingup" method="post">
                    <input type="text" name="namee" placeholder="Nome" required>
                    <input type="email" name="email" placeholder="E-mail" required>
                    <input type="password" name="pass" placeholder="Senha" required>
                    <input type="submit" value="Cadastrar">
                </form>
                <p>Já possui cadastro? <a href="login">Clique aqui</a></p>
            </div>
        </section>

        <script src="<?php echo DIRPAGE.'/src/signup.js'; ?>"></script>
    </body>
</html>