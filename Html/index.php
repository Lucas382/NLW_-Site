<!doctype html>
  <html lang="pt-BR">
    <head>Primeiro código PHP com tags HTML</head>
    <body>
      <h1>Título do texto</h1>
      <p><?php echo "Olá, mundo"; ?></p>
      <a href="pdo.php" >Pagina de teste do pdo</a>
    </body>
</html>

<?php

$carros = array (
  'vw'        => "Fusca",
  0           => "Passat",
  'chevrolet' => "Monza",
  1           => "Chevette",
  'fiat'      => "Tempra",
  2           => "Uno"
 );
print_r($carros);
echo "O tamanho atual do array é: " . count($carros);
echo "<br/>";
 //Definindo o valor do índice 0 como vazio
$carros[0] = '';

print_r($carros);
echo "O tamanho atual do array de carros na posição 0 é: " . count($carros);
echo "<br/>";

 //Removendo dois elementos do array com unset
unset($carros['fiat'], $carros[1]);

print_r($carros);
echo "O tamanho atual do array é: " . count($carros);
echo "<br/>";

 //Removendo elementos do array com array_splice
array_splice($carros, 1,2);

print_r($carros);
echo "O tamanho atual do array é: " . count($carros);


?>
