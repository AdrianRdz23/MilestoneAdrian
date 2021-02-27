<?php

namespace App\Http\Models;

class Job{
    
    private $title;
    
    private $company;
    
    private $description;
    
    
    public function __construct($title,$company,$desciption){
        
        $this->title = $title;
        $this->company = $company;
        $this->description = $desciption;
        
    }
    
    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    
    
    
    
    
}