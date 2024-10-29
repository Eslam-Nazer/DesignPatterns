<?php

namespace DesignPattern\OOP\PHP\Relationships;

class ScienceTeacher extends Teacher
{
    public function assignHomeWork(): string
    {
        return 'Prepare research on planets';
    }
}
