<?php

namespace CDC\Loja\RH;

class CalculadoraDeSalario
{
	
    public function calculaSalario(Funcionario $funcionario)
    {
        
        if ($funcionario->getSalario() > 3.000) {
            return  ($funcionario->getSalario() * 0.8);
        }
        return  ($funcionario->getSalario() * 0.9);
        
    }
    
}