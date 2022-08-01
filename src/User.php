<?php
class User{
    protected $name;
    protected $age;
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function getAge(){
        return $this->age;
    }
}

class WokerUser extends User{
    private $salary;
	public function getSalary(){
		return $this->salary;
	}
	public function setSalary($salary){
		$this->salary = $salary;
	}
}

class StudentUser extends User{
    private $course;
    private $grant;
	public function getCourse(){
		return $this->course;
	}
	public function setCourse($course){
		$this->course = $course;
    }
    public function getGrant(){
        return $this->grant;
    }
    public function setGrant($grant){
        $this->grant = $grant;
    }
}

class Driver extends WokerUser{
    private $experience;
    private $category;
    public function getExperience(){
		return $this->experience;
	}
	public function setExperience($experience){
		$this->experience = $experience;
    }
    public function getCategory(){
		return $this->category;
	}
	public function setCategory($category){
		$this->category = $category;
    }
}

?>