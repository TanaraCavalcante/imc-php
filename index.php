<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>

<body>
    <h1>Calcolo IMC</h1>

    <form method="post">
        <label for="peso">Peso (kg):</label>
        <input type="number" step="0.01" name="peso" required><br><br>

        <label for="altura">Altura (m):</label>
        <input type="number" step="0.01" name="altura" required><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    if ($altura > 0) {
        $imc = $peso / ($altura * $altura);
        echo "<h2>Seu IMC é: " . number_format($imc, 2) . "</h2>";

        if ($imc < 18.5) {
            echo "<p>Classificação: Abaixo do peso</p>";
        } elseif ($imc < 25) {
            echo "<p>Classificação: Peso normal</p>";
        } elseif ($imc < 30) {
            echo "<p>Classificação: Sobrepeso</p>";
        } else {
            echo "<p>Classificação: Obesidade</p>";
        }
    } else {
        echo "<p>Altura inválida!</p>";
    }

    ?>

</body>

</html>