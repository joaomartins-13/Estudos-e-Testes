<!DOCTYPE html>
<html>
<header>

</header>
<body>
    Exercicio 4 <br> 
<?php 
    // Define o tamanho da matriz como 5
    $n = 5;
    // Define o número de operações como 3
    $m = 3;
    // Cria uma matriz de tamanho $n inicializada em zeros
    $lista = array_fill(1, $n, 0);
    // Define as operações a serem realizadas na matriz
    $ops = array(
        array(1, 2, 100),
        array(2, 5, 100),
        array(3, 4, 100)
    );
    // Percorre cada operação e atualiza a matriz com os parâmetros da operação
    for ($i = 0; $i < $m; $i++) {
        list($a, $b, $v) = $ops[$i]; // retira os parâmetros da operação
        for ($j = $a; $j <= $b; $j++) {
            $lista[$j] += $v; // Adiciona o valor $v à posição $j da matriz
        }
    }
    // Encontra o maior valor na matriz
    $max = max($lista);
    // Imprime na tela o valor máximo encontrado na matriz 
    echo $max;
?>
</body>
</html>
