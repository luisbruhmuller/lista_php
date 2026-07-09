<!-- Uma escola deseja organizar automaticamente a lista de alunos matriculados.
Crie uma função chamada ordenarNomes() que receba uma string contendo nomes
separados por vírgulas.
A função deverá transformar os nomes em um vetor, remover espaços
desnecessários, ordenar em ordem alfabética e retornar a lista organizada.
 -->

<?php
function ordenarNomes(string $nomes){
    $vetorNomes = array_map('trim', explode(',', $nomes));

    sort($vetorNomes);

    return implode(', ', $vetorNomes);
}
$nomes = "João, Maria, Ana, Pedro, Carlos";
$nomesOrganizados = ordenarNomes($nomes);
echo "Nomes originais: $nomes <br>";
echo "Nomes organizados: $nomesOrganizados";
