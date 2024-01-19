<?php

class FemaleOscar  {  // class object based off of json
    public $Index;
    public $Year;
    public $Age;
    public $Name;
    public $Movie;


    function __construct($Index, $Year, $Age, $Name, $Movie) {
        $this->Index = $Index;
        $this->Year = $Year;
        $this->Age = $Age;
        $this->Name = $Name;
        $this->Movie = $Movie;
   
    }
}

 

?>


