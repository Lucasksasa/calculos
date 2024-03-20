<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação de saúde</title>
</head>

<body>
    <h2>Resultado</h2>
    <?php
    $peso = $_GET["peso"];
    $altura = $_GET["altura"];

    $imc = ($peso) / ($altura * $altura);

    $imc = number_format($imc, 2);

    echo "<p>IMC: $imc</p>";

    if ($imc < 17) {
        echo "<p>muito abaixo do peso</p>";
    } elseif ($imc >= 17 && $imc <= 18.49) {
        echo "<p>Situação: abaixo do peso</p>";
    } elseif ($imc >= 18.50 && $imc <= 24.99) {
        echo "<p>Situação: peso normal</p>";
    } elseif ($imc >= 25 && $imc <= 29.99) {
        echo "<p>Situação: acima do peso</p>";
    } elseif ($imc >= 30 && $imc <= 34.99) {
        echo "<p>Situação: Obesidade I</p>";
    } elseif ($imc >= 35 && $imc <= 39.99) {
        echo "<p>Situação: Obesidade II (severa)</p>";
    } else {
        echo "<p>Situação: Obesidade III (mórbida)</p>";
    }

    ?>

    </form>
</body>

</html>