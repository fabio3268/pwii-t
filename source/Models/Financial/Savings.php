<?php

namespace Source\Models\Financial;

class Savings extends Account
{
    private $dtBith;

    public function __construct($number = null, $balance = null, $dtBirth = null)
    {
        parent::__construct($number, $balance);
        $this->dtBith = $dtBirth;
    }

    public function getDtBith()
    {
        return $this->dtBith;
    }

    public function setDtBith($dtBith): void
    {
        $this->dtBith = $dtBith;
    }

    public function show(): string
    {
        return "<p>Número da conta poupança: {$this->number}</p>" .
               "<p>Saldo: {$this->balance}</p>" .
               "<p>Dt. Aniversário: {$this->dtBith}</p>";
    }

}
