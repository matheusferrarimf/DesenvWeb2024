<!DOCTYPE html>
<html>
<head>
    <title>Exercício 3</title>
</head>
<body>
    <form method="post">
        Lado do quadrado (em metros): <input type="number" name="lado" step="0.01" required><br>
        <input type="submit" value="Calcular área">
    </form>

    <?php
    function calcularAreaQuadrado($lado) {
        return $lado * $lado;
    }

    function exibirAreaQuadrado($lado) {
        $area = calcularAreaQuadrado($lado);
        echo "<p>A área do quadrado de lado $lado metros é $area metros quadrados.</p>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado = $_POST['lado'];
        exibirAreaQuadrado($lado);
    }
    ?>
</body>
</html>
