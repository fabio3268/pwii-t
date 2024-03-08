<?php

use Source\Models\User;

require __DIR__ . "/User.php";

class Author extends User
{
    private $document;
    private $school;

    public function __construct(
        $name = null, $email = null, $password = null,
        $document = null, $school = null)
    {
        parent::__construct($name = null,$email = null,$password = null);

        $this->document = $document;
        $this->school = $school;
    }

    public function getDocument()
    {
        return $this->document;
    }

    public function setDocument(mixed $document): void
    {
        $this->document = $document;
    }

    public function getSchool()
    {
        return $this->school;
    }

    public function setSchool(mixed $school): void
    {
        $this->school = $school;
    }




}
