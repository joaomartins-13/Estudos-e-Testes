<!DOCTYPE html>
<html>
<header>

</header>
<body>
    teste 
<?php 
// Define a função fibonacci com a entrada $n
function fibonacci($n) {
    // Cria um array com os dois primeiros elementos da sequencia de Fibonacci
    $fib = array(0, 1);
    // Calcula os próximos n-2 elementos da sequencia usando um for
    for ($i = 2; $i < $n; $i++) {
        // O próximo elemento da sequencia é a soma dos dois elementos anteriores
        $fib[$i] = $fib[$i-1] + $fib[$i-2];
    }   
    // Ordena o array em crescente
    sort($fib);  
    // Retorna o array $fibonacci contendo os $n primeiros elementos da sequência de Fibonacci
    return $fib;
}
// Define uma variável $n igual a 1
$n = 1;
// Chama a função fibonacci com o valor de $n e armazena o resultado em $fibonacci
$fibonacci = fibonacci($n);
// Imprime o array $fibonacci usando a função print_r
print_r($fibonacci);
?>
</body>
</html>
