<?php


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
