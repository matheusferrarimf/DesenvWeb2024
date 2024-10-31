<!DOCTYPE html>
<html>
<head>
    <title>Exercício 4</title>
</head>
<body>
    <form method="post">
        Lado a (em metros): <input type="number" name="lado_a" step="0.01" required><br>
        Lado b (em metros): <input type="number" name="lado_b" step="0.01" required><br>
        <input type="submit" value="Calcular área">
    </form>

    <?php
    function calcularAreaRetangulo($ladoA, $ladoB) {
        return $ladoA * $ladoB;
    }

    function exibirAreaRetangulo($ladoA, $ladoB) {
        $area = calcularAreaRetangulo($ladoA, $ladoB);
        if ($area > 10) {
            echo "<h1>A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados.</h1>";
        } else {
            echo "<h3>A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados.</h3>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ladoA = $_POST['lado_a'];
        $ladoB = $_POST['lado_b'];
        exibirAreaRetangulo($ladoA, $ladoB);
    }
    ?>
</body>
</html>
