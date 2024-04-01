<?php

require_once 'applicant.php'; 

use PHPUnit\Framework\TestCase;

class ApplicantTest extends TestCase
{
    public function testGetApplicantInfo()
    {
        $applicant = new Applicant('John', 'Doe', '123456', 'john@example.com', 'password', 'password');
        $expected = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'studentid' => '123456',
            'email' => 'john@example.com',
            'password' => 'password',
            'repeatedPassword' => 'password'
        ];

        $this->assertEquals($expected, $applicant->getApplicantInfo());
    }

    public function testGetFirstName()
    {
        $applicant = new Applicant('John', 'Doe', '123456', 'john@example.com', 'password', 'password');
        $this->assertEquals('John', $applicant->get_firstname());
    }

    public function testGetLastName()
    {
        $applicant = new Applicant('John', 'Doe', '123456', 'john@example.com', 'password', 'password');
        $this->assertEquals('Doe', $applicant->get_lastname());
    }

    public function testGetStudentId()
    {
        $applicant = new Applicant('John', 'Doe', '123456', 'john@example.com', 'password', 'password');
        $this->assertEquals('123456', $applicant->get_studentid());
    }

    public function testGetEmail()
    {
        $applicant = new Applicant('John', 'Doe', '123456', 'john@example.com', 'password', 'password');
        $this->assertEquals('john@example.com', $applicant->get_email());
    }

    public function testGetPassword()
    {
        $applicant = new Applicant('John', 'Doe', '123456', 'john@example.com', 'password', 'password');
        $this->assertEquals('password', $applicant->get_password());
    }

    public function testGetRepeatedPassword()
    {
        $applicant = new Applicant('John', 'Doe', '123456', 'john@example.com', 'password', 'password');
        $this->assertEquals('password', $applicant->get_repeatedPassword());
    }
}
