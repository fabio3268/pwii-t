<?php

namespace Source\Models\Hospital;

use Source\Models\User;
class Doctor extends User{

    private $crm;
    private $especiality;

    public function __construct(
        int $id = null,
        string $name = null,
        string $email = null,
        string $password = null,
        string $crm = null,
        string $especiality = null
    )
    {
        parent::__construct($id, $name, $email, $password);
        $this->crm = $crm;
        $this->especiality = $especiality;
    }

    public function getCrm(): ?string
    {
        return $this->crm;
    }

    public function setCrm(?string $crm): void
    {
        $this->crm = $crm;
    }

    public function getEspeciality(): ?string
    {
        return $this->especiality;
    }

    public function setEspeciality(?string $especiality): void
    {
        $this->especiality = $especiality;
    }

}