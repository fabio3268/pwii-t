<?php

class User
{
    private $name;
    private $email;
    private $password;

    public function __construct (
        string $name = null,
        string $email = null,
        string $password = null
    )
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function getPassword(): ?string
    {
        return $this->password;
    }
    public function setPassword($password): void
    {
        $this->password = $password;
    }



}

