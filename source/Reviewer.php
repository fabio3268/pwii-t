<?php

require __DIR__ . "/User.php";

class Reviewer
{
    private $name;
    private $email;
    private $password;
    private $document;
    private $address;
    private $link;

    public function __construct($name, $email, $password,
                               $document, $address, $link)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->document = $document;
        $this->address = $address;
        $this->link = $link;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function getDocument()
    {
        return $this->document;
    }

    public function setDocument($document): void
    {
        $this->document = $document;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address): void
    {
        $this->address = $address;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link): void
    {
        $this->link = $link;
    }

}
