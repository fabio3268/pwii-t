<?php

namespace Source\Models\Faq;

use Source\Core\Connect;
class Question {
    private $id;
    private $idType;
    private $question;
    private $answer;

    /**
     * @param $id
     * @param $idType
     * @param $question
     * @param $answer
     */
    public function __construct(
        int $id,
        int $idType,
        string $question,
        string $answer
    )
    {
        $this->id = $id;
        $this->idType = $idType;
        $this->question = $question;
        $this->answer = $answer;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getIdType(): ?int
    {
        return $this->idType;
    }

    public function setIdType(int $idType): void
    {
        $this->idType = $idType;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): void
    {
        $this->question = $question;
    }

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(string $answer): void
    {
        $this->answer = $answer;
    }

    public function selectAll (): ?array
    {
        $conn = Connect::getInstance();
        $query = "SELECT * FROM questions";
        return $conn->query($query)->fetchAll();
    }

}