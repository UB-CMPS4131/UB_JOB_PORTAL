<?php

class Model extends SQLHandler
{

    public function registerUserInDB($user)
    {
        if ($user instanceof Employer) {
            $result = $this->createEmployerInDB($user);
            return $result;
        } else if ($user instanceof Applicant) {
            $result = $this->createApplicantInDB($user);
            return $result;
        } else {
            throw new InvalidArgumentException("Cannot register user. Received invalid class type in ", __METHOD__);
        }
    }
    public function createEmployerInDB(Employer $employer)
    {
        $query = "INSERT INTO `employer` (`id`, `firstName`, `lastName`, `password`, `companyEmail`, `phoneNumber`, `role`, `created at`) VALUES (NULL, ?, ?, ?, ?, ?,?, current_timestamp());";
        if ($this->sqlDB !== null) {
            $fn = $employer->getFirstname();
            $ln = $employer->getLastname();
            $hashedpwd = $employer->getHashedPassword();
            $em = $employer->getCompanyEmail();
            $pn = $employer->getPhoneNumber();
            $role = 2;
            $stmt = $this->sqlDB->prepare($query);
            $result = $stmt->execute(array($fn, $ln, $hashedpwd, $em, $pn, $role));
            if ($result === false) {
                $this->error("Error executing query: " . $this->sqlDB->error);
                throw new Exception("Error executing query: " . $this->sqlDB->error);
                return false;
            } else {
                $this->info("Query executed successfully");
                return true;
            }
        } else {
            $this->error("Database connection not lost");
            throw new Exception("SQLError: Database connection lost");
            return false;
        }
    }
    public function createApplicantInDB(Applicant $applicant)
    {
        $query = "INSERT INTO `applicants` (`id`, `firstName`, `lastName`, `studentIDNumber`, `student_email`, `password`, `role`, `created at`) VALUES (NULL, ?, ?, ?, ?, ?, ?, current_timestamp());";
        if ($this->sqlDB !== null) {
            $fn = $applicant->getFirstname();
            $ln = $applicant->getLastname();
            $id = $applicant->getStudentid();
            $em = $applicant->getEmail();
            $hashedpwd = $applicant->getHashedPassword();
            $role = 2;
            $stmt = $this->sqlDB->prepare($query);
            $result = $stmt->execute(array($fn, $ln, $id, $em, $hashedpwd, $role));
            if ($result === false) {
                $this->error("Error executing query: " . $this->sqlDB->error);
                throw new Exception("Error executing query: " . $this->sqlDB->error);
                return false;
            } else {
                $this->info("Query executed successfully");
                return true;
            }
        } else {
            $this->error("Database connection not lost");
            throw new Exception("SQLError: Database connection lost");
            return false;
        }
    }
    public function createJobPostInDB(JobPost $jobpost)
    {
    }
    public function deleteApplicantFromDB(Employer $employer)
    {
    }
    public function getEmployersInDB()
    {
        $employerList = new EmployerList();
        //get the values from the db and save them in the variable
        return $employerList;
    }
    public function getPostedJobsListUsingCriteriainDB()
    {
        $jobList = new JobList();
        //get the values from the db and save them in the variable
        return $jobList;
    }
    public function createJobApplicationInDB(Applicant $applicant)
    {
    }
}
