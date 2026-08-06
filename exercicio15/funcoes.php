<!-- Uma empresa deseja criar uma biblioteca reutilizável de funções para ser utilizada em
diversos sistemas.
Crie um arquivo chamado funcoes.php contendo, no mínimo, 10 funções úteis, como:
● Calcular IMC;
● Validar e-mail;
● Gerar senha aleatória;
● Contar vogais;
● Inverter texto;
● Calcular idade;
● Converter moeda;
● Formatar telefone;
● Gerar saudação conforme o horário;
● Validar uma senha forte.
Depois, desenvolva um arquivo index.php que demonstre a utilização de todas as
funções implementadas, exibindo exemplos práticos de cada uma delas. -->

<?php 
    function calcularIMC($peso,$altura){
        $IMC =  pow($altura,2)/$peso;
        return $IMC;
    }
    function validarEmail($email){
    if(!(str_contains($email,"@")) || (str_contains($email," "))){
    return "invalido";}}
    function gerarSenha($quantidadeCaracteres){
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

        return $senha;}
    function contarVogal(string $texto){
        $quantidadevogais = preg_match_all('/[aeiouAEIOU]/', $texto);
        return($quantidadevogais);}
    function inverterTexto($texto){
        $textoInvertido = strrev($texto);

        return[
            'textoInvertido' => $textoInvertido, 
        ];

        }
    
    
?>