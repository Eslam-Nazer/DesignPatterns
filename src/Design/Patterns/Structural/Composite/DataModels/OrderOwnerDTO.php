<?php

namespace DesignPattern\Design\Patterns\Structural\Composite\DataModels;

use DesignPattern\Design\Patterns\Structural\Composite\DTOs\DTOModel;

class OrderOwnerDTO implements DTOModel
{
    /**
     * Summary of __construct
     * @param string $name
     * @param DTOModel $address
     */
    public function __construct(
        private string $name,
        private DTOModel $address,

    ) {}

    /**
     * Summary of render
     * @return array
     */
    public function render(): array
    {
        return [
            'name'      => $this->getName(),
            'address'   => $this->getAddress()->render()
        ];
    }

    /**
     * Summary of getName
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Summary of getAddress
     * @return DTOModel
     */
    public function getAddress(): DTOModel
    {
        return $this->address;
    }
}
