<?php

class Project
{
    private $title;
    private $abstract;
    private $text;

    public function __construct($title, $abstract, $text)
    {
        $this->title = $title;
        $this->abstract = $abstract;
        $this->text = $text;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getAbstract()
    {
        return $this->abstract;
    }

    public function setAbstract($abstract): void
    {
        $this->abstract = $abstract;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text): void
    {
        $this->text = $text;
    }

}
