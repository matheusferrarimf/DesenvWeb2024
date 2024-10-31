<!DOCTYPE html>
<html>
<head>
    <title>Exercício 2</title>
</head>
<body>
    <form method="post">
        Valor: <input type="number" name="numero" required><br>
        <input type="submit" value="Verificar">
    </form>

<?php
    function divisivelPorDois($numero) {
        return $numero % 2 == 0;
    }

    function exibirDivisibilidade($numero) {
        if (divisivelPorDois($numero)) {
            echo "<p>O valor $numero é divisível por 2.</p>";
        } else {
            echo "<p>O valor $numero não é divisível por 2.</p>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];
        exibirDivisibilidade($numero);
    }
?>
</body>
</html>
