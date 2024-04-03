<?php

use PhpParser\Builder\Method;

class RegistrationHandler
{
    private $userToRegister;
    private Logger $logger;

    function __construct($user)
    {
        if ($user instanceof Applicant) {
            $this->userToRegister = $user;
        } elseif ($user instanceof Employer) {
            $this->userToRegister = $user;
        } else {
            throw new InvalidArgumentException("Registration Handler received neither class Applicant or Employer");
        }
        $this->logger = new Logger();
        $this->logger->info("Registration Handler created".__METHOD__);
        // $this->logger->info(memory_get_usage().__METHOD__);
    }

    public function checkFields()
    {
        // $this->logger->info("start of checkfields(): ".memory_get_usage().__METHOD__);
        $this->logger->info("checking the input fields".__METHOD__);
        if ($this->userToRegister instanceof Applicant || $this->userToRegister instanceof Employer) {
            $this->checkEmptyFields();
            $this->containsInvalidCharacters();
            $this->checkForInvalidStringLengths();
            $this->passwordMatch();
            //return true on no errors
            return true;
        }else{
            throw new InvalidArgumentException("Cannot check fields of invalid class type. Expected Employer or Applicant in ".__METHOD__);
            return false;
        }
    }

    private function containsInvalidCharacters()
    {
        // Define the regex pattern for valid characters
        $validCharsRegex = 'a-zA-Z0-9 '; // This allows only alphanumeric characters        
        // Invert the regex to match characters that are NOT in the validCharsRegex
        $invalidCharsRegex = '/[^' . $validCharsRegex . ']/';
        if ($this->userToRegister instanceof Employer) {
            if (preg_match($invalidCharsRegex, $this->userToRegister->getFirstname())) {
                throw new Exception("Invalid characters found in employer first name");
            }
            if (preg_match($invalidCharsRegex, $this->userToRegister->getLastname())) {
                throw new Exception("Invalid characters found in employer last name");
            }
            if (preg_match($invalidCharsRegex, $this->userToRegister->getCompanyName())) {
                throw new Exception("Invalid characters found in the company name. Received " . $this->userToRegister->getCompanyName());
            }
            $this->ensureIsValidEmail($this->userToRegister->getCompanyEmail());

        } else if ($this->userToRegister instanceof Applicant) {
            
        } else {
            throw new InvalidArgumentException("Cannot check fields of invalid class type. Expected Employer or Applicant");
        }
    }

    private function checkForInvalidStringLengths()
    {
        $minPasswordLength = 5;
        $maxNameLength = 20;
        $maxEmailLength = 60;
        $firstname = $this->userToRegister->getFirstname();
        $lastname = $this->userToRegister->getLastname();
        $password = $this->userToRegister->getPassword();

        if ($this->userToRegister instanceof Employer) {
            $maxCompanyNameLength = 30;
            $companyName = $this->userToRegister->getCompanyName();
            $companyEmail = $this->userToRegister->getCompanyEmail();
            $companyEmail = $this->userToRegister->getCompanyEmail();
            if (strlen($firstname) > $maxNameLength) {
                throw new Exception("Invalid character count in emmployer first name. Expected characters: ", $maxNameLength);
            }
            if (strlen($lastname) > $maxNameLength) {
                throw new Exception("Invalid character count in employer last name. Expected characters: ", $maxNameLength);
            }
            if (strlen($companyName) > $maxCompanyNameLength) {
                throw new Exception("Invalid character count in the company name. Expected characters: ", $maxCompanyNameLength);
            }
            if (strlen($companyEmail) > $maxEmailLength) {
                throw new Exception("Invalid character count in the company email. Expected characters: ", $maxEmailLength);
            }
            if (strlen($password) < $minPasswordLength) {
                throw new Exception("Invalid character count in the company name. Expected characters: ", $minPasswordLength);
            }
        } else if ($this->userToRegister instanceof Applicant) {
        } else {
            throw new InvalidArgumentException("Cannot check fields of invalid class type. Expected Employer or Applicant in ", __METHOD__);
        }
        $this->logger = new Logger();
        $this->logger->info("No Invalid string length on user registration".__METHOD__);
    }

    private function passwordMatch()
    {
        if ($this->userToRegister->getPassword() != $this->userToRegister->getRepeatedPassword()) {
            throw new Exception("Passwords do not match");
        }
        $this->logger = new Logger();
        $this->logger->info("Registration passwords do not match".__METHOD__);
    }

    private function ensureIsValidEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid email address',
                    $email
                )
            );
            return;
        }
        $this->logger = new Logger();
        $this->logger->info("Email is valid".__METHOD__);
    }

    private function checkEmptyFields()
    {

        if ($this->userToRegister instanceof Employer) {
            // Check if any of the variables are empty
            if (empty($this->userToRegister->getFirstname())) {
                throw new Exception("Value for firstcname is empty");
            }
            if (empty($this->userToRegister->getLastname())) {
                throw new Exception("Value for lastcname is empty");
            }
            if (empty($this->userToRegister->getPassword())) {
                throw new Exception("Value for password is empty");
            }
            if (empty($this->userToRegister->getRepeatedPassword())) {
                throw new Exception("Value for repeated Password is empty");
            }
            if (empty($this->userToRegister->getCompanyEmail())) {
                throw new Exception("Value for company Email is empty");
            }
            if (empty($this->userToRegister->getCompanyName())) {
                throw new Exception("Value for company Name is empty");
            }
            if (empty($this->userToRegister->getPhoneNumber())) {
                throw new Exception("Value for phone Number is empty");
            }
        } else if ($this->userToRegister instanceof Applicant) {
        } else {
            throw new InvalidArgumentException("Cannot check fields of invalid class type. Expected Employer or Applicant in ", __METHOD__);
        }

        $this->logger = New Logger();
        $this->logger->info("No fields are empty".__METHOD__);
    }
}
