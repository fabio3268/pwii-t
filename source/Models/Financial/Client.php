<?php

namespace Source\Models\Financial;

use Source\Models\User;
use Source\Models\Address;

class Client extends User
{
    private $income;
    private $savings; // vai se comportar como um vetor

    public function __construct(
        $name = null, $email = null,$password = null, Address $address = null,
        $income = null
    )
    {
        parent::__construct($name, $email, $password, $address);
        $this->income = $income;
    }

    public function addSavings(Savings $savings)
    {
        echo "Olá método addSavings";
        $this->savings[] = $savings;
        var_dump($this->savings);
    }

}
