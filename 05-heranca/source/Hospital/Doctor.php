<?php

namespace Source\Hospital;

use Source\General\User;

class Doctor extends User
{
    private $crm;
    private $speciality;

    public function __construct($name, $email, $crm, $speciality)
    {
        parent::__construct($name, $email);
        $this->crm = $crm;
        $this->speciality = $speciality;
    }

    /**
     * @return mixed
     */
    public function getCrm()
    {
        return $this->crm;
    }

    /**
     * @param mixed $crm
     */
    public function setCrm($crm): void
    {
        $this->crm = $crm;
    }

    /**
     * @return mixed
     */
    public function getSpeciality()
    {
        return $this->speciality;
    }

    /**
     * @param mixed $speciality
     */
    public function setSpeciality($speciality): void
    {
        $this->speciality = $speciality;
    }

}