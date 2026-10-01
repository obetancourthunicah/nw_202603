<?php

//Arreglos 
$arrOrdinal = [];
$arrOrdinal[] = "Hola";
$arrOrdinal[] = 123;
$arrOrdinal[5] = "Captain Planet";
$arrOrdinal[] = "Este sera indice ???";
// 
// for ($i = 0; $i <= 6; $i++) {
//     echo $arrOrdinal[$i];
// }

foreach ($arrOrdinal as $valor) {
    echo sprintf("valor: %s <br/>", $valor);
}
echo "<hr/>";
print_r($arrOrdinal);


$arrPersona = [];
$arrPersona["nombre"] = "Orlando";
$arrPersona["apellido"] = "Betancourth";
$arrPersona["telefono"] = "0000-0000";
$arrPersona["correo"] = "obetancourthunicah@gmail.com";

$arrPersona2 = [];
$arrPersona2["nombre"] = "Fulano";
$arrPersona2["apellido"] = "Betancourth";
$arrPersona2["telefono"] = "0000-0000";
$arrPersona2["correo"] = "obetancourthunicah@gmail.com";

$arrPersonas = [];
$arrPersonas[] = $arrPersona;
$arrPersonas[] = $arrPersona2;

echo "<pre>";
echo json_encode($arrPersonas, JSON_PRETTY_PRINT);
echo "</pre>";

foreach ($arrPersonas as $persona) {
    echo "<hr/>";
    foreach ($persona as $columna => $valorCampo) {
        echo sprintf("%s: %s <br/>", $columna, $valorCampo);
    }
}

// explode

// asort
// sort
// rasort
// rsort
