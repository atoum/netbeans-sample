<?php
namespace tests\units\netbeans\sample;

use atoum;
use netbeans\sample\Sorter as TestedClass;

require __DIR__ . '/../../../../vendor/autoload.php';

class Sorter extends atoum 
{
    public function testBubble() 
    {
        $this
                ->if($object = new TestedClass())
                ->and($values = $sorted = range(0, 10))
                ->and(shuffle($values))
                ->then                                        
                    ->array($object->bubble($values))->isIdenticalTo($sorted) 
                ->if($reversed = array_reverse($sorted))
                ->then
                    ->array($object->bubble($values, TestedClass::DESC))->isIdenticalTo($reversed)
        ;
    }        
}
