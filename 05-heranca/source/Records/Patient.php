<?php

namespace Source\Records;

use Source\General\User;

class Patient extends User
{
    protected $chart;
    protected $dtBorn;

    public function __construct($name, $email, $chart, $dtBorn)
    {
        parent::__construct($name, $email);
        $this->chart = $chart;
        $this->dtBorn = $dtBorn;
    }

}