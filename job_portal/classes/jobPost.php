<?php

class JobPost
{
    private $title;
    private $body;

    public function __construct($title, $body)
    {
        $this->title = $title;
        $this->body = $body;
    }
    public function getPost()
    {
        return array(
            'title' => $this->title,
            'body' => $this->body
        );
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getBody()
    {
        return $this->body;
    }
}
