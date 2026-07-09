<!-- Uma empresa deseja padronizar automaticamente seus relatórios.
Crie uma função chamada formatarTexto() que receba um texto e retorne:
● O texto totalmente em letras maiúsculas;
● O texto totalmente em letras minúsculas;
● A primeira letra de cada palavra em maiúscula;
● A quantidade total de caracteres.
 -->

<?php
function formatarTexto($texto) {
    $textoMaiusculo = strtoupper($texto);
    $textoMinusculo = strtolower($texto);
    $textoCapitalizado = ucwords($texto);
    $quantidadeCaracteres = strlen($texto);

    return [
        'maiusculo' => $textoMaiusculo,
        'minusculo' => $textoMinusculo,
        'capitalizado' => $textoCapitalizado,
        'quantidadeCaracteres' => $quantidadeCaracteres
    ];
}

$texto = "exemplo de texto";
$resultados = formatarTexto($texto);
echo "Texto original: " . $texto . "<br>";
echo "Texto em maiúsculas: " . $resultados['maiusculo'] . "<br>";
echo "Texto em minúsculas: " . $resultados['minusculo'] . "<br>";
echo "Texto capitalizado: " . $resultados['capitalizado'] . "<br>";