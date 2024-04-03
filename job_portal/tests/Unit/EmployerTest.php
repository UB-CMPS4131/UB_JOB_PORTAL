<?php

declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class EmployerTest extends TestCase
{
    public function testConstructor()
    {
        $id = '123';
        $firstname = 'John';
        $lastname = 'Doe';
        $password = 'password';
        $repeatedPassword = 'password';
        $companyEmail = 'employer@example.com';
        $companyName = 'Example Company';
        $phoneNumber = '123456789';

        $employer = new Employer($id, $firstname, $lastname, $password, $repeatedPassword, $companyEmail, $companyName, $phoneNumber);

        $this->assertInstanceOf(Employer::class, $employer); // Check if the object is an instance of the Employer class
        $this->assertAttributeEquals($id, 'employerid', $employer); // Check if employerid attribute is set correctly
        $this->assertAttributeEquals($firstname, 'firstname', $employer); // Check if firstname attribute is set correctly
        $this->assertAttributeEquals($lastname, 'lastname', $employer); // Check if lastname attribute is set correctly
        $this->assertAttributeEquals($password, 'password', $employer); // Check if password attribute is set correctly
        $this->assertAttributeEquals($repeatedPassword, 'repeatedPassword', $employer); // Check if repeatedPassword attribute is set correctly
        $this->assertAttributeEquals($companyEmail, 'companyEmail', $employer); // Check if companyEmail attribute is set correctly
        $this->assertAttributeEquals($companyName, 'companyName', $employer); // Check if companyName attribute is set correctly
        $this->assertAttributeEquals($phoneNumber, 'phoneNumber', $employer); // Check if phoneNumber attribute is set correctly
    }

    public function testGetEmployerId()
    {
        $id = '123';
        $firstname = 'John';
        $lastname = 'Doe';
        $password = 'password';
        $repeatedPassword = 'password';
        $companyEmail = 'employer@example.com';
        $companyName = 'Example Company';
        $phoneNumber = '123456789';

        $employer = new Employer($id, $firstname, $lastname, $password, $repeatedPassword, $companyEmail, $companyName, $phoneNumber);

        $this->assertEquals($id, $employer->getEmployerId()); // Check if getEmployerId returns correct value
    }

    public function testGetFirstname()
    {
        $id = '123';
        $firstname = 'John';
        $lastname = 'Doe';
        $password = 'password';
        $repeatedPassword = 'password';
        $companyEmail = 'employer@example.com';
        $companyName = 'Example Company';
        $phoneNumber = '123456789';

        $employer = new Employer($id, $firstname, $lastname, $password, $repeatedPassword, $companyEmail, $companyName, $phoneNumber);

        $this->assertEquals($firstname, $employer->getFirstname()); // Check if getFirstname returns correct value
    }

    public function testGetLastname()
    {
        $id = '123';
        $firstname = 'John';
        $lastname = 'Doe';
        $password = 'password';
        $repeatedPassword = 'password';
        $companyEmail = 'employer@example.com';
        $companyName = 'Example Company';
        $phoneNumber = '123456789';

        $employer = new Employer($id, $firstname, $lastname, $password, $repeatedPassword, $companyEmail, $companyName, $phoneNumber);

        $this->assertEquals($lastname, $employer->getLastname()); // Check if getLastname returns correct value
    }

    public function testGetPassword()
    {
        $id = '123';
        $firstname = 'John';
        $lastname = 'Doe';
        $password = 'password';
        $repeatedPassword = 'password';
        $companyEmail = 'employer@example.com';
        $companyName = 'Example Company';
        $phoneNumber = '123456789';

        $employer = new Employer($id, $firstname, $lastname, $password, $repeatedPassword, $companyEmail, $companyName, $phoneNumber);

        $this->assertEquals($password, $employer->getPassword()); // Check if getPassword returns correct value
    }

    public function testGetRepeatedPassword()
    {
        $id = '123';
        $firstname = 'John';
        $lastname = 'Doe';
        $password = 'password';
        $repeatedPassword = 'password';
        $companyEmail = 'employer@example.com';
        $companyName = 'Example Company';
        $phoneNumber = '123456789';

        $employer = new Employer($id, $firstname, $lastname, $password, $repeatedPassword, $companyEmail, $companyName, $phoneNumber);

        $this->assertEquals($repeatedPassword, $employer->getRepeatedPassword()); // Check if getRepeatedPassword returns correct value
    }

    public function testGetCompanyEmail()
    {
        $id = '123';
        $firstname = 'John';
        $lastname = 'Doe';
        $password = 'password';
        $repeatedPassword = 'password';
        $companyEmail = 'employer@example.com';
        $companyName = 'Example Company';
        $phoneNumber = '123456789';

        $employer = new Employer($id, $firstname, $lastname, $password, $repeatedPassword, $companyEmail, $companyName, $phoneNumber);

        $this->assertEquals($companyEmail, $employer->getCompanyEmail()); // Check if getCompanyEmail returns correct value
    }

    public function testGetCompanyName()
    {
        $id = '123';
        $firstname = 'John';
        $lastname = 'Doe';
        $password = 'password';
        $repeatedPassword = 'password';
        $companyEmail = 'employer@example.com';
        $companyName = 'Example Company';
        $phoneNumber = '123456789';

        $employer = new Employer($id, $firstname, $lastname, $password, $repeatedPassword, $companyEmail, $companyName, $phoneNumber);

        $this->assertEquals($companyName, $employer->getCompanyName()); // Check if getCompanyName returns correct value
    }

    public function testGetPhoneNumber()
    {
        $id = '123';
        $firstname = 'John';
        $lastname = 'Doe';
        $password = 'password';
        $repeatedPassword = 'password';
        $companyEmail = 'employer@example.com';
        $companyName = 'Example Company';
        $phoneNumber = '123456789';

        $employer = new Employer($id, $firstname, $lastname, $password, $repeatedPassword, $companyEmail, $companyName, $phoneNumber);

        $this->assertEquals($phoneNumber, $employer->getPhoneNumber()); // Check if getPhoneNumber returns correct value
    }

    public function testGetCompanyNameFailure()
    {
        $id = '123';
        $firstname = 'John';
        $lastname = 'Doe';
        $password = 'password';
        $repeatedPassword = 'password';
        $companyEmail = 'employer@example.com';
        $companyName = 'Example Company';
        $phoneNumber = '123456789';

        $employer = new Employer($id, $firstname, $lastname, $password, $repeatedPassword, $companyEmail, $companyName, $phoneNumber);

        // Intentionally set the wrong expected value
        $expected = 'Incorrect Company';

        // This assertion should fail because the returned company name should not match the incorrect expected value
        $this->assertEquals($expected, $employer->getCompanyName());
   }

}
