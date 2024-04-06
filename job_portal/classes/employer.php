<?php 


class Employer{
    private $employerid;
    private $firstname;
    private $lastname;
    private $password;
    private $hashedPassword;
    private $repeatedPassword; 
    private $companyEmail;
    private $companyName;
    private $phoneNumber;
    public function __construct($id, $firstname, $lastname, $password, $repeatedPassword, $companyEmail, $companyName, $phoneNumber) {
        $this->employerid = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->password = $password;
        $this->hashedPassword = $this->hashPassword($password);
        $this->repeatedPassword = $repeatedPassword;
        $this->companyEmail = $companyEmail;
        $this->companyName = $companyName;
        $this->phoneNumber = $phoneNumber;
    }
    function hashPassword($password) {
        // Hash the password using bcrypt algorithm
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        if ($hashedPassword === false) {
            // Hashing failed
            throw new Exception('Password hashing failed');
        }
        return $hashedPassword;
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
    public function getHashedPassword() {
        return $this->hashedPassword;
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