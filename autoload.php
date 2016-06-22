<?php


/*
// Método Antigo
function __autoload($classe)
{
    //busca dentro da pasta classes a classe necessaria...
    include_once "{$classe}.php";
}
 
*/

	
spl_autoload_register(function ($classe) {
	include_once "{$classe}.php";
});

//criando um objeto pessoa
$funcionario = new Funcionario();
$funcionario -> SetCodigo(789);
$funcionario -> SetNome ('Eduardo Kawassaki');
$funcionario -> SetSalario (5500);
$funcionario -> Mostrar();


echo "<br /><br /><br /><br />";

$produto = new Produto();
$produto -> SetCodigo(123);
$produto -> SetNome ('Teste');
$produto -> SetSalario (7000);
$produto -> Mostrar();
?>