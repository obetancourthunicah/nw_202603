<?php

$txtNombre = "";
$intCiclos = 10;
$txtTipoCiclo = "FOR";
$arrResultBuffer = [];
$arrCicloProcesado = false;

if (isset($_POST["btnProcesar"])) {
    $txtNombre = $_POST["txtNombre"] ?? "";
    $intCiclos = intval(($_POST["intCiclos"] ?? "10"));
    $txtTipoCiclo = $_POST["txtTipoCiclo"] ?? "FOR";
    switch ($txtTipoCiclo) {
        case "FOR":
            // $arrResultBuffer[] = "Ciclo For para " . number_format($intCiclos) . " ciclos";
            $arrResultBuffer[] = sprintf("Ciclo For para %s ciclos <hr/>", number_format($intCiclos));
            $arrResultBuffer[] = "<pre>";
            for ($i = 0; $i < $intCiclos; $i++) {
                $arrResultBuffer[] = sprintf("%d\t%s <br/>", ($i + 1), $txtNombre);
            }
            $arrResultBuffer[] = "</pre>";
            // for ( $i = $intCiclos ; $i > 0; $i--) {

            // }
            break;
        case "WHILE":
            $arrResultBuffer[] = sprintf("Ciclo While para %s ciclos <hr/>", number_format($intCiclos));
            $arrResultBuffer[] = "<pre>";
            $i = 0;
            while ($i < $intCiclos) {
                $arrResultBuffer[] = sprintf("%d\t%s <br/>", ($i + 1), $txtNombre);
                $i++;
            }
            $arrResultBuffer[] = "</pre>";
            break;
        case "DO":
            $arrResultBuffer[] = sprintf("Ciclo Do-While para %s ciclos <hr/>", number_format($intCiclos));
            $arrResultBuffer[] = "<pre>";
            $i = 0;
            do {
                $arrResultBuffer[] = sprintf("%d\t%s <br/>", ($i + 1), $txtNombre);
                $i++;
            } while ($i < $intCiclos);
            $arrResultBuffer[] = "</pre>";
            break;
        default:
    }
    $arrCicloProcesado = true;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos</title>
</head>

<body>
    <h1>Ciclos en PHP</h1>
    <form action="ciclos.php" method="post">
        <label for="txtNombre">Nombre a Repetir</label>
        <input type="text" name="txtNombre" id="txtNombre"
            placeholder="Nombre a Repetir en Ciclo"
            value="<?php echo $txtNombre; ?>" />
        <br />
        <label for="intCiclos">Cantidad de Ciclos</label>
        <select name="intCiclos" id="intCiclos">
            <option value="0">0</option>
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="30">30</option>
            <option value="40">40</option>
            <option value="50">50</option>
        </select>
        <br />
        <label for="txtTipoCiclo">Tipo de Ciclo a Usar</label>
        <select name="txtTipoCiclo" id="txtTipoCiclo">
            <option value="FOR">for</option>
            <option value="WHILE">while</option>
            <option value="DO">do-while</option>
        </select>
        <br />
        <button name="btnProcesar" id="btnProcesar">Procesar</button>
    </form>

    <?php
    if ($arrCicloProcesado) {
        echo "<h2>Resultado</h2>";
        echo implode("", $arrResultBuffer);
    }
    ?>
</body>

</html>