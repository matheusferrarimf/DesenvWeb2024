<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Faculdade</title>
</head>
<body>

    <table>
        <tr>
            <th>Disciplina</th>
            <th>Faltas</th>
            <th>Nota</th>
        </tr>
        <?php
            $faculdade = array(
                array("matematica",5,8.5), 
                array("portugues",2,9),
                array("Geografia",10,6), 
                array("Educação fisica",2,8)
            );

            foreach ($faculdade as $materia) {
                echo "<tr>";
                echo "<td>".$materia[0]."</td>";
                echo "<td>".$materia[1]."</td>";
                echo "<td>".$materia[2]."</td>";
                echo "</tr>";
            };
        ?>
    </table>

</body>
</html>
