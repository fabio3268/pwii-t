<?php

namespace Source\Models\Financial;

class Checking extends Account
{
    private $limit;
    private $rate;

    public function __construct($number = null, $balance = null, $limit = null, $rate = null)
    {
        parent::__construct($number, $balance);
        $this->limit = $limit;
        $this->rate = $rate;
    }

}
