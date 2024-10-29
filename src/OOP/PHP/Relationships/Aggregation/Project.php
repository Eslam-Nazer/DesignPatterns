<?php

namespace DesignPattern\OOP\PHP\Relationships\Aggregation;

class Project
{
    private string $name;
    private \DateTime $deadLine;
    private array $develpoers;

    /**
     * @param string $name
     * @param \DateTime $deadLine
     * @param array $developers
     */
    public function __construct(string $name, \DateTime $deadLine, array $developers)
    {
        $this->name = $name;
        $this->deadLine = $deadLine;
        $this->develpoers = $developers;
    }

    public function setDeadLineTo(\DateInterval $interval)
    {
        $this->deadLine->add($interval);
    }

    public function showProjectInformation(): string
    {
        $list = array_map(function (Developer $dev) {
            return $dev->getName();
        }, $this->develpoers);
        $devs = implode(", ", $list);
        return "
            Project Name: {$this->name}\n
            Project dead line : {$this->deadLine->format('Y-m-d')}\n
            Devolopers: {$devs}\n
        ";
    }
}
