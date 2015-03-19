<?php

use PHPUnit_Framework_TestCase as PHPUnit;

use CDC\Loja\RH\CalculadoraDeSalario,
    CDC\Loja\RH\Funcionario,
    CDC\Loja\RH\TabelaCargos;


class CalculadoraDeSalarioTest extends PHPUnit
{
	
    public function testCalculoSalarioDesenvolvedoresComSalarioAbaixoDoLimite()
    {
    	
        $calculo = new CalculadoraDeSalario();
        $desenvolvedor = new Funcionario('Reginaldo', 1.500, TabelaCargos::DESEVOLVEDOR);
        
        $salario = $calculo->calculaSalario($desenvolvedor);
        
        $this->assertEquals(1.500 * 0.9,  $salario, null, 0.00001);
        
    }
    
 
    public function testCalculoSalarioDesenvolvedoresComSalarioAcimaDoLimite()
    {
    	
        $calculo = new CalculadoraDeSalario();
        $desenvolvedor = new Funcionario('Fausto', 4.000, TabelaCargos::DESEVOLVEDOR);
        
        $salario = $calculo->calculaSalario($desenvolvedor);
        
        $this->assertEquals((4.000 * 0.8), $salario);
        
    }
    
    
    public function testCalculoSalarioDBAComSalarioAbaixoDoLimite()
    {
    	$calculadora = new CalculadoraDeSalario();
    	$dba = new Funcionario('Andre', 5.000, TabelaCargos::DBA);
    	
    	$salario = $calculadora->calculaSalario($dba);
    	
    	$this->assertEquals(5.000 * 0.8, $salario);
    }
    
}