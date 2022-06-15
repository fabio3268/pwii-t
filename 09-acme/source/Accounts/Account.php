<?php

namespace Source\Accounts;

class Account
{
    private $number;
    private $balance;

    /**
     * @param $number
     * @param $balance
     */
    public function __construct($number, $balance)
    {
        $this->number = $number;
        $this->balance = $balance;
    }


}