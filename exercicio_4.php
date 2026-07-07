<!-- Uma empresa deseja gerar senhas temporárias para seus colaboradores.
Crie uma função chamada gerarSenha() que receba a quantidade de caracteres
desejada e retorne uma senha aleatória contendo letras maiúsculas, minúsculas,
números e caracteres especiais. -->

 <?php
function gerarSenha($quantidadeCaracteres)
{
    $letrasMaiusculas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $letrasMinusculas = 'abcdefghijklmnopqrstuvwxyz';
    $numeros = '0123456789';
    $caracteresEspeciais = '!@#$%^&*()-+';
    $senha = '';


    $senha .= $letrasMaiusculas[rand(0, strlen($letrasMaiusculas) - 1)];
    $senha .= $letrasMinusculas[rand(0, strlen($letrasMinusculas) - 1)];
    $senha .= $numeros[rand(0, strlen($numeros) - 1)];
    $senha .= $caracteresEspeciais[rand(0, strlen($caracteresEspeciais) - 1)];


    $caracteres = $letrasMaiusculas . $letrasMinusculas . $numeros . $caracteresEspeciais;
    for ($i = 4; $i < $quantidadeCaracteres; $i++) {
        $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }

    $senha = str_shuffle($senha);

    return $senha;
}

$quantidadeCaracteres = 10;
echo "Quantidade de caracteres: $quantidadeCaracteres <br>";
echo "Senha gerada: " . gerarSenha($quantidadeCaracteres);
 ?>