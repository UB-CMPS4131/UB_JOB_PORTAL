<?php

// require_once 'jobPost.php'; 
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class JobPostTest extends TestCase
{
    public function testGetPost()
    {
        $jobPost = new JobPost('Software Engineer', 'We are looking for a skilled software engineer to join our team.');
        $expected = [
            'title' => 'Software Engineer',
            'body' => 'We are looking for a skilled software engineer to join our team.'
        ];

        $this->assertEquals($expected, $jobPost->getPost());
    }

    public function testGetTitle()
    {
        $jobPost = new JobPost('Software Engineer', 'We are looking for a skilled software engineer to join our team.');
        $this->assertEquals('Software Engineer', $jobPost->getTitle());
    }

    public function testGetBody()
    {
        $jobPost = new JobPost('Software Engineer', 'We are looking for a skilled software engineer to join our team.');
        $this->assertEquals('We are looking for a skilled software engineer to join our team.', $jobPost->getBody());
    }
}
