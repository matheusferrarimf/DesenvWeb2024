<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Faculdade</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
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
            }
        ?>
    </table>

</body>
</html>
