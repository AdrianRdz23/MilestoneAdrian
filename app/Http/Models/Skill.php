<?php

namespace App\Http\Models;

class Skill{
    
    
    private $name;
    
    public function __construct($name){
        
        $this->name = $name;

        
    }
    
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    
    
    
    

    
    

    
    
    
}