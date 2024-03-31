<?php
include_once "../includes/logger.inc.php";

class RegistrationHandler{
    private Applicant $applicant;

    function __construct(Applicant $applicant)
    {
        $this->applicant = $applicant;
    }

    public function checkFields(){ //return a string if error, return true if all is ok
        $logger = New Logger();
        $result = true;
        try {
            $this->checkForInvalidStringLengths();
            $this->containsInvalidCharacters($this->applicant->get_firstname());
            $this->containsInvalidCharacters($this->applicant->get_lastname());
            $this->passwordMatch();
        } catch (Exception $e) {
            $result = $e->getMessage();
            $logger->error($e->getMessage());
        }

        return $result;
    }

    private function containsInvalidCharacters($str) {
        // Define the regex pattern for valid characters
        $validCharsRegex = 'a-zA-Z0-9'; // This allows only alphanumeric characters        
        // Invert the regex to match characters that are NOT in the validCharsRegex
        $invalidCharsRegex = '/[^' . $validCharsRegex . ']/';
        // Perform the match
        if(preg_match($invalidCharsRegex, $str)){ //returns true if there are invalid characters
            throw New Exception("Invalid characters found in input");
        }
    }

    private function checkForInvalidStringLengths(){
        if(strlen($this->applicant->get_firstname())>15){
            throw New Exception("Invalid firstname: exceeds character limit");
        }
        if(strlen($this->applicant->get_lastname())>15){
            throw New Exception("Invalid lastname: exceeds character limit");
        }
        if(strlen((string)$this->applicant->get_studentid()) != 10){
            throw New Exception("Invalid student id: id needs to be 10 characters long");
        }
        if(strlen($this->applicant->get_email())> 60){
            throw New Exception("Invalid email: exceeds character limit");
        }
    }

    private function passwordMatch(){
        if ($this->applicant->get_password() != $this->applicant->get_repeatedPassword()) {
            throw New Exception("Passwords do not match");
        }
    }
}