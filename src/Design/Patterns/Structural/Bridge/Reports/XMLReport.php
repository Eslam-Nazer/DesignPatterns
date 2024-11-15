<?php

namespace DesignPattern\Design\Patterns\Structural\Bridge\Reports;

class XMLReport implements ReportBridge
{

    /**
     * Summary of showGrade1Report
     * @return string
     */
    public function showGrade1Report(): string
    {
        return "<StudentReport>this is a grade 1 report</StudentReport>\n";
    }

    /**
     * Summary of showGrade2Report
     * @return string
     */
    public function showGrade2Report(): string
    {
        return "<StudentReport>this is a grade 2 report</StudentReport>\n";
    }

    /**
     * Summary of showGrade3Report
     * @return string
     */
    public function showGrade3Report(): string
    {
        return "<StudentReport>this is a grade 3 report</StudentReport>\n";
    }
}
