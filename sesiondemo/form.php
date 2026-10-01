<?php
/*
include "library.php";

include_once "library.php";

require "library.php";

require_once "library.php";

*/

require_once "library.php";

$txtNombre = "";
$txtEmail = "";
$txtTelefono = "";

if (isset($_POST["btnEnviar"])) {
    $txtNombre = $_POST["txtNombre"] ?? "";
    $txtEmail = $_POST["txtEmail"] ?? "";
    $txtTelefono = $_POST["txtTelefono"] ?? "";

    addContact($txtNombre, $txtEmail, $txtTelefono);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de Formulario</title>
</head>

<body>
    <h1>Formulario</h1>
    <form action="form.php" method="post">
        <label for="txtNombre">Nombre</label>
        <input type="text" name="txtNombre" id="txtNombre"
            placeholder="Nombre Completo" value="<?php echo $txtNombre; ?>" />
        <br />
        <label for="txtEmail">Correo Electrónico</label>
        <input type="email" name="txtEmail" id="txtEmail"
            placeholder="correo electrónico" value="<?php echo $txtEmail; ?>" />
        <br />
        <label for="txtTelefono">Teléfono</label>
        <input type="text" name="txtTelefono" id="txtTelefono"
            placeholder="teléfono" value="<?php echo $txtTelefono; ?>" />
        <br />
        <button type="submit" name="btnEnviar">Guardar</button>
    </form>
</body>

</html>