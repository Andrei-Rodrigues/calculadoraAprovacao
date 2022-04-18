<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07</title>
</head>
<body style="background-color: midnightblue">

    <form action="calcula.php" method="post">
        <input type="text" name="nomeEstudante" placeholder="Nome Aluno/Aluna" required maxlength="50"><br><br>
        <input type="number" name="N1" placeholder="Nota N1" required max="10"><br><br>
        <input type="number" name="N2" placeholder="Nota N2" required max="10"><br><br>
        <input type="number" name="totalAulasCurso" placeholder="Total de aulas curso" required><br><br>
        <input type="number" name="totalFaltas" placeholder="Total de faltas" required min="0"><br><br>
        <input type="submit" value="Verificar">
    </form>
</body>
</html>