<?php
namespace netbeans\sample;

class Sorter 
{
    const ASC = 0;
    const DESC = 1;
    
    public function bubble(array $values, $order = self::ASC) 
    {
        $max = sizeof($values);   
                
        while ($max > 0) {  
            $index = 0;
            
            for ($current = 0; $current < $max - 1; $current++) {                                    
                $next = $current + 1;
                
                if($values[$current] > $values[$next]) {
                    $temp = $values[$current];
                    $values[$current] = $values[$next];
                    $values[$next] = $temp; 
                    
                    $index = $next;
                }                   
            }
            
            $max = $index;
        }
        
        return self::ASC === $order ? $values : array_reverse($values);
    }    
}
