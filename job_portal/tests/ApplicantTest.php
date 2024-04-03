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

class Applicant {
    private string $firstname;
    private string $lastname;
    private string $studentid;
    private string $email;
    private string $password;
    private string $repeatedPassword;

    public function __construct(
        string $firstname,
        string $lastname,
        string $studentid,
        string $email,
        string $password,
        string $repeatedPassword
    ) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->studentid = $studentid;
        $this->email = $email;
        $this->password = $password;
        $this->repeatedPassword = $repeatedPassword;
    }

    // Getter functions
    public function getFirstname(): string {
        return $this->firstname;
    }

    public function getLastname(): string {
        return $this->lastname;
    }

    public function getStudentid(): string {
        return $this->studentid;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function getRepeatedPassword(): string {
        return $this->repeatedPassword;
    }

    // Setter functions
    public function setFirstname(string $firstname): void {
        $this->firstname = $firstname;
    }

    public function setLastname(string $lastname): void {
        $this->lastname = $lastname;
    }

    public function setStudentid(string $studentid): void {
        $this->studentid = $studentid;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function setPassword(string $password): void {
        $this->password = $password;
    }

    public function setRepeatedPassword(string $repeatedPassword): void {
        $this->repeatedPassword = $repeatedPassword;
    }

    public function getApplicantInfo(): array {
        return [
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'studentid' => $this->studentid,
            'email' => $this->email,
            'password' => $this->password,
            'repeatedPassword' => $this->repeatedPassword
        ];
    }
}

?>
