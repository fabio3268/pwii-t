<?php

namespace Source\Accounts;

class Saving extends Account
{
    private $dtBirth;


    /**
     * @param $number
     * @param $balance
     * @param $dtBirth
     */
    public function __construct($number, $balance, $dtBirth)
    {
        parent::__construct($number, $balance);
        $this->dtBirth = $dtBirth;
    }

}
