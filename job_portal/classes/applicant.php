<?php 
class Applicant{
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