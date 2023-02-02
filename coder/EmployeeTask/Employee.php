<?php 
Class Employee{
    /**
     * @var int
     */
    private $eId;
    /**
     * @var String 
     */
    private $eName;
    /**
     * @var Float
     */
    
    private $eSalary;
    /**
     * @var int
     */
    private $eAge;
    /**
     * @param String $eName,$eSalary
     * @param int $eId,$eAge
     * @param float $eSalary
     */
    function __construct($eId,$eName,$eSalary,$eAge){
        $this->eId=$eId;
        $this->eName=$eName;
        $this->eSalary=$eSalary;
        $this->eAge=$eAge;
    }  
    /**
     * @return $eId  
     * 
     * */
    function getEmployeeId(){
        return $this->eId;
    }
    /**
     * @return $eName
     */
    function getEmployeeName(){
        return $this->eName;
    }
    /**
     * @return $eSalary
     */
    function getEmployeeSalary(){
        return $this->eSalary;
    }
    /**
     * @return $eAge
     */
    function getEmployeeAge(){
        //echo "".$this->eAge;
        return $this->eAge;
    }

}