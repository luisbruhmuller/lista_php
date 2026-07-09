<!-- Uma empresa deseja proteger pequenas mensagens antes de armazená-las em seu
sistema.
Crie uma função chamada criptografarMensagem() que receba um texto e aplique
uma criptografia utilizando o método da Cifra de César.
Em seguida, crie outra função chamada descriptografarMensagem() capaz de
recuperar o texto original. -->

<?php
function criptografarMensagem($mensagem, $deslocamento) {
    $mensagemCriptografada = '';

    for ($i = 0; $i < strlen($mensagem); $i++) {
        $caractere = $mensagem[$i];

        if (ctype_alpha($caractere)) {
            $base = ctype_upper($caractere) ? ord('A') : ord('a');
            $mensagemCriptografada .= chr(($ord($caractere) - $base + $deslocamento) % 26 + $base);
        } else {
            $mensagemCriptografada .= $caractere;
        }
    }

    return $mensagemCriptografada;
}

function descriptografarMensagem($mensagemCriptografada, $deslocamento) {
    return criptografarMensagem($mensagemCriptografada, -$deslocamento);
}
