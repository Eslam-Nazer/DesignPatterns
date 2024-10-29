<?php

namespace DesignPattern\OOP\PHP\Relationships;

class MathTeacher extends Teacher
{
    public function assignHomeWork(): string
    {
        return 'Calculate the sum of 10 and 12';
    }
}
