<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registrarse</title>
        <link rel="stylesheet" href="<?php echo DIRPAGE.'/public/css/signup.css' ?>">
    </head>
    <body>

        <header>
            <p>Registro</p>
        </header>

        <section>
            <div>
                <form action="signingup" method="post">
                    <input type="text" name="namee" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="pass" placeholder="Password" required>
                    <input type="submit" value="Cadastrar">
                </form>
                <p>Ya esta registrado? <a href="login">Haga click aqui</a></p>
            </div>
        </section>

        <script src="<?php echo DIRPAGE.'/src/signup.js'; ?>"></script>
    </body>
</html>
