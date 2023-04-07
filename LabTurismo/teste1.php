<!DOCTYPE html>
<html>
<header>

</header>
<body>
    Exercicio 3 <br> 
<?php 
$num = 7;
$arr = array(1, 2, 3, 7, 1, 8, 2);
// calcula a frequencia
$fre = array_count_values($arr);
// ordena o array pelo o valor da frequencia em crescente
asort($fre);
// para os elementos com a mesma frequencia, ordena os valores em crescente
foreach ($fre as $num => $contar) {
  // cria um array com o valor atual $num, repetido $contar vezes
  $values = array_fill(0, $contar, $num);
  // ordena os valores em crescente
  sort($values);
  // atualiza o valor do array $fre com os valores ordenados
  $fre[$num] = $values;
}
// reconstroi o array ordenado
$result = array();
foreach ($fre as $values) {
  foreach ($values as $num) {
    // adiciona cada valor no array $result com uma quebra de linha
    $result[] = $num."<br>";
  }  
}
// mostra o array final na tela
print_r($result);


?>
</body>
</html>
