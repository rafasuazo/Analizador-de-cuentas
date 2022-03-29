<?php
require_once 'cuentaslib.php';
$txtTexto = "";
if (isset($_POST["btnBuscar"])) {
    $txtTexto = $_POST["txtTexto"];
    $arrResultado = buscarCuentas($txtTexto);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analizador de Cuentas</title>
</head>
<body>
    <h1>ANALIZADOR DE CUENTAS</h1>
    <section>
        <form action="cuentas.php" method="post">
            <label for="txtTexto">Texto:</label>
            <br><br>
            <textarea name="txtTexto" id="txtTexto" cols="30" rows="10" placeholder="Texto a Buscar:"><?php echo $txtTexto; ?></textarea>
            <br><br>
            <button type="submit" name="btnBuscar">Analizar Cuentas</button>
        </form>
    </section>
    <section>
        <h1>Cuentas Encontradas:</h1>
        <pre>
        <?php

        foreach ($arrResultado as $valor) {
            if (is_numeric($valor)) {
                echo sprintf("\n%s", $valor);
            }
        }
        ?>
        </pre>
    </section>
</body>
</html>