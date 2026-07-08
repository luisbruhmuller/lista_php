<!-- Uma empresa que fabrica sensores precisa converter temperaturas entre diferentes
escalas.
Crie uma função chamada converterTemperatura() que receba um valor, a escala
de origem e a escala de destino.
A função deverá permitir conversões entre Celsius, Fahrenheit e Kelvin. -->

<?php
function converterTemperatura(float $valor, string $escalaOrigem, string $escalaDestino): float {
    
    switch ($escalaOrigem) {
        case 'celsius':
            $celsius = $valor;
            break;
        case 'fahrenheit':
            $celsius = ($valor - 32) * 5 / 9;
            break;
        case 'kelvin':
            $celsius = $valor - 273.15;
            break;
        default:
            throw new InvalidArgumentException("Escala de origem inválida: $escalaOrigem");
    }

    switch ($escalaDestino) {
        case 'celsius':
            return $celsius;
        case 'fahrenheit':
            return ($celsius * 9 / 5) + 32;
        case 'kelvin':
            return $celsius + 273.15;
        default:
            throw new InvalidArgumentException("Escala de destino inválida: $escalaDestino");
    }
}
$valor = 100;
$escalaOrigem = 'celsius';
$escalaDestino = 'fahrenheit';

echo "Valor: $valor $escalaOrigem <br>";
echo "Convertido para $escalaDestino: " . converterTemperatura($valor, $escalaOrigem, $escalaDestino);

?>