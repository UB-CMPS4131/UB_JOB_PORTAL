<?php 


class Employer extends User{
    private $employerid;
    private $firstname;
    private $lastname;
    private $password;
    private $repeatedPassword; 
    private $companyEmail;
    private $companyName;
    private $phoneNumber;
    public function __construct($id, $firstname, $lastname, $password, $repeatedPassword, $companyEmail, $companyName, $phoneNumber) {
        $this->employerid = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->password = $password;
        $this->repeatedPassword = $repeatedPassword;
        $this->companyEmail = $companyEmail;
        $this->companyName = $companyName;
        $this->phoneNumber = $phoneNumber;
    }
    public function getEmployerId() {
        return $this->employerid;
    }
    public function getFirstname() {
        return $this->firstname;
    }
    public function getLastname() {
        return $this->lastname;
    }
    public function getPassword() {
        return $this->password;
    }
    public function getRepeatedPassword() {
        return $this->repeatedPassword;
    }
    public function getCompanyEmail() {
        return $this->companyEmail;
    }
    public function getCompanyName() {
        return $this->companyName;
    }
    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

}