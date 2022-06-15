<?php

namespace Source\Clients;

use Source\Accounts\Saving;

class Client
{
    private $name;
    private $email;
    private $password;
    private $address;
    private $saving;
    private $checking;

    /**
     * @param $name
     * @param $email
     */
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function addSaving (Saving $saving)
    {
          $this->saving[] = $saving;
    }
}
