<?php


use \PHPUnit_Framework_TestCase as PHPUnit;
use CDC\Loja\RH\Funcionario;
use CDC\Loja\RH\TabelaCargos;

class FuncionarioTest extends PHPUnit
{
	
    public function testGetNome()
    {
    	$funcionario = new Funcionario('Reginaldo', 3.000, TabelaCargos::DESEVOLVEDOR);
    	
    	$this->assertEquals('Reginaldo', $funcionario->getNome());
    }
    
    public function testGetSalario()
    {
        $funcionario = new Funcionario('Reginaldo', 3.000, TabelaCargos::DESEVOLVEDOR);
         
        $this->assertEquals(3.000, $funcionario->getSalario());
    }
    
}