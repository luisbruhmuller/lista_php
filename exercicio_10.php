<!-- Uma escola precisa automatizar o cálculo das médias dos estudantes.
Crie uma função chamada calcularMedia() que receba um vetor contendo as notas
de um aluno.
A função deverá retornar:
● Maior nota;
● Menor nota;
● Média;
● Situação final (Aprovado, Recuperação ou Reprovado). -->

<?php
function calcularMedia($notas) {
    $maiorNota = max($notas);
    $menorNota = min($notas);
    $media = array_sum($notas) / count($notas);

    if ($media >= 7) {
        $situacao = 'Aprovado';
    } elseif ($media >= 5) {
        $situacao = 'Recuperação';
    } else {
        $situacao = 'Reprovado';
    }

    return [
        'maiorNota' => $maiorNota,
        'menorNota' => $menorNota,
        'media' => $media,
        'situacao' => $situacao
    ];
}

$notas = [8, 6, 7, 9, 5];
$resultados = calcularMedia($notas);
echo "notas: " . implode(", ", $notas) . "<br>";
echo "Maior nota: " . $resultados['maiorNota'] . "<br>";
echo "Menor nota: " . $resultados['menorNota'] . "<br>";
echo "Média: " . $resultados['media'] . "<br>";
echo "Situação: " . $resultados['situacao'] . "<br>";

?>