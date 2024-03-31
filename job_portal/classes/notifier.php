<?php

class Notifier{
    private $messages;
    public function __construct()
    {
        $this->messages = array();
    }
    public function addNotification($message)// Function to add an employer to the list
    {
        $this->messages[] = $message;
    }
    public function getNotifications()// Function to return the list of employers
    {
        return $this->messages;
    }
}