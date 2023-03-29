<?php

namespace Source\Models\Faq;

class Type
{
    private $id;
    private $description;

    public function __construct($id = null, $description = null)
    {
        $this->id = $id;
        $this->description = $description;
    }

}
