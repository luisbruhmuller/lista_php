<!-- Uma editora deseja obter algumas informações sobre os textos enviados pelos
autores.
Crie uma função chamada analisarTexto() que receba um texto e retorne:
● Quantidade de palavras;
● Quantidade de caracteres;
● Quantidade de vogais;
● Quantidade de consoantes.
 -->

<?php
function analisarTexto(string $Texto){

    $quantidadePalavras = 0;
    $quantidadecaracteres = 0;
    $quantidadevogais = 0;
    $quantidadeconsoantes = 0;

    $quantidadecaracteres = strlen($Texto);
    $quantidadepalavras = str_word_count($Texto);
    $quantidadevogais = preg_match_all('/[aeiouAEIOU]/', $Texto);
    $quantidadeconsoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/', $Texto);


    return[
        "quantidadepalavras" => $quantidadepalavras,
        "quantidadecaracteres" => $quantidadecaracteres,
        "quantidadeconsoantes" => $quantidadeconsoantes,
        "quantidadevogais" => $quantidadevogais,
    ];
}

$texto = "Uma editora deseja obter algumas informações sobre os textos enviados pelos
autores.
Crie uma função chamada analisarTexto() que receba um texto e retorne:
● Quantidade de palavras;
● Quantidade de caracteres;
● Quantidade de vogais;
● Quantidade de consoantes.
";
echo "texto exemplo: $texto <br>";
echo "quantidade palavras:". analisarTexto($texto)['quantidadepalavras'];
echo "<br>quantidade caracteres:". analisarTexto($texto)['quantidadecaracteres'];
echo "<br>quantidade consoantes:". analisarTexto($texto)['quantidadeconsoantes'];
echo "<br>quantidade vogais:". analisarTexto($texto)['quantidadevogais'];

?>