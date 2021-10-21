
<?php
define('HOST', 'localhost');
define('PORT', '3306');
define('DBNAME', 'exercicios_pdo');
define('USER', 'root');
define('PASSWORD', 'senha123');


try {
  $dsn = new PDO("mysql:host=".HOST.";port=".PORT.";dbname=".DBNAME.";user=".USER.";password=".PASSWORD);

  echo 'Conexão sucedida com sucesso sucedido';

}catch (PDOexception $e){
  echo 'A conexão falhou e retornou  a seguinte mensagem de erro: '. $e->getMessage();
  die;
}

$nome_pessoa = "claudio";
$cpf_pessoa = "4321.1234.123-2";
$tel_pessoa = "(41)9999-8888";


$stmt = $dsn->prepare("INSERT INTO
                        pessoa_dados(nome, cpf, numero)
                        VALUES (?,?,?)
                        ");

$resultSet = $stmt->execute([$nome_pessoa,$cpf_pessoa,$tel_pessoa]);



if($resultSet){
  echo "Dados inseridos com sucesso. \n \n";

}else{
  echo "Ocorreu um erro e não foi possível inserir os dados ! ";

}

die;



$stmt = null;
$dsn = null;
