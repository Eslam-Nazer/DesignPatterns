<?php

namespace DesignPattern\Design\Patterns\Creational\Prototype\Employee;

class Salary
{
    /**
     * @param float $salary
     * @param float $tax
     * @param float $medicalInsurance
     */
    public function __construct(
        private float $salary,
        private float $tax,
        private float $medicalInsurance
    ) {}
    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }
    /**
     * @return float
     */
    public function getTax(): float
    {
        return $this->tax;
    }
    /**
     * @return float
     */
    public function getMedicalInsurance(): float
    {
        return $this->medicalInsurance;
    }
    /**
     * @param float $salary
     */
    public function setSalary(float $salary)
    {
        $this->salary = $salary;
    }
    /**
     * @param float $tax
     */
    public function setTax(float $tax)
    {
        $this->tax = $tax;
    }
    /**
     * @param float $medicalInsurance
     */
    public function setMedicalInsurance(float $medicalInsurance)
    {
        $this->medicalInsurance = $medicalInsurance;
    }
}
