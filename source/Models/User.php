<?php

namespace Source\Models;
use Source\Core\Models;
use Source\Core\Connect;

class User extends Models
{
    private $id;
    private $name;
    private $email;
    private $password;

    public function __construct(
        int $id = null,
        string $name = null,
        string $email = null,
        string $password = null
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->entity = "users";
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
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

    public function login (string $email)
    {
        $query = "SELECT * 
                  FROM users
                  WHERE email LIKE :email";
        $conn = Connect::getInstance();

        $stmt = $conn->prepare($query);
        $stmt->bindParam("email",$email);
        $result = $stmt->execute();
        var_dump($stmt->rowCount());

    }

}

