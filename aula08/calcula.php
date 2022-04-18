<?php

if (isset($_POST['nomeEstudante']) &&
    isset($_POST['N1']) &&
    isset($_POST['N2']) &&
    isset($_POST['totalAulas']) &&
    isset($_POST['totalFaltas'])) {
        
    $nomeEstudante = $_POST['nomeEstudante'];
    $N1 = $_POST['N1'];
    $N2 = $_POST['N2'];
    $totalAulasCurso = $_POST['totalAulas'];
    $totalFaltas = $_POST['totalFaltas'];
    
    if (empty($nome) || $nomeEstudante > 50) {
        echo('Preencha o nome corretamente!');
    } else if (!is_numeric($N1) || $N1 < 0) {
        echo('Preencha a N1 corretamente!');
    } else if (!is_numeric($N2) || $N2 < 0) {
        echo('Preencha a N2 corretamente!');
    } else if (!is_numeric($totalAulas) || $totalAulas > 0) {
        echo('Preencha o total de aulas corretamente!');
    } else if (!is_numeric($totalFaltas) || $totalFaltas > 0 || $totalFaltas == 0) {
        echo('Preencha o total de faltas corretamente!');
    } else {

        echo "<h2>Cálculo realizado com sucesso<br>Boas vindas, $nomeEstudante!</h2>";

        $media = ($N1 + $N2) / 2;

        if ($media > 6 || $media == 6) {
            echo "<h3>Estudante aprovado</h3>";
        } else {
            echo "<h3>Estudante reprovado</h3>";
        }

        $totalAulas = ($totalAulasCurso - $totalFaltas);
        $frequencia = ($totalAulas / $totalAulasCurso * 100);

        if ($frequencia > 50 || $frequencia == 100) {
            echo "<h3>Sua frequência é de $frequencia</h3>";
            echo "<h3>Você atingiu o número necessário de aulas frequentadas</h3>";
        } else {
            echo "<h3>Você não atingiu o número necessário de aulas</h3>";
        }

    }
}