<?php

namespace DesignPattern\Design\Patterns\Creational\Prototype\Employee;

use DesignPattern\Design\Patterns\Creational\Prototype\Prototype;
use DesignPattern\Design\Patterns\Creational\Prototype\Employee\Privileges\Privileges;
use DesignPattern\Design\Patterns\Creational\Prototype\Employee\Privileges\Types\ServerRoomPrivileges;
use DesignPattern\Design\Patterns\Creational\Prototype\Employee\Privileges\Types\WebProjectPrivileges;

class EmployeePrototype implements Prototype
{
    /**
     * @param Profile $profileData
     * @param Salary $salary
     * @param Privileges $privileges
     */
    public function __construct(
        private Profile $profileData,
        private Salary $salary,
        private Privileges $privileges
    ) {}

    /**
     * @param Profile $profileData
     */
    public function setProfile(Profile $profileData)
    {
        $this->profileData = $profileData;
    }
    /**
     * @param Salary $salary
     */
    public function setSalary(Salary $salary)
    {
        $this->salary = $salary;
    }
    /**
     * @param Privileges $privileges
     */
    public function setPrivileges(Privileges $privileges)
    {
        $this->privileges = $privileges;
    }

    /**
     * @return Profile $profileData
     */
    public function getProfile()
    {
        return $this->profileData;
    }
    /**
     * @return Salary $salary
     */
    public function getSalary()
    {
        return $this->salary;
    }
    /**
     * @return Privileges $privileges
     */
    public function getPrivileges()
    {
        return $this->privileges;
    }

    public function __clone()
    {
        $this->privileges->clearPrivileges();
        $this->privileges->addPrivileges(new WebProjectPrivileges());
        $this->privileges->addPrivileges(new ServerRoomPrivileges());

        $this->salary->setSalary(1500);
        $this->salary->setTax(0.1);
        $this->salary->setMedicalInsurance(200);

        $this->profileData->setAddress(null);
        $this->profileData->setAge(20);
        $this->profileData->setTelephoneNumber(0);
        $this->profileData->setMobileNumber(0);
        $this->profileData->setSlackAccountName('slack.account');
        $this->profileData->setName('Default Employee Name');

        return $this;
    }
}
