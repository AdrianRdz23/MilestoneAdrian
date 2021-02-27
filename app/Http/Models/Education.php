<?php

namespace App\Http\Models;

class Education{
    
    private $school;
    
    private $degree;
    
    private $field;
    
    
    public function __construct($school,$degree,$field){
        
        $this->school = $school;
        $this->degree = $degree;
        $this->field = $field;
        
    }
    
    
    /**
     * @return mixed
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * @return mixed
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * @return mixed
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @param mixed $school
     */
    public function setSchool($school)
    {
        $this->school = $school;
    }

    /**
     * @param mixed $degree
     */
    public function setDegree($degree)
    {
        $this->degree = $degree;
    }

    /**
     * @param mixed $field
     */
    public function setField($field)
    {
        $this->field = $field;
    }

    
    
    
}