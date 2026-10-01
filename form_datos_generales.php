<?php
// Nomenclatura  Hungaro Camello
$txtNombre = "";
$fltOperando1 = 0.00;
$fltOperando2 = 0.00;

$selectedVerbose = "result";

$fltResultado = 0.00;

$txtResultMsg = "";

$operacion = "";
if (isset($_POST["btnEnviar"])) {
    $txtNombre = $_POST["txtNombre"];
}

if (isset($_POST["btnAdd"])) {
    $fltOperando1 = floatval($_POST["fltOperador1"] ?? "0.00");
    $fltOperando2 = floatval($_POST["fltOperador2"] ?? "0.00");
    $selectedVerbose = $_POST["cmbVerbose"] ?? "result";
    $operacion = "+";
    $fltResultado = $fltOperando1 + $fltOperando2;
} /* elseif ( otra expresión booleana) {

} else {

}
*/

if (isset($_POST["btnSub"])) {
    $fltOperando1 = floatval($_POST["fltOperador1"] ?? "0.00");
    $fltOperando2 = floatval($_POST["fltOperador2"] ?? "0.00");
    $selectedVerbose = $_POST["cmbVerbose"] ?? "result";
    $operacion = "-";
    $fltResultado = $fltOperando1 - $fltOperando2;
}


if (!empty($operacion)) {
    switch ($selectedVerbose) {
        case "result":
            $txtResultMsg = number_format($fltResultado, 2);
            break;
        case "mild":
            $txtResultMsg = number_format($fltOperando1, 2)
                . " " . $operacion . " " .  number_format($fltOperando2, 2)
                . " = " . number_format($fltResultado, 2);

            break;
        case "verbose":
            $txtResultMsg = "El usuario decide realizar la operación: <br/>&nbsp;&nbsp;" . number_format($fltOperando1, 2)
                . "<br/>" . $operacion . " " .  number_format($fltOperando2, 2)
                . "<br/> -------------- <br/>&nbsp;&nbsp;" . number_format($fltResultado, 2);
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Generales</title>
</head>

<body>
    <h1>Datos Generales</h1>
    <form action="form_datos_generales.php" method="post">
        <label for="txtNombre">Nombre Completo</label>
        <input type="text" id="txtNombre" name="txtNombre"
            placeholder="Nombre Completo" />
        <br />
        <label for="fltOperador1">Operando 1</label>
        <input type="number" id="fltOperador1" name="fltOperador1" max="100" min="-100"
            placeholder="Un Valor entre -100.00 y 100.00" />
        <br />
        <label for="fltOperador2">Operando 2</label>
        <input type="number" id="fltOperador2" name="fltOperador2" max="100" min="-100"
            placeholder="Un Valor entre -100.00 y 100.00" />
        <br />
        <label for="cmbVerbose">Verbose Level</label>
        <select id="cmbVerbose" name="cmbVerbose">
            <option value="result">Solo Resultado</option>
            <option value="mild">Formula</option>
            <option value="verbose">Extended</option>
        </select>
        <br />
        <button type="submit" name="btnAdd">
            Sumar
        </button>
        <button type="submit" name="btnSub">
            Restar
        </button>
        <button type="submit" name="btnMul">
            Multiplicar
        </button>
        <button type="submit" name="btnDiv">
            Dividir
        </button>
        <button type="submit" name="btnEnviar">
            Enviar
        </button>
    </form>
    <section>
        <?php
        if ($txtNombre !== "") {
            echo "Bienvenido " . $txtNombre;
        }
        if (!empty($txtResultMsg)) {
            echo '<hr/>' . $txtResultMsg;
        }
        ?>
    </section>
</body>

</html>