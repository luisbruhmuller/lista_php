<!-- Uma escola deseja organizar automaticamente a lista de alunos matriculados.
Crie uma função chamada ordenarNomes() que receba uma string contendo nomes
separados por vírgulas.
A função deverá transformar os nomes em um vetor, remover espaços
desnecessários, ordenar em ordem alfabética e retornar a lista organizada.
 -->

<?php
function ordenarNomes(string $nomes){
    // Transformar a string em um vetor, removendo espaços desnecessários
    $vetorNomes = array_map('trim', explode(',', $nomes));

    // Ordenar o vetor em ordem alfabética
    sort($vetorNomes);

    // Retornar a lista organizada como uma string
    return implode(', ', $vetorNomes);
}