<!DOCTYPE html>
<html>
<head>
    <title>Exercício 6</title>
</head>
<body>
    <form method="post">
        Preço por Kg da maçã: <input type="number" name="preco_maca" step="0.01" required><br>
        Quantidade de maçã (Kg): <input type="number" name="qtd_maca" step="0.01" required><br>
        Preço por Kg da melancia: <input type="number" name="preco_melancia" step="0.01" required><br>
        Quantidade de melancia (Kg): <input type="number" name="qtd_melancia" step="0.01" required><br>
        Preço por Kg da laranja: <input type="number" name="preco_laranja" step="0.01" required><br>
        Quantidade de laranja (Kg): <input type="number" name="qtd_laranja" step="0.01" required><br>
        Preço por Kg do repolho: <input type="number" name="preco_repolho" step="0.01" required><br>
        Quantidade de repolho (Kg): <input type="number" name="qtd_repolho" step="0.01" required><br>
        Preço por Kg da cenoura: <input type="number" name="preco_cenoura" step="0.01" required><br>
        Quantidade de cenoura (Kg): <input type="number" name="qtd_cenoura" step="0.01" required><br>
        Preço por Kg da batatinha: <input type="number" name="preco_batata" step="0.01" required><br>
        Quantidade de batatinha (Kg): <input type="number" name="qtd_batata" step="0.01" required><br>
        <input type="submit" value="Calcular total da compra">
    </form>

    <?php
    function calcularGasto($preco, $quantidade) {
        return $preco * $quantidade;
    }

    function verificarCompra($total) {
        $saldo = 50.00;
        if ($total < $saldo) {
            $restante = $saldo - $total;
            echo "<p style='color: blue;'>Joãozinho ainda pode gastar R$ " . number_format($restante, 2, ',', '.') . "</p>";
        } elseif ($total > $saldo) {
            $falta = $total - $saldo;
            echo "<p style='color: red;'>Faltou R$ " . number_format($falta, 2, ',', '.') . " para pagar a compra.</p>";
        } else {
            echo "<p style='color: green;'>O saldo para compras foi esgotado.</p>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $total = calcularGasto($_POST['preco_maca'], $_POST['qtd_maca']) +
                 calcularGasto($_POST['preco_melancia'], $_POST['qtd_melancia']) +
                 calcularGasto($_POST['preco_laranja'], $_POST['qtd_laranja']) +
                 calcularGasto($_POST['preco_repolho'], $_POST['qtd_repolho']) +
                 calcularGasto($_POST['preco_cenoura'], $_POST['qtd_cenoura']) +
                 calcularGasto($_POST['preco_batata'], $_POST['qtd_batata']);

        echo "<p>O valor total da compra é R$ " . number_format($total, 2, ',', '.') . "</p>";
        verificarCompra($total);
    }
    ?>
</body>
</html>
