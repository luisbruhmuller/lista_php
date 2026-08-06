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
    return "invalido";
    }
    }
    function gerarSenha($quantidadeCaracteres){
        
    }

?>