<?php

namespace DesignPattern\OOP\PHP\Relationships;

class Student
{
    private string $name;
    private string $homeWork;
    private int $homeWorkScore = 50;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function assignATempTeacher(Teacher $teacher)
    {
        $this->homeWork = $teacher->assignHomeWork();
    }

    public function getHomeWorkScore()
    {
        return $this->homeWorkScore;
    }

    public function doHomeWork()
    {
        $this->homeWorkScore = 60;
    }
}
