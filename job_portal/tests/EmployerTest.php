<?php

// require_once 'Employer.php'; 

declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class EmployerTest extends TestCase
{
    public function testGetEmployerId()
    {
        $employer = new Employer('123', 'John', 'Doe', 'password', 'password', 'company@example.com', 'Company', '123456789');
        $this->assertEquals('123', $employer->getEmployerId());
    }

    public function testGetFirstname()
    {
        $employer = new Employer('123', 'John', 'Doe', 'password', 'password', 'company@example.com', 'Company', '123456789');
        $this->assertEquals('John', $employer->getFirstname());
    }

    public function testGetLastname()
    {
        $employer = new Employer('123', 'John', 'Doe', 'password', 'password', 'company@example.com', 'Company', '123456789');
        $this->assertEquals('Doe', $employer->getLastname());
    }

    public function testGetPassword()
    {
        $employer = new Employer('123', 'John', 'Doe', 'password', 'password', 'company@example.com', 'Company', '123456789');
        $this->assertEquals('password', $employer->getPassword());
    }

    public function testGetRepeatedPassword()
    {
        $employer = new Employer('123', 'John', 'Doe', 'password', 'password', 'company@example.com', 'Company', '123456789');
        $this->assertEquals('password', $employer->getRepeatedPassword());
    }

    public function testGetCompanyEmail()
    {
        $employer = new Employer('123', 'John', 'Doe', 'password', 'password', 'company@example.com', 'Company', '123456789');
        $this->assertEquals('company@example.com', $employer->getCompanyEmail());
    }

    public function testGetCompanyName()
    {
        $employer = new Employer('123', 'John', 'Doe', 'password', 'password', 'company@example.com', 'Company', '123456789');
        $this->assertEquals('Company', $employer->getCompanyName());
    }

    public function testGetPhoneNumber()
    {
        $employer = new Employer('123', 'John', 'Doe', 'password', 'password', 'company@example.com', 'Company', '123456789');
        $this->assertEquals('123456789', $employer->getPhoneNumber());
    }
}
