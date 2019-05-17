<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("pessoa.php");

$pessoa = new Pessoa("Allanyo", "11111111");

$pessoa->setNome("Ygor Amaral")->setCPF("dsadasdsa");

$pessoa->setNome("Ygor Amaral");
$pessoa->setCPF("Ygor Amaral");

echo $pessoa->getNome();

echo "<pre>";
var_dump($pessoa);
echo "</pre>";