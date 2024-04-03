<?php


class JobPost {
    private string $id;
    private string $title;
    private string $body;

    public function __construct(string $id, string $title, string $body) {
        $this->id = $id;
        $this->title = $title;
        $this->body = $body;
    }

    // Getter functions
    public function getId(): string {
        return $this->id;
    }
    public function getTitle(): string {
        return $this->title;
    }

    public function getBody(): string {
        return $this->body;
    }

    // Setter functions
    public function setId(string $id): void {
        $this->title = $id;
    }
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
