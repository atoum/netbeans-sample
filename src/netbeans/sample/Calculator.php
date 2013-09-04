<?php
namespace netbeans\sample;

class Calculator 
{
    public function add($a, $b) 
    {
        return $a + $b;
    }
    
    public function divide($a, $b) 
    {            
        if ($b === 0) {
            throw new Calculator\DivisionByZeroException();
        }
        
        return $a / $b;
    }
    
    public function multiply($a, $b)
    {
        return $a * $b;
    }
}
