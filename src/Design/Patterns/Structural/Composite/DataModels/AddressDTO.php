<?php

namespace DesignPattern\Design\Patterns\Structural\Composite\DataModels;

use DesignPattern\Design\Patterns\Structural\Composite\DTOs\DTOModel;

class AddressDTO implements DTOModel
{
    /**
     * Summary of __construct
     * @param string $streetName
     * @param string $houseNumber
     * @param string $postalCode
     */
    public function __construct(
        private string $streetName,
        private string $houseNumber,
        private string $postalCode,
    ) {}

    /**
     * Summary of render
     * @return array
     */
    public function render(): array
    {
        return [
            'streetName'      => $this->getstreetName(),
            'houseNumber'       => $this->getHouseNumber(),
            'postalCode'        => $this->getPostalCode(),
        ];
    }

    /**
     * Summary of getstreetName
     * @return string
     */
    public function getStreetName(): string
    {
        return $this->streetName;
    }

    /**
     * Summary of getHouseNumber
     * @return string
     */
    public function getHouseNumber(): string
    {
        return $this->houseNumber;
    }

    /**
     * Summary of getPostalCode
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }
}
