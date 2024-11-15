<?php

namespace DesignPattern\Design\Patterns\Structural\Bridge\Reports;

class PlanTextReport implements ReportBridge
{

    /**
     * Summary of showGrade1Report
     * @return string
     */
    public function showGrade1Report(): string
    {
        return "this is a grade 1 report\n";
    }

    /**
     * Summary of showGrade2Report
     * @return string
     */
    public function showGrade2Report(): string
    {
        return "this is a grade 2 report\n";
    }

    /**
     * Summary of showGrade3Report
     * @return string
     */
    public function showGrade3Report(): string
    {
        return "this is a grade 3 report\n";
    }
}
