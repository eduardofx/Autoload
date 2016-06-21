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

$funcionario = new Produto();
$funcionario -> SetCodigo(123);
$funcionario -> SetNome ('Teste');
$funcionario -> SetSalario (7000);
$funcionario -> Mostrar();
?>