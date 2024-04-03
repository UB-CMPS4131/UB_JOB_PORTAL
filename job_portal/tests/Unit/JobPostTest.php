<?php

declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class JobPostTest extends TestCase
{
    public function testConstructor()
    {
        $title = 'Software Engineer';
        $body = 'We are looking for a skilled software engineer to join our team.';

        $jobPost = new JobPost($title, $body);

        $this->assertInstanceOf(JobPost::class, $jobPost); // Check if the object is an instance of the JobPost class
        $this->assertEquals($title, $jobPost->getTitle()); // Check if title attribute is set correctly
        $this->assertEquals($body, $jobPost->getBody()); // Check if body attribute is set correctly
    }

    public function testGetPost()
    {
        $title = 'Software Engineer';
        $body = 'We are looking for a skilled software engineer to join our team.';

        $jobPost = new JobPost($title, $body);

        $expected = [
            'title' => $title,
            'body' => $body
        ];

        $this->assertEquals($expected, $jobPost->getPost()); // Check if getPost returns expected output
    }
}

class JobPost {
    private string $title;
    private string $body;

    public function __construct(string $title, string $body) {
        $this->title = $title;
        $this->body = $body;
    }

    // Getter functions
    public function getTitle(): string {
        return $this->title;
    }

    public function getBody(): string {
        return $this->body;
    }

    // Setter functions
    public function setTitle(string $title): void {
        $this->title = $title;
    }

    public function setBody(string $body): void {
        $this->body = $body;
    }

    public function getPost(): array {
        return [
            'title' => $this->title,
            'body' => $this->body
        ];
    }
}

?>
