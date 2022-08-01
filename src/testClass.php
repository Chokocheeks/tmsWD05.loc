<?php
include_once 'Workers.php';
include_once 'User.php';

$worker01 = new Workers;
$worker01->setName('Ivan');
$worker01->setAge(25);
$worker01->setSalary(1000);

$worker02 = new Workers;
$worker02->setName('Vasa');
$worker02->setAge(26);
$worker02->setSalary(2000);

var_dump($worker01->getSalary() + $worker02->getSalary());
echo "<br/>";
echo "<br/>";
var_dump($worker01->getAge() + $worker02->getAge());
echo "<br/>";
echo "<br/>";

var_dump($worker01->getAge()); //25
$worker01->setAge(15);
var_dump($worker01->getAge()); //15
$worker01->setAge(105);
var_dump($worker01->getAge()); //15
echo "<br/>";
echo "<br/>";

//task4 
$workerConstr = new WorkerConstr('Dima', 1000);
$workerConstr->age = 25;
var_dump($workerConstr);
echo "<br/>";
echo "<br/>";
var_dump($workerConstr->getSalary() * $workerConstr->age);

//task5
$workerUser01 = new WokerUser;
$workerUser01->setName('Vasa');
$workerUser01->setAge(26);
$workerUser01->setSalary(2000);

$workerUser02 = new WokerUser;
$workerUser02->setName('Ivan');
$workerUser02->setAge(25);
$workerUser02->setSalary(1000);

echo "<br/>";
echo "<br/>";
var_dump($workerUser01->getSalary() + $workerUser02->getSalary());
?>