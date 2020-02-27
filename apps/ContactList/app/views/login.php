<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
        <link rel="stylesheet" href="<?php echo DIRPAGE.'/public/css/login.css' ?>">
    </head>
    <body>

        <header>
            <p>Acceso</p>
        </header>

        <section>
            <div>
                <form action="loging" method="post">
                    <input type="email" name="email" placeholder="E-mail" required>
                    <input type="password" name="pass" placeholder="Password" required>
                    <input type="submit" value="Entrar">
                </form>
                <p>Aun no tienes registro? <a href="signup">Click aqui</a></p>
            </div>
        </section>

        <script src="<?php echo DIRPAGE.'/src/login.js'; ?>"></script>
    </body>
</html>
