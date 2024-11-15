<?php

namespace DesignPattern\Design\Patterns\Structural\Bridge\Grades;

use DesignPattern\Design\Patterns\Structural\Bridge\Reports\ReportBridge;

abstract class GradeReport
{

    /**
     * Summary of __construct
     * @param ReportBridge $report
     */
    public function __construct(
        protected ReportBridge $report,
    ) {}

    /**
     * Summary of setReport
     * @param ReportBridge $report
     * @return void
     */
    public function setReport(ReportBridge $report): void
    {
        $this->report = $report;
    }

    /**
     * Summary of getReport
     * @return ReportBridge
     */
    public function getReport(): ReportBridge
    {
        return $this->report;
    }

    abstract public function showReport(): string;
}
