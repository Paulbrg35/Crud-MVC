<?php

class User {
    private ?int $id = null;
    private string $first_name;
    private string $last_name;
    private string $email;

    public function __construct(
        string $first_name,
        string $last_name,
        string $email
    ) {
        $this->firstname = $first_name;
        $this->lastname = $last_name;
        $this->email = $email;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function setId(?int $id): void {
        $this->id = $id;
    }

    public function getFirst_name(): string {
        return $this->first_name;
    }

    public function setFirst_name(string $first_name): void {
        $this->first_name = $first_name;
    }
    
    public function getLast_name(): string {
        return $this->last_name;
    }

    public function setLast_name(string $last_name): void {
        $this->last_name = $last_name;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

}