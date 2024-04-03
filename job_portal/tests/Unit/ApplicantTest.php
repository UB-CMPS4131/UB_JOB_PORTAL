<?php

declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class ApplicantTest extends TestCase
{
    public function testConstructor()
    {
        $firstname = 'John';
        $lastname = 'Doe';
        $studentid = '123456';
        $email = 'john@example.com';
        $password = 'password';
        $repeatedPassword = 'password';

        $applicant = new Applicant($firstname, $lastname, $studentid, $email, $password, $repeatedPassword);

        $this->assertInstanceOf(Applicant::class, $applicant); // Check if the object is an instance of the Applicant class
        $this->assertEquals($firstname, $applicant->getFirstname()); // Check if firstname attribute is set correctly
        $this->assertEquals($lastname, $applicant->getLastname()); // Check if lastname attribute is set correctly
        $this->assertEquals($studentid, $applicant->getStudentid()); // Check if studentid attribute is set correctly
        $this->assertEquals($email, $applicant->getEmail()); // Check if email attribute is set correctly
        $this->assertEquals($password, $applicant->getPassword()); // Check if password attribute is set correctly
        $this->assertEquals($repeatedPassword, $applicant->getRepeatedPassword()); // Check if repeatedPassword attribute is set correctly
    }

    public function testGetApplicantInfo()
    {
        $firstname = 'John';
        $lastname = 'Doe';
        $studentid = '123456';
        $email = 'john@example.com';
        $password = 'password';
        $repeatedPassword = 'password';

        $applicant = new Applicant($firstname, $lastname, $studentid, $email, $password, $repeatedPassword);

        $expected = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'studentid' => $studentid,
            'email' => $email,
            'password' => $password,
            'repeatedPassword' => $repeatedPassword
        ];

        $this->assertEquals($expected, $applicant->getApplicantInfo()); // Check if getApplicantInfo returns expected output
    }
}

?>
