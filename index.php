<?php

use DesignPattern\OOP\PHP\Abstraction\BMW;
use DesignPattern\OOP\PHP\Employee;
use DesignPattern\OOP\PHP\Abstraction\Microwave;
use DesignPattern\OOP\PHP\Abstraction\Order;
use DesignPattern\OOP\PHP\Inheritance\HttpClient;
use DesignPattern\OOP\PHP\Relationships\Aggregation\Developer;
use DesignPattern\OOP\PHP\Relationships\Aggregation\Project;
use DesignPattern\OOP\PHP\Relationships\Composition\House;
use DesignPattern\OOP\PHP\Relationships\Composition\Room;
use DesignPattern\OOP\PHP\Relationships\MathTeacher;
use DesignPattern\OOP\PHP\Relationships\Printer\HtmlPrinter;
use DesignPattern\OOP\PHP\Relationships\ScienceTeacher;
use DesignPattern\OOP\PHP\Relationships\Student;
use DesignPattern\OOP\PHP\Relationships\Teacher;

use function PHPSTORM_META\type;

require 'vendor/autoload.php';

$emp = new Employee(
    name: "Eslam",
    age: 24,
    salary: 3600
);
echo "\n===================[Abstraction Example]=====================\n";
/**
 * Abstraction Example
 */
$microwave = new Microwave(temp: 90, program: "DE1", time: 30);

if ($microwave->turnOn()) {
    var_dump($microwave->deFreeze());
}
if (! $microwave->turnOff()) {
    var_dump($microwave->deFreeze());
}
echo "\n===================[Encapsulation Example]=====================\n";
/**
 * Encapsulation Example
 */
$bmw = new BMW(speed: 320, numberOfDoors: 2, gearboxSystem: "Front", color: "black");
$order = new Order(source: "Cairo", destination: "Alexandria", weight: 120);

var_dump($order->deliverOrder($bmw));
echo "\n===================[Inheritance Example]=====================\n";
/**
 * Inheritance Example
 */
$client = new HttpClient("https://www.abc.com", 50);
echo $client->connect();
echo $client->call('/user');
var_dump($client->terminate());
echo $client->welcomeAfterConnect();


echo "\n===================[OOP Relationships]=====================\n";
// $mohammed = new Teacher('mohammed Abdoh');
$printer = new HtmlPrinter();
// var_dump($mohammed->sayWelcome($printer));
// unset($mohammed);
$printer->setStringToPrinted("this is test string");
var_dump($printer->printToScreen());

$ahmed =  new Student('Ahmed');
// $ahmed->assignATempTeacher($mohammed);
// var_dump($mohammed->evaluateStudentHomeWork($ahmed));

$mohmoud = new ScienceTeacher('mahmoud');
$ibrahim = new MathTeacher('ibrahim');

$ahmed->assignATempTeacher($mohmoud);
var_dump("Ahmed wa assigned this by " . $mohmoud->getName() . ' | ' . $mohmoud->evaluateStudentHomeWork($ahmed));
$ahmed->assignATempTeacher($ibrahim);
var_dump("Ahmed wa assigned this by " . $ibrahim->getName() . ' | ' . $ibrahim->evaluateStudentHomeWork($ahmed));

$Eslam = new Developer("Eslam");
$ahmed = new Developer('Ahmed');
$ali   = new Developer("Ali");

$xProject = new Project('X', new DateTime(), [
    $Eslam,
    $ahmed,
    $ali
]);
$xProject->setDeadLineTo(new DateInterval("P1M"));
// var_dump($xProject);
var_dump($xProject->showProjectInformation());

$room1 = new Room('White', 20);
$room2 = new Room('LighGray', 30);
$room3 = new Room('LighBlue', 25);

$house = new House([$room1, $room2, $room3]);
echo "\n========================================\n";
