<?php

namespace DesignPattern\Design\Patterns\Creational\Prototype\Employee;

class Profile
{
    /**
     * @param string $name = 'Employee Name',
     * @param int $age,
     * @param Address|null $address,
     * @param string $telephoneNumber,
     * @param string $mobileNumber,
     * @param string $slackAccountName
     */
    public function __construct(
        private string $name = 'Employee Name',
        private int $age,
        private ?Address $address,
        private string $telephoneNumber,
        private string $mobileNumber,
        private string $slackAccountName
    ) {}
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }
    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }
    /**
     * @return string
     */
    public function getTelephoneNumber(): string
    {
        return $this->telephoneNumber;
    }
    /**
     * @return string
     */
    public function getMobileNumber(): string
    {
        return $this->mobileNumber;
    }
    /**
     * @return string
     */
    public function getSlackAccountName(): string
    {
        return $this->slackAccountName;
    }
    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @param int $age
     */
    public function setAge(int $age)
    {
        $this->age = $age;
    }
    /**
     * @param string $mobileNumber
     */
    public function setMobileNumber(string $mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;
    }
    /**
     * @param Address|null $address
     */
    public function setAddress(?Address $address)
    {
        $this->address = $address;
    }
    /**
     * @param string $telephoneNumber
     */
    public function setTelephoneNumber(string $telephoneNumber)
    {
        $this->telephoneNumber = $telephoneNumber;
    }
    /**
     * @param string $slackAccountName
     */
    public function setSlackAccountName(string $slackAccountName)
    {
        $this->slackAccountName = $slackAccountName;
    }
}
