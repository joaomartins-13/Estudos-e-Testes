<!DOCTYPE html>
<html>
<header>

</header>
<body>
    Exercicio 3 <br> 
<?php 
function encontrarSequenciaMagica($s) {
    // Definindo o array com as vogais
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    // Obtendo o tamanho da string de entrada
    $tamanho = strlen($s);
    // Iniciando as variaveis de controle
    $j = 0; // Contador para percorrer as vogais
    $max_subsequencia = 0; // vai guardar o tamanho da maior subsequencia encontrada
    $tamanhoSubsequencia = 0; //vai guardar o tamanho da subsequencia atualmente sendo analisada
    // corre a string de entrada
    for ($i = 0; $i < $tamanho; $i++) {
        // Verifica se a letra atual é igual a vogal esperada
        if ($s[$i] == $vogais[$j]) {
            $j++; // adiciona o contador das vogais
        }
        // Verifica se as vogais já foram encontradas, formando uma subsequencia mágica
        if ($j == 5) {
            $tamanhoSubsequencia += 5; // adiciona o tamanho da subsequencia atual
            $j = 0; // Reinicia o contador de vogais para a próxima subsequencia
            if ($tamanhoSubsequencia > $max_subsequencia) {
                // Atualiza o tamanho da maior subsequencia encontrada
                $max_subsequencia = $tamanhoSubsequencia;
            }
        }
    }
    // Retorna o tamanho da maior subsequencia mágica encontrada
    return $max_subsequencia;
}
$s = "aeiaaioooaauuaeiou";
echo encontrarSequenciaMagica($s); 
?>
</body>
</html>
