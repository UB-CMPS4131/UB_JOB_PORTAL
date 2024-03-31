<?php

include "../includes/dbh.inc.php";
include "../classes/applicant.php";
include "../classes/employer.php";
include "../classes/employerList.php";
include "../classes/employerList.php";
include "../classes/jobPost.php";
include "../classes/jobList.php";


class Model extends SQLHandler{
    public function createApplicantInDB(Applicant $applicant){
    }
    public function createJobPostInDB(JobPost $jobpost){   
    }
    public function deleteApplicantFromDB(Employer $employer){
    }
    public function getEmployersInDB(){
        $employerList = New EmployerList();
        //get the values from the db and save them in the variable
        return $employerList;
    }
    public function getPostedJobsListUsingCriteriainDB(){
        $jobList = New JobList();
        //get the values from the db and save them in the variable
        return $jobList;
    }
    public function createJobApplicationInDB(Applicant $applicant){ 
    }
}