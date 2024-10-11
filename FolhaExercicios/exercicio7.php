<!DOCTYPE html>
<html>
<head>
    <title>Exercício 7</title>
</head>
<body>
    <form method="post">
        Valor à vista (R$): <input type="number" step="0.01" name="valor_vista" required><br>
        Valor da parcela (R$): <input type="number" step="0.01" name="valor_parcela" required><br>
        Número de parcelas: <input type="number" name="parcelas" required><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    function calcularJuros($valorVista, $valorParcela, $parcelas) {
        $totalFinanciado = $valorParcela * $parcelas;
        $juros = $totalFinanciado - $valorVista;
        return $juros;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorVista = $_POST['valor_vista'];
        $valorParcela = $_POST['valor_parcela'];
        $parcelas = $_POST['parcelas'];

        $juros = calcularJuros($valorVista, $valorParcela, $parcelas);

        echo "<p>O valor total dos juros pagos será de R$ " . number_format($juros, 2, ',', '.') . "</p>";
    }
    ?>
</body>
</html>
