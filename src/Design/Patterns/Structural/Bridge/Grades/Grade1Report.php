<?php

namespace DesignPattern\Design\Patterns\Structural\Bridge\Grades;

class Grade1Report extends GradeReport
{

    /**
     * Summary of showReport
     * @return string
     */
    public function showReport(): string
    {
        return $this->getReport()->showGrade1Report();
    }
}
