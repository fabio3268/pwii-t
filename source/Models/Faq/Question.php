<?php

namespace Source\Models\Faq;

class Question {

    private $id;
    private $idType;
    private $question;
    private $answer;

    public function __construct($id = null, $idType = null,
        $question = null, $answer = null)
    {
        $this->id = $id;
        $this->idType = $idType;
        $this->question = $question;
        $this->answer = $answer;
    }


}
