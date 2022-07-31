<?php
class Workers{
    private $name;
    private $age;
    private $salary;
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    public function getSalary(){
        return $this->salary;
    }
    public function setSalary($salary){
        $this->salary = $salary;
    }

    private function checkAge($age){
        if($age > 1 & $age < 100){
            return true;
        }else{
            return false;
        }
    }
}
?>

<?php
//task4  
class WorkerConstr{
    private $name;
    private $salary;
    public function __construct($name, $salary){
        $this->name = $name;
        $this->salary = $salary;
    }
    public function getName(){
        return $this->name;
    }
    public function getSalary(){
        return $this->salary;
    }
}
?>