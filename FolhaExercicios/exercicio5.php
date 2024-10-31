<!DOCTYPE html>
<html>
<head>
    <title>Exercício 5</title>
</head>
<body>
    <form method="post">
        Base (em metros): <input type="number" name="base" step="0.01" required><br>
        Altura (em metros): <input type="number" name="altura" step="0.01" required><br>
        <input type="submit" value="Calcular área">
    </form>

    <?php
    function calcularAreaTriangulo($base, $altura) {
        return ($base * $altura) / 2;
    }

    function exibirAreaTriangulo($base, $altura) {
        $area = calcularAreaTriangulo($base, $altura);
        echo "<p>A área do triângulo retângulo com base $base metros e altura $altura metros é $area metros quadrados.</p>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        exibirAreaTriangulo($base, $altura);
    }
    ?>
</body>
</html>
