<?php

    session_start();
    if (isset($_SESSION['user'])) {
        $connection = new Connection;
        $queryContacts = $connection->connection()->prepare('SELECT * FROM contacts where own = :own');
        $queryContacts->bindValue(':own', $_SESSION['user']);
        $queryContacts->execute();
    } else {
        header('Location: login');
    }

?>

<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Lista de Contactos</title>
        <link rel="stylesheet" href="<?php echo DIRPAGE.'/public/css/index.css' ?>">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>

        <header>
            <ul>
                <li>LISTA DE CONTACTOS</li>
                <a href="logout"><li><i class="material-icons">power_settings_new</i></li></a>
            </ul>
        </header>

        <section>
            <div>
                <p><a href="newcontact"><button>+ Nuevos</button></a></p>
            </div>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php if ($queryContacts->rowCount() == 0) { ?>
                            <tr>
                                <td></td>
                                <td>Noy hay contactos registrados</td>
                            </tr>
                        <?php } ?>

                        <?php while ($rows = $queryContacts->fetch(PDO::FETCH_ASSOC)){ ?>

                            <tr>
                                <td><?php echo $rows['id']; ?></td>
                                <td><?php echo $rows['namee']; ?></td>
                                <td><?php echo $rows['phone']; ?></td>
                                <td>
                                    <a href="edit/<?php echo $rows['id']; ?>"><i class="material-icons">Crear</i></a>
                                    <a href="delete/<?php echo $rows['id']; ?>"><i class="material-icons">Borrar</i></a>
                                </td>
                            </tr>

                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </section>

    </body>
</html>
