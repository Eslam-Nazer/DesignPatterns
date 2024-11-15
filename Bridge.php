<?php

use DesignPattern\Design\Patterns\Structural\Bridge\Grades\Grade1Report;
use DesignPattern\Design\Patterns\Structural\Bridge\Reports\HTMLReport;
use DesignPattern\Design\Patterns\Structural\Bridge\Reports\PlanTextReport;
use DesignPattern\Design\Patterns\Structural\Bridge\Reports\XMLReport;

require "vendor/autoload.php";

$report = new Grade1Report(new HTMLReport());

echo $report->showReport();
$report->setReport(new XMLReport());
echo $report->showReport();
$report->setReport(new PlanTextReport());
echo $report->showReport();
