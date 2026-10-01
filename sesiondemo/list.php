<?php
require_once "library.php";

$contactos = getContacts();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos Registrados</title>
</head>

<body>
    <h1>Contactos Registrados</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>
        </tr>
        <?php
        foreach ($contactos as $contacto) {
            echo sprintf(
                "<tr><td>%s</td><td>%s</td><td>%s</td></tr>",
                $contacto["nombre"],
                $contacto["correo"],
                $contacto["telefono"]
            );
        }
        ?>
    </table>
</body>

</html>