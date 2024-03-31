<?php
include "../includes/dbh.inc.php";
include "../model/database.php";

class APIController extends Model{
    public ConfirmRequest $confirmRequest;
    public RegistrationHandler $registrationHandler;
    public JobPostHandler $jobPostHandler;
    public EmployerList $employerList;
    public SearchCriteria $criteria; 
    public Notifier $notifier;

    // $this->sqlDB; //holds the database connection
    public function registerApplicant(Applicant $applicant){
    }
    public function deleteEmployer($id){
    }
    public function newJobPost(JobPost $jobpost){
    }
    public function getJobListUsingCriteria(){
    }
    public function applyForJob(Applicant $applicant){
    }
}