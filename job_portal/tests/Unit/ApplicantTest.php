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
        $this->assertAttributeEquals($firstname, 'firstname', $applicant); // Check if firstname attribute is set correctly
        $this->assertAttributeEquals($lastname, 'lastname', $applicant); // Check if lastname attribute is set correctly
        $this->assertAttributeEquals($studentid, 'studentid', $applicant); // Check if studentid attribute is set correctly
        $this->assertAttributeEquals($email, 'email', $applicant); // Check if email attribute is set correctly
        $this->assertAttributeEquals($password, 'password', $applicant); // Check if password attribute is set correctly
        $this->assertAttributeEquals($repeatedPassword, 'repeatedPassword', $applicant); // Check if repeatedPassword attribute is set correctly
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

    public function testGetFirstname()
    {
        $firstname = 'John';
        $lastname = 'Doe';
        $studentid = '123456';
        $email = 'john@example.com';
        $password = 'password';
        $repeatedPassword = 'password';

        $applicant = new Applicant($firstname, $lastname, $studentid, $email, $password, $repeatedPassword);

        $this->assertEquals($firstname, $applicant->get_firstname()); // Check if get_firstname returns correct value
    }

    public function testGetLastname()
    {
        $firstname = 'John';
        $lastname = 'Doe';
        $studentid = '123456';
        $email = 'john@example.com';
        $password = 'password';
        $repeatedPassword = 'password';

        $applicant = new Applicant($firstname, $lastname, $studentid, $email, $password, $repeatedPassword);

        $this->assertEquals($lastname, $applicant->get_lastname()); // Check if get_lastname returns correct value
    }

    public function testGetStudentid()
    {
        $firstname = 'John';
        $lastname = 'Doe';
        $studentid = '123456';
        $email = 'john@example.com';
        $password = 'password';
        $repeatedPassword = 'password';

        $applicant = new Applicant($firstname, $lastname, $studentid, $email, $password, $repeatedPassword);

        $this->assertEquals($studentid, $applicant->get_studentid()); // Check if get_studentid returns correct value
    }

    public function testGetEmail()
    {
        $firstname = 'John';
        $lastname = 'Doe';
        $studentid = '123456';
        $email = 'john@example.com';
        $password = 'password';
        $repeatedPassword = 'password';

        $applicant = new Applicant($firstname, $lastname, $studentid, $email, $password, $repeatedPassword);

        $this->assertEquals($email, $applicant->get_email()); // Check if get_email returns correct value
    }

    public function testGetPassword()
    {
        $firstname = 'John';
        $lastname = 'Doe';
        $studentid = '123456';
        $email = 'john@example.com';
        $password = 'password';
        $repeatedPassword = 'password';

        $applicant = new Applicant($firstname, $lastname, $studentid, $email, $password, $repeatedPassword);

        $this->assertEquals($password, $applicant->get_password()); // Check if get_password returns correct value
    }

    public function testGetRepeatedPassword()
    {
        $firstname = 'John';
        $lastname = 'Doe';
        $studentid = '123456';
        $email = 'john@example.com';
        $password = 'password';
        $repeatedPassword = 'password';

        $applicant = new Applicant($firstname, $lastname, $studentid, $email, $password, $repeatedPassword);

        $this->assertEquals($repeatedPassword, $applicant->get_repeatedPassword()); // Check if get_repeatedPassword returns correct value
    }

    public function testGetApplicantInfoIncomplete()
    {
        $firstname = 'John';
        $lastname = 'Doe';
        $studentid = '123456';
        $email = 'john@example.com';
        $password = 'password';
        $repeatedPassword = 'password';

        $applicant = new Applicant($firstname, $lastname, $studentid, $email, $password, $repeatedPassword);

        // Intentionally omit one property from the expected array
        $expected = [
           'firstname' => $firstname,
           'lastname' => $lastname,
           'studentid' => $studentid,
           'email' => $email,
           'password' => $password,
          // 'repeatedPassword' => $repeatedPassword // Omitting repeatedPassword property
       ];

      // This assertion should fail because the returned array is incomplete
      $this->assertEquals($expected, $applicant->getApplicantInfo());
   }

}
