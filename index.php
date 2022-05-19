<?php
echo "Olá mundo dos fortes";

echo "Sou demais e também lindo!";

$nome1 = "Pedim da Babilônia";
$sobrenome = "Bandeirantes";
$nomeCompl = $nome1 . " " . $sobrenome;

echo $nomeCompl . "<br>";

exit;

$nome = "Pedro";
$site = 'www.pedimperigoso.com.br';
$ano = 2002;
$salario = 1450.50;
$bloqueado = false;

///////////////////////////////////////////////

$frutas = array("abacate", "mamão", "morango");

//echo $frutas[2];

$nascimento = new DateTime();

//var_dump($nascimento);

///////////////////////////////////////////////

$arquivo = fopen("exemplo-03.php", "r");

//var_dump($arquivo);

$nulo = null;
$vazio = "";

?>
