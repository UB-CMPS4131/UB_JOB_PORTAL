<?php

class APIController extends Model
{

    // $this->sqlDB; //holds the database connection
    public function registerUser($user)
    {
        // $this->info(memory_get_usage().__METHOD__);
        $this->info("Registering a user" . __METHOD__);
        $logger = new Logger();
        // try {
            $registrationHandler = new RegistrationHandler($user);
            $result = $registrationHandler->checkFields();
            if ($result) {
                if ($user instanceof Employer) {
                    //do the database action
                    $result = $this->registerUserInDB($user);
                    $notifier = new Notifier();
                    if ($result) {
                        // Use the Notifier to display the error message as a notification
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
    }
    public function newJobPost(JobPost $jobpost)
    {
    }
    public function getJobListUsingCriteria()
    {
    }
    public function applyForJob(Applicant $applicant)
    {
    }
}
