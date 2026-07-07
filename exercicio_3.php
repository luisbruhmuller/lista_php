<!-- Um sistema de cadastro precisa proteger informações sensíveis dos usuários.
Crie uma função chamada mascararCpf() que receba um CPF e substitua todos os
caracteres por *, mantendo visíveis apenas os quatro últimos dígitos.
Retorne o CPF mascarado -->

<?php
function mascararCpf($cpf)
{
    // repete o caracter * para o tamanho do cpf menos 4 
    // e depois usa a função substr para pegar os 4 últimos dígitos do cpf 
    // e junta as duas strings
    $cpfMascarado = str_repeat('*', strlen($cpf) - 4) . substr($cpf, -4);
    return $cpfMascarado;
}

$cpf = "123.456.789-00";

echo "CPF original: $cpf <br>";

$cpfMascarado = mascararCpf($cpf);
echo "CPF mascarado: $cpfMascarado";
?>