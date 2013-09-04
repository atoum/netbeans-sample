<?php
namespace tests\units\netbeans\sample;

use atoum;

require __DIR__ . '/../../../../vendor/autoload.php';

class Calculator extends atoum 
{
    public function testAdd() 
    {
        $this
                ->if($object = new \netbeans\sample\Calculator())
                ->then
                    ->integer($object->add(1, 2))->isEqualTo(3)
        ;
    }
    
    public function testDivide() 
    {               
        $this
                ->if($object = new \netbeans\sample\Calculator())
                ->then
                    ->exception(function() use ($object, & $number) {
                        $object->divide($number = rand(1, PHP_INT_MAX), 0);
                    })
                        ->isInstanceOf('\\netbeans\\sample\\Calculator\\DivisionByZeroException')                            
                    ->integer($object->divide(4, 2))->isEqualTo(2)
                    ->float($object->divide(2, 3))->isNearlyEqualTo(0.67, pow(10, -2))
        ;
    }
    
    public function testMultiply()
    {
        $this
            ->if($object = new \netbeans\sample\Calculator())
            ->then
               ->integer($object->multiply(4, 2))->isEqualTo(8)
               ->float($object->multiply(2 / 3, 3))->isNearlyEqualTo(2.01, pow(10, -2)) 
        ;
    }
}
