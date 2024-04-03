<?php

class APIController extends Model
{

    // $this->sqlDB; //holds the database connection
    public function registerUser($user)
    {
        // $this->info(memory_get_usage().__METHOD__);
        $logger = new Logger();
        $this->info("Registering a user" . __METHOD__);
        // try {
        $registrationHandler = new RegistrationHandler($user);
        $result = $registrationHandler->checkFields();
        if ($result) {
            if ($user instanceof Employer) {
                //do the database action
                $result = $this->registerUserInDB($user);
                $notifier = new Notifier();
                if ($result) {
                    // Use the Notifier to display message as a notification
                    $notifier->addNotification("Employer is registered");
                    $logger->info("register success: notifiier is (" . $notifier->getNotifications()[0] . ")");
                    return [$notifier, true];
                }
            } else if ($user instanceof Applicant) {
                //do the database action
                $result = $this->registerUserInDB($user);
                $notifier = new Notifier();
                if ($result) {
                    // Use the Notifier to display the error message as a notification
                    $notifier->addNotification("Applicant is registered");
                    $logger->info("register success: notifiier is (" . $notifier->getNotifications()[0] . ")");
                    return [$notifier, true];
                }
            }
        }
        // } catch (Exception $e) {
        //     // Catch the exception and get the error message
        //     $errorMessage = $e->getMessage();
        //     $logger->error($e->getMessage());
        //     // Create an instance of the Notifier class
        //     $notifier = new Notifier();
        //     // Use the Notifier to display the error message as a notification
        //     $notifier->addNotification($errorMessage);
        //     return [$notifier, false];
        // }
    }
    public function deleteEmployer($id)
    {
        $logger = new Logger();
        $this->info("Disabling/Deleting a user with id $id " . __METHOD__);
        $result = $this->deleteEmployerInDB($id);
        $notifier = new Notifier();
        if ($result) {
            $notifier->addNotification("Employer deleted");
            $logger->info("delete success: notifiier is (" . $notifier->getNotifications()[0] . ")");
            return [$notifier, true];
        }
    }
    public function newJobPost(JobPost $jobpost)
    {
        $logger = new Logger();
        $this->info("Creating a job post" . __METHOD__);
        $jobPostHandler = new JobPostHandler($jobpost);
        $result = $jobPostHandler->checkFields();
        if ($result) {
            $result = $this->createJobPostInDB($jobpost);
            $result = (int)$result;
            $notifier = new Notifier();
            $logger->info("retreived new job post id as $result in ".__METHOD__);
            if (is_int($result) && ($result > 0)) { //the id returned from the database is valid
                $notifier->addNotification("Job Post Created");
                $logger->info("Post success: notifiier is (" . $notifier->getNotifications()[0] . ")");
                return [$notifier, true, $result];
            }
        }
    }
    public function getJobListUsingCriteria()
    {
    }
    public function applyForJob(Applicant $applicant)
    {
    }
}
