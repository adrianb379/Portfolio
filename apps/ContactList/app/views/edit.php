<?php

    session_start();
    if (isset($_SESSION['user'])) {
        $url = explode('/', $_GET['url']);
        $id = $url[1];
        $connection = new Connection;
        $queryContacts = $connection->connection()->prepare('SELECT * FROM contacts where id = :id');
        $queryContacts->bindValue(':id', $id);
        $queryContacts->execute();
        $rows = $queryContacts->fetch(PDO::FETCH_ASSOC);
    } else {
        header('Location: login');
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar contacto</title>
        <link rel="stylesheet" href="<?php echo DIRPAGE.'/public/css/edit.css' ?>">
    </head>
    <body>

        <header>
            <p>Editar contacto</p>
        </header>

        <section>
            <div>
                <form action="../editing/<?php echo $id; ?>" method="post">
                    <input type="text" name="namee" value="<?php echo $rows['namee']; ?>" required>
                    <input type="tel" name="phone" value="<?php echo $rows['phone']; ?>" required>
                    <input type="submit" value="Atualizar">
                </form>
                <a href="<?php echo DIRPAGE; ?>"><p><< VOLVER</p></a>
            </div>
        </section>

        <script src="<?php echo DIRPAGE.'/src/edit.js'; ?>"></script>
    </body>
</html>
