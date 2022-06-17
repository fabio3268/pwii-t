<?php

namespace Source\Accounts;

class Account
{
    protected $number;
    protected $balance;

    /**
     * @param $namber
     * @param $balance
     */
    public function __construct($number, $balance)
    {
        $this->number = $number;
        $this->balance = $balance;
    }

    /**
     * @return mixed
     */
    public function getNamber()
    {
        return $this->namber;
    }

    /**
     * @param mixed $namber
     */
    public function setNamber($namber): void
    {
        $this->namber = $namber;
    }

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param mixed $balance
     */
    public function setBalance($balance): void
    {
        $this->balance = $balance;
    }





}