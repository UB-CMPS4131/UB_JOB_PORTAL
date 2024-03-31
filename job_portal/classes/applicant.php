<?php 
class Applicant extends User{
    private $firstname;
    private $lastname;
    private $studentid;
    private $email;
    private $password;
    private $repeatedPassword;    
    public function __construct($firstname, $lastname, $studentid, $email, $password, $repeatedPassword){
        $this->$firstname = $firstname;
        $this->$lastname = $lastname;
        $this->$studentid = $studentid;
        $this->$email = $email;
        $this->$password = $password;
        $this->$repeatedPassword = $repeatedPassword;
    }
    public function getApplicantInfo(){
        return array(
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'studentid' => $this->studentid,
            'email' => $this->email,
            'password' => $this->password,
            'repeatedPassword' => $this->repeatedPassword
        );
    }
    public function get_firstname(){
        return $this->firstname;
    }
    public function get_lastname(){
        return $this->lastname;
    }
    public function get_studentid(){
        return $this->studentid;
    }
    public function get_email(){
        return $this->email;
    }
    public function get_password(){
        return $this->password;
    }
    public function get_repeatedPassword(){
        return $this->repeatedPassword;    
    }    
}