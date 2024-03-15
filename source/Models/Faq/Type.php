<?php

namespace Source\Models\Faq;
use Source\Core\Connect;
use Source\Core\Models;

class Type extends Models {
    private $id;
    private $description;

    public function __construct(
        int $id = null,
        string $description = null
    )
    {
        $this->id = $id;
        $this->description = $description;
        $this->entity = "types";
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

/*    public function selectAll (): ?array
    {
        $conn = Connect::getInstance();
        $query = "SELECT * FROM types";
        return $conn->query($query)->fetchAll();
    }*/

}
