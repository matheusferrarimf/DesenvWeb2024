<!DOCTYPE html>
<html>
<head>
    <title>Exercício 9</title>
</head>
<body>
    <form method="post">
        Valor à vista da moto (R$): <input type="number" step="0.01" name="valor_moto" required><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    function calcularMontante($capital, $juros, $tempo) {
        return $capital * pow((1 + $juros), $tempo);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorMoto = $_POST['valor_moto'];

        $juros24 = 2.0 / 100;
        $juros36 = 2.3 / 100;
        $juros48 = 2.6 / 100;
        $juros60 = 2.9 / 100;

        $montante24 = calcularMontante($valorMoto, $juros24, 24);
        $montante36 = calcularMontante($valorMoto, $juros36, 36);
        $montante48 = calcularMontante($valorMoto, $juros48, 48);
        $montante60 = calcularMontante($valorMoto, $juros60, 60);

        echo "<p>Valor total em 24 parcelas com juros compostos: R$ " . number_format($montante24, 2, ',', '.') . "</p>";
        echo "<p>Valor total em 36 parcelas com juros compostos: R$ " . number_format($montante36, 2, ',', '.') . "</p>";
        echo "<p>Valor total em 48 parcelas com juros compostos: R$ " . number_format($montante48, 2, ',', '.') . "</p>";
        echo "<p>Valor total em 60 parcelas com juros compostos: R$ " . number_format($montante60, 2, ',', '.') . "</p>";
    }
    ?>
</body>
</html>
