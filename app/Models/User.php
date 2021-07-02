<?php
namespace App\Models;

class User{
    private $firstName;
    private $lastName;
    private $email;

    public function setFirstName($firstName){
        $this->firstName = trim($firstName);
    }
    public function getFirstName(){
        return $this->firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = trim($lastName);
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getFullName()
    {
        return $this->getFirstName().' '. $this->getLastName();
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function getEmailVariables()
    {
        return [
            'full_name' => $this->getFullName(),
            'email'  =>$this->getEmail()
        ];
    }
}

