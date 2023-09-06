<?php
include_once __DIR__."/../vendor/autoload.php";
use App\model\Pessoa;
echo ("
    <h1>Esse é o titulo</h1>
    <p>Esse é o primeiro parágrafro</p>
");

$p = new Pessoa("João", 30 , "Masculino");

echo "Nome: " . $pessoa->getNome() . "<br>";
echo "Idade: " . $pessoa->getIdade() . "<br>";
echo "Gênero: " . $pessoa->getGenero() . "<br>";

?>