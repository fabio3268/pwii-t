<?php

namespace Source\Models\Financial;

class Account
{
    protected $number;
    protected $balance;

    public function __construct($number = null, $balance = null)
    {
        $this->number = $number;
        $this->balance = $balance;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNamber($number): void
    {
        $this->number = $number;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function setBalance($balance): void
    {
        $this->balance = $balance;
    }

}
