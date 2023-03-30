<?php

namespace Source\Models\Hospital;

use Source\Models\User;

class Doctor extends User{
    private $crm;
    private $specialty;

    public function __construct ($name = null,
        $email = null, $password = null, $crm = null, $specialty = null){

        parent::__construct($name,$email,$password);
        $this->crm = $crm;
        $this->specialty = $specialty;
    }
}
