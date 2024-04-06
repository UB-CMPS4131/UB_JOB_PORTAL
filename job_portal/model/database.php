<?php

class Model extends SQLHandler
{

    protected function registerUserInDB($user)
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
    protected function createEmployerInDB(Employer $employer)
    {
        $logger = new Logger();
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
                $logger->error("Error executing query: " . $this->sqlDB->error);
                throw new Exception("Error executing query: " . $this->sqlDB->error);
                return false;
            } else {
                $this->info("Query executed successfully");
                return true;
            }
        } else {
            $logger->error("Database connection not lost");
            throw new Exception("SQLError: Database connection lost");
            return false;
        }
    }
    protected function createApplicantInDB(Applicant $applicant)
    {
        $logger = new Logger();
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
                $logger->error("Error executing query: " . $this->sqlDB->error);
                throw new Exception("Error executing query: " . $this->sqlDB->error);
                return false;
            } else {
                $this->info("Query executed successfully");
                return true;
            }
        } else {
            $logger->error("Database connection not lost");
            throw new Exception("SQLError: Database connection lost");
            return false;
        }
    }
    protected function createJobPostInDB(JobPost $jobpost)
    {
        $logger = new Logger();
        $logger->info("adding new post to database");
        $title = $jobpost->getTitle();
        $body = $jobpost->getBody();
        $status = 0;
        $query = "INSERT INTO `jobs` (`id`, `title`, `body`, `status`, `created_at`) VALUES (NULL, ?, ?, ?, current_timestamp());"; //returns the id of the newly added record
        if ($this->sqlDB !== null) {
            $stmt = $this->sqlDB->prepare($query);
            $result = $stmt->execute(array($title, $body, $status));
            if ($result === false) {
                $logger->error("Error executing query: " . $this->sqlDB->error);
                throw new Exception("Error executing query: " . $this->sqlDB->error);
            } else {
                $logger->info("new post added to database...returning id");
                // Fetch the last inserted ID explicitly using insert_id property
                $lastInsertedId = $this->sqlDB->insert_id;
                $logger->info("last inserted record for post is $lastInsertedId");

                return $lastInsertedId;
            }
        } else {
            $logger->error("Database connection not lost");
            throw new Exception("SQLError: Database connection lost");
            return false;
        }
    }
    protected function deleteEmployerInDB($id)
    {
        $logger = new Logger();
        $query = "DELETE FROM `employer` WHERE `id` = ?;";
        if ($this->sqlDB !== null) {
            $stmt = $this->sqlDB->prepare($query);
            $result = $stmt->execute(array($id));
            if ($result === false) {
                $logger->error("Error executing query: " . $this->sqlDB->error);
                throw new Exception("Error executing query: " . $this->sqlDB->error);
                return false;
            } else {
                $this->info("Employer with ID $id deleted successfully");
                return true;
            }
        } else {
            $logger->error("Database connection not established");
            throw new Exception("SQLError: Database connection lost");
            return false;
        }
    }
    protected function getEmployerInDB()
    {
        $employerList = new EmployerList();
        //get the values from the db and save them in the variable
        return $employerList;
    }
    protected function getPostedJobsListUsingCriteriainDB()
    {
        $jobList = new JobList();
        //get the values from the db and save them in the variable
        return $jobList;
    }
    protected function createJobApplicationInDB(Applicant $applicant)
    {
    }
}
