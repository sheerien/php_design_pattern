<?php
namespace PhpDesignPattern\Prototype\Employee;

class Salary
{
    private float $salary;
    private float $tax;
    private int $medicalInsurance;
    
	/**
	 * @param $salary float 
	 * @param $tax float 
	 * @param $medicalInsurance int 
	 */
	function __construct(float $salary, float $tax, int $medicalInsurance)
    {
        $this->salary = $salary;
        $this->tax = $tax;
        $this->medicalInsurance = $medicalInsurance;
	}

    

    /**
     * Summary of getSalary
     * @return float
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Summary of getTax
     * @return float
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Summary of getMedicalInsurance
     * @return int
     */
    public function getMedicalInsurance()
    {
        return $this->medicalInsurance;
    }

    /**
     * Set the value of salary
     *
     * @return  self
     */ 
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

        /**
         * Set the value of tax
         *
         * @return  self
         */ 
        public function setTax($tax)
        {
                $this->tax = $tax;

                return $this;
        }

    /**
     * Set the value of medicalInsurance
     *
     * @return  self
     */ 
    public function setMedicalInsurance($medicalInsurance)
    {
        $this->medicalInsurance = $medicalInsurance;

        return $this;
    }
}