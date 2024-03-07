
<?php
require_once ('classes/Pessoa.php');

$nome = $_POST['nome'];
$idade = $_POST ['idade'];

$pessoa = new Pessoa();
$pessoa -> setNome ("James");
$pessoa -> setIdade (28);

echo "<h1>Meu nome é {$pessoa->getNome()} e tenho {$pesssoa-> getIdade()} anos de idade. </h1>";



 
?>
