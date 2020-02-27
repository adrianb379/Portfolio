<?php

    session_start();
    if (isset($_SESSION['user'])) {
        $status = 'active';
    } else {
        header('Location: login');
    }

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Nuevo contacto</title>
        <link rel="stylesheet" href="<?php echo DIRPAGE.'/public/css/newcontact.css' ?>">
    </head>
    <body>

        <header>
            <p>Nuevo contacto</p>
        </header>

        <section>
            <div>
                <form action="newitem" method="post">
                    <input type="text" name="namee" placeholder="Name" required>
                    <input type="tel" name="phone" placeholder="Telephone" required>
                    <input type="submit" value="Incluir">
                </form>
                <a href="<?php echo DIRPAGE; ?>"><p><< VOLVER</p></a>
            </div>
        </section>

        <script src="<?php echo DIRPAGE.'/src/newcontact.js'; ?>"></script>
    </body>
</html>
