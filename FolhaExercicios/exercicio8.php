<!DOCTYPE html>
<html>
<head>
    <title>Exercício 8</title>
</head>
<body>
    <form method="post">
        Valor à vista da moto (R$): <input type="number" step="0.01" name="valor_moto" required><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    function calcularParcelas($valorMoto, $juros, $parcelas) {
        return $valorMoto * (1 + $juros * $parcelas);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorMoto = $_POST['valor_moto'];

        $juros24 = 1.5 / 100;
        $juros36 = 2.0 / 100;
        $juros48 = 2.5 / 100;
        $juros60 = 3.0 / 100;

        $total24 = calcularParcelas($valorMoto, $juros24, 24);
        $total36 = calcularParcelas($valorMoto, $juros36, 36);
        $total48 = calcularParcelas($valorMoto, $juros48, 48);
        $total60 = calcularParcelas($valorMoto, $juros60, 60);

        echo "<p>Valor total em 24 parcelas: R$ " . number_format($total24, 2, ',', '.') . "</p>";
        echo "<p>Valor total em 36 parcelas: R$ " . number_format($total36, 2, ',', '.') . "</p>";
        echo "<p>Valor total em 48 parcelas: R$ " . number_format($total48, 2, ',', '.') . "</p>";
        echo "<p>Valor total em 60 parcelas: R$ " . number_format($total60, 2, ',', '.') . "</p>";
    }
    ?>
</body>
</html>
