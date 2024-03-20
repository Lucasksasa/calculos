<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de notas</title>
</head>
<body>
<h2>Resultado</h2>
    <?php
    $nome = $_GET["nome"];
    $n1 = $_GET["nota1"];
    $n2 = $_GET["nota2"];

    $media = ($n1 + $n2)/2;

    $media = number_format($media, 1);

    echo "<p>Olá, $nome!</p>";
    echo "<p>Média total: $media</p>";

    if ($media < 4) {
        echo "<p>Situação: Reprovado</p>";
    } elseif ($media >= 4 && $media <= 5.99) {
        echo "<p>Situação: Exame final</p>";
    } elseif ($media >= 6) {
        echo "<p>Situação: Aprovado</p>";
    }

    ?>

    </form>
</body>
</html>