<!DOCTYPE html>
<html>
<head>
    <title>Exercício 1</title>
</head>
<body>
    <form method="post">
        Valor 1: <input type="number" name="valor1" required><br>
        Valor 2: <input type="number" name="valor2" required><br>
        Valor 3: <input type="number" name="valor3" required><br>
        <input type="submit" value="Somar">
    </form>

    <?php
    function somar($v1, $v2, $v3) {
        return $v1 + $v2 + $v3;
    }

    function exibirResultado($resultado, $v1, $v2, $v3) {
        if ($v1 > 10) {
            echo "<p style='color: blue;'>O resultado é: $resultado</p>";
        } elseif ($v2 < $v3) {
            echo "<p style='color: green;'>O resultado é: $resultado</p>";
        } elseif ($v3 < $v1 && $v3 < $v2) {
            echo "<p style='color: red;'>O resultado é: $resultado</p>";
        } else {
            echo "<p>O resultado é: $resultado</p>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $v1 = $_POST['valor1'];
        $v2 = $_POST['valor2'];
        $v3 = $_POST['valor3'];

        $resultado = somar($v1, $v2, $v3);
        exibirResultado($resultado, $v1, $v2, $v3);
    }
    ?>
</body>
</html>
