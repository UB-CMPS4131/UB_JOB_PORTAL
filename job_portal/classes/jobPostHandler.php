<?php
include_once "../includes/logger.inc.php";

class JobPostHandler{
    private JobPost $jobpost;

    function __construct(JobPost $jobpost)
    {
        $this->jobpost = $jobpost;
    }

    public function checkFields(){ //return a string if error, return true if all is ok
        $logger = New Logger();
        $result = true;
        try {
            $this->checkJobPostContent();
        } catch (Exception $e) {
            $result = $e->getMessage();
            $logger->error($e->getMessage());
        }
        return $result;
    }

    private function checkJobPostContent() {
        if (empty($this->jobpost->getTitle())) {
            throw New Exception("Empty field job post title");
        }
        if (empty($this->jobpost->getBody())) {
            throw New Exception("Empty field job post body");
        }
    }
}