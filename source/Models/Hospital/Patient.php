<?php

namespace Source\Models\Hospital;

use Source\Models\User;

class Patient extends User
{
    private $chart;
    private $dateBirt;

    public function __construct(
        $name = null,
        $email = null,
        $password = null,
        $chart = null,
        $dateBirt = null,
        $address = null
    ) {
        parent::__construct($name, $email, $password, $address);

        $this->chart = $chart;
        $this->dateBirt = $dateBirt;
   }
}
