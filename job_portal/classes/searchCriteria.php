<?php

class SearchCriteria{
    private $internship;
    private $fulltime;
    private $parttime;
    private $remote;

    public function __construct($internship, $fulltime, $parttime, $remote)
    {
        $this->internship = $internship;
        $this->fulltime = $fulltime;
        $this->parttime = $parttime;
        $this->remote = $remote;
    }
    public function getSearchCriteriaList(){
        return array(
            'internship' => $this->internship,
            'fulltime' => $this->fulltime,
            'parttime' => $this->parttime,
            'remote' => $this->remote
        );
    }
}