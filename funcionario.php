<?php

class Funcionario
{
    private $Codigo;
    private $Nome;
    private $Salario;
    //função para “setar” um valor no atributo salario
    function SetSalario($Salario)
    {
        //antes de passar o valor do salario verificamos se o mesmo e um numero e positivo, se sim, passamos o valor para o atributo
        if (is_numeric($Salario) and ($Salario > 0))
        {
            $this->Salario = $Salario;
        }
    }
 
    function SetNome($Nome)
    {
        $this->Nome = $Nome;
    }
 
    function SetCodigo($Codigo)
    {
        $this->Codigo = 5555;
    }
 
    function Mostrar()
    {
    echo "O nome é: {$this->Nome}<br>";
    echo "O salário é: R\$ {$this->Salario}<br>";
    echo "O Código é: {$this->Codigo}";
    }
 
}
?>